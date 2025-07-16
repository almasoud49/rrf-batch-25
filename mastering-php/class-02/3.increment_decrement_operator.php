<?php
//Pre-Increment
$x = 5;
echo  ++$x ."\n";

$studentsScores = [75, 80, 85, 90, 95];
foreach($studentsScores as &$score){
    ++$score;
    echo "Updated score: $score\n";
}

$x = 5;
echo ++$x ."\n";

$x = 5;
echo $x++ ."\n";
echo $x ."\n";

$score =10;
echo "Current score: $score\n";
$score++;
echo "Updated score: $score\n";

//Post-Decrement
$x = 5;
echo --$x ."\n";

$x = 5;
echo $x-- ."\n";

$remainingPage = 50;
for($day =1 ; $day <=5; $day++){
    echo "Day $day: Remaining pages are $remainingPage\n";
}

$remainingPage--;
echo "After reading, remaining pages are $remainingPage\n";