<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class optionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('options')->insert([
            [
            'option' => 'app/http/Controllers',
            'points'=>1,
            'question_id'=>1
            
           
        ],[
            'option' => 'app/http/Views',
            'points'=>0,
            'question_id'=>1
           
        ]
        ,[
            'option' => 'app/http/Model',
            'points'=>0,
            'question_id'=>1
           
        ]
        ,[
            'option' => 'app/http/routes',
            'points'=>0,
            'question_id'=>1
           
        ],



        [
            'option' => 'Guido van Rossum',
            'points'=>0,
            'question_id'=>2
            
           
        ],[
            'option' => 'James Gosling',
            'points'=>0,
            'question_id'=>2
           
        ]
        ,[
            'option' => 'Rasmus Lerdorf',
            'points'=>0,
            'question_id'=>2
           
        ]
        ,[
            'option' => 'Taylor Otwell',
            'points'=>1,
            'question_id'=>2
           
        ],


        [
            'option' => 'config.php',
            'points'=>0,
            'question_id'=>3
            
           
        ],[
            'option' => '.ENV file',
            'points'=>1,
            'question_id'=>3
           
        ]
        ,[
            'option' => 'setting.php',
            'points'=>0,
            'question_id'=>3
           
        ]
        ,[
            'option' => 'In seed files',
            'points'=>0,
            'question_id'=>3
           
        ],


        [
            'option' => 'Interpolation',
            'points'=>0,
            'question_id'=>4
            
           
        ],[
            'option' => 'configuration',
            'points'=>0,
            'question_id'=>4
           
        ]
        ,[
            'option' => 'dependency management',
            'points'=>1,
            'question_id'=>4
           
        ]
        ,[
            'option' => 'None of the above',
            'points'=>0,
            'question_id'=>4
           
        ],



        [
            'option' => 'For running cron jobs',
            'points'=>0,
            'question_id'=>5
            
           
        ],[
            'option' => 'For tracking vendors',
            'points'=>0,
            'question_id'=>5
           
        ]
        ,[
            'option' => 'For setting environment variables',
            'points'=>1,
            'question_id'=>5
           
        ]
        ,[
            'option' => 'None of These',
            'points'=>0,
            'question_id'=>5
           
        ],

        [
            'option' => 'split()',
            'points'=>1,
            'question_id'=>6
            
           
        ],[
            'option' => 'chunk()',
            'points'=>0,
            'question_id'=>6
           
        ]
        ,[
            'option' => 'explode()',
            'points'=>0,
            'question_id'=>6
           
        ]
        ,[
            'option' => 'break()',
            'points'=>0,
            'question_id'=>6
           
        ],



        [
            'option' => 'composer',
            'points'=>0,
            'question_id'=>7
            
           
        ],[
            'option' => 'php artisan',
            'points'=>1,
            'question_id'=>7
           
        ]
        ,[
            'option' => 'git',
            'points'=>0,
            'question_id'=>7
           
        ]
        ,[
            'option' => 'CLI',
            'points'=>0,
            'question_id'=>7
           
        ],




        [
            'option' => '.php',
            'points'=>0,
            'question_id'=>8
            
           
        ],[
            'option' => '.vue',
            'points'=>0,
            'question_id'=>8
           
        ]
        ,[
            'option' => '.php',
            'points'=>0,
            'question_id'=>8
           
        ]
        ,[
            'option' => '.blade.php',
            'points'=>1,
            'question_id'=>8
           
        ],




        [
            'option' => 'Programming language',
            'points'=>0,
            'question_id'=>9
            
           
        ],[
            'option' => 'PHP framework',
            'points'=>1,
            'question_id'=>9
           
        ]
        ,[
            'option' => 'Code generator',
            'points'=>0,
            'question_id'=>9
           
        ]
        ,[
            'option' => 'None of the above',
            'points'=>0,
            'question_id'=>9
           
        ],



        [
            'option' => 'June 2009',
            'points'=>0,
            'question_id'=>10
            
           
        ],[
            'option' => 'June 2011',
            'points'=>1,
            'question_id'=>10
           
        ]
        ,[
            'option' => 'June 2007',
            'points'=>0,
            'question_id'=>10
           
        ]
        ,[
            'option' => 'All are Correct',
            'points'=>0,
            'question_id'=>10
           
        ],
    ]);


    }
}
