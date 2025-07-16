
<?php
if ($condition) {
    //Statements
} else {
    //Statements
}
//Alternative syntax
if ($condition):
else:
endif;


if ($condition) {
    //Statements
} elseif ($anotherCondition) {
    //Statements
} else {
    //Statements
}

//Alternative syntax
if ($condition):
elseif ($anotherCondition):
else:
endif;

while ($condition) {
    //Statements
}

//Alternative syntax
while ($condition):
endwhile;

for (;;) {
    //Statements
}

//Alternative syntax
for (;;):
endfor;
