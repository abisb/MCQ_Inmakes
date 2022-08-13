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
            'question' => 'Who is known as the father of PHP?',
            
           
        ],[
            'id'=>'2',
            'question' => 'What is the name of scripting engine in PHP?',
           
        ],
        [
            'id'=>'3',
            'question' => 'How can you retrieve a cookie value?',
           
        ],
        [
            'id'=>'4',
            'question' => 'Which of the following is the correct syntax to write a PHP code?',
           
        ],
        [
            'id'=>'5',
            'question' => 'Which of the following is the correct way to add a comment in PHP code?',
           
        ],
        [
            'id'=>'6',
            'question' => 'Which of the following is the default file extension of PHP files?',
           
        ],
        [
            'id'=>'7',
            'question' => 'Which of the following PHP functions can be used for generating unique ids?',
           
        ],
        [
            'id'=>'8',
            'question' => 'A function in PHP which starts with __ (double underscore) is known as _________',
           
        ],
        [
            'id'=>'9',
            'question' => 'Which of the following web servers are required to run the PHP script?',
           
        ],
        [
            'id'=>'10',
            'question' => 'Which one of the following PHP function is used to determine a file’s last access time?',
           
        ],
     
        ]);
    }
}
