<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tinify;

class TinifyController extends Controller
{
    public static function compress($filename)
    {
        try {
            Tinify\setKey(env('TINIFY_API_KEY'));

            //TinyPNG Compress Image
            $source = Tinify\fromFile(
                public_path('storage/photos/' . $filename)
            );
            $resized = $source->resize([
                'method' => 'scale',
                'width' => 800,
            ]);
            $resized->toFile('storage/photos/' . $filename);

            return true;
        } catch (Exception $e) {
            // Something else went wrong, unrelated to the Tinify API.
            return false;
        }
    }
}
