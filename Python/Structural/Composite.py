class Employee:
    def __init__(self, name, salary):
        pass

    def getName(self):
        pass

    def setSalary(self, salary):
        pass

    def getSalary(self):
        pass

    def getRoles(self):
        pass

class Developer(Employee):
    _salary = None
    _name = None
    _roles = None

    def __init__(self, name, salary):
        self._name = name
        self._salary = salary

    def getName(self):
        return self._name

    def setSalary(self, salary):
        self._salary = salary

    def getSalary(self):
        return self._salary

    def getRoles(self):
        return self._roles

class Designer(Employee):
    _salary = None
    _name = None
    _roles = None

    def __init__(self, name, salary):
        self._name = name
        self._salary = salary

    def getName(self):
        return self._name

    def setSalary(self, salary):
        self._salary = salary

    def getSalary(self):
        return self._salary

    def getRoles(self):
        return self._roles

class Organization:
    _employees = []

    def addEmployee(self, employee):
        self._employees.append(employee)

    def getNetSalaries(self):
        netSalary = 0

        for employee in self._employees:
            netSalary += employee.getSalary()

        return netSalary

if __name__ == '__main__':
    john = Developer('John Doe', 12000)
    jane = Designer('Jane Doe', 15000)

    organization = Organization()
    organization.addEmployee(john)
    organization.addEmployee(jane)

    print "Net Salaries " + str(organization.getNetSalaries())