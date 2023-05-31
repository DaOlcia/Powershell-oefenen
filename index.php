<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo get_header(); ?>


<h1><?php the_title(); ?></h1>




<?php 

echo 'deze tekst is aangepast d.d. '.date("d-m-Y"); 
echo "<br>".get_footer();

?>
<div id="kader">
<p><?php the_content(); ?></p>
<p><?php the_content(); ?></p>
<p><?php the_content(); ?></p>
</div>
</body>
</html>