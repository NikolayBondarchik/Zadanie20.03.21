<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Абельдинов Аскар
 */
class Student extends Table {
    public $user_id = 0;
    public $gruppa_id = 0;
    public $num_zach = 0;
    function validate() {
        if (!empty($this->otdel_id)) {
        return true;
    }
    return false;
    }
}
