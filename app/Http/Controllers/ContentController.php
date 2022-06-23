<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;

class ContentController extends Controller
{
    public function save(ContentRequest $request)
    {
        return $request;
    }
}
