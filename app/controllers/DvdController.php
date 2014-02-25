<?php

class DvdController extends BaseController {

  public function search() {
    $genres = Genre::all();
    $ratings = Rating::all();
    //var_dump($genres);
    return View::make('dvds/search', [
      'genres' => $genres, 
      'ratings' => $ratings
      ]);
  }

  public function listDvds() {
    $title = Input::get('title');
    $genre = Input::get('genre');
    $rating = Input::get('rating');
    $dvds = Dvd::listDvds($title, $genre, $rating);
    //dd($dvds);
    return View::make('dvds/dvds-list', [
      'dvds' => $dvds
      ]);
    //var_dump($dvds);
  }

  public function listGenreDvd() {
    $id = Route::input('id');
    $dvds = Genre::find($id)->dvds->take(30);
    //dd($dvds);
    return View::make('dvds/dvds-list', [
      'dvds' => $dvds
      ]);
    //var_dump($dvds);
  }

  public function create() {
    $genres = Genre::all();
    $ratings = Rating::all();
    $formats = Format::all();
    $labels = Label::all();
    $sounds = Sound::all();
    //var_dump($genres);
    return View::make('dvds/create', [
      'genres' => $genres, 
      'ratings' => $ratings,
      'formats' => $formats, 
      'labels' => $labels,
      'sounds' => $sounds
    ]);
  } 
  public function createDvd() {
    $title = Input::get('title');
    $genre = Input::get('title');
    $rating = Input::get('rating');
    $format = Input::get('format');
    $label = Input::get('label');
    $sound = Input::get('sound');
    $release_date = Input::get('releast_date');
    //var_dump($genres);
    $dvd = new Dvd();
    $dvd->title = $title;
    $dvd->genre_id = $genre;
    $dvd->rating_id = $rating;
    $dvd->format_id = $format;
    $dvd->label_id = $label;
    $dvd->sound_id = $sound;
    $dvd->release_date = $release_date;
    $dvd->save();
    return Redirect::to('/dvds/create')->with('success', 'Successfully create a song. ');
  } 
}
?>