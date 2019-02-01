<?php

use App\User;
use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randomUsers = factory(User::class, 10)->create();

        foreach ($randomUsers as $randomUser) {
            $randomPostCount = mt_rand(1, 10);
            factory(Post::class, $randomPostCount)->create([
                'user_id' => $randomUser->id
            ]);
        }
    }
}
