<?php

class User implements ProductInterface
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name=$name;
        $this->email=$email;
    }

    use ShoppingCart;
    use Order;
}

Interface ProductInterface
{
   public function __construct($name, $price);
}

class Product implements ProductInterface
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name=$name;
        $this->price=$price;
    }
}

Trait ShoppingCart
{
    public $basket = [];

    public function addProduct (ProductInterface $product)
    {
        $this->basket[]=$product;
    }

    public function deleteProduct (ProductInterface $product)
    {
        //удалилось из корзины
    }

    public function getProducts ()
    {
        foreach ($this->basket as $product)
        {
            echo "В корзине имеется товар: ".$product->name." стоимостью: ".$product->price;
        }
    }
}

Trait Order
{
    public $shoppingcart;

    public function makeOrder ()
    {
        if ($this->shoppingcart->basket != NULL)
        {
            $this->shoppingcart->getProducts();
            //далее функции для продолжения оформления и оплаты
        }
        else
        {
            echo "Корзина пуста. Для оформления заказа пополните корзину.";
        }
    }
}

$Ya = new User("Яна", "yana@mail.ru");

$Tovar1 = new Product("платье", 450);
$Tovar2 = new Product("туфли", 550);

$Ya->addProduct($Tovar1);
$Ya->addProduct($Tovar2);