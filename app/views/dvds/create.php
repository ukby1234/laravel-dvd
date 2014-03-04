<!DOCTYPE html>
<html>
<head>
    <title>Create Dvd</title>
</head>
<body>
    <?php if (Session::has('success')) : ?>
    <p style="background-color:green;">
        <?php echo Session::get('success') ?>
    </p>
    <?php endif ?>
    <?php if (Session::has('errors')) : ?>
    <p style="background-color:red;">
        <?php 
            foreach (Session::get('errors')->all() as $error)
                echo $error; 
        ?>
    </p>
    <?php endif; ?>
    <form method="post" action="/dvds">
    <div>
        Title: <input type="text" name="title" value="<?php echo Input::old('title') ?>"/>
    </div>
    <div>
        Release Date: <input type="text" name="releast_date" value="<?php echo Input::old('releast_date') ?>"/>
    </div>
    <div>
        <select name="genre">
                <?php foreach ($genres as $genre) : ?>
                <?php 
                    if ($genre->id == Input::old('genre'))
                        $selected = "selected";
                    else
                        $selected = "";
                ?>
                <option value="<?php echo $genre->id ?>" <?php echo $selected; ?> > <?php echo $genre->genre_name; ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <select name="rating">
            <?php foreach ($ratings as $rating) : ?>
                <?php 
                    if ($rating->id == Input::old('rating'))
                        $selected = "selected";
                    else
                        $selected = "";
                ?>
                <option value="<?php echo $rating->id ?>" <?php echo $selected; ?> > <?php echo $rating->rating_name; ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <select name="label">
                <?php foreach ($labels as $label) : ?>
                <?php 
                    if ($label->id == Input::old('label'))
                        $selected = "selected";
                    else
                        $selected = "";
                ?>
                <option value="<?php echo $label->id ?>" <?php echo $selected; ?> > <?php echo $label->label_name; ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <select name="sound">
                <?php foreach ($sounds as $sound) : ?>
                <?php 
                    if ($sound->id == Input::old('sound'))
                        $selected = "selected";
                    else
                        $selected = "";
                ?>
                <option value="<?php echo $sound->id ?>" <?php echo $selected; ?> > <?php echo $sound->sound_name; ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <select name="format">
                <?php foreach ($formats as $format) : ?>
                <?php 
                    if ($format->id == Input::old('format'))
                        $selected = "selected";
                    else
                        $selected = "";
                ?>
                <option value="<?php echo $format->id ?>" <?php echo $selected; ?> > <?php echo $format->format_name; ?> </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <input type="submit" value="Create" />
    </div>
    </form>
</body>
</html>
