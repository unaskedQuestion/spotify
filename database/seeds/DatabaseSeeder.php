<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = factory(App\Album::class, 5)->create();

        foreach ($albums as $album) {
            factory(App\Song::class, 10)->create([
                'album_id' => $album->id,
            ]);
        }
    }
}
