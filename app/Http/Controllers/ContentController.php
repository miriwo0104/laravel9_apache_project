<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;

class ContentController extends Controller
{
    public function return (ContentRequest $request)
    {
        return $request;
    }
}
