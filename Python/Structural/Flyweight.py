class KarakTea:
    pass

class TeaMaker:
    _availableTea = {}

    def make(self, preference):
        if not preference in self._availableTea:
            self._availableTea[preference] = KarakTea()

        return self._availableTea[preference]

class TeaShop:
    _orders = {}
    _teaMaker = None

    def __init__(self, teaMaker):
        self._teaMaker = teaMaker

    def takeOrder(self, teaType, table):
        self._orders[table] = self._teaMaker.make(teaType)

    def serve(self):
        for table, tea in self._orders.iteritems():
            print "Serving tea to table #" + str(table)


if __name__ == '__main__':
    teaMaker = TeaMaker()
    shop = TeaShop(teaMaker)

    shop.takeOrder('less sugar', 1)
    shop.takeOrder('more milk', 2)
    shop.takeOrder('without sugar', 5)

    shop.serve()
