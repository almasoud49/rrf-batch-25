<?php

//Difference between single and double quotation
$name = "Abdullah Al Masoud";
// echo "My name is \n \t $name\n";
// echo 'My name is $name';
// echo "I'm \n \t $name";

//Here Dock
$text =  <<<EOT
This is
    Multiline $name
        String
EOT;

// echo $text;

//Now Dock
$text =  <<<'EOT'
This is
    Multiline $name
        String
EOT;

// echo $text;

//strlen()
$sentence = "PHP is Awesome";
// echo strlen($sentence) ."\n";

//str_word_count()
// echo str_word_count($sentence) ."\n";

//strrev()
// echo strrev($sentence) ."\n";

//strpos()
// echo strpos($sentence, "Awesome") ."\n";

//str_replace()
// echo str_replace("Awesome", "Powerful" , $sentence)."\n";

//strtolower()
// echo strtolower($sentence)."\n";

//strtoupper()
// echo strtoupper($sentence)."\n";

//trim()
$extraSpace = "  Laravel is very Wonderful Framework";
// echo $extraSpace."\n";
// echo trim($extraSpace)."\n";

//substr()
// echo substr($extraSpace , 2,7)."\n";

$srt1 = "apple";
$str2 = "Apple";

//strcmp()
// echo strcmp($str1, $str2) . "\n";

//strcasecmp()
// echo strcasecmp($str1, $str2) . "\n";

$password = "secret";

//md5()
echo md5($password);

//sha1()
echo sha1($password);

