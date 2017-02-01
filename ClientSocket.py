import socket
import sys

TCP_IP = '192.168.0.1'
TCP_PORT = 5000 #49205
BUFFER_SIZE = 20
MESSAGE = "Hello, World!"

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect((TCP_IP, TCP_PORT))
s.send(MESSAGE)
data = s.recv(BUFFER_SIZE)
s.close()
print ("Received data:", data)







