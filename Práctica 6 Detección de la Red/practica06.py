# -------------------------------------------------------------
# Detectar servidores activos dentro de una red.
# Python 3.8.6 - Windows 10
# Librerias
# Nmap
#   https://nmap.org/download.html
# Libreria de Nmap para Python
#   pip install python-nmap
# Nota: 
#   Cuando hace la busqueda con nmap se traba la interface grafica pero en la consola se puede ver los procesos
# -------------------------------------------------------------

# Librerias
import tkinter as tk
from tkinter import scrolledtext as st
from tkinter import ttk
import nmap
import sqlite3

def imprimirTextArea(cadena):
    textArea.delete('1.0', tk.END)
    textArea.insert('1.0', cadena)

def buscarServidores():
    #Extraemos la  red indicada
    red = segmentoRed.get()
    boton.configure(state='disabled', text='Escaneando')

    if red == '':
        imprimirTextArea("Proporciona un segmento de red \nIP de la Red/Bits de la mascara")
        boton.configure(state='enabled', text='Buscar')
        return
    
    #Scaneo de la red
    print('Escaneando la red ..........................')
    nm = nmap.PortScanner()
    nm.scan(hosts=red, arguments='-sP')

    #Base de datos Y tabla
    print('Conectando con la base de datos ..........................')
    conexionBD = sqlite3.connect('servidores.db')
    cursorBD = conexionBD.cursor()
    cursorBD.execute("CREATE TABLE IF NOT EXISTS servidores (id INTEGER PRIMARY KEY AUTOINCREMENT, host TEXT, hostname TEXT, segmento_red TEXT)")
    conexionBD.commit()

    #Registrar en la base de datos
    print('Registrando hots encontrados ..........................')
    for host in nm.all_hosts():
        print(host)
        cursorBD.execute("SELECT * FROM servidores WHERE host = '"+host+"' AND segmento_red = '"+red+"'")
        registros = cursorBD.fetchall()
        numeroRegistros = len(registros)
        if numeroRegistros != 0:
            for registro in registros:
                cursorBD.execute("DELETE FROM servidores WHERE id = "+str(registro[0]))
                conexionBD.commit()
        cursorBD.execute("INSERT INTO servidores(host, hostname, segmento_red) VALUES('"+host+"', '"+nm[host]['hostnames'][0]['name']+"', '"+red+"')")
    conexionBD.commit()
    
    #Mostrar resultados (BD y Consola)
    print('Servidores encontrados ..........................')
    cursorBD.execute("SELECT * FROM servidores WHERE segmento_red = '"+red+"'")
    registros = cursorBD.fetchall()

    if len(registros) == 0:
        imprimirTextArea('No se encontraron servidores')
    else:
        servidores = 'Host\t\t\tHostname\n-----------------------------------------------------------\n'
        for registro in registros:
            servidores += registro[1]+'\t\t\t'+registro[2]+'\n'
        imprimirTextArea(servidores)
    boton.configure(state='enabled', text='Buscar')

    
#Interface Grafica
#----------------------------------------------------------------------------------------
#Ventana
ventana = tk.Tk()
ventana.title('Detectar servidores activos dentro de una red')
ventana.geometry("600x350")
ventana.resizable(0, 0)
ventana.configure(bg='#034352')
#Componentes
#Titulo
label = tk.Label(ventana, text="Detectar servidores activos dentro de una red")
label.pack(anchor=tk.CENTER)
label.config(fg="black", font=("Courier",15))
#Pedir ip y segmento
label = tk.Label(ventana, text="Segmento de red a buscar (IP de la Red/Bits mascara)")
label.place(x=50, y=70)
label.config(fg="black", font=("Courier",13))
segmentoRed = tk.StringVar()
ttk.Entry(ventana, width=40, textvariable=segmentoRed).place(x=150, y=110)
boton = ttk.Button(ventana, text="Buscar", command=buscarServidores)
boton.place(x=410, y=108)
#Mostrar servidores
tk.Label(ventana, text="Servidores encontrados").place(x=10, y=140)
textArea=st.ScrolledText(ventana, width=70, height=10)
textArea.place(x=10, y=160)
#----------------------------------------------------------------------------------------

#Mostrar la ventana
ventana.mainloop()