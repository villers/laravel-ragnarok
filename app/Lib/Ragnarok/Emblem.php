<?php

namespace App\Lib\Ragnarok;

class Emblem
{
    static function imagecreatefrombmpstring($im) {
        $header = unpack("vtype/Vsize/v2reserved/Voffset", substr($im,0,14));
        $info = unpack("Vsize/Vwidth/Vheight/vplanes/vbits/Vcompression/Vimagesize/Vxres/Vyres/Vncolor/Vimportant", substr($im,14,40));

        $offset = $header['offset'];
        $width = $info['width'];
        $height = $info['height'];
        $bits = $info['bits'];

        $imres = imagecreatetruecolor($width, $height);
        imagealphablending($imres,false);
        imagesavealpha($imres,true);

        $scan_line_size = (($bits * $width) + 7) >> 3;
        $scan_line_align = ($scan_line_size & 0x03) ? 4 - ($scan_line_size & 0x03): 0;
        for($i = 0, $l = $height - 1; $i < $height; $i++, $l--) {
            // BMP stores scan lines starting from bottom
            $scan_line = substr($im, $offset + (($scan_line_size + $scan_line_align) * $l), $scan_line_size);
            if($bits == 24) {
                $j = 0;
                $n = 0;
                while($j < $scan_line_size) {
                    $b = ord($scan_line{$j++});
                    $g = ord($scan_line{$j++});
                    $r = ord($scan_line{$j++});
                    $a = 0;
                    if (($r == 255) && ($g == 0) && ($b == 255)) { // alpha = 255 on 0xFF00FF
                        $a = 127;
                    }
                    $col = imagecolorallocatealpha($imres, $r, $g, $b, $a);
                    imagesetpixel($imres, $n++, $i, $col);
                }
            }
        }
        return $imres;
    }
}