<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function photo(Request $request)
    {
        $request->photo->store('public/file.jpg');

        return 'Deu certo!';
    }
}
