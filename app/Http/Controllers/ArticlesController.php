<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Photo;

class ArticlesController extends Controller
{

    public function delete(Request $request){
        $id = $request->input('id');
        $new = Article::find($id);

        if($new){

            try{

                $new->delete();
                return response('New deleted.', 200);
            }catch(Exception $e){
                return response('Internal server Error', 500);
            }

        }else{
            return response('New not found.', 404);
        }
    }

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

            $new->save();
            $new->photo()->save($photo);

            return response($new, 200);
        }catch(Exception $e){
            return response('Server error', 500);
        }

    }

}
