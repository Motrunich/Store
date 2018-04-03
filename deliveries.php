<?php

require __DIR__ . "/app/Model/delivery/Delivery.php";
use app\Model\delivery\Delivery\Delivery;


$delivery[1] = new Delivery('Укрпошта', 10, 'Як повезе');
$delivery[2] = new Delivery('Нова Пошта', 20, 'За 1 день');
$delivery[3] = new Delivery('Курє`р', 30, 'За 2 дні');