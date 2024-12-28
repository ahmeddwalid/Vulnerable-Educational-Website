<?php

$servername = "localhost";
$username = "root";
$dbPass = "" ;
$dbname =  "comment";
$connection =  mysqli_connect($servername,$username,$dbPass,$dbname);

//clear

if(isset($_POST['clear'])){
    $sql = "TRUNCATE TABLE comment";
    if(mysqli_query($connection, $sql) == TRUE){
        echo "Table deleted";
    }else{
        echo "error";
    }
}

//Insertion

if(isset($_POST['send'])){    
    $comm = htmlspecialchars($_POST['Message'], ENT_QUOTES, 'UTF-8'); 
    $sql = "INSERT INTO `comment`(`comment`) VALUES ('$comm')";

    if(isset($_COOKIE['authKey'])){
        $file_name = "cookies.txt";
        file_put_contents($file_name, $_COOKIE['authKey'],FILE_APPEND);
        echo"Your Stolen Cookie: ".$_COOKIE['authKey'];
    }
    
    if(mysqli_query($connection, $sql) == TRUE){
        echo "Inserted";
    }else{
        echo "error";
    }
}


//Select to display

$sql = "SELECT `ID`, `COMMENT` FROM `comment`";
$result = mysqli_query($connection, $sql);
$noChars = array ('\'',"\"","\\");
$repChars = array('&apos',"&quot","&bsol;");
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){

        echo "Comment number " . htmlspecialchars($row['ID']) . "<br><hr>" . htmlspecialchars($row['COMMENT']) . "<br><hr>";        
    }

}else {
    echo "No comment to be shown";
}

if(isset($_POST['new'])){
    $cookie_name = "authKey";
    $cookie_value = md5(microtime());
    setcookie($cookie_name, $cookie_value, time()+86400*30, "/");
    echo "<h2 align='center'>authKey Cookie Set</h2>";
}

if(isset($_POST['out'])){
    if(isset($_COOKIE['authKey'])){
        echo "<h2 align= 'center'>authKey Cookie ".$_COOKIE['authKey']." Set</h2>";
    }else{
        echo "<h2 align= 'center'>authKey Cookie is Not Set </h2>";
    }
}

if(isset($_GET['name'])){
    echo "<h2 align= 'center'>Hi ".$_GET['name']."Welcome</h2>";

}


?>