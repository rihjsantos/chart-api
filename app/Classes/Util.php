<?php

namespace App\Classes;

class Util {
	static function hexColor() {
    	$hex = "";
    	$i = 0;
    	while ($i < 3) {
    		$hex .= str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    		$i++;
    	}    	
    	return $hex;
    }

	static function hex2rgba($color = "", $opacity = false) {
		$default = 'rgb(0,0,0)';	 
		if (empty($color)) {
			$color = Util::hexColor();
		}	 
		if ($color[0] == '#' ) {
			$color = substr( $color, 1 );
		}
 
		if (strlen($color) == 6) {
			$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
		} elseif ( strlen( $color ) == 3 ) {
			$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
		} else {
			return $default;
		}
 
		$rgb =  array_map('hexdec', $hex); 
		if ($opacity) {
			if (abs($opacity) > 1) {
				$opacity = 1.0;
			}
			$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
		} else {
			$output = 'rgb('.implode(",",$rgb).')';
		}
		
		return $output;
	}
}