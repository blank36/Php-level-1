
<html>
<body>
<form action="" method="post">
<fieldset>
<h1>Leap Year or Not</h1>
<p>Input number: 
      <input type="text" name="Leapyear" />
      <input type="submit" />

</fieldset>
</form>
</html>
</body>



<?php
abstract class Leapyear{

   public $input;
   public $answer = 'Leap year';
   public $notAnswer = 'Not Leapyear';

   public function LY(){
      if( (0 == $this->input % 4) and (0 != $this->input % 100) or (0 == $this->input % 400) ){
               return $this->answer;
            } else {
               return $this->notAnswer;     
         }
      }
}

class LYA extends Leapyear{
   public function LY(){
      return parent::LY();
   }
}

$leapyear = new LYA;
$leapyear->input = $_POST['Leapyear'];
if (!empty($_POST['Leapyear']))  {
   if(is_numeric($_POST['Leapyear'])){
      echo $leapyear->LY();
      }  
}

else {
   echo "";
} 


?>