<?php

namespace Lychee\Access;

use Lychee\Modules\Photo;
use Lychee\Modules\Response;
use Lychee\Modules\Validator;

final class Upic extends Access {

	public static function init($fn) {

		switch ($fn) {
			// Add functions
			case 'Photo::add':              self::uploadAction(); break;
		}
		self::fnNotFound();
	}

	// Add functions
	private static function uploadAction() {
		Validator::required(isset($_FILES, $_POST['albumID']), __METHOD__);
		$photo = new Photo(null);
		$photoID = $photo->add($_FILES, $_POST['albumID']);
		$res = array('url' => $photo->getPhotoUrl($photoID));
		Response::json($res, JSON_NUMERIC_CHECK);
	}

}

?>