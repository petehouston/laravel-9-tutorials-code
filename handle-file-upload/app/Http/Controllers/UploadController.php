<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function show()
    {
        return view('upload');
    }

    public function process(Request $request)
    {
        $uploadedFile = $request->file('myFile');

        $uploadedFile->move(public_path('/uploads'), $uploadedFile->getClientOriginalName());

        return back()->with('message', 'File ' . $uploadedFile->getClientOriginalName() . ' has been uploaded successfully!');
    }
}
