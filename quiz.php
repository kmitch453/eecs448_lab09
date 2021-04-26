<html>
<body>
<?php
$answer1 = $_POST['color'];
$answer2 = $_POST['IronMan'];
$answer3 = $_POST['element'];
$answer4 = $_POST['video'];
$answer5 = $_POST['class'];
$total=0;
echo "Which color in the light spectrum has the shortest wavelength? <br>Your Answer: $answer1 <br>Correct Answer: purple<br><br>";
echo "Who plays Iron Man in the Marvel Cinematic Universe? <br>Your Answer: $answer2 <br>Correct Answer: Robert Downey Jr.<br><br>";
echo "What is not an elemental nation in Avatar: The Last Airbender? <br>Your Answer: $answer3 <br>Correct Answer: light<br><br>";
echo "What videogame is Tracer from? <br>Your Answer: $answer4 <br>Correct Answer: Overwatch<br><br>";
echo "What class is this project for? <br>Your Answer: $answer5 <br>Correct Answer: EECS 448<br><br>";

if($answer1=="purple"){
  $total+=1;
}
if($answer2=="Robert Downey Jr"){
  $total+=1;
}
if($answer3=="light"){
  $total+=1;
}
if($answer4=="Overwatch"){
  $total+=1;
}
if($answer5=="EECS 448"){
  $total+=1;
}

if($total==0){
  echo "Score: 0%";
}else if($total==1){
  echo "Score: 20%";
}else if($total==2){
  echo "Score: 40%";
}else if($total==3){
  echo "Score: 60%";
}else if($total==4){
  echo "Score: 80%";
}else if($total==5){
  echo "Score: 100%";
}else{
  echo "Score: Unknown";
}
?>
</body>
</html>
