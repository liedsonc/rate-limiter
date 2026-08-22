<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class AboutController extends Controller
{
    public function index()
    {
        return new JsonResponse([
            'message' => 'This is the about page.'
        ]);
    }
}
