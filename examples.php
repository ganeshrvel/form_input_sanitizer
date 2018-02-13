<?php
/*Usage:*/

//Get method:
#example: file.php?query1=value1&query2=value2
echo get_input( 'query1' );
echo get_input( 'query2' );


//Post method:
echo post_input( 'fullname' );
echo post_input( 'age' );


//Request Method:
echo request_input( 'query1' );
echo request_input( 'fullname' );