class WritingState:
    def write(self, words):
        pass

class UpperCase(WritingState):
    def write(self, words):
        print words.upper()

class LowerCase(WritingState):
    def write(self, words):
        print words.lower()

class DefaultText(WritingState):
    def write(self, words):
        print words

class TextEditor():
    _state = None

    def __init__(self, state):
        self._state = state

    def setState(self, state):
        self._state = state

    def type(self, words):
        self._state.write(words)

editor = TextEditor(DefaultText())
editor.type('First Line')
editor.setState(UpperCase())

editor.type('Second Line')
editor.type('Third Line')

editor.setState(LowerCase())

editor.type('Fourth Line')
editor.type('Fifth Line')