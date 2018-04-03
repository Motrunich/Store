<?php

namespace app\Model\product\FlowersFactory;
use app\Model\product\Flower\Flower;



require_once('Flower.php');


class FlowersFactory extends Flower
{
    public function createFlowers($category, $name, $price)
    {
        return new Flower($category, $name, $price);
    }
}

$products[1] = new FlowersFactory('Квіти', 'Трояда', 30);

