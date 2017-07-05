<?php

namespace App\Http\Controllers;

use App\File;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFile;

class FileController extends Controller
{
    
    /**
     * Render an index page with upload form
     * 
     * @return type
     */
    public function index()
    {
        return view('files.index');
    }
    
    /**
     * Store a new file in DB and on disk
     * 
     * @param Request $request
     * @return Response
     */
    public function store(StoreFile $request)
    {  
        $uploadedFile = request()->file('file');
        
        $filename = File::getFilename($uploadedFile);
        $uploadedFile->storeAs('public', $filename);
        
        $file = File::create(['name' => $filename]);
    
        return redirect()->route('showFile', [$file]);
    }
    
    /**
     * Show a file
     * 
     * @param File $file
     * @return type
     */
    public function show(File $file)
    {
        return view('files.show', ['file' => $file]);
    }
    
}
