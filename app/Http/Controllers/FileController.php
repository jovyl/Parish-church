<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');

        $fileModel = new File();
        $fileModel->name = $fileName;
        $fileModel->path = 'storage/app/uploads' . $filePath;
        $fileModel->save();

        return back()->with('success', 'File uploaded successfully');
    }
}

