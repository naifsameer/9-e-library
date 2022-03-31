<?php

namespace app\helpers;


/**
 * Class UtilHelper
 * @package app\helpers
 */
class UtilHelper
{

    public static function randomString($number)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $number; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }

        return $str;
    }

    public static function uploadImage(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../public/images')) {
            mkdir(__DIR__ . '/../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = self::randomString(14) . time() . "." . $imageExtension;
            $imagePath =  __DIR__ . '/../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    public static function removeImage(string $image_name)
    {
        return  unlink(__DIR__ . '/../public/images/' . $image_name);
    }

    public static function log(...$args)
    {
        echo "<pre>";
        var_dump(...$args);
        echo "</pre>";
    }
}
