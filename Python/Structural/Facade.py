class Computer:
    def getElectricShock(self):
        print "Ouch!"

    def makeSound(self):
        print "Beep Beep!"

    def showLoadingScreen(self):
        print "Loading..."

    def bam(self):
        print "Ready to be used..."

    def closeEverything(self):
        print "Bup bup bup buzzz!"

    def sooth(self):
        print "Zzzzz"

    def pullCurrent(self):
        print "Haaah!"

class ComputerFacade:
    _computer = None

    def __init__(self, computer):
        self.computer = computer

    def turnOn(self):
        self.computer.getElectricShock()
        self.computer.makeSound()
        self.computer.showLoadingScreen()
        self.computer.bam()

    def turnOff(self):
        self.computer.closeEverything()
        self.computer.pullCurrent()
        self.computer.sooth()

if __name__ == '__main__':
    computer = ComputerFacade(Computer())
    computer.turnOn()
    computer.turnOff()