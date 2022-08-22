<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class questionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('questions')->insert([[
            'id'=>'1',
            'question' => 'In which directory controllers are kept in laravel',
            
           
        ],[
            'id'=>'2',
            'question' => ' Who developed Laravel?',
           
        ],
        [
            'id'=>'3',
            'question' => 'Where do we need to set database connection in Laravel?',
           
        ],
        [
            'id'=>'4',
            'question' => 'Composer is a tool for ______ in PHP.',
           
        ],
        [
            'id'=>'5',
            'question' => 'For what do the .env is used?',
           
        ],
        [
            'id'=>'6',
            'question' => 'Which method breaks the collection into multiple, smaller collections of a given size',
           
        ],
        [
            'id'=>'7',
            'question' => 'Which one Laravel command line interface?',
           
        ],
        [
            'id'=>'8',
            'question' => 'View files in Laravel end in',
           
        ],
        [
            'id'=>'9',
            'question' => 'What is Laravel?',
           
        ],
        [
            'id'=>'10',
            'question' => 'When was Laravel first released?',
           
        ],
     
        ]);
    }
}
