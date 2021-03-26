<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Classroom
 *
 * @author Абельдинов Аскар
 */
class Classroom extends Table {
    public $classroom_id = 0;
    public $name = '';
    public $acive = 1;
    function validate() {
        return false;
    }
}
