import socket
import sys
import cgi
 
# Create Server Socket TCP/IP
try:
    sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    print ("Socket successfully created")

except socket.error as err:
    print ("Socket creation failed with error %s" %(err))

host = '192.168.2.110'
port = 10000

# Enlace de socket y puerto
server_address = (host, port)
print ("Empezando a levantar %s puerto %s" %(server_address))
sock.bind(server_address)
print ("Socket binded to %s" % port)

# Put the socket into listening mode, Server MODE
sock.listen(10)     
print ("Socket is listening")  


# A forever loop until we interrupt it or an error occurs
while True:
   # Esperando conexion
    print ("Esperando para conectarse...")
    connection, client_address = sock.accept()
    

try:
    print ("Concexion desde", client_address)
 
    # Recibe los datos en trozos y reetransmite
    while True:
        data = connection.recv(19)
        print ("Recibido %s" % data)

        if data:
            print ("Enviando mensaje de vuelta al cliente")
            connection.sendall(data)
        else:
            print ("No hay mas datos," % client_address)
        break
             
finally:
    # Cerrando conexion
    connection.close()  











