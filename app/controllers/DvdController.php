<?php

class DvdController extends BaseController {

  public function search() {
    $genres = Dvd::getGenres();
    $ratings = Dvd::getRatings();
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
    $dvds = Dvd::getDvds($title, $genre, $rating);
     return View::make('dvds/dvds-list', [
      'dvds' => $dvds
      ]);
    //var_dump($dvds);
  }

} 
?>