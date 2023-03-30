# Design Patterns
### This is a collection of known design patterns and some sample code how to implement them

---

### Creational
In software engineering, creational design patterns are design patterns that deal with object creation mechanisms, trying to create objects in a manner suitable to the situation. The basic form of object creation could result in design problems or added complexity to the design. Creational design patterns solve this problem by somehow controlling this object creation.


1. [Abstract Factory](Examples/Creational/AbstractFactory)
2. [Builder](Examples/Creational/Builder)
3. [Factory Method](Examples/Creational/Factory)
4. [Pool](Examples/Creational/Pool)
5. [Prototype](Examples/Creational/Prototype)
6. [Simple Factory](Examples/Creational/SimpleFactory)
7. [Singleton](Examples/Creational/Singleton)
8. [Static Factory](Examples/Creational/StaticFactory)

### Structural
In Software Engineering, Structural Design Patterns are Design Patterns that ease the design by identifying a simple way to realize relationships between entities.

1. Adapter / Wrapper
2. Bridge
3. Composite
4. Data Mapper
5. Decorator
6. Dependency Injection
7. Facade
8. Fluent Interface
9. Flyweight
10. Proxy
11. Registry

### Behavioral
In software engineering, behavioral design patterns are design patterns that identify common communication patterns between objects and realize these patterns. By doing so, these patterns increase flexibility in carrying out this communication.

1. Chain Of Responsibilities
2. Command
3. Interpreter
4. Iterator
5. Mediator
6. Memento
7. Null Object
8. Observer
9. Specification
10. State
11. Strategy
12. Template Method
13. Visitor

### More
Others patterns...

1. Service Locator
2. Repository
3. Entity-Attribute-Value (EAV)

---

### Install
```bash
composer install
```

### Test
Start unit tests

```bash
vendor/phpunit/phpunit/phpunit
```

Start unit tests via bash file
```bash
bash test.sh
```