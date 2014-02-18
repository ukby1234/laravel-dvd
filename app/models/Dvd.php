<?php
	class Dvd {
		public static function getGenres() {
			$query = DB::table('genres');
			$genres = $query->get();
			return $genres;
		}

		public static function getRatings() {
			$query = DB::table('ratings');
			$ratings = $query->get();
			return $ratings;
		}

		public static function getDvds($title, $genre, $rating) {
			$query = DB::table('dvds')
			->select('title', 'rating_name', 'genre_name', 'label_name', 'sound_name', 'format_name', DB::raw("DATE_FORMAT(release_date, '%b %d %Y %h:%i %p') AS release_date"))
      		->join('genres', 'genres.id', '=', 'dvds.genre_id')
      		->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
      		->join('formats', 'formats.id', '=', 'dvds.format_id')
      		->join('sounds', 'dvds.sound_id', '=', 'sounds.id')
      		->join('labels', 'dvds.label_id', '=', 'labels.id')
      		->where('title', 'LIKE', "%$title%");
      		if ($genre != 'All')
      			$query = $query->where('genre_name', '=', $genre);
      		if ($rating != 'All')
      			$query = $query->where('rating_name', '=', $rating);
      		return $query->get();
		}
	}
?>