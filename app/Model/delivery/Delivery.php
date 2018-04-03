<?php

namespace app\Model\delivery\Delivery;

use app\Model\delivery\DeliveryFactory\DeliveryFactory;
use app\Model\delivery\DeliveryInterface;


require_once('DeliveryFactory.php');

class Delivery extends DeliveryFactory
{
    public function createDelivery($nameDel, $priceDel, $descriptionDel): DeliveryInterface
    {
        return new DeliveryFactory($nameDel, $priceDel, $descriptionDel);
    }

}



