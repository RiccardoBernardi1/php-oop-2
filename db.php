<?php
$categories=[
    $dog=new Category("Dog","<i class=\"fa-solid fa-dog\"></i>"),
    $cat=new Category("Cat","<i class=\"fa-solid fa-cat\"></i>"),
];
$products=[
    new Accessory("Bowl",12.33, [$dog,$cat],["Inox Steel"],"Diameter: 30 cm"),
    new Accessory("Leash",15.99, [$dog],["Leather"],"Length: 2 m"),
    new Toy("Peluche",7.99,[$dog],["Sponge"]),
    new Toy("Rolling Catnip Ball",20.99,[$cat],["Catnip"]),
    new Food("Dog Treats",5.99,[$dog],["Salmon"],"22/07/25"),
    new Food("Kibble for Cats",5.99,[$cat],["Chicken","Pork","Vegetables"],"02/12/23")
];