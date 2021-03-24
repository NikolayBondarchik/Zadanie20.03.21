<?php

class user extends Table{
    public $user_id = 0;
    public $lastname = '';
    public $firstname = '';
    public $patronomic = '';
    public $login = '';
    public $pass = '';
    public $gender_id = 0;
    public $birthday = date;
    public $role_id = 0;
    public $active = 1;
    function validate() {
        return false;
    }
}

