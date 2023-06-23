


<?php

$loginPasswordArray = array(

    "someUser1" => "111111",
    "someUser2" => "222222",
    "someUser3" => "333333"

);

    if(isset($_POST["login"]) && isset($_POST["password"])){

        foreach($loginPasswordArray as $key => $value){
            if($key == $_POST["login"] && $value == $_POST["password"]){
                echo "Hello, ".$key;
            } else {
                echo " Your login or password is wrong! ";

            }
        
        }

    } 


?>

<form method = "post">
    <input type = "text" name = "login" placeholder = "Login"> 
    <p><input type = "password" name = "password" placeholder = "Password"> </p>
    <input type = "submit">
</form>


