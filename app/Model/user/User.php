<?php
namespace user;
require_once('UsI.php');

class Buy implements User
{
    public function buyer()
    {
        echo 'Покупець!';
    }

    public function accept(Role $operation)
    {
        $operation->visitBuy($this);
    }
}

class Admin implements User
{
    public function admins()
    {
        echo 'Адмін!';
    }

    public function accept(Role $operation)
    {
        $operation->visitAdmin($this);
    }
}

class Guest implements User
{
    public function guests()
    {
        echo 'Гість';
    }

    public function accept(Role $operation)
    {
        $operation->visitGuest($this);
    }
}