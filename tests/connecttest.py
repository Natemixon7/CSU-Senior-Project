import mysql.connector

try: 
    conn = mysql.connector.connect(host='localhost', user='root', password='AFosi31@')
    if conn.is_connected():
        print("You are connected")
        cursor = conn.cursor()
    
except mysql.connector.Error as err:
    print("Something went wrong: {}".format(err))
   