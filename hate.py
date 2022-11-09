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


# print("差別用語".encode('utf-8'))

url = "https://nanjnomori.blog.jp/archives/8791016.html"

# headers = { "User-Agent": "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0" } # 追加
# request = urllib.request.Request(url, headers=headers) # headers を追加# url = "https://kabuoji3.com/stock/6501/2019/"

# URLを指定する
# print(type(request))
# html = str(request)
html = urllib.request.urlopen(url)
# URLを開く
# print(request)
soup = BeautifulSoup(html, "html.parser")
# BeautifulSoup で開く
# HTMLからニュース一覧に使用しているaタグを絞りこんでいく
# print(soup)

aaa = soup.select("p")

# aaa = str(aaa)
# print(len(aaa))
# print(type(aaa[0]))

bbb = []

for i in range(1, len(aaa)-4):
    aaa[i] = str(aaa[i])
    if (0 > aaa[i].find("<p style=")):
        if (0 > aaa[i].find("<p class=")):
            aaa[i] = aaa[i].replace("<p> ", "").replace("\n", "").replace("<br>", "").replace("</br>", "").replace(" </p>", "")

            for k in range(100, 300):
                aaa[i] = aaa[i].replace("&gt;&gt;" + str(k), "")
            for k in range(10, 100):
                aaa[i] = aaa[i].replace("&gt;&gt;" + str(k), "")
            for k in range(0, 10):
                aaa[i] = aaa[i].replace("&gt;&gt;" + str(k), "")


            bbb.append(aaa[i])

print("<br>")
for i in range(len(bbb)):
    print(bbb[i] + "<br><br>")

print()
print()
