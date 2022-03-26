<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilePostController extends Controller
{
    public function filePost(Request $request)
    {
        $file = $request['file'];

        Storage::disk('s3')->putFile('/', $file, 'public');
        return Storage::putFile('/tmp', $file, 'public');
    }
}
