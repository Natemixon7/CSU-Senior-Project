from bs4 import BeautifulSoup
import requests

# header is used to identify yourself with amazon servers... amazon can flag you as a bot and deny access
headers = {
    'User-Agent': "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:109.0) Gecko/20100101 Firefox/109.0",
    'Accept-Language': 'en-GB,en;q=0.5',
    'Referer': 'https://google.com',
    'DNT': '1',
    'Jeremy': 'forgorthehouse',
    
}

# pulls html from requested url and stores it as soup
def getData(url):
    page = requests.get(url, headers=headers)
    soup = BeautifulSoup(page.text, 'html.parser')
    return soup

#def getNextPage(soup):
#    url = 'http://www.amazon.com' + str(soup.find('span', {'class': 's-pagination-strip'}).contents[-1]['href'])
#   return url

#def getProductName(soup):
#    for name in soup.find_all('span', {'class': 'a-size-medium a-color-base a-text-normal'}):
#        print(name.get_text())
        
#def getProductPrice(soup):
#    decimal = soup.find_all('span', {'class': 'a-price-fraction'})
#    num = 0
#    for price in soup.find_all('span', {'class': 'a-price-whole'}):
#        print(price.get_text() + (decimal[num].get_text()))
#        num += 1

# pulls all items off url with a price and appends them to an array        
def getProductInfo(soup, arrParts):
    info = soup.find_all('div', {'class': 'puis-card-container s-card-container s-overflow-hidden aok-relative puis-include-content-margin puis puis-v2hrdt6w0jdtp122jn0441sgwu4 s-latency-cf-section puis-card-border'})
    for item in info:
        price = item.find('span', {'class': 'a-price-fraction'})
        if price == None:
            continue
        else:
            arrParts.append(item.find('span', {'class': 'a-size-medium a-color-base a-text-normal'}).get_text())
            arrParts.append(float(item.find('span', {'class': 'a-price-whole'}).get_text().replace(',', '', 1) + item.find('span', {'class': 'a-price-fraction'}).get_text()))  # may need to add str
            #print(item.find('span', {'class': 'a-size-medium a-color-base a-text-normal'}).get_text())
            #print(item.find('span', {'class': 'a-price-whole'}).get_text() + item.find('span', {'class': 'a-price-fraction'}).get_text())
    return arrParts

# recursive function that retrieves html data from every page for each url
def runPages(url, arrParts):
    soup = getData(url)
    arrParts = getProductInfo(soup, arrParts)
    if not soup.find('span', {'class': 's-pagination-item s-pagination-next s-pagination-disabled'}):
        link = str(soup.find('span', {'class': 's-pagination-strip'}).contents[-1]['href'])
        url = 'http://www.amazon.com' + link
        runPages(url, arrParts)
        
    return arrParts
