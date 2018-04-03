<?php

namespace app\Model\delivery\DeliveryFactory;
use app\Model\delivery\DeliveryInterface;

require_once('DeliveryInterface.php');


class DeliveryFactory implements DeliveryInterface
{
    protected $nameDel;
    protected $priceDel;
    protected $descriptionDel;

    public function __construct(string $nameDel, float $priceDel, string $descriptionDel)
    {
        $this->nameDel = $nameDel;
        $this->priceDel = $priceDel;
        $this->descriptionDel = $descriptionDel;
    }

      public function getNameDel(): string
    {
        return $this->nameDel;
    }

    public function getPriceDel(): float
    {
        return $this->priceDel;
    }

    public function getDescriptionDel(): string
    {
        return $this->descriptionDel;
    }
}