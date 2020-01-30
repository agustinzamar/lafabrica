<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Photo;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{

    public function delete(Request $request){
        $id = $request->input('id');
        $new = Article::find($id);

        if($new){

            try{

                $new->delete();
                return response()->json('Ok', 200);
            }catch(Exception $e){
                return response()->json('Server Error', 500);
            }

        }else{
            return response()->json('Not found', 404);
        }
    }

    public function create(Request $request){

        $request->validate([
            'photo' => 'required|image',
            'description' => 'string|nullable',
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

            return redirect()->back()->with(['success' => 'La novedad se publicó correctamente']);
        }catch(Exception $e){
            return redirect()->back()->with(['error' => 'Lo sentimos, intente de nuevo mas tarde.']);
        }

    }

}
