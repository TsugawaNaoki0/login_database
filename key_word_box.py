class key_words_box_class:
    def key_words_box(self, field):
        key_words = []

        if (field == "0"):
            key_words = ["お化け", "おばけ", "霊", "幽霊", "妖怪", "溶解", "容喙", \
                        "養会", "容解", "ゼロ",  "ZERO", "広角", "降格", "口角", \
                        "高角", "香格", "甲殻", "光角", "高閣", "甲賀区"\
                        "Zero", "無", "ゴースト", "亡霊", "ハム", "考案", "公安警察", \
                        "公安部", "外事課", "外事", "障害者", "ガイジ", "館長", "官庁", \
                        "艦長", "浣腸", "干潮", "管長", "完調", "間諜", "攻殻機動隊"]    ### キーワード(複数可)
            return key_words

        elif(field == "stone"):
            key_words = ["石", "医師", "意思", "意志", "遺志", "SixTONES", "STONE"]
            return key_words

        else:
            return []
