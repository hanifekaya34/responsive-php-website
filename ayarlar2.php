<?php
$baglanti=  mysql_connect('localhost','root','');
$db=  mysql_select_db('veritabani');

?>
<?php
@$username=$_POST["username"];
@$name=$_POST["name"];
@$lastname=$_POST["lastname"];
@$email=$_POST["email"];



$send =mysql_query("insert into uye(username,name,lastname,email) values ('$username','$name','$lastname','$email')");

if ($send){
	echo"Kaydınız Gerçekleşti";
	}
	
	else{
	
	echo"Kaydınız Gerçekleştirilemedi";
		
	}

?>
