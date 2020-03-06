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
            'description' => 'string|nullable',
        ]);

        $photo->description = $request->input('description');
        $photo->imageable_id = $request->input('project_id');
        $photo->imageable_type = 'App\Project';

        $file = $request->file('photo');
        $name = \Str::random(90).now()->format('U').'.'.$file->extension();

        try{
            $photo->path = $file->storeAs('photos', $name, 'public');
            $photo->save();

            return redirect()->back()->with(['success' => 'Foto publicada correctamente']);
        }catch(Exception $e){
            return redirect()->back()->with(['error' => 'Lo sentimos, intente de nuevo mas tarde']);
        }

    }
}
