<?php
    $con = new mysqli("localhost","root","","final");
    if(!$con){
    	die($con->error);
    }

    $query = "SELECT * FROM users";
    $res = $con->query($query);
    $count = 0;
    while($row=$res->fetch_array()){
      if($_POST['name']==$row['name']){
        $count++;
      }
    }

    if($_POST['password']==$_POST['second']){
        if ($_POST['name']=="" || $_POST['surname']=="" || $_POST['email']=="" || $_POST['password']==""||$_POST['second']==""){
    	   echo "Заполните все данные";
        }
        else if($count!=0){
        echo "Такой логин уже зарегестрирован";
        }
        else if(strlen($_POST['name'])<=5 || strlen($_POST['surname'])<=5 || strlen($_POST['email'])<=5 || strlen($_POST['password'])<=5){
        echo "Длина не всех полей больше 5";
        }
        else if($_POST['name']==$_POST['password']){
        echo "Логин и пароль похожи";
        }
        else{
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $query = "INSERT INTO users VALUES (null, '$name', '$surname', '$email', '$password','0')";
            if($con->query($query)){
                echo "Регистрация прошла успешно";
            }
        }
    }else{
        echo "Пароли не совпадают";
    }
 ?>
