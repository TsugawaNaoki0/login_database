import qrcode
import socket
import sys
import getpass

# print("hello ")
mail = str(sys.argv[1])
# print(mail)

ip_address = socket.gethostbyname(socket.gethostname())
# print(ip_address)
url = ip_address + "/organized_homepage/registration/new_comer.html"
# print(url)
img = qrcode.make(url)
# print(type(img))
# print(img.size)
# <class 'qrcode.image.pil.PilImage'>
# (290, 290)
user_name = getpass.getuser()
print(user_name)
image_location = "/home/" + user_name + "/qrcode_test.png"
img.save(image_location)
# print("<img src="" alt="">")
