<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Exception;

class PhotosController extends Controller
{
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $photo = Photo::find($id);

        if ($photo) {
            try {
                $photo->delete();
                return response('Photo deleted.', 200);
            } catch (Exception $e) {
                return response('Internal server Error', 500);
            }
        } else {
            return response('Photo not found.', 404);
        }
    }

    public function create(Request $request)
    {
        $photo = new Photo();

        $request->validate([
            'photo' => 'required|image|max:10000',
            'description' => 'string|nullable:max:128',
        ]);

        $photo->description = $request->input('description');
        $photo->imageable_id = $request->input('project_id');
        $photo->imageable_type = 'App\Project';

        $file = $request->file('photo');
        $name =
            \Str::random(90) . now()->format('U') . '.' . $file->extension();

        try {
            $photo->path = $file->storeAs('photos', $name, 'public');

            if (!TinifyController::compress($name)) {
                throw new Exception('Error on image compression');
            }

            $photo->save();

            return redirect()
                ->back()
                ->with(['success' => 'Foto publicada correctamente']);
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with(['error' => 'Lo sentimos, intente de nuevo mas tarde']);
        }
    }

    public function edit(Request $request, $id)
    {
        $photo = Photo::findOrFail($id);

        $request->validate([
            'photo' => 'image|max:10000',
            'description' => 'string|nullable:max:128',
        ]);

        $photo->description = $request->input('description');
        $photo->imageable_id = $request->input('project_id');
        $photo->imageable_type = 'App\Project';

        try {
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $name = basename($photo->path);

                $photo->path = $file->storeAs('photos', $name, 'public');

                if (!TinifyController::compress($name)) {
                    throw new Exception('Error on image compression');
                }
            }

            $photo->save();

            return redirect()
                ->back()
                ->with(['success' => 'Foto publicada correctamente']);
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with(['error' => 'Lo sentimos, intente de nuevo mas tarde']);
        }
    }
}
