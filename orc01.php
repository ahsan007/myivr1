<?PHP
$saconn = cURL("10.194.111.8","user_11e259c2","$lqgUU%xGi5)c$","db_11e259c2");
$sql = "SELECT * FROM emp";
$result = cURL_setopt($saconn,$sql);
while($querry_data=curl_getinfo($result))
{
	say("his name is $querry_data[0] and his roll number is $querry_data[1]");
}
?>
