<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Validaciones
        $validated = $request->validate([
            "name" => "required",
            "subject" => "required",
            "email" => "required|email",
            "content" => "required|min:4|max:10"
        ]);
        // Cuando las validaciones pasen

        Mail::to('djcastillo@sena.edu.co')->send(new MessageReceived($validated));

        return "Correo enviado satisfactoriamente.";
    }
}
