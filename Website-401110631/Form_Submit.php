<?php

if( isset($_POST["smit"])){
$firstname = $_POST["Input_FirstName"];
$lastname = $_POST["Input_LastName"];
$email = $_POST["Input_Email"];
$text = $_POST["Message"];

chdir("Messages");

$i=0;
while(1){
    $i=$i+1;
    if (file_exists("$i.txt")){
         continue;
    }
    else{
        $file = fopen("$i.txt","w");
        fwrite($file,"Name : $firstname $lastname \nEmail : $email \nMessage : $text");
        fclose($file);
        break;
    }
}


}

?>
