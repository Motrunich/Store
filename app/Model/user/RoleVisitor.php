<?php

namespace user;
require_once('Role.php');
require_once('User.php');

class Roles implements Role
{
    public function visitBuy(Buy $buyer)
    {
        $buyer->buyer();
    }

    public function visitAdmin(Admin $admins)
    {
        $admins->admins();
    }

    public function visitGuest(Guest $guests)
    {
        $guests->guests();
    }
}

$buyer = new Buy();
$admins = new Admin();
$guests = new Guest();

$roles = new Roles();
//
$buyer->accept($roles);
$admins->accept($roles);
$guests->accept($roles);


