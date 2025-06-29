<?php

//Break 
for($i = 1 ; $i<=5; $i++){
    if($i%2 == 0){
        break;
    }
    echo "$i\n" ;
}

//Continue
for($i = 1 ; $i<=5; $i++){
    if($i%2 !== 0){
        continue;
    }
    echo "$i\n" ;
}