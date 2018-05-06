<?php
	
   if(!empty($_POST['firstname'])){
   echo("First name: " .ucwords(strtolower($_POST['firstname'])). "<br />\n");}

   else {
   		echo "<script>
		alert('Plss Enter your First Name');
		window.location.href='activity112611.php';
		</script>";}
   		
   if(preg_match("/^[a-zA-Z ]*$/", $_POST['firstname'])){}
   else{
   	echo "<script>
		alert('No number and special Character');
		window.location.href='activity112611.php';
		</script>";}
//end of first name
   if(!empty($_POST['MI'])){
   echo("Middle Name: " .ucwords(strtolower($_POST['MI'])). "<br />\n");
   }

   else {
   echo"Middle Name:<br />";}

   if(preg_match("/^[a-zA-Z ]*$/", $_POST['MI'])){}
   else{
   	echo "<script>
		alert('No number and special Character');
		window.location.href='activity112611.php';
		</script>";}
//end of middle name

   if(!empty($_POST['lastname'])){
   echo("Last name: " .ucwords(strtolower($_POST['lastname'])). "<br />\n");}

   else {
   		echo "<script>
		alert('Plss Enter your Last Name');
		window.location.href='activity112611.php';
		</script>";}

  if(preg_match("/^[a-zA-Z ]*$/",$_POST['lastname'])){}
   else{
   	echo "<script>
		alert('No number and special Character');
		window.location.href='activity112611.php';
		</script>";}
//end of last name
   
   if(!empty($_POST['gender'])){
   echo("Gender: " .$_POST['gender']. "<br />\n");}

   else {
   		echo "<script>
		alert('Plss Enter your Gender');
		window.location.href='activity112611.php';
		</script>";}
//end of gender

   echo "Skills:";
   if(!empty($_POST['sk'])){
   foreach($_POST['sk'] as $selected)
   echo $selected." ";
   }
   else{
   		echo "<script>
		alert('Plss Enter your Skills atleast 1');
		window.location.href='activity112611.php';
		</script>";}
//end of skills
?>