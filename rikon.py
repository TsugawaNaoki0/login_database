import numpy as np
import matplotlib.pyplot as plt
import sys
import time
import csv
from email.mime.text import MIMEText
import smtplib
import urllib.request, urllib.error
from bs4 import BeautifulSoup
import csv




url = "http://kijosoku.com/"
# url = "https://kabuoji3.com/stock/6501/2019/"
# URLを指定する
html = urllib.request.urlopen(url)
# URLを開く
soup = BeautifulSoup(html, "html.parser")
# BeautifulSoup で開く
# HTMLからニュース一覧に使用しているaタグを絞りこんでいく
# print(soup)

aaa = soup.select("a")
aaa = list(aaa)
# print(type(aaa))
bbb = []
for i in range(len(aaa)):
    aaa[i] = str(aaa[i])
    if (0 <= aaa[i].find("離婚")):
        # print(aaa[i])
        bbb.append(aaa[i])

print("＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠")
print("<br>")
print("鬼女速")
print("<br>")
print("＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠")
for i in range(len(bbb)):
    print("<p>" + str(bbb[i]) + "</p><br>")
print("＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠")
print("<br>")
print("鬼女速")
print("<br>")
print("＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠")
