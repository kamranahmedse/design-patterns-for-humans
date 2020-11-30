<?php

namespace designPatternsForHumans\behavioral\Iterator;

use Countable;
use Iterator;

class StationList implements Countable, Iterator
{

    protected $stations = [];
    protected $counter;

    public function addStation(RadioStation $station)
    {
        $this->stations[] = $station;
    }

    public function removeStation(RadioStation $toRemove)
    {
        $toRemoveFrequency = $toRemove->getFrequency();
        $this->stations = array_filter($this->stations, function (RadioStation $station) use ($toRemoveFrequency) {
            return $station->getFrequency() !== $toRemoveFrequency;
        });
    }

    public function current()
    {
        return $this->stations[$this->counter];
    }

    public function next()
    {
        $this->counter++;
    }

    public function key()
    {
        return $this->counter;
    }

    public function valid()
    {
        return isset($this->stations[$this->counter]);
    }

    public function rewind()
    {
        // When using a numbered array like we do with $counter, we need to reset
        // the array as well, otherwise the removed station will wreak havoc with
        // our iteration, because the value of removed station at position X will
        // be NULL;
        $this->stations = array_values($this->stations);
        return $this->counter = 0;
    }

    public function count()
    {
        return count($this->stations);
    }
}
