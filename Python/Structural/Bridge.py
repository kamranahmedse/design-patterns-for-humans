class WebPage:
    def __init__(self, theme):
        self.theme = theme

    def getContent(self):
        pass

class About(WebPage):
    _theme = None

    def __init__(self, theme):
        self.theme = theme

    def getContent(self):
        return "About page in " + self.theme.getColor()

class Careers(WebPage):
    _theme = None

    def __init__(self, theme):
        self.theme = theme

    def getContent(self):
        return "Careers page in " + self.theme.getColor()

class Theme:
    def getColor(self):
        pass

class DarkTheme(Theme):
    def getColor(self):
        return 'Dark Black'

class LightTheme(Theme):
    def getColor(self):
        return 'Off White'

class AquaTheme(Theme):
    def getColor(self):
        return 'Light Blue'

if __name__ == '__main__':

    darkTheme = DarkTheme()

    about = About(darkTheme)
    careers = Careers(darkTheme)

    print about.getContent()
    print careers.getContent()