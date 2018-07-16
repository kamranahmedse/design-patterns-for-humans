class Door:
    def getWidth(self):
        pass

    def getHeight(self):
        pass

class WoodenDoor(Door):
    width = None
    height = None

    def __init__(self, width = 5, height = 5):
        self.width = width
        self.height = height

    def getWidth(self):
        return self.width

    def getHeight(self):
        return self.height

class DoorFactory:

    @staticmethod
    def makeDoor(width,height):
        return WoodenDoor(width,height)

if __name__ == '__main__':
    door = DoorFactory.makeDoor(10,10)
    print door.getHeight()
    print door.getWidth()