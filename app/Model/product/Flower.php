<?php

namespace app\Model\product\Flower;

use app\Model\product\CharacteristicsFactory\CharacteristicFactory;
use app\Model\product\Product;


require_once('ProductInterface.php');


class Flower implements Product
    {
        protected $category;
        protected $name;
        protected $price;


        public function __construct($category, $name, $price)
        {
            $this->category = $category;
            $this->name = $name;
            $this->price = $price;

        }

        public function getCategory()
        {
            return $this->category;
        }

        public function getName()
        {
            return $this->name;
        }
        public function getPrice()
        {
            return $this->price;
        }
    }
