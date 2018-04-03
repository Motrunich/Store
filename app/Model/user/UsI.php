<?php

namespace user;

interface User
{
    public function accept(Role $operation);
}