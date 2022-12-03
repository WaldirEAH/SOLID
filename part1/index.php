<?php
include_once 'Menu.php';
include_once'CoffeeShop.php';
include_once 'TextMenuOutput.php';
$products =[
    ['id'=>1,'name'=>'Negro','price'=>25],
    ['id'=>2,'name'=>'Latte','price'=>35],
    ['id'=>3,'name'=>'Capuchino','price'=>45]
];

$shop = new CoffeeShop();

$shop->addProducts($products);
$menu = new Menu();
echo $menu->view($shop->getProducts(),new TextmenuOutput());

?>