<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function contact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email:dns',
            'name' => 'required|string|min:3|max:32',
            'subject' => 'required|string|min:3|max:15',
            'body' => 'required|string|min:20|max:1000',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator->errors())
                ->withInput($request->all());
        }

        try {
            Mail::to('lafabricajujuy@gmail.com')->send(
                new ContactEmail(
                    $request->email,
                    $request->name,
                    $request->subject,
                    $request->body
                )
            );

            return redirect()
                ->back()
                ->with('success', 'Gracias por su mensaje.');
        } catch (Exception $ex) {
            if (App::environment('local')) {
                return redirect()
                    ->back()
                    ->with('error', $ex->getMessage());
            } else {
                return redirect()
                    ->back()
                    ->with(
                        'error',
                        'Algo salió mal. Intente de nuevo mas tarde'
                    );
            }
        }
    }
}
