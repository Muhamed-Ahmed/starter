<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FirstController extends Controller
{
    public function __constructr()
    {
        $this->middleware(middleware: 'auth');
    }
    public function showName()
    {
        return 'Hamza Ahmed';
    }
    public function showNum()
    {
        return '01152961646';
    }
}
