<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Bird{
    public $actionName = 'I can fly';
    public function fly() {
        return $this->actionName;
    }
}

class Peguin extends Bird{
    public $actionName = 'I cannot fly';
    
    public function fly() {
        return $this->actionName;
    }
    public function &flyByRef() {
        return $this->actionName;
    }
}

$peguin = new Peguin();
$bird = new Bird;
$action = &$peguin->flyByRef();
$action = $bird->fly();

echo $peguin->fly();

