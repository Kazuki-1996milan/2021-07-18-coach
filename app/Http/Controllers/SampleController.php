<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index($room = "デフォルト")
    {
        return "部屋番号は" . $room . "です";
    }
}
