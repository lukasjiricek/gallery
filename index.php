<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
    <script src="style/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="style/jquery.fancybox.min.css" />

    <link rel="stylesheet" type="text/css" media="screen" href="style/master2.css" />
</head>
<body>
<main>

<div class="upload_bar">
    <p>Upload</p>
</div>







        <?php
        $dir = glob("images/*.{png,jpg,gif}", GLOB_BRACE);
        //print_r($dir);
        
        foreach ($dir as $key => $value) {
            
            $image_size = getimagesize($value);

            if ($image_size[1] > $image_size[0]) {


            ?>

        <div class='thumbnail'>

            <a href='<?php echo($value); ?>' data-fancybox='images' data-caption='<?php echo($value); ?>'>
                <img class="portrait" src='<?php echo($value); ?>' alt='<?php echo($value); ?>'>
            </a>

        </div>

            <?php } else {?>


        <div class='thumbnail'>

        <a href='<?php echo($value); ?>' data-fancybox='images' data-caption='<?php echo($value); ?>'>
            <img src='<?php echo($value); ?>' alt='<?php echo($value); ?>'>
        </a>

        </div>




            <?php

        }}
        ?>
</main>
</body>
</html>