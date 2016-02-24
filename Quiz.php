
<?php
echo "<h2>Your Score:</h2>";
echo "<br>";
//$q1=0;
$score =0;

$q1a = isset($_POST["a1"]);
  if($q1a){echo "<br><br>Question 1:<br> You Answered: 1<br>Correct Answer: 4";}
$q1b = isset($_POST["a2"]);
  if($q1b){echo "<br><br>Question 1:<br> You Answered: 2<br>Correct Answer: 4";}
$q1c = isset($_POST["a3"]);
  if($q1c){echo "<br><br>Question 1:<br> You Answered: 3<br>Correct Answer: 4";}
$q1d = isset($_POST["a4"]);
  if($q1d){echo "<br><br>Question 1:<br> You Answered: 4<br>Correct Answer: 4";}

$q2a = isset($_POST["b1"]);
  if($q2a){echo "<br><br>Question 2:<br> You Answered: 1<br>Correct Answer: 4";}
$q2b = isset($_POST["b2"]);
  if($q2b){echo "<br><br>Question 2:<br> You Answered: 2<br>Correct Answer: 4";}
$q2c = isset($_POST["b3"]);
  if($q2c){echo "<br><br>Question 2:<br> You Answered: 3<br>Correct Answer: 4";}
$q2d = isset($_POST["b4"]);
  if($q2d){echo "<br><br>Question 2:<br> You Answered: 4<br>Correct Answer: 4";}

  $q3a = isset($_POST["c1"]);
    if($q3a){echo "<br><br>Question 3:<br> You Answered: 1<br>Correct Answer: 4";}
  $q3b = isset($_POST["c2"]);
    if($q3b){echo "<br><br>Question 3:<br> You Answered: 2<br>Correct Answer: 4";}
  $q3c = isset($_POST["c3"]);
    if($q3c){echo "<br><br>Question 3:<br> You Answered: 3<br>Correct Answer: 4";}
  $q3d = isset($_POST["c4"]);
    if($q3d){echo "<br><br>Question 3:<br> You Answered: 4<br>Correct Answer: 4";}

    $q4a = isset($_POST["d1"]);
      if($q4a){echo "<br><br>Question 4:<br> You Answered: 1<br>Correct Answer: 4";}
    $q4b = isset($_POST["d2"]);
      if($q4b){echo "<br><br>Question 4:<br> You Answered: 2<br>Correct Answer: 4";}
    $q4c = isset($_POST["d3"]);
      if($q4c){echo "<br><br>Question 4:<br> You Answered: 3<br>Correct Answer: 4";}
    $q4d = isset($_POST["d4"]);
      if($q4d){echo "<br><br>Question 4:<br> You Answered: 4<br>Correct Answer: 4";}

      $q5a = isset($_POST["e1"]);
        if($q5a){echo "<br><br>Question 5:<br> You Answered: 1<br>Correct Answer: 4";}
      $q5b = isset($_POST["e2"]);
        if($q5b){echo "<br><br>Question 5:<br> You Answered: 2<br>Correct Answer: 4";}
      $q5c = isset($_POST["e3"]);
        if($q5c){echo "<br><br>Question 5:<br> You Answered: 3<br>Correct Answer: 4";}
      $q5d = isset($_POST["e4"]);
        if($q5d){echo "<br><br>Question 5:<br> You Answered: 4<br>Correct Answer: 4";}

if($q1d)
{
  $score ++;
}
if($q2d)
{
  $score ++;
}
if($q3d)
{
  $score ++;
}
if($q4d)
{
  $score++;
}
if($q5d)
{
  $score ++;
}
$percent=$score/5*100;

echo "<br><br>your total is: ".$score."<br><br>your score is: ".$percent."%";

?>
