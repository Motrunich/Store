<?php
namespace user;

interface Role

{
    public function visitBuy(Buy $buyer);
    public function visitAdmin(Admin $admin);
    public function visitGuest(Guest $guest);
}