<?php

namespace service;

require_once('ServiceInterface.php');

class FlowerDelivery implements ServiceInterface
{
    public function getCost()
    {
        return 50.7;
    }

    public function getDescription()
    {
        return 'Доставка квітів';
    }
}