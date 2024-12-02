class Interviewer:
    def askQuestions(self):
        pass

class Developer(Interviewer):
    def askQuestions(self):
        print 'Asking about design patterns'

class CommunityExecutive(Interviewer):
    def askQuestions(self):
        print 'Asking about community building'

class HiringManager:
    def makeInterviewer(self):
        pass

    def takeInterview(self):
        interviewer = self.makeInterviewer()
        interviewer.askQuestions()

class DevelopmentManager(HiringManager):
    def makeInterviewer(self):
        return Developer()

class MarketingManager(HiringManager):
    def makeInterviewer(self):
        return CommunityExecutive()


if __name__ == '__main__':
    devManager = DevelopmentManager()
    devManager.takeInterview()

    marketingManager = MarketingManager()
    marketingManager.takeInterview()