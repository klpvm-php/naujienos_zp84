<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CkeditorController extends Controller
{
    //

    public function upload(Request $request)
    {
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        // failai keliami į storage/app/public/tekstas katalogą
        // kad failo nuorodos veiktų puslapyje reikia įvykdyti komandą:
        // php artisan storage:link
        // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

        $path = $request->file('upload')->store('tekstas', 'public');

        return response()->json([
            'url' => asset(Storage::url($path))
        ]);
    }
}
