import mysql.connector
from scrapertest import runPages

try: 
    conn = mysql.connector.connect(host='localhost', user='root', password='AFosi31@', database='ComputerParts')
    if conn.is_connected():
        print("You are connected")
        cursor = conn.cursor()
        sql = 'delete from GPUs'
        cursor.execute(sql)
        sql = 'insert into GPUs (name, price) values (%s, %s)'
        url = 'duh'
        
        
        arrParts = []
        arrParts = runPages(url, arrParts)
        print(len(arrParts))
        for i in range(len(arrParts)):
            print(arrParts[i])
        iter = 0
        
        #while iter < 10: #and iter < len(arrParts) - 1: #len(arrParts):
        #    val = (arrParts[iter], arrParts[iter + 1])
        #    cursor.execute(sql, val)
        #    conn.commit()
        #    iter += 2
            
except mysql.connector.Error as err:
    print("Something went wrong: {}".format(err))