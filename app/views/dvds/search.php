<!DOCTYPE html>
<html>
<head>
    <title>Search Dvd</title>
</head>
<body>
    <form method="get" action="/dvds">
    <div>
        Title: <input type="text" name="title" />
    </div>
    <div>
        <select name="genre">
            <option value="All">All</option>
            <?php foreach ($genres as $genre) : ?>
                <option value="<?php echo $genre->id ?>"> <?php echo $genre->genre_name; ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <select name="rating">
            <option value="All">All</option>
            <?php foreach ($ratings as $rating) : ?>
                <option value="<?php echo $rating->id ?>"> <?php echo $rating->rating_name; ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Query" />
    </div>
    </form>
</body>
</html>
