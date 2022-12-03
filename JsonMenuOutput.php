<?php
include_once 'MenuOutput.php';
class JasonMenuOutput implements MenuOutput{
    public function output($products){
        return $menu = json_encode($products);
    }

}