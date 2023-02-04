from matplotlib import pyplot
import slot





if __name__ == '__main__':

    ddd = []
    fff = []
    jjj = []
    lll = []

    round = 500

    # for i in range(1, round):
    while (True):
        bbb = slot.aaa_slot_class()
        ccc = bbb.aaa_slot()
        print(ccc)
        ddd.append(ccc)
        eee = sum(ddd) / len(ddd)
        fff.append(eee)
        print(fff)
        pyplot.plot(range(len(fff)), fff, color='blue')
        # pyplot.savefig('image.png')
# @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        ggg = slot.bbb_slot_class()
        hhh = ggg.bbb_slot()
        print(hhh)
        jjj.append(hhh)
        kkk = sum(jjj) / len(jjj)
        lll.append(kkk)

        print(lll)
        # pyplot.plot(range(len(fff)), fff, color='blue')
        pyplot.plot(range(len(lll)), lll, color="forestgreen")
        pyplot.savefig('image.png')



# @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

    # pyplot.show()
