<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function show($id)
    {
        return view('videoaula.show')->with('video', Video::findOrFail($id));
    }
}
