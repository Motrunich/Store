<?php

namespace user;


// Defining interface

abstract class InputValue
{
    private $_value;

    public function __construct($value)
    {
        $this->set($value);
    }

    public function set($value)
    {
        $this->_value = $value;
    }

    public function get()
    {
        return $this->_value;
    }

    public abstract function acceptVisitor(Visitor $visitor);
}




class SingleInputValue extends InputValue
{
    public function acceptVisitor(Visitor $visitor)
    {
        $visitor->visitSingleInputValue($this);
    }
}


class MultipleInputValue extends InputValue
{
    public function acceptVisitor(Visitor $visitor)
    {
        $visitor->visitMultipleInputValue($this);
    }
}


interface Visitor
{
    public function visitSingleInputValue(SingleInputValue $inputValue);
    public function visitMultipleInputValue(MultipleInputValue $inputValue);
}

class IntFilter implements Visitor
{
    public function visitSingleInputValue(SingleInputValue $inputValue)
    {
        $inputValue->set((int) $inputValue->get());
    }

    public function visitMultipleInputValue(MultipleInputValue $inputValue)
    {
        $newValues = array();
        foreach ($inputValue->get() as $index => $value) {
            $newValues[$index] = (int) $value;
        }
        $inputValue->set($newValues);
    }
}


class AscendingSort implements Visitor
{

    public function visitSingleInputValue(SingleInputValue $inputValue)
    {
    }

    public function visitMultipleInputValue(MultipleInputValue $inputValue)
    {
        $values = $inputValue->get();
        asort($values);
        $inputValue->set($values);
    }
}


$userId = new SingleInputValue("42");
$categories = new MultipleInputValue(array('hated' => 16, 'ordinary' => 23, 'preferred' => 15));
$userId->acceptVisitor(new IntFilter);
var_dump($userId->get());
$categories->acceptVisitor(new AscendingSort);
var_dump($categories->get());