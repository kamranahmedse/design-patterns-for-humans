class SortStrategy:
    def sort(self, dataset):
        pass

class BubbleSortStrategy(SortStrategy):
    def sort(self, dataset):
        print 'Sorting using bubble sort'

        return dataset

class QuickSortStrategy(SortStrategy):
    def sort(self, dataset):
        print 'Sorting using quick sort'
        return dataset

class Sorter:
    _sorter = None

    def __init__(self, sorter):
        self._sorter = sorter

    def sort(self, dataset):
        return self._sorter.sort(dataset)

dataset = [1, 5, 4, 3, 2, 8]

sorter = Sorter(BubbleSortStrategy())
sorter.sort(dataset)

sorter = Sorter(QuickSortStrategy())
sorter.sort(dataset)