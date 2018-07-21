<?php
/*Usage:*/

$input = new \input\input();

//Get method:
#example: file.php?query1=value1&query2=value2
echo get( 'query1' );
echo get( 'query2' );


//Post method:
echo post( 'fullname' );
echo post( 'age' );


//Request Method:
echo request( 'query1' );
echo request( 'fullname' );