class Door:
    def getDescription(self):
        pass

class WoodenDoor(Door):
    def getDescription(self):
        print 'I am a wooden door'

class IronDoor(Door):
    def getDescription(self):
        print 'I am an iron door'

class DoorFittingExpert:
    def getDescription(self):
        pass

class Welder(DoorFittingExpert):
    def getDescription(self):
        print 'I can only fit iron doors'

class Carpenter(DoorFittingExpert):
    def getDescription(self):
        print 'I can only fit wooden doors'

class DoorFactory:
    def makeDoor(self):
        pass

    def makeFittingExpert(self):
        pass

class WoodenDoorFactory(DoorFactory):
    def makeDoor(self):
        return WoodenDoor()

    def makeFittingExpert(self):
        return Carpenter()

class IronDoorFactory(DoorFactory):
    def makeDoor(self):
        return IronDoor()

    def makeFittingExpert(self):
        return Welder()


if __name__ == '__main__':
    woodenFactory = WoodenDoorFactory()

    door = woodenFactory.makeDoor()
    expert = woodenFactory.makeFittingExpert()

    door.getDescription()
    expert.getDescription()

    ironFactory = IronDoorFactory()

    door = ironFactory.makeDoor()
    expert = ironFactory.makeFittingExpert()

    door.getDescription()
    expert.getDescription()