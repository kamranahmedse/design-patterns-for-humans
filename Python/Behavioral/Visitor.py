# Visitee
class Animal:
    def accept(self, operation):
        pass

# Visitor
class AnimalOperation:
    def visitMonkey(self, monkey):
        pass

    def visitLion(self, lion):
        pass

    def visitDolphin(self, dolphin):
        pass


class Monkey(Animal):
    def shout(self):
        print 'Ooh oo aa aa!'

    def accept(self, operation):
        operation.visitMonkey(self)

class Lion(Animal):
    def roar(self):
        print 'Roaaar!'

    def accept(self, operation):
        operation.visitLion(self)

class Dolphin(Animal):
    def speak(self):
        print 'Tuut tuttu tuutt!'

    def accept(self, operation):
        operation.visitDolphin(self)

class Speak(AnimalOperation):
    def visitMonkey(self, monkey):
        monkey.shout()

    def visitLion(self, lion):
        lion.roar()

    def visitDolphin(self, dolphin):
        dolphin.speak()

monkey = Monkey()
lion = Lion()
dolphin = Dolphin()

speak = Speak()
monkey.accept(speak)
lion.accept(speak)
dolphin.accept(speak)

class Jump(AnimalOperation):
    def visitMonkey(self, monkey):
        print 'Jumped 20 feet high! on to the tree!'

    def visitLion(self, lion):
        print 'Jumped 7 feet! back on the ground!'

    def visitDolphin(self, dolphin):
        print 'Walked on water a little and disappeared'

jump = Jump()

monkey.accept(speak)
monkey.accept(jump)

lion.accept(speak)
lion.accept(jump)

dolphin.accept(speak)
dolphin.accept(jump)
