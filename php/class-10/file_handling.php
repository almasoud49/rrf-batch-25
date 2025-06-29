<?php

$file = fopen("new.txt", "w");
fwrite($file, "Projukti Plus");

$file = fopen("new.txt", "r");
echo fread($file, filesize("new.txt"));
fclose($file);

mkdir("ProjuktiPlus");
rename("anotherFile.txt","new.txt");


file_put_contents("test.txt", "ProjuktiPlus is a tech based channel.");
file_put_contents("test.txt", " In where made a story in Bangla language!" , FILE_APPEND);
echo file_get_contents("test.txt");

file_put_contents("ProjuktiPlus/newfile.txt", "New File");
echo file_get_contents("ProjuktiPlus/newfile.txt");



//With variable
$fileName = "test.txt";
$fileContent = "Projukti Plus - ";
$fileContent2 = " In where made a story in Bangla language!";
file_put_contents($fileName , $fileContent);
file_put_contents($fileName, $fileContent2 , FILE_APPEND);
echo file_get_contents($fileName);

file_put_contents("ProjuktiPlus/newfile.txt", "New File\n");
echo file_get_contents("ProjuktiPlus/newfile.txt");

$myFolder = "ProjuktiPlus";
if(!is_dir($myFolder)){
    mkdir($myFolder);
}else{
    echo "$myFolder folder already exist";
}



// echo __DIR__;

$fieName = "/opt/lampp/htdocs/rrf-batch-25/php/class-10/text.txt";

if(file_exists($fileName)){
    echo file_get_contents($fieName);
}else{
    echo "File is not exist";
}

// file_exists();
// is_readable();
// is_writable();

