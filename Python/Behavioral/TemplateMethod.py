class Builder:
    def build(self):
        self.test()
        self.lint()
        self.assemble()
        self.deploy()

    def test(self):
        pass

    def lint(self):
        pass

    def assemble(self):
        pass

    def deploy(self):
        pass

class AndroidBuilder(Builder):
    def test(self):
        print 'Running android tests'

    def lint(self):
        print 'Linting the android code'

    def assemble(self):
        print 'Assembling the android build'

    def deploy(self):
        print 'Deploying android build to server'

class IosBuilder(Builder):
    def test(self):
        print 'Running ios tests'

    def lint(self):
        print 'Linting the ios code'

    def assemble(self):
        print 'Assembling the ios build'

    def deploy(self):
        print 'Deploying ios build to server'

androidBuilder = AndroidBuilder()
androidBuilder.build()

'''
Output:
Running android tests
Linting the android code
Assembling the android build
Deploying android build to server
'''

iosBuilder = IosBuilder()
iosBuilder.build()

'''
Output:
Running ios tests
Linting the ios code
Assembling the ios build
Deploying ios build to server
'''