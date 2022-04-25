import numpy as np
import matplotlib.pyplot as plt
import sys
import key_word_box

class y_news_class():
    def y_news(self, url):
        import urllib.request, urllib.error
        from bs4 import BeautifulSoup
        import csv

        self.url = url
        # url = "https://kabuoji3.com/stock/6501/2019/"
        # URLを指定する
        html = urllib.request.urlopen(url)
        # URLを開く
        soup = BeautifulSoup(html, "html.parser")
        # BeautifulSoup で開く
        # HTMLからニュース一覧に使用しているaタグを絞りこんでいく
        aaa = soup.select(".newsFeed")
        news_tag = soup.select(".newsFeed_item_title") ###
        # news_tag = soup.select(".newsFeed_item_date") ###
        # news_tag_2 = soup.select(".newsFeed_item")
        # print (news_tag)

        for i in range(len(news_tag)):
            news_tag[i] = str(news_tag[i]).replace("<div class=\"newsFeed_item_title\">", "").replace("</div>", "")
            # news_tag[i] = str(news_tag[i]).replace("<div class=\"newsFeed_item_date\">", "").replace("</div>", "")
            # print(news_tag[i])
        return news_tag


# class key_words_box_class:
#     def key_words_box(self, field):
#         if (field=="0"):
#             key_words = ["お化け", "おばけ", "霊", "幽霊", "妖怪", "溶解", "容喙", \
#                         "養会", "容解", "ゼロ",  "ZERO", "広角", "降格", "口角", \
#                         "高角", "香格", "甲殻", "光角", "高閣", "甲賀区"\
#                         "Zero", "無", "ゴースト", "亡霊", "ハム", "考案", "公安警察", \
#                         "公安部", "外事課", "外事", "障害者", "ガイジ", "館長", "官庁", \
#                         "艦長", "浣腸", "干潮", "管長", "完調", "間諜", "攻殻機動隊"]    ### キーワード(複数可)
#             return key_words
#         else:
#             return []




if __name__ == '__main__':
    import urllib.request, urllib.error

    # print("ENTER [x] or [X]")
    # z = input()

    # if (z == "x" or z == "X"):
    news_num = 30        ### yahoo の記事のタブの数(ここが変わっている場合がある)
    # news_num = 3        ### yahoo の記事のタブの数(ここが変わっている場合がある)
    field = sys.argv[1]
    ppp = key_word_box.key_words_box_class()
    key_words = ppp.key_words_box(field)
    # key_words = ["お化け", "おばけ", "霊", "幽霊", "妖怪", "溶解", "容喙", \
    #             "養会", "容解", "ゼロ",  "ZERO", "広角", "降格", "口角", \
    #             "高角", "香格", "甲殻", "光角", "高閣", "甲賀区"\
    #             "Zero", "無", "ゴースト", "亡霊", "ハム", "考案", "公安警察", \
    #             "公安部", "外事課", "外事", "障害者", "ガイジ", "館長", "官庁", \
    #             "艦長", "浣腸", "干潮", "管長", "完調", "間諜", "攻殻機動隊"]    ### キーワード(複数可)
    hits = []
    news_books = [[] for j in range(news_num)]
    # theme = ["top-picks", "domestic", "world", "business", "entertainment", "sports", "it", "science", "local"]
    theme = ["top-picks"]


    for l in range(len(theme)):

        for k in range(1, news_num+1):
            # print(theme[l])
            url_url = "https://news.yahoo.co.jp/topics/" + theme[l] + "?page=" + str(k)   ### 最後尾はページ番号

            try:
                html = urllib.request.urlopen(url_url)
                print(url_url)

                yyy = y_news_class()
                y_news_data = yyy.y_news(url_url)

                news_books[k-1] = y_news_data
            # print(news_books[k-1])            except:

            # for i in range(len(y_news_data)):
                    # print(y_news_data[i])
            except:
                # print("No URL !!!!!!!!!")
                break



        for n in range(len(key_words)):
            for h in range(len(news_books)):
                for g in range(len(news_books[h])):
                    ccc = news_books[h][g]
                        # print(news_books[h][g])
                    ddd = ccc.find(key_words[n])
                    if (ddd > -1) :
                        # print(ccc[ddd])
                        hits.append(ccc)

    # print(sys.argv[1])
    for t in range(len(hits)):
            print(hits[t] + "<br><br>")
