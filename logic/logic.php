<?php 

function hello($fname) {
  echo "$fname<br>";
}

if (isset($_POST['sub'])) {

	echo $_POST['nam'];
	echo $_POST['pass'];

	hello($_POST['pass']);
}