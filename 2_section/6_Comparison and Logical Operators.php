<?php

/* comparison and logical operators 
-------------
equal - ==
identical - ===
compare - > < >= <= <>
not equal - !=
not identical - !==
-----------------------
AND - &&  
OR - ||
NOT - !
-----------
*/
if(4 < 4){

    echo "it is true";
}

echo " <br> ";

if(4 <= 4){

    echo "it is true";
}

echo " <br> ";


if(4 == 4){

    echo "it is true";
}

echo " <br> ";

if(4 === 4){ // identical 

    echo "it is true";
}

echo " <br> ";

if(4 || 4){ // this is or logic

    echo "it is true";
}

echo " <br> ";

if(4 != 5){ 

    echo "it is true " . " because 4 is not equal to five";
}

echo " <br> ";

if (4 === "4"){ // this is not excuting beacuse this 4 and "4" this is inside the string that why

    echo "it is true";
}

echo " <br> ";

if(4 === 4 || 5 > 5 ){ // here i || this is or using for another or funtion or logacal operator we can say
    echo "it is not true";
}


?>