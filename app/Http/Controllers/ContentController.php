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

            $contentEloquent = Content::create(
                [
                    'content' => $request->content
                ]
            );

            $result = [
                'contentId' => $contentEloquent->id,
                'content' => $contentEloquent->content,
            ];
        
            return new JsonResponse($result, JsonResponse::HTTP_CREATED);
        });
    }

    public function update($request)
    {
        return DB::transaction(function () use ($request) {
            $contentEloquent = Content::find($request->contentId);
            $contentEloquent->content = $request->content;
            $contentEloquent->update();

            $content = [
                'contentId' => $contentEloquent->id,
                'content' => $contentEloquent->content,
            ];

            return new JsonResponse(
                json_encode($content),
                JsonResponse::HTTP_ACCEPTED,
            );
        });
    }
}
