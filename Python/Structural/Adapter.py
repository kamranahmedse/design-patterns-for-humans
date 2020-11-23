class Lion:
    def roar(self):
        pass

class AfricanLion(Lion):
    def roar(self):
        pass

class AsianLion(Lion):
    def roar(self):
        pass

class Hunter:
    def hunt(self, lion):
        lion.roar()

class WildDog:
    @staticmethod
    def bark():
        pass

class WildDogAdapter(Lion):
    _dog = None

    def __init__(self, dog):
        self._dog = dog

    def roar(self):
        self._dog.bark()

if __name__ == '__main__':
    wildDog = WildDog
    wildDogAdapter = WildDogAdapter(wildDog)

    hunter = Hunter()
    hunter.hunt(wildDogAdapter)
