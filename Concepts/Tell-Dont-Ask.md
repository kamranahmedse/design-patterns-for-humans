# Tell Don't Ask

In order for us to write clean codes, this concept is very important, because it can help us learn
about `The Data will be near the Behavior` or we can also say that `The Logic is near the Data`.

> Many people find tell-don't-ask to be a useful principle. One of the fundamental principles of Object oriented design is to combine data and behavior so that the basic elements of our system (objects) combine both together. [Martin Fowler]


![](https://martinfowler.com/bliki/images/tellDontAsk/sketch.png)

> Tell-Don't-Ask is a principle that helps people remember that object-orientation is about bundling data with the functions that operate on that data. It reminds us that rather than asking an object for data and acting on that data, we should instead tell an object what to do. This encourages to move behavior into an object to go with the data.

### Example 1

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

### Example 2

When we talk about the Tell, don't ask concept, we bundle data and behavior; in this case, decoupling behavior from
Model or Entity will result in anemic models / entities. Let's say we have a platform with user ratings, and we want to
increase rates.

```PHP
$currentUser = User::findCurrentUser()

// After an event we want to create a rate history and increase the user's rate
Rate::eventDispatcher(CompletingProfile, +3)

$currentRate = $currentUser->rates
$newRate = $currentRate + 3
$currentUser->rates = $newRate 
$currentUser->save()
```

In the above code example, we decoupled the behavior (Rate increasing) from the data which is violate the principle and
makes our Model anemic. To fix the problem:

```PHP
$currentUser = User::findCurrentUser()

// After an event we want to create a rate history and increase the user's rate
Rate::eventDispatcher(CompletingProfile, +3)

$currentUser->increateRate(+3)
```

**Notice**: Understanding data cohesion is essential to building a rich model or entity. Otherwise, models become
dependent on each other.

### Example 3

Suppose we have a simple system where users can place orders, and we want to notify customers about their order status.
We'll focus on notifying customers without violating the Tell, don't ask principle.
> This design follows the Tell, don't ask principle by encapsulating both data and behavior within the Order class while avoiding tight coupling between the Order and Customer classes.

```Python

class Order:
    def __init__(self, order_id, status):
        self.order_id = order_id
        self.status = status

    def update_status(self, new_status, event_handler):
        self.status = new_status
        event_handler.notify_customer(self)


class Customer:
    def __init__(self, customer_id):
        self.customer_id = customer_id

    def receive_notification(self, order):
        print(f"Customer {self.customer_id} received notification: Order {order.order_id} status updated: {order.status}")


class EventNotifier:
    def notify_customer(self, order):
        # Code to notify the customer about the order status
        customer = self.get_customer_by_order(order)
        if customer:
            customer.receive_notification(order)
        else:
            print(f"No customer found for Order {order.order_id}")

    def get_customer_by_order(self, order):
        # Code to retrieve the customer associated with the order
        # Return a Customer object or None


# Create instances
customer = Customer(customer_id=123)
event_notifier = EventNotifier()
order = Order(order_id=1, status="Processing")

# Simulating order status update and notification
order.update_status("Shipped", event_notifier)

```

In this example:

1. The `Order class` has an `update_status` method that takes an `event_handler` parameter. This parameter is an
   instance of **EventNotifier**.

2. The `EventNotifier` class is responsible for handling notifications and retrieving customer information. It contains
   the logic to find the appropriate customer for an order and notify them.

3. The Customer class remains decoupled from the Order class, and the Order class does not have direct knowledge of
   customers.

4. When the `update_status` method is called on an order, it delegates the responsibility of notifying the customer to
   the EventNotifier class, which in turn finds the appropriate customer and notifies them.

This design allows you to **notify customers without tightly coupling the order and customer classes** while adhering to
the Tell, don't ask principle. The event-based approach enables **loose coupling between components, promoting better
maintainability and extensibility**.

## Articles:

* [Tell Don’t Ask Principle](https://codingjourneyman.com/2015/03/23/tell-dont-ask-principle/)
* [Solving Real World Bad Design by Applying the Tell, don't Ask Principle](https://guifroes.com/real-world-tell-dont-ask/)
