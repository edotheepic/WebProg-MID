<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            ['name'=>'Penguin Random House',
            'address'=>'One Embassy Gardens, 8 Viaduct Gardens, London, SW11 7BW',
            'phone'=>'800-733-3000',
            'email'=>'consumerservices@penguinrandomhouse.com',
            'image'=>'storage/publisher_images/publisher1.png'],

            ['name'=>'Hachette Book Group',
            'address'=>'1290 Avenue of the Americas, New York, NY 10104',
            'phone'=>'800-759-0190',
            'email'=>'hachette.books@hbgusa.com',
            'image'=>'storage/publisher_images/publisher2.png'],

            ['name'=>'Harper Collins Publishers',
            'address'=>'195 Broadway, New York, NY 10007',
            'phone'=>'800-242-7737',
            'email'=>' orders@harpercollins.com',
            'image'=>'storage/publisher_images/publisher3.png'],

            ['name'=>'Macmillan Publishers',
            'address'=>'120 Broadway, New York, NY 10271',
            'phone'=>'646-307-5048',
            'email'=>'narrators@macmillan.com',
            'image'=>'storage/publisher_images/publisher4.png'],

        ]);
    }
}
