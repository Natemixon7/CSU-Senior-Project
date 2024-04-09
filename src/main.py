import mysql.connector
from scraper import runPages
import time


### url of Liquid CPU Cooler with All prime, 3 star and up, $50 and up, brand new, top brands
### url of CPUs with all prime, 3 star and up, $200 and up, brand new, top brands, 4 cores and up
### url of Full Tower Cases with all prime, 3 star and up, $49 and up, brand new, built in fans
### url of GC with All Prime, 3 Star and up, $300 and up, brand new
### url of Motherboard with All Prime, 3 Star and up, $99 and up, ddr4 & ddr5, 4 memory slots, brand new, top brands
### url of PSUs with all prime, 3 star and up, $50 and up, brand new, top brands
### url of ddr4 and ddr5 RAM with all prime, 3 star and up, $50 and up, ddr4, ddr5, desktop compatible, brand new, top brands
### url of SSDs with all prime, 3 star and up, $50 and up, PC compatible, brand new, top brands
url = [ 
    'https://www.amazon.com/s?k=liquid+cpu+coolers&i=electronics&rh=n%3A3015422011%2Cp_85%3A2470955011%2Cp_72%3A1248880011%2Cp_36%3A5000-%2Cp_n_condition-type%3A2224371011%2Cp_n_feature_forty-one_browse-bin%3A119653281011%2Cp_n_feature_browse-bin%3A23966146011&dc&ds=v1%3A9yDMzBHdqDAjYZA73eINSO3k9H%2BhGhTkjt0CloSKrnY&crid=29ET0WXQD9X5K&qid=1700517317&rnid=23966007011&sprefix=liquid+cpu+coolers%2Celectronics%2C73&ref=sr_nr_p_n_feature_browse-bin_1',
    'https://www.amazon.com/s?k=CPU&i=electronics&rh=n%3A229189%2Cp_85%3A2470955011%2Cp_72%3A1248880011%2Cp_36%3A20000-%2Cp_n_feature_forty-one_browse-bin%3A119653281011%2Cp_n_condition-type%3A2224371011%2Cp_n_feature_thirty-five_browse-bin%3A35913653011%7C35913655011%7C35913656011%7C35913661011%7C35913663011%7C35913665011%7C35913669011&dc&crid=RI4GTDYKM4SC&qid=1700516655&rnid=35913650011&sprefix=cpu%2Celectronics%2C76&ref=sr_nr_p_n_feature_thirty-five_browse-bin_8&ds=v1%3AgnEEteGQnJ7yVzYyaKRuDwa51awR06gcAJsmfrp5LOY',
    'https://www.amazon.com/s?k=full+tower+pc+case&i=electronics&rh=n%3A572238%2Cp_85%3A2470955011%2Cp_72%3A1248880011%2Cp_n_condition-type%3A2224371011%2Cp_36%3A4900-%2Cp_n_feature_four_browse-bin%3A31968747011&dc&crid=ER5I8KES320K&qid=1700519410&rnid=386442011&sprefix=full+tower+pc+case%2Celectronics%2C79&ref=sr_nr_p_36_2',
    'https://www.amazon.com/s?k=graphics+card&i=computers&rh=n%3A284822%2Cp_85%3A2470955011%2Cp_72%3A1248880011%2Cp_n_condition-type%3A2224371011%2Cp_36%3A30000-%2Cp_n_feature_six_browse-bin%3A82343550011%7C82343551011&s=relevancerank&dc&qid=1700517289&rnid=82343543011&ref=sr_nr_p_n_feature_six_browse-bin_2&ds=v1%3A2Pe4YajoSgaOZ1TFWeIqL0iR30BsCrccOVhqz1niOqU',
    'https://www.amazon.com/s?k=motherboard&i=electronics&rh=n%3A1048424%2Cp_85%3A2470955011%2Cp_72%3A1248880011%2Cp_n_condition-type%3A2224371011%2Cp_36%3A9900-%2Cp_n_feature_forty-one_browse-bin%3A119653281011%2Cp_n_feature_seven_browse-bin%3A10656895011%7C23703237011%2Cp_n_feature_two_browse-bin%3A58126333011&dc&crid=3FGAALHU5O189&qid=1700520235&rnid=58126161011&sprefix=motherboard%2Caps%2C87&ref=sr_nr_p_n_feature_two_browse-bin_2&ds=v1%3AQtenjE%2F0CFXAqIQZNlWuwq%2Fuvs3NtOqtuAgF%2FYsnBr8',
    'https://www.amazon.com/s?k=full+modular+power+supply&i=computers&rh=n%3A1161760%2Cp_85%3A2470955011%2Cp_72%3A1248880011%2Cp_36%3A5000-%2Cp_n_condition-type%3A2224371011%2Cp_n_feature_forty-one_browse-bin%3A119653281011&dc&qid=1700520323&rnid=119653280011&ref=sr_nr_p_n_feature_forty-one_browse-bin_1&ds=v1%3AXtShh8lSF3Z88K30%2FEgNjWqESwHEcWAZbPDCUYsLyIw',
    'https://www.amazon.com/s?k=ddr5+ram&i=computers&rh=n%3A172500%2Cp_85%3A2470955011%2Cp_72%3A1248880011%2Cp_36%3A5000-%2Cp_n_feature_four_browse-bin%3A10656894011%7C23698147011%2Cp_n_condition-type%3A2224371011%2Cp_n_feature_forty-one_browse-bin%3A119653281011%2Cp_n_feature_browse-bin%3A23964009011&s=price-asc-rank&dc&crid=3TWORGR2AQHFB&qid=1700520382&rnid=23963802011&sprefix=ddr5+ram%2Ccomputers%2C62&ref=sr_nr_p_n_feature_browse-bin_1&ds=v1%3AE7U%2FG59l9%2FWiaxu6d4JkVd%2BI4NT%2BzPtu%2BnAzqqt3SRA',
    'https://www.amazon.com/s?k=ssd&i=computers&rh=n%3A1292116011%2Cp_85%3A2470955011%2Cp_72%3A1248880011%2Cp_36%3A5000-%2Cp_n_condition-type%3A2224371011%2Cp_n_feature_twenty-five_browse-bin%3A21558461011%2Cp_n_feature_keywords_five_browse-bin%3A7688215011%2Cp_n_feature_forty-one_browse-bin%3A119653281011&dc&crid=10ROGD0U983RZ&qid=1700520466&rnid=119653280011&sprefix=ssd%2Ccomputers%2C75&ref=sr_nr_p_n_feature_forty-one_browse-bin_1&ds=v1%3AFtUB56H1xRv1QJp%2FIClst%2B9YL2DGjyatcRWKtR2EH8o'
]

# sql queries for deleting an entire table
sqlDelete = [
    'delete from CPUCoolers',
    'delete from CPUs',
    'delete from Cases',
    'delete from GPUs',
    'delete from Motherboards',
    'delete from PSUs',
    'delete from RAM',
    'delete from SSDs'
]

# sql queries for inserting data
sqlInsert = [
    'insert into CPUCoolers (name, price) values (%s, %s)',
    'insert into CPUs (name, price) values (%s, %s)',
    'insert into Cases (name, price) values (%s, %s)',
    'insert into GPUs (name, price) values (%s, %s)',
    'insert into Motherboards (name, price) values (%s, %s)',
    'insert into PSUs (name, price) values (%s, %s)',
    'insert into RAM (name, price) values (%s, %s)',
    'insert into SSDs (name, price) values (%s, %s)'
]

def main():
    try: 
        # connects to database (password hidden on purpose)
        conn = mysql.connector.connect(host='localhost', user='root', password='******', database='ComputerParts')
        if conn.is_connected():
            print("You are connected")
            cursor = conn.cursor()
            arrParts = []
            # goes through the data base and deletes all existing records
            for listIter in range(0, len(url)):
                cursor.execute(sqlDelete[listIter])
                conn.commit()
                iter2 = 0
                # pulls all the items off of amazon and stores them into an array
                arrParts = runPages(url[listIter], arrParts)
                #inserts the first 10 items in the array into the database
                while iter2 < 10: #and iter < len(arrParts) - 1: #len(arrParts):
                    val = (arrParts[iter2], arrParts[iter2 + 1])
                    cursor.execute(sqlInsert[listIter], val)
                    conn.commit()
                    iter2 += 2
                #clears the array
                arrParts.clear()
            # suspends connection with the database    
            cursor.close()
            conn.close()
            print("You are disconnected")
    # throws exception when database fails to connect            
    except mysql.connector.Error as err:
        print("Something went wrong: {}".format(err))

# runs program every 24hrs
while(True):
    main()
    time.sleep(86400)