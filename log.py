from os import path
import sys
import datetime

dt_now = datetime.datetime.now()

log_message = sys.argv[1]

# file_name = path.basename(__file__)

f = open('/var/www/html/text.txt', 'a')

f.write(log_message + ' ： ' + str(dt_now) + '\n')
# f.write(file_name + '：' + str(dt_now) + '\n')


f.close()
