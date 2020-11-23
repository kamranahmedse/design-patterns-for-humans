class ChatRoomMediator:
    def showMessage(self, user, message):
        pass

class ChatRoom(ChatRoomMediator):
    def showMessage(self, user, message):
        import datetime
        time = datetime.datetime.now()
        sender = user.getName()

        print str(time) + '[' + sender + ']: ' + message

class User:
    _name = None
    _chatMediator = None

    def __init__(self, name, chatMediator):
        self.name = name
        self._chatMediator = chatMediator

    def getName(self):
        return self.name

    def send(self, message):
        self._chatMediator.showMessage(self, message)

if __name__ == '__main__':
    mediator = ChatRoom()

    john = User('John Doe', mediator)
    jane = User('Jane Doe', mediator)

    john.send('Hi There!')
    jane.send('Hey!')