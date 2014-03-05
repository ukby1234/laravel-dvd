<!DOCTYPE html>
<html>
<head>
    <title>iFixit Search</title>
</head>
<body>
    <p> Title: <?php echo $json->title; ?> </p>
    <p> Contents: </p>
    <?php echo $json->contents; ?>
    <p> Guides: </p>
    <?php foreach ($json->guides as $guide): ?>
    <div>
    	<?php echo $guide->guideid; ?> </br>
    	<?php echo $guide->subject; ?> </br>
    	<?php echo $guide->title; ?> </br>
    	<?php echo $guide->url; ?> </br>
    	<?php echo $guide->thumbnail; ?> </br>
    	<?php echo $guide->image_url; ?> </br>
    	<?php echo $guide->type; ?> </br>
    </div>
  	<?php endforeach; ?>
</body>
</html>
