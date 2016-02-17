<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    public function setTitleAttribute($value)
	{
		$this->attributes['title'] = $value;

		if (! $this->exists) {

			$this->attributes['slug'] = str_slug($value);

		}

	}

	// public static function first_sentence($content) {

	//     $decoded_content = html_entity_decode(strip_tags($content));
	//     $pos = strpos($content, '.');
	//     if($pos === false) {
	//         return $content;
	//     }
	//     else {
	//         return substr($decoded_content, 0, $pos+1);
	//     }
	   
	// }

    public static function getFirstPara($string){
        $string = substr($string,0, strpos($string, "</p>")+4);
        $string = str_replace("<p>", "", str_replace("</p>", "", $string));
        return $string;
    }

}
