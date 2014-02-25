<?php
class Dvd extends Eloquent{
  public function format()
  {
    return $this->belongsTo('Format');
  }

  public function genre()
  {
    return $this->belongsTo('Genre');
  }

  public function label()
  {
    return $this->belongsTo('Label');
  }

  public function rating()
  {
    return $this->belongsTo('Rating');
  }

  public function sound()
  {
    return $this->belongsTo('Sound');
  }

  public static function listDvds($title, $genre, $rating) {
    $songs = Dvd::with(['genre', 'label', 'rating', 'sound', 'format'])
            ->where('title', 'LIKE', "%$title%");
    if ($genre != "All")
      $songs = $songs->where('genre_id', '=', $genre);
    if ($rating != "All") 
      $songs = $songs->where('rating_id', '=', $rating);
    return $songs->take(30)->get();
  }

}
?>