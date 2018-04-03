<?php
require __DIR__ . "/app/Model/product/FlowersFactory.php";
require __DIR__ . "/app/Model/characteristics/CharacteristicsFactory.php";

use app\Model\product\FlowersFactory\FlowersFactory;
use app\Model\characteristics\CharacteristicFactory;


$products[1] = new FlowersFactory('Квіти', 'Трояда', 30);
$products[2] = new FlowersFactory('Квіти', 'Ромашка', 50);
$products[3] = new FlowersFactory('Квіти', 'Тюльпан', 10);

$characteristics[1] = new CharacteristicFactory('Smth1', 'Smth about1', "Квіти");
$characteristics[2] = new CharacteristicFactory('Smth2', 'Smth about2', "Квіти");

