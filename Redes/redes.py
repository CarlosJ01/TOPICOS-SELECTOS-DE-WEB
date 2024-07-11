import os

# PING
hostname = 'www.itmorelia.edu.mx'

respuesta = os.system('ping ' + hostname)
print(respuesta)

if respuesta == 0:
  print(hostname + ': esta en funcionamiento')
else:
  print(hostname + ': No funciona')

#NMAP
#no tengo nmap

from ftplib import FTP
host = '192.168.0.15'
user = 'anonymous'
password = ''

try:
    conexion = FTP(host)
    conexion.login(user, password)
    print('\nConexion establecida')
except IOError:
    print('\nFallo de conexion')
