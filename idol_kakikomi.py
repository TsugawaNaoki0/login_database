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




url = "http://nogizaka46link.blog.jp/"
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
    if (0 <= aaa[i].find("http://nogizaka46link.blog.jp/archives")):
        if (0 > aaa[i].find(">運営者情報<")):
            if (0 > aaa[i].find(">プライバシーポリシー<")):
                if (0 > aaa[i].find(">お問い合わせ<")):
        # if (0 > aaa[i].find(">x<")):
        #     if (0 > aaa[i].find("\"ロゴ\"")):
        #         if (0 > aaa[i].find("<span>乃木坂46</span>")):
        #             if (0 > aaa[i].find("このページを通報・違反報告する")):
        #                 if (0 > aaa[i].find("Powered by アンテナメーカー (アンテナサイト無料作成サイト)")):
        #                     if (0 > aaa[i].find("<span>乃木坂46</span>")):
        #                         if (0 > aaa[i].find("ログイン")):
        #                             if (0 > aaa[i].find("よくある質問")):
        #                                 if (0 > aaa[i].find(">1<")):
        #                                     if (0 > aaa[i].find(">2<")):
        #                                         if (0 > aaa[i].find(">3<")):
        #                                             if (0 > aaa[i].find(">4<")):
                    #         if (0 > aaa[i].find("<span>乃木坂46</span>")):
                    #             if (0 > aaa[i].find("<span>乃木坂46</span>")):
                    #         if (0 > aaa[i].find("<span>乃木坂46</span>")):
                    #             if (0 > aaa[i].find("<span>乃木坂46</span>")):
                    bbb.append(aaa[i])

print("＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠")
print("<br>")
print("乃木坂46")
print("<br>")
print("＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠")
print("<br>")
for i in range(len(bbb)):
    if (i % 4 == 3):
        print("<br>" + "コメント数：" + str(bbb[i]) + "<br>")
        print("-----------------------------------------------------------------------------------------")
        print("<br>")
        print("-----------------------------------------------------------------------------------------")
    if (i % 4 == 0):
        print("<br>" + str(bbb[i]) + "<br>")
    if (i % 4 == 1):
        print("<br>" + "分類：" + str(bbb[i]) + "<br>")
    if (i % 4 == 2):
        print("<br>" + "タイトル：" + str(bbb[i]) + "<br>")

print("<br>")
print("＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠")
print("<br>")
print("乃木坂46")
print("<br>")
print("＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠＠")
