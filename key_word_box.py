class key_words_box_class:
    def key_words_box(self, field):
        key_words = ""

        if (field == "ghost"):
            key_words = "+お化け@おばけ@霊@幽霊@妖怪@溶解@容喙@養会@容解@ゼロ@ZERO@広角@降格@口角@高角@香格@甲殻@光角@高閣@甲賀区@白@城@Zero@無@ゴースト@亡霊@ハム@考案@公安警察@公安部@外事課@外事@障害者@ガイジ@館長@官庁@艦長@浣腸@干潮@管長@完調@間諜@攻殻機動隊@無し@なし@梨@成し@為し@作業@さ行@サ行@さぎょう@サギョウ@シロ@行動確認@zero@ZERO@知床*"
        elif (field == "stone"):
            key_words = "+石@医師@意思@意志@遺志@SixTONES@STONE@山口@春@貼る@貼@張る@張@ハル@波留@治@基地@吉@既知@機知@機智@貴地@キチ@きち@絆@織田@小田@尾田@オダ@おだ@誠@井上@井ノ上@イノウエ@くにお@邦夫@邦男@国男@國士@国士@肉@お肉@おにく*"
        elif (field == "dice"):
            key_words = "+サイコロ@コナン@メガネ@工藤@駆動@宮藤@久藤@狗堂@くどう@野村@のむら@ノムラ@乃村@埜村@能村@悟る@さとる@覚@悟@智@覚る@サトル@聡@覺@田上@田ノ上@田之上@たのうえ@タノウエ@田の上@田野上@ふみお@文雄@文夫@文男@文郎@フミオ@文緒@文生@文大*"
        elif (field == "quake"):
            key_words = "+地震@揺れ@震度@マグニチュード*"

        return key_words
