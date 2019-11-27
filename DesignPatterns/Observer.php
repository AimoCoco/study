<?php
/**
 * 观察者模式 (Observer)  又叫做发布-订阅（Publish/Subscribe）模式
 *
 * 含义：定义对象间的一种一对多依赖关系，使得每当一个对象状态发生改变时，其相关依赖对象皆得到通知并被自动更新。
 *
 * 组成：Subject: 抽象通知类，他把所有对观察者对象的引用保存在一个聚集里
 *      ConcreteSubject: 具体通知者
 *      Observer: 抽象观察者
 *      ConcreteObserver: 具体观察者，保存一个指向具体通知者的引用
 */

namespace Observer;

//抽象通知类
abstract class Subject
{
    private $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    //增加观察者
    public function Attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    //移除观察者
    public function Detach(Observer $observer)
    {
        $newObservers = [];
        foreach ($this->observers as $obs) {
            if ($obs !== $observer) {
                $newObservers[] = $obs;
            }
        }
        $this->observers = $newObservers;
    }
    //通知
    public function Notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

//抽象观察者
abstract class Observer
{
    public abstract function update(); //此方法叫更新方法
}

//具体通知者
class ConcreteSubject extends Subject
{
    //具体被观察者状态
    private $subjectState;

    public function getSubjectState()
    {
        return $this->subjectState;
    }
    public function setSubjectState($state)
    {
        $this->subjectState = $state;
    }
}

//具体观察者
class ConcreteObserver extends Observer
{
    private $name;
    private $obserberState;
    /** @var ConcreteSubject $subject */
    private $subject;

    public function __construct(ConcreteSubject $subject, String $name)
    {
        $this->subject = $subject;
        $this->name = $name;
    }

    public function update()
    {
        $this->obserberState = $this->subject->getSubjectState();
        echo sprintf('观察者%s的新状态是%s', $this->name, $this->obserberState);
    }

    public function getSubject()
    {
        return $this->subject;
    }
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
}

//客户端
$s = new ConcreteSubject();
$s->Attach(new ConcreteObserver($s, 'X'));
$s->Attach(new ConcreteObserver($s, 'Y'));
$s->Attach(new ConcreteObserver($s, 'Z'));

$s->setSubjectState("ABC");
$s->Notify();
