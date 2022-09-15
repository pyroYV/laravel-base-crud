<?php

use App\Models\Comic;
use Illuminate\Database\Seeder;
use illuminate\Support\Str

class SlugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = Comic::all();
        foreach ($comics as $comic) {
           $comic->slug = Str::slug( $comic->title ).'-' .$comic->id;
           $comic->save();
        }

    }
}
