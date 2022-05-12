#! /bin/sh
COUNT=/home/natsukiogawa/count
※/home～public_html/はあなたのホームディレクトリを記入のこと。
OLD=`cat $COUNT`
NEW=`echo $OLD + 1 | /usr/bin/bc`
echo $NEW
echo $NEW > $COUNT
