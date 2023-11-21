

def getProductInfo():
    for item in range(10):
        arrParts.append('0')
        arrParts.append(float('1.99'))

def runPages():
    if len(arrParts) < 40:
        getProductInfo()
        runPages()

arrParts = []
runPages()

#for num in arrParts:
print(arrParts)