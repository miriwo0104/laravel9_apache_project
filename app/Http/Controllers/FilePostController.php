<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilePostController extends Controller
{
    public function filePost(Request $request)
    {
        $file = $request['file'];

//        if (Storage::disk('s3')->exists('8B8BE13C-7504-47A9-B83E-9AC5E7DD4BA7.JPEG')) {
//        if (Storage::disk('s3')->exists('s38B8BE13C-7504-47A9-B83E-9AC5E7DD4BA7.JPEG')) {
//            //return Storage::url('s38B8BE13C-7504-47A9-B83E-9AC5E7DD4BA7.JPEG');
//        } else {
//            return 'NG';
//        }

        $result['filepath'] = Storage::putFile('/', $file/* , 'public' */);
        return $result;
//        return Storage::exists('s38B8BE13C-7504-47A9-B83E-9AC5E7DD4BA7.JPEG');
/*         $result['filepath'] = Storage::putFile('/', $file, 'public');
        if ($result['filepath']) {
            return 'NG';
        }
        return 'OK'; */
//        return Storage::disk('s3')->putFile('/', $file, 'public');
//        return Storage::putFile('/tmp', $file, 'public');
    }
}
