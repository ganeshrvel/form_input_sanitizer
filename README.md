Form input handler for GET, POST and REQUEST; Sanitizes Form inputs - prevents 'undefined' variable error.
--------
Author: Ganesh Rathinavel

Requirements: PHP

URL: [https://github.com/ganeshrvel/form_input_sanitizer](https://github.com/ganeshrvel/form_input_sanitizer)


----------


Installation:
Import or copy the methods from 'index.php'

```php
require_once "form_input_sanitizer/index.php";
```

----------


Usage:
```php
use input\input;
$input = new input();
```

Sanitization:
```php
$input->post( 'queryString', $trim = true, $isArray = false );
$input->get( 'queryString', $trim = true, $isArray = false );
$input->request( 'queryString', $trim = true, $isArray = false );
```

----------

  Get method:
```php
#example: file.php?query1=value1&query2=value2
echo $input->get( 'query1' );
echo $input->get( 'query2' );`
```


----------

  Post method:
    
   ```php
echo $input->post( 'fullname' );
echo $input->post( 'age' );
```


----------


   Request Method:
   
```php
echo $input->request( 'query1' );
echo $input->request( 'fullname' );
```
