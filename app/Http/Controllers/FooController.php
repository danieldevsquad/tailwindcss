<?php

namespace App\Http\Controllers;

class FooController extends Controller
{
    public function __invoke()
    {
        sleep(2);

        return back();
    }
}
