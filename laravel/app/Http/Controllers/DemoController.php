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

    public function exceptions()
    {
        throw new \BadFunctionCallException('Example exception - just ignore it :P');
    }

    public function dumps()
    {
        $user = User::where('id', 2)->with('posts')->first();

        dump($user->toArray());

        return 'I have dumped stuff 💩';
    }
}
