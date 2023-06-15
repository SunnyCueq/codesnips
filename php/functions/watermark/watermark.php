<?php

function watermark_image($target, $wtrmrk_file, $newcopy)
{
    $watermark = imagecreatefrompng($wtrmrk_file);
    $img = imagecreatefromjpeg($target);

    $wtrmrk_w = imagesx($watermark);
    $wtrmrk_h = imagesy($watermark);
    $img_w = imagesx($img);
    $img_h = imagesy($img);

    $dst_x = ($img_w - $wtrmrk_w) / 2; // For centering the watermark on any image
    $dst_y = ($img_h - $wtrmrk_h) / 2; // For centering the watermark on any image

    imagecopy($img, $watermark, $dst_x, $dst_y, 0, 0, $wtrmrk_w, $wtrmrk_h);
    imagejpeg($img, $newcopy, 100);

    imagedestroy($img);
    imagedestroy($watermark);
}

watermark_image('tmp/tmp_image.png', 'img/water.png', 'tmp/tmp.png');
