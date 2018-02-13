Form input handler for GET, POST and REQUEST; Sanitizes Form inputs - prevents 'undefined' variable error.
--------
Author: Ganesh Rathinavel

Requirements: PHP

URL: [https://github.com/ganeshrvel/form_input_sanitizer](https://github.com/ganeshrvel/form_input_sanitizer)


----------


Installation:

    Import or copy the methods from 'index.php'

----------


Usage:

    Get method:
    #example: file.php?query1=value1&query2=value2
    
    echo get_input( 'query1' );
    echo get_input( 'query2' );


----------


    Post method:
    
    echo post_input( 'fullname' );
    echo post_input( 'age' );


----------


    Request Method:
    
    echo request_input( 'query1' );
    echo request_input( 'fullname' );
