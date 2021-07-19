<?php

use Illuminate\Database\Seeder;
use App\Comics;
use Illuminate\Support\Str;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArray = config('comics');
        foreach ($comicsArray as $item) {
            
            $comics = new Comics();

            $comics->title = $item['title'];
            $comics->slug = Str::slug($item['title'], '-');
            $comics->description = $item['description'];
            $comics->thumb = $item['thumb'];
            $comics->price = $item['price'];
            $comics->series = $item['series'];
            $comics->sale_date = $item['sale_date'];
            $comics->type = $item['type'];

            $comics->save();

        }
    }
}
