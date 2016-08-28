<?php
 

$username = $_POST ['user'];
$password = $_POST ['pass'];
 
if ($username == 'test_user' && $password == 'test_pass')
{
echo 'Welcome to the website, '. $username; 
} 
else
{
echo 'Sorry, the username or password is invalid.';
}
?>

