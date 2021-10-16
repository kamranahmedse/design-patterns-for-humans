# Tell Don't Ask

In order for us to write clean codes, this concept is very important, because it can help us learn about `The Data will be near the Behavior` or we can also say that `the Logic is near the Data`.

> Many people find tell-don't-ask to be a useful principle. One of the fundamental principles of object-oriented design is to combine data and behavior so that the basic elements of our system (objects) combine both together. [Martin Fowler]

<br>

![](https://martinfowler.com/bliki/images/tellDontAsk/sketch.png)

> Tell-Don't-Ask is a principle that helps people remember that object-orientation is about bundling data with the functions that operate on that data. It reminds us that rather than asking an object for data and acting on that data, we should instead tell an object what to do. This encourages to move behavior into an object to go with the data.

```
class AskMonitor...

  private int value;
  private int limit;
  private boolean isTooHigh;
  private String name;
  private Alarm alarm;

  public AskMonitor (String name, int limit, Alarm alarm) {
    this.name = name;
    this.limit = limit;
    this.alarm = alarm;
  }
```
…and combine this with some accessors to get at this data

```
class AskMonitor...

  public int getValue() {return value;}
  public void setValue(int arg) {value = arg;}
  public int getLimit() {return limit;}
  public String getName()  {return name;}
  public Alarm getAlarm() {return alarm;}

  /// We would then use the data structure like this

AskMonitor am = new AskMonitor("Time Vortex Hocus", 2, alarm);
am.setValue(3);

if (am.getValue() > am.getLimit()) 
  am.getAlarm().warn(am.getName() + " too high");

```
"Tell Don't Ask" reminds us to instead put the behavior inside the monitor object itself (using the same fields).

```
class TellMonitor...

  public void setValue(int arg) {
    value = arg;
    if (value > limit) alarm.warn(name + " too high");
  }

/// Which would be used like this

TellMonitor tm = new TellMonitor("Time Vortex Hocus", 2, alarm);
tm.setValue(3);
```

Resource: [TellDontAsk (Martin Fowler)](https://martinfowler.com/bliki/TellDontAsk.html)

<br>

## Articles:
* [Tell Don’t Ask Principle](https://codingjourneyman.com/2015/03/23/tell-dont-ask-principle/)
* [Solving Real World Bad Design by Applying the Tell, don't Ask Principle](https://guifroes.com/real-world-tell-dont-ask/)
