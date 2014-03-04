<?php
	namespace Itp\Api;
	class iFixitSearch {
		public function getResults($device) {
			$endpoint = "http://www.ifixit.com/api/0.1/device/" . $device;
			//dd($endpoint);
			$json = file_get_contents($endpoint);
			return json_decode($json);
			//return $json;
		}
	}
?>
	