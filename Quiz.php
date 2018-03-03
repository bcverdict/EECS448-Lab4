<?php
$num = 0;
if($_POST['cell']=='Mitochondria')
{
  $num++;
}
if($_POST['own']=='SnapChat')
{
    $num++;
}
if($_POST['meme']=='Ugandan Knuckles')
{
    $num++;
}
if($_POST['sued']=='Instagram')
{
    $num++;
}
if($_POST['lang']=='python')
{
    $num++;
}
$Q1 = $_POST['cell'];
$Q2 = $_POST['own'];
$Q3 = $_POST['meme'];
$Q4 = $_POST['sued'];
$Q5 = $_POST['lang'];
$T = 20;
$P = $T*$num;

echo "Question 1: What is the power house of the cell? <br>";
echo "You answered: $Q1 <br>";
echo "Correct Answer: Mitochondria <br><br>";
echo "Question 2: Which one of these companies is not already owned by the conglomerate that is facebook? <br>";
echo "You answered: $Q2 <br>";
echo "Correct Answer: SnapChat <br><br>";
echo "Question 3: What was the most famous meme of January 2018? <br>";
echo "You answered: $Q3 <br>";
echo "Correct Answer: Ugandan Knuckles <br><br>";
echo "Question 4: Which one of these companies has not been sued for stealing code? <br>";
echo "You answered: $Q4 <br>";
echo "Correct Answer: Instagram <br><br>";
echo "Question 5: Which of these languages haven't we learned in 388, 268, 368, or 448? <br>";
echo "You answered: $Q5 <br>";
echo "Correct Answer: python <br><br>";
echo "Total correct answers: $num <br>";
echo "Percentage: $P% <br>";
 ?>
