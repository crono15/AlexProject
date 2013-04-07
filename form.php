<?php

if (!empty($_GET)) {
	if ($_GET["name"] != "Alex Petersen")
	{
		header("Location: form.php");
		echo "Hello " . $_GET["name"];
	}
	else
	{
		echo "Hey, " .$_GET["name"]. "You are staying on this page hehe";
	}
}
//header("Location: index.php");
//exit;
$pageTitle = "Login Page";
include("inc/header.php");

?>


Here is the form page.

<form method="get"> <!--action="form.php">-->
<p><label for="name">Name</label><input type="text" name="name"></p>
<p><label for="age">Age</label><input type="text" name="age"></p>
	<input type="submit" value="Send">
</form>

<?php

include("inc/footer.php");

//if ($_GET["name"] == "Alex Petersen")
//{
//		echo var_dump($_GET);//
//		header("Location: index.php?test=asdfa");
//		//header("Location: contact.php?status=thanks");
//		exit;
//}
//else
//{
//
//	echo "Got to else statement";
//	//header("Location: form.php");
//	exit;
//}


?>