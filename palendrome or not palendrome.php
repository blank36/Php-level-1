<html>
<body>
<form action="" method="post">
<fieldset>
<h1>Palindrome or Not Palindrome</h1>
<p>Input word: 
      <input type="text" name="Input" />
      <input type="submit" />

</fieldset>
</form>
</html>
</body>

<?php

class Palindrome{

   public   $answer = 'Palindrome';
   public   $notAnswer = 'Not a Palindrome';
   public   $input;

   public function check_palindrome() {
      if ($this->input == strrev($this->input)){
         return $this->answer;
      } else{
         return $this->notAnswer;
         }
   }
}


$palindrome = new Palindrome;
$palindrome->input = $_POST['Input'];
if(!empty($_POST['Input'])){
   if(!is_numeric($_POST['Input'])){
      echo $palindrome->check_palindrome();
   }
}
else {
   return;
}
?>