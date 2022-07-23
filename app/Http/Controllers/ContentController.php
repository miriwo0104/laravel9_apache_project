<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostContentRequest;
use App\Models\Content;

class ContentController extends Controller
{
    public function create(PostContentRequest $request)
    {
        Content::create([
            'content' => $request->content
        ]);

        return true;
    }
}
