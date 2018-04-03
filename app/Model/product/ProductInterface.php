<?php
namespace app\Model\product;
interface Product
{
    public function getCategory();
    public function getName();
    public function getPrice();
}