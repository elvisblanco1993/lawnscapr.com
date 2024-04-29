<?php

namespace App\Http\Controllers;

use App\Models\Intake;
use App\Rules\ReCaptchaV3;
use Illuminate\Http\Request;

class IntakeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => ['required', 'email:dns,rfc'],
            'g-recaptcha-response' => ['required', new ReCaptchaV3('submitContact', 0.5)]
        ]);

        Intake::updateOrCreate([
            'email' => $request['email'],
        ]);

        return redirect()->route('intake.thanks');

    }
}
