<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Photo;

class ArticlesController extends Controller
{

    public function create(Request $request){

        $request->validate([
            'photo' => 'required|image|max:255',
            'description' => 'string',
            'title' => 'required|string',
            'body' => 'required|string'
        ]);

        $new = new Article;

        $new->title = $request->input('title');
        $new->body = $request->input('body');

        $photo = new Photo;

        $photo->description = $request->input('description');

        $file = $request->file('photo');
        $name = \Str::random(90).now()->format('U').'.'.$file->extension();

        try{
            $photo->path = $file->storeAs('photos', $name, 'public');
            $photo->save();

            $new->photo()->save($photo);

            $new->save();

            return response($new, 200);
        }catch(Exception $e){
            return response('Server error', 500);
        }

    }

}
