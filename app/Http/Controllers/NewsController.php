<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends Controller
{
    public function show(Request $request, Event $event)
    {
        return $event;
    }
}
