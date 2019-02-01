<?php

namespace App\Http\Controllers;

use App\Jobs\SomeJob;
use App\User;

class DemoController extends Controller
{
    public function jobs($count)
    {
        $user = User::where('id', 1)->first();

        for ($i = 0; $i < $count; $i++) {
            SomeJob::dispatch($user);
        }

        return sprintf('Dispatched %d SomeJob', $count);
    }
}
