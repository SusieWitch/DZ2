<?php
session_start();

$credentials = array(
	'ivanova' => 'anna'
);

if (isset($_GET['login']) && isset($_GET['password'])) {
	if (isset($credentials[$_GET['login']]) && $credentials[$_GET['login']] == $_GET['password']) {
		$_SESSION['login'] = $_GET['login'];
        $person = array("lastname"=>$_GET['lastname'],"firstname"=>$_GET['firstname'],"login"=>$_GET['login'],"password"=>$_GET['password']);
        $_SESSION['fullname'] = $person;
        header('Location: person.php');
	} else {
        echo 'Invalid credentials';
    }
} else {
    header('Location: index.php');
}

