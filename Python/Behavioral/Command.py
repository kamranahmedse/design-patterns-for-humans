class Bulb:
    def turnOn(self):
        print "Bulb has been lit"

    def turnOff(self):
        print "Darkness!"

class Command:
    def execute(self):
        pass

    def undo(self):
        pass

    def redo(self):
        pass

class TurnOn(Command):
    _bulb = None

    def __init__(self, bulb):
        self._bulb = bulb

    def execute(self):
        self._bulb.turnOn()

    def undo(self):
        self._bulb.turnOff()

    def redo(self):
        self.execute()

class TurnOff(Command):
    _bulb = None

    def __init__(self, bulb):
        self.bulb = bulb

    def execute(self):
        self.bulb.turnOff()

    def undo(self):
        self.bulb.turnOn()

    def redo(self):
        self.execute()

class RemoteControl:
    def submit(self, command):
        command.execute()

if __name__ == '__main__':
    bulb = Bulb()

    turnOn = TurnOn(bulb)
    turnOff = TurnOff(bulb)

    remote = RemoteControl()
    remote.submit(turnOn) # Bulb has been lit!
    remote.submit(turnOff) # Darkness!