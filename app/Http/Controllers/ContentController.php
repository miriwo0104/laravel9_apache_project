<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostContentRequest;
use App\Models\Content;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function create(
        PostContentRequest $request
    ) {
        return DB::transaction(function () use ($request) {

            Content::create(
                [
                    'content' => $request->content
                ]
            );
        
            return new JsonResponse('OK', JsonResponse::HTTP_CREATED);
        });
    }
}
