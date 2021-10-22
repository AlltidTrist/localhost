<?php
require_once __DIR__ . '/Thumbs.php';

$image = new Thumbs(__DIR__ . '/image.png');
$image->reduce(2000, 2000);
$image->save();

require_once __DIR__ . '/Thumbs.php';

$image = new Thumbs(__DIR__ . '/image.png');
$image->thumb(300, 200);
$image->output();

require_once __DIR__ . '/Thumbs.php';

$image = new Thumbs(__DIR__ . '/image.jpg');
$image->rotateRight();
$image->output();

function watermark($file, $position = 'center', $transparency = 1)
{
    if (empty($file)) {
        throw new Exception('Файл маски не найден');
    } else {
        $info = getimagesize($file);
        if (empty($info)) {
            throw new Exception('Файл маски не найден');
        } else {
            switch ($info[2]) {
                case 1:
                    $dest = imageCreateFromGif($file);
                    break;
                case 2:
                    $dest = imageCreateFromJpeg($file);
                    break;
                case 3:
                    $dest = imageCreateFromPng($file);
                    $transparent = imagecolorallocatealpha($dest, 0, 0, 0, 127);
                    imagefill($dest, 0, 0, $transparent);
                    imagecolortransparent($dest, $transparent);

                    imageAlphaBlending($dest, true);
                    imageSaveAlpha($dest, true);


                    break;
                case 18:
                    $dest = imageCreatefromWebp($file);
                    break;
                default:
                    throw new Exception('Формат файла маски не подерживается');
                    break;
            }

            switch ($position) {
                case 'top':
                    $x = ceil(($this->width - $info[0]) / 2);
                    $y = 0;
                    break;
                case 'top-left':
                    $x = 0;
                    $y = 0;
                    break;
                case 'top-right':
                    $x = ceil($this->width - $info[0]);
                    $y = 0;
                    break;
                case 'left':
                    $x = 0;
                    $y = ceil(($this->height - $info[1]) / 2);
                    break;
                case 'right':
                    $x = ceil($this->width - $info[0]);
                    $y = ceil(($this->height - $info[1]) / 2);
                    break;
                case 'bottom':
                    $x = ceil(($this->width - $info[0]) / 2);
                    $y = ceil($this->height - $info[1]);
                    break;
                case 'bottom-left':
                    $x = 0;
                    $y = ceil($this->height - $info[1]);
                    break;
                case 'bottom-right':
                    $x = ceil($this->width - $info[0]);
                    $y = ceil($this->height - $info[1]);
                    break;
                default:
                    $x = ceil(($this->width - $info[0]) / 2);
                    $y = ceil(($this->height - $info[1]) / 2);
                    break;
            }

            $dest = $this->opacity($dest, $transparency);
            imagecopy($this->img, $dest, $x, $y, 0, 0, $info[0], $info[1]);
        }
    }
}
?>