###设计模式与原则

#### 背景
编程初学者往往碰到问题时直觉地用计算机能够理解的逻辑来描述和表达待解决的问题及具体的求解过程。
这其实是用计算机的方式去思考，本身没有错，但这样的思维却使得我们的程序只为满足实现当前的需求，
程序不容易维护，不容易扩展，更不容易复用。从而达不到高质量代码的要求。

解决方法：使用面向对象的分析设计编程思想，通过封装、继承、多态把程序的耦合度降低，用设计模式
使得程序更加灵活，容易修改，并且易于复用。

#### 用于生成对象的模式
* 单例(Singleton)模式：生成一个且只生成一个对象实例的特殊类。
* 工厂方法(Factory Method)模式：构建创建者类的继承层级。
* 抽象工厂(Abstract Factory)模式：功能相关产品的创建。
* 原型(Prototype)模式：使用克隆来生成对象。

#### 用于组织对象和类的模式
* 组合(Composite)模式：将一组对象组合为可像单个对象一样被适用的结构。
* 装饰(Decorator)模式：通过在运行时合并对象来扩展功能的一种灵活机制。
* 外观(Facade)模式：为复杂或多变的系统创建一个简单的接口。

#### 面向任务的模式
* 解释器(Interpreter)模式：构造一个可以用于创建脚本化应用的迷你语言解释器。
* 策略(Strategy)模式：在系统中定义算法并以它们自己的类型封装。
* 观察者(Observer)模式：创建依赖关系，当有系统事件发生时通知观察者对象。
* 访问者(Visitor)模式：在对象树的所有节点上应用操作。
* 命令(Command)模式：创建可被保存和传送的命令对象。

#### 企业模式

#### 数据库模式