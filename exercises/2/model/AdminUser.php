<?php

// AdminUser subclass of User
class AdminUser extends User
{
    public function getSecretMessage()
    {
        return "This is a secret message only for admin users!";
    }
}
