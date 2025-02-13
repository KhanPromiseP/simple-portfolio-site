<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function __invoke()
    {
        $data = Storage::disk('data')->json('experience.json');
        return view('pages.experience', $data);
    }
}
