<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'document' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Store the file in the 'documents' folder in storage/app/public
        $path = $request->file('document')->store('documents', 'public');

        return back()->with('success', 'Document uploaded successfully')->with('path', $path);
    }
}
