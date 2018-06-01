<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userTotal = rand(10, 15);
        factory(App\User::class, 10)->create()->each(function ($user) use ($userTotal) {
            $user->posts()->saveMany(factory(App\Post::class, rand(2, 10))->make());

            $tagTotal = rand(2, 5);
            $user->taxonomies()->saveMany(factory(App\Taxonomy::class, $tagTotal)->make());

            $user->posts->each(function ($post) use ($user, $tagTotal, $userTotal) {
                $post->tags()->attach(
                    $user->taxonomies->random(rand(1, $tagTotal))->pluck('id')->toArray()
                );

                $commentTotal = rand(2, 10);
                for ($i = 0; $i < $commentTotal; $i++) {
                    $post->comments()->save(factory(App\Comment::class)->make(['user_id' => rand(1, $userTotal)]));
                }
            });

            $user->educations()->saveMany(factory(App\Education::class, rand(2, 5))->make());

            $user->experiences()->saveMany(factory(App\Experience::class, rand(2, 5))->make());

            $user->awards()->saveMany(factory(App\Award::class, rand(2, 5))->make());

            $user->skills()->saveMany(factory(App\Skill::class, rand(2, 8))->make());

            $user->showcases()->saveMany(factory(App\Portfolio::class, rand(2, 10))->make());

            $user->showcases->each(function ($showcase) use ($user, $tagTotal, $userTotal) {
                $showcase->tags()->attach(
                    $user->taxonomies->random(rand(1, $tagTotal))->pluck('id')->toArray()
                );

                $commentTotal = rand(2, 10);
                for ($i = 0; $i < $commentTotal; $i++) {
                    $showcase->comments()->save(factory(App\Comment::class)->make(['user_id' => rand(1, $userTotal)]));
                }

                $showcase->screenshots()->saveMany(factory(App\Upload::class, rand(2, 5))->make(['user_id' => $user->id]));
            });
        });
    }
}
