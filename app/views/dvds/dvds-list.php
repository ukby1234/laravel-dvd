<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<div style="display: table-row;">
	<div style="display: table-cell;">Title</div>
	<div style="display: table-cell;">Rating</div>
	<div style="display: table-cell;">Genre</div>
	<div style="display: table-cell;">Label</div>
	<div style="display: table-cell;">Sound</div>
	<div style="display: table-cell;">Format</div>
	<div style="display: table-cell;">Release Date</div>
</div>
<?php foreach($dvds as $dvd) : ?>
	<div style="display: table-row;">
	<div style="display: table-cell;"><?php echo $dvd->title;?></div>
	<div style="display: table-cell;"><?php echo $dvd->rating_name;?></div>
	<div style="display: table-cell;"><?php echo $dvd->genre_name;?></div>
	<div style="display: table-cell;"><?php echo $dvd->label_name;?></div>
	<div style="display: table-cell;"><?php echo $dvd->sound_name;?></div>
	<div style="display: table-cell;"><?php echo $dvd->format_name;?></div>
	<div style="display: table-cell;"><?php echo $dvd->release_date;?></div>
	</div>
<?php endforeach; ?>
</body>
</html>