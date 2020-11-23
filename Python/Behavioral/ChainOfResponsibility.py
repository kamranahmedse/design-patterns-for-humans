import inspect

class Account:
    _successor = None
    _balance = None

    def setNext(self, account):
        self._successor = account

    def pay(self, amountToPay):
        import inspect
        myCaller = inspect.stack()[1][3]
        if self.canPay(amountToPay):
            print "Paid " + str(amountToPay) + " using " + myCaller
        elif (self._successor):
            print "Cannot pay using " + myCaller + ". Proceeding .."
            self._successor.pay(amountToPay)
        else:
            raise ValueError('None of the accounts have enough balance')
    def canPay(self, amount):
        return self.balance >= amount

class Bank(Account):
    _balance = None

    def __init__(self, balance):
        self.balance = balance

class Paypal(Account):
    _balance = None

    def __init__(self, balance):
        self.balance = balance

class Bitcoin(Account):
    _balance = None

    def __init__(self, balance):
        self.balance = balance

if __name__ == '__main__':
    bank = Bank(100)
    paypal = Paypal(200)
    bitcoin = Bitcoin(300)

    bank.setNext(paypal)
    paypal.setNext(bitcoin)

    bank.pay(259)