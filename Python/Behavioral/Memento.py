class EditorMemento:
    _content = None

    def __init__(self, content):
        self.content = content

    def getContent(self):
        return self.content

class Editor:
    _content = ''

    def type(self, words):
        self._content = self._content + ' ' + words

    def getContent(self):
       return self._content

    def save(self):
        return EditorMemento(self._content)

    def restore(self, memento):
        self.content = memento.getContent()

editor = Editor()
editor.type('This is the first sentence')
editor.type('This is the second.')

#Save the state to restore to : This is the first sentence. This is second.
saved = editor.save()
editor.type('And this is the third')

print editor.getContent() # This is the first sentence. This is second. And this is third.

editor.restore(saved)
editor.getContent() # This is the first sentence. This is second.