<?php

if(isset($_POST["add"])){
    $result = $_POST['number_one'] +  $_POST['number_two'];
} else if(isset($_POST["sub"])){
    $result = $_POST['number_one'] -  $_POST['number_two'];
} else if(isset($_POST["mult"])){
    $result = $_POST['number_one'] *  $_POST['number_two'];
} else if(isset($_POST["div"])){
    $result = $_POST['number_one'] /  $_POST['number_two'];
} else if(isset($_POST["cancel"])){
    $result = '0';
} else {
    $result = '0';
}
