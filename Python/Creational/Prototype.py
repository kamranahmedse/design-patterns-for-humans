import copy

class Sheep:
    _name = None
    _category = None

    def __init__(self, name, category = 'Mountain Sheep'):
        self.name = name
        self.category = category

    def setName(self, name):
        self.name = name

    def getName(self):
        return self.name

    def setCategory(self, category):
        self.category = category

    def getCategory(self):
        return self.category


if __name__ == '__main__':
    original = Sheep('Jolly')
    print original.getName()
    print original.getCategory()

    cloned = copy.copy(original)
    cloned.setName('Dolly')
    print cloned.getName()
    print cloned.getCategory()
    print original.getName()