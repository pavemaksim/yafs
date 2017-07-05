<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class File extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    
    /**
     * Returns a generated filename with extension
     * 
     * @param UploadedFile $file
     * @return string
     */
    public static function getFilename($file)
    {
        $extension = $file->getClientOriginalExtension();
        return Str::random(config('settings.files.filenameLength')).'.'.$extension;
    }
    
    public function getFilePath()
    {
        return asset(config('settings.files.storageFolder') . '/' . $this->name);
    }
}
