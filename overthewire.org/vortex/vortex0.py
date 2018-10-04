#!/usr/bin/python
import socket
import struct

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect(("vortex.labs.overthewire.org", 5842))

d = s.recv(1024)
print "[+] Length: %d" % len(d)

x = struct.unpack("<"+"I"*(len(d) / 4),  d)
x = sum(x)
print "[+] Sum: %d" % x
s.send(struct.pack("L", x))
print s.recv(1024)
