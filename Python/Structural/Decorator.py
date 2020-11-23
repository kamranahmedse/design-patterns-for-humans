class Coffee:
    def getCost(self):
        pass

    def getDescription(self):
        pass

class SimpleCoffee(Coffee):
    def getCost(self):
        return 10

    def getDescription(self):
        return 'Simple Coffee'

class MilkCoffee(Coffee):
    _coffee = None

    def __init__(self, coffee):
        self._coffee = coffee

    def getCost(self):
        return self._coffee.getCost() + 2

    def getDescription(self):
        return self._coffee.getDescription() + ', milk'

class WhipCoffee(Coffee):
    _coffee = None

    def __init__(self, coffee):
        self._coffee = coffee

    def getCost(self):
        return self._coffee.getCost() + 5

    def getDescription(self):
        return self._coffee.getDescription() + ', whip'


class VanillaCoffee(Coffee):
    _coffee = None

    def __init__(self, coffee):
        self._coffee = coffee

    def getCost(self):
        return self._coffee.getCost() + 3

    def getDescription(self):
        return self._coffee.getDescription() + ', vanilla'

if __name__ == '__main__':
    someCoffee = SimpleCoffee()
    print someCoffee.getCost()
    print someCoffee.getDescription()

    someCoffee = MilkCoffee(someCoffee)
    print someCoffee.getCost()
    print someCoffee.getDescription()

    someCoffee = VanillaCoffee(someCoffee)
    print someCoffee.getCost()
    print someCoffee.getDescription()

    someCoffee = WhipCoffee(someCoffee)
    print someCoffee.getCost()
    print someCoffee.getDescription()