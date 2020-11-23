class RadioStation:
    _frequency = None

    def __init__(self, frequency):
        self._frequency = frequency

    def getFrequency(self):
        return self._frequency

class StationList:
    _stations = []
    _counter = 0

    def addStation(self, station):
        self._stations.append(station)

    def removeStation(self, toRemove):
        toRemoveFrequency = toRemove.getFrequency()
        self._stations = filter(lambda station: station.getFrequency() != toRemoveFrequency, self._stations)

    def __iter__(self):
        return iter(self._stations)

    def next(self):
        self._counter += 1

if __name__ == '__main__':
    stationList = StationList()

    stationList.addStation(RadioStation(89))
    stationList.addStation(RadioStation(101))
    stationList.addStation(RadioStation(102))
    stationList.addStation(RadioStation(103))

    for station in stationList:
        print station.getFrequency()

    stationList.removeStation(RadioStation(89))

    for station in stationList:
        print station.getFrequency()