<?php

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Book::class, 100)->create()->each(function ($book) {
            $book->author_id = Author::inRandomOrder()->first()->id;
            $book->save();
        });
    }
}
