<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to MY PAGE</title>

    </head>

    <body>
        <h1>My Page</h1>

        <a href="<?php echo site_url('Hello/index');?>">Link to Page Hello FN Index</a>

        <br> 

        <a href="<?php echo site_url('Hello/index2');?>">Link to Page Hello FN2 index2</a>

        <br>

        <a href="<?php echo site_url('Welcome');?>">Link to Page Welcome</a>

        <br>

        <a href="<?php echo site_url('Welcome/Index2');?>">Link to Page Natthathida</a>
    </body>
</html>