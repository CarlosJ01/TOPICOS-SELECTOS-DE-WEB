import sqlite3

conexion = sqlite3.connect('informacion.db')

cursor = conexion.cursor()

# cursor.execute("CREATE TABLE agenda (id integer PRIMARY KEY, nombre text, telefono text, edad int, peso real)")
#cursor.execute("INSERT INTO agenda VALUES(1, 'Juan', '443-312-15-70', '18', '74.5')")
#cursor.execute("INSERT INTO agenda VALUES(2, 'Ana', '443-845-93-34', '25', '63.8')")
conexion.commit()

cursor.execute("SELECT * FROM agenda")
registros = cursor.fetchall()
for registro in registros:
    print(registro)

cursor.execute("UPDATE agenda SET edad = 45 where id = '1' ")
conexion.commit()

cursor.execute("SELECT * FROM agenda")
registros = cursor.fetchall()
for registro in registros:
    print(registro)

cursor.execute("DELETE FROM agenda where id = '1' ")
conexion.commit()

cursor.execute("SELECT * FROM agenda")
registros = cursor.fetchall()
for registro in registros:
    print(registro)