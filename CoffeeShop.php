<?php

namespace App;
class CoffeeShop{
    protected $products =[];
    public function addProducts($product =[]){
        $this->products=$product;
    }
    public function getProducts(){
        return $this->products;
    }
    public function removeProduct($id){
        //logica para borrar producto
    }
    public function addProductToCart($id,$quantity){
        //logica para agregar al carrito
    }
    public function getCartTotal():void{
        //logica para generar el total a pagar del carrito
    }
    public function viewMenu(){
        $menu='';
    }
}
