<?php
$categories=[
    $dog=new Category("Dog","<i class=\"fa-solid fa-dog\"></i>"),
    $cat=new Category("Cat","<i class=\"fa-solid fa-cat\"></i>"),
];
$products=[
    new Product("Ciotola",12.33, $categories[0])
];