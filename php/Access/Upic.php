<?php

namespace Lychee\Modules;

use ZipArchive;
use Imagick;
use ImagickPixel;

final class Photo {

        private $photoIDs = null;

        public static $validTypes = array(
                IMAGETYPE_JPEG,
                IMAGETYPE_GIF,
                IMAGETYPE_PNG
        );

        public static $validExtensions = array(
                '.jpg',
                '.jpeg',
                '.png',
                '.gif'
        );

        /**
         * @return boolean Returns true when successful.
         */
/getPhotoUrl
~
                 101,2       Bot
~                                                   101,2        Bot
no changes added to commit (use "git add" and/or "git commit -a")
 ~/workspace/Lychee   master ●  ssh myecs
Welcome to Ubuntu 16.04.6 LTS (GNU/Linux 4.4.0-142-generic x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage
                $pageURL .= "://";
New release '18.04.3 LTS' available.
Run 'do-release-upgrade' to upgrade to it.



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
                //$dirinfo https:/$DOMAIN/wwwroot/php
                //photo url: https:/$DOMAIN/wwwroot/LYCHEE_URL_UPLOADS_BIG/$url
                $res = array('url' => curPageHost() . '/' . ROOT_DIR . LYCHEE_URL_UPLOADS_BIG . $photo->getPhotoUrl($photoID));
                Response::json($res, JSON_NUMERIC_CHECK);
        }

}

?>