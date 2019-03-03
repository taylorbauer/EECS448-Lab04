


<html>
<head>
<link href="myStyle.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<title>Q U I Z T I M E</title>
</head>
<body>
<h1 class="center">RESULTS</h1>

<?php

  $score = 0;
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
  }
  if ($q1 == "The College Dropout")
  {
    $score += 20;
  }
  if ($q2 == "Kanye loves Kanye")
  {
    $score += 20;
  }
  if ($q3 == "Wiz Khalifa")
  {
    $score += 20;
  }
  if ($q4 == "Water bottle")
  {
    $score += 20;
  }
  if ($q5 == "Poop")
  {
    $score += 20;
  }

echo "<h3>Question 1: What is the name of Kanye West's debut album?</h3>";
echo "<p>Your answer: " . $q1;
echo "<br>Correct answer: The College Dropout";

echo "<h3>Question 2: Finish the lyric: \"And I love you like...\"</h3>";
echo "<p>Your answer: " . $q2;
echo "<br>Correct answer: Kanye loves Kanye";

echo "<h3>Question 3: Who was Kanye addressing when he twieeted: \"maybe I couldn't be skinny an dtall but I'll settle for being the greatest artist of all time as a consolation\"?</h3>";
echo "<p>Your answer: " . $q3;
echo "<br>Correct answer: Wiz Khalifa";

echo "<h3>Question 4: Fill-in-the-blank on this famous Kanye tweet: \"I hate when I'm on a flight and I wake up with a _____ next to me like oh great now I gotta be responsible for this _____\"</h3>";
echo "<p>Your answer: " . $q4;
echo "<br>Correct answer: Water bottle";

echo "<h3>Question 5: Finisy the lyric: \"Poopy-di scoop / Scoop- diddy-whoop / Whoop-di-scoop-di-\"</h3>";
echo "<p>Your answer: " . $q5;
echo "<br>Correct answer: Poop";

echo "<h3>Total Score: " . $score . "%<h3>";

?>

</html>
