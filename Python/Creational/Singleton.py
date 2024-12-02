class President:
    __instance = None

    @staticmethod
    def getInstance():
        if President.__instance == None:
            President()
        return President.__instance

    def __init__(self):
        if President.__instance != None:
            raise Exception("This class is a singleton!")
        else:
            President.__instance = self

if __name__ == '__main__':
    president1 = President.getInstance()
    president2 = President.getInstance()

if president1 is president2:
    print 'Objects are the same'
else:
    print 'Objects are not the same'