<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['publisher_id'=>4,
            'title'=>'Mistborn',
            'author'=>'Brandon Sanderson',
            'year'=>2006,
            'synopsis'=>'storage/book_synopsis/synopsis1.txt',
            'image'=>'storage/book_images/book1.png'],

            ['publisher_id'=>1,
            'title'=>'Dune',
            'author'=>'Frank Herbert',
            'year'=>1965,
            'synopsis'=>'storage/book_synopsis/synopsis2.txt',
            'image'=>'storage/book_images/book2.png'],

            ['publisher_id'=>1,
            'title'=>'Outlander',
            'author'=>'Diana Gabaldon',
            'year'=>1991,
            'synopsis'=>'storage/book_synopsis/synopsis3.txt',
            'image'=>'storage/book_images/book3.png'],

            ['publisher_id'=>3,
            'title'=>'Shards of Honor',
            'author'=>'Lois McMaster Bujold',
            'year'=>1986,
            'synopsis'=>'storage/book_synopsis/synopsis4.txt',
            'image'=>'storage/book_images/book4.png'],

            ['publisher_id'=>2,
            'title'=>'A Court of Thorns and Roses',
            'author'=>'Sarah J. Maas',
            'year'=>2015,
            'synopsis'=>'storage/book_synopsis/synopsis5.txt',
            'image'=>'storage/book_images/book5.png'],

            ['publisher_id'=>4,
            'title'=>'The Silent Patient',
            'author'=>'Alex Michaelides',
            'year'=>2019,
            'synopsis'=>'storage/book_synopsis/synopsis6.txt',
            'image'=>'storage/book_images/book6.png'],

            ['publisher_id'=>3,
            'title'=>'Storm Front',
            'author'=>'Jim Butcher',
            'year'=>2000,
            'synopsis'=>'storage/book_synopsis/synopsis7.txt',
            'image'=>'storage/book_images/book7.png'],

            ['publisher_id'=>3,
            'title'=>'Red, White & Royal Blue',
            'author'=>'Red, White & Royal Blue',
            'year'=>2019,
            'synopsis'=>'storage/book_synopsis/synopsis8.txt',
            'image'=>'storage/book_images/book8.png'],

        ]);
    }
}
