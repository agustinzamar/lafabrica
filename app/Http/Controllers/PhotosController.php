<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $photo = Photo::find($id);

        if($photo){

            try{
                
                $photo->delete();
                return response('Photo deleted.', 200);
            }catch(Exception $e){
                return response('Internal server Error', 500);
            }
            
        }else{
            return response('Photo not found.', 404);
        }
    }

    public function create(Request $request){

        $photo = new Photo;

        $request->validate([
            'photo' => 'required|image|max:255',
            'description' => 'string',
            'project_id' => 'numeric|exists:projects,id',
        ]);

        $photo->description = $request->input('description');
        $photo->project_id = $request->input('project_id') || null;
        
        $file = $request->file('photo');
        $name = \Str::random(90).now()->format('U').'.'.$file->extension();
        
        try{
            $photo->path = $file->storeAs('photos', $name, 'public');
            $photo->save();

            return response($photo, 200);
        }catch(Exception $e){
            return response('Server error', 500);
        }

    }
}
