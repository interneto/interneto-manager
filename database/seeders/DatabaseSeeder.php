<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Tags of audio
        $audio_tag = \App\Models\Tag::factory()->create([
            "name" => "Audio",
        ]);

        $audio_webs = \App\Models\Web::factory(10)->create();
        foreach ($audio_webs as $web) {
            $web->tags()->attach($audio_tag);
        }

        // Tags of image
        $image_tag = \App\Models\Tag::factory(10)->create([
            "name" => "Image",
        ]);

        $image_webs = \App\Models\Web::factory(10)->create();
        foreach ($image_webs as $image) {
            $web->tags()->attach($image_tag);
        }

        // Tags of text
        $text_tag = \App\Models\Tag::factory(10)->create([
            "name" => "Text",
        ]);
        foreach ($image_webs as $image) {
            $web->tags()->attach($image_tag);
        }

        // Tag of video
        $video_tag = \App\Models\Tag::factory()->create([
            "name" => "Video",
        ]);

        $video_webs = \App\Models\Web::factory(10)->create();
        foreach ($video_webs as $web) {
            $web->tags()->attach($video_tag);
        }

        /*
        DB::table('types')->insert([
            'name' => Str::random(),    // audio, image, text, video
        ]);
        */

        // User

        // Directory


        // Webs


        // Types

    }
}
