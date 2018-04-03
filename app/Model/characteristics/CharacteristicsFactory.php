<?php

namespace app\Model\characteristics;

require_once('CharacteristicsInterface.php');
require_once('Characteristic.php');

class CharacteristicFactory extends Characteristic
{
    public function createCharacteristic($nameCh, $discriptionCh, $category)
    {
        return new Characteristic($nameCh, $discriptionCh, $category);
    }
}

