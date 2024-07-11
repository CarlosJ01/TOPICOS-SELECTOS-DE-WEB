# -------------------------------------------------------------
# Detectar lo servicios activos en un servidor.
# Python 3.8.6 - Windows 10
# Librerias
# Nmap
#   https://nmap.org/download.html
# Libreria de Nmap para Python
#   pip install python-nmap
#   Cuando hace la busqueda con nmap se traba la interface grafica pero en la consola se puede ver los procesos
# -------------------------------------------------------------

import sqlite3
import nmap
import tkinter as tk
from tkinter import scrolledtext as st
from tkinter import ttk

def imprimirTextArea(pos, cadena):
    textArea.insert(str(pos), cadena)

def buscarServicios():
    textArea.delete('1.0', tk.END)
    textArea.insert('1.0', 'Buscando servicios de los servidores . . . . .\n')

    # Base de datos Y tabla
    print('Conectando con la base de datos ..........................')
    conexionBD = sqlite3.connect('servidores.db')
    cursorBD = conexionBD.cursor()
    cursorBD.execute("CREATE TABLE IF NOT EXISTS servidores (id INTEGER PRIMARY KEY AUTOINCREMENT, host TEXT, hostname TEXT, segmento_red TEXT)")
    cursorBD.execute("CREATE TABLE IF NOT EXISTS servicios (id INTEGER PRIMARY KEY AUTOINCREMENT, host TEXT, servicio TEXT, puerto TEXT, estatus TEXT)")
    conexionBD.commit()

    # Mostrar resultados (BD y Consola)
    print('Servidores almacenados ....................................')
    if opcion.get() == 'Escanear el primero':
        cursorBD.execute("SELECT * FROM servidores LIMIT 1")
    else:
        cursorBD.execute("SELECT * FROM servidores")
    
    registros = cursorBD.fetchall()

    # Escaniando los servidores
    print('Escaniando los servidores ..................................')
    nm = nmap.PortScanner()
    imprimirTextArea(2.0, '\tHost \t\t Hostname \t\t\t Red\n')
    print('\tHost \t\t Hostname \t\t\t Red')
    if len(registros) == 0:
        imprimirTextArea(3.0, 'No se encontraron servidores\n')
        print('No se encontraron servidores')
        return
    else:
        imprimir = ''
        for registro in registros:
            try:
                #Busqueda de servicios
                host = registro[1]  #IP
                #Escanea los puertos bien conocidos
                nm.scan(hosts=host, arguments='-p 0-1023')
                print(registro)
                imprimir += str(registro)+'\n'

                #ELimina registros anteriores para actulizar la BD
                cursorBD.execute("DELETE FROM servicios WHERE host = '"+str(host)+"'")
                conexionBD.commit()
                #Mostrando los servicios
                servicios = nm[host]['tcp']
                imprimir += '\tServicio \t\t Puerto \t\t Estatus \n'
                for puerto in servicios:
                    print([servicios[puerto]['name'], puerto, servicios[puerto]['state']])
                    imprimir += '\t'+servicios[puerto]['name']+'\t\t '+str(puerto)+'\t\t '+servicios[puerto]['state']+'\n'
                    #Registrando servicios en la base de datos
                    cursorBD.execute("INSERT INTO servicios(host, servicio, puerto, estatus) VALUES('"+host+"', '"+servicios[puerto]['name']+"', '"+str(puerto)+"', '"+servicios[puerto]['state']+"')")
                    conexionBD.commit()
            except:
                print('Sin servicios')
                imprimir += '\t Sin servicios \n'
            imprimir += '----------------------------------------------------------------------\n'
        imprimirTextArea(3.0, imprimir)
    #Mostrar resultados (BD y Consola)
    print('Todos los servicios encontrados en la Base de Datos ..................................')
    cursorBD.execute("SELECT * FROM servicios")
    registros = cursorBD.fetchall()
    for registro in registros:
        print(registro)
    return
# GUI
ventana = tk.Tk()
ventana.title('Detectar lo servicios activos en un servidor')
ventana.geometry("600x350")
ventana.resizable(0, 0)
ventana.configure(bg='#960808')

#Titulo
titulo = tk.Label(ventana, text="Buscando servicios de los servidores")
titulo.pack(anchor=tk.CENTER)
titulo.config(fg="black", font=("Courier",15))

#Boton
boton = ttk.Button(ventana, text="Buscar", command=buscarServicios)
boton.place(x=400, y=45)

#Select
opcion = tk.StringVar()
select = ttk.Combobox(ventana, width=30, textvariable=opcion, state="readonly")
select['values'] = ('Escanear el primero', 'Escanear todos en la base de datos')
select.current(0)
select.place(x=150, y=47)

#Consola
tk.Label(ventana, text="Consola").place(x=10, y=70)
textArea=st.ScrolledText(ventana, width=70, height=15)
textArea.place(x=10, y=90)
ventana.mainloop()