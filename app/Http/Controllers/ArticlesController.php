<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Photo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArticlesController extends Controller
{
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $new = Article::find($id);

        if ($new) {
            try {
                $filename = '/photos/' . basename($new->photo->path);

                if (Storage::disk('public')->exists($filename)) {
                    Storage::disk('public')->delete($filename);
                }

                $new->delete();
                return response()->json('Ok', 200);
            } catch (Exception $e) {
                return response()->json('Server Error', 500);
            }
        } else {
            return response()->json('Not found', 404);
        }
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image|max:10000',
            'photo_description' => 'string|nullable|max:128',
            'description' => 'required|string|max:256',
            'title' => 'required|string:max:128',
            'body' => 'required|string|max:65000',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $new = new Article();

        $new->title = $request->input('title');
        $new->body = $request->input('body');
        $new->description = $request->input('description');

        $photo = new Photo();

        $photo->description = $request->input('photo_description');

        $file = $request->file('photo');
        $name =
            \Str::random(90) . now()->format('U') . '.' . $file->extension();

        try {
            $photo->path = $file->storeAs('photos', $name, 'public');
            if (!TinifyController::compress($name)) {
                throw new Exception('Error on image compression');
            }
            $new->save();
            $new->photo()->save($photo);

            return redirect()
                ->back()
                ->with(['success' => 'La novedad se publicó correctamente']);
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with(['error' => 'Lo sentimos, intente de nuevo mas tarde.']);
        }
    }

    public function edit(Request $request, $id)
    {
        $new = Article::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'photo' => 'image|max:10000',
            'photo_description' => 'string|nullable|max:128',
            'description' => 'string|nullable|max:256',
            'title' => 'required|string|max:128',
            'body' => 'required|string|max:65000',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        $new->title = $request->input('title');
        $new->body = $request->input('body');
        $new->description = $request->input('description');

        $photo = $new->photo ?? new Photo();

        $photo->description = $request->input('photo_description');

        try {
            $new->update();

            if ($request->file('photo')) {
                $file = $request->file('photo');
                $name = basename($photo->path);

                $photo->path = $file->storeAs('photos', $name, 'public');
                if (!TinifyController::compress($name)) {
                    throw new Exception('Error on image compression');
                }
            }

            $new->photo()->save($photo);
        } catch (Exception $e) {
            return redirect()
                ->back()
                ->with([
                    'error' => 'Lo sentimos, intente de nuevo mas tarde.',
                ]);
        }

        return redirect()
            ->back()
            ->with([
                'success' => 'La novedad se publicó correctamente',
            ]);
    }
}
