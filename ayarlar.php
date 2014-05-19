<?php
$baglanti=  mysql_connect('localhost','root','');
$db=  mysql_select_db('veritabani');

?>
<?php
@$name=$_POST["name"];
@$email=$_POST["email"];
@$subject=$_POST["subject"];
@$message=$_POST["message"];

$send =mysql_query("insert into iletisim(name,email,subject,message) values ('$name','$email','$subject','$message')");

if ($send){
	echo"iletiniz gönderildi.";
	}
	
	else{
	
	echo"iletiniz gönderilmedi";
		
	}

?>
