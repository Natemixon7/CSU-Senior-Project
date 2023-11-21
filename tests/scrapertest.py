def getProductInfo(arrParts):
    arrParts.append('40')
    arrParts.append(1.99)
    return arrParts

def runPages(url, arrParts):
    if (len(arrParts) < 10):
        arrParts = getProductInfo(arrParts)
        print(arrParts)
        runPages(url, arrParts)
    else:
        j = 2
    return arrParts
