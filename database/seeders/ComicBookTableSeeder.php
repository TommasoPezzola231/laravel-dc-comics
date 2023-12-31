<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ComicBook;

class ComicBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicBooks = config('comics');

        foreach($comicBooks as $comicBook) {
            $newBook = new ComicBook();
            $newBook->title = $comicBook['title'];
            $newBook->description = $comicBook['description'];
            $newBook->thumb = $comicBook['thumb'];
            $newBook->price = $comicBook['price'];
            $newBook->series = $comicBook['series']; 
            $newBook->sale_date = $comicBook['sale_date'];
            $newBook->type = $comicBook['type'];
            
            $newBook->artists = implode(", ", $comicBook['artists']);

            $newBook->writers = implode(", ", $comicBook['writers']);

            $newBook->save();
        }
    }
}
