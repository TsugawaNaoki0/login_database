import numpy as np
import matplotlib.pyplot as plt

class y_news_class():
    def y_news(self, url):
        import urllib.request, urllib.error
        from bs4 import BeautifulSoup
        import csv

        # headers = { "User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36"}
        # headers = { "User-Agent": "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:47.0) Gecko/20100101 Firefox/47.0" }
        self.url = url
        # url = "https://kabuoji3.com/stock/6501/2019/"
        # URLを指定する
        html = urllib.request.urlopen(url)
        # URLを開く
        soup = BeautifulSoup(html, "html.parser")
        # BeautifulSoup で開く
        # HTMLからニュース一覧に使用しているaタグを絞りこんでいく
        # aaa = soup.select(".newsFeed")
        # news_tag = soup.select(".thread") ###
        # news_tag_2 = soup.select(".newsFeed_item")
        # print (news_tag)
        """
        # date = soup.select("fnt-small col-sec m-tb-8")
        # date_after = ["" for y in range(len(date))]
        # for i in range(len(date)):
        #
        #     content = date[i]
        #     content = str(content)
        #
        #     for j in range(len(content)):
        #         if (content[0] != ">"):
        #             content = str(content).replace(content[0], "")
        #         else:
        #             content = str(content).replace(content[0], "")
        #             date_after[i] = content
        #             break
        """

        news_tag = soup.select("a")
        news_tag_after = ["" for x in range(len(news_tag))]

        # print(news_tag)
        # print(len(news_tag))
        for i in range(len(news_tag)):
            if (i%2 == 0):
                print(news_tag[i])
                print("<br>")
                print("<br>")






        for i in range(len(news_tag)):

            content = news_tag[i]
            content = str(content)

            # for i in range(len(content)):
            #     print(content[i])

            # print(type(content))

            # for j in range(len(content)):
            #     if (content[0] == ">"):
            #         content = str(content).replace(content[0], "")

            # print(content)


            """
            for j in range(len(content)):
                if (content[0] != ">"):
                    content = str(content).replace(content[0], "")
                else:
                    content = str(content).replace(content[0], "")
                    news_tag_after[i] = content
                    break
            """

        return news_tag_after


if __name__ == '__main__':

    # url = "https://5ch.net/"
    # url = "https://www.yahoo.co.jp/"
    url = "https://ff5ch.syoboi.jp/"
    aaa = y_news_class()
    bbb = aaa.y_news(url)
    # print(bbb)
    # for i in range(len(bbb)):
    #     print(bbb[i] + "<br><br>")
    #     print()
