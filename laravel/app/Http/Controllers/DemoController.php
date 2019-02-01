<?php

namespace App\Http\Controllers;

use App\Events\InvoicePaid;
use App\Jobs\SomeJob;
use App\Notifications\PostCreated;
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

    public function models()
    {
        $user = User::where('id', 4)->first();
        $user->posts()->delete();
        $user->delete();

        return 'User with id #4 and their posts have been deleted.';
    }

    public function events()
    {
        $user = User::where('id', 7)->first();

        event(new InvoicePaid($user));

        return 'InvoicePaid event fired.';
    }

    public function notifications()
    {
        $user = User::where('id', 9)->first();
        $lastPost = $user->posts->last();

        $user->notify(new PostCreated($lastPost));

        return 'PostCreated notification sent.';
    }
}
