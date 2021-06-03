<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(Request $request, Event $event)
    {
        return $event;
    }
}
