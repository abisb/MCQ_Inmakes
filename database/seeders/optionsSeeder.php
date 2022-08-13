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
            'option' => 'Rasmus Lerdorf',
            'points'=>1,
            'question_id'=>1
            
           
        ],[
            'option' => 'Lane Lerdorf',
            'points'=>0,
            'question_id'=>1
           
        ]
        ,[
            'option' => 'Jone Lerdorf',
            'points'=>0,
            'question_id'=>1
           
        ]
        ,[
            'option' => 'Kane Lerdorf',
            'points'=>0,
            'question_id'=>1
           
        ],



        [
            'option' => 'Zend Engine 0',
            'points'=>0,
            'question_id'=>2
            
           
        ],[
            'option' => 'Zeo Engine 2.',
            'points'=>0,
            'question_id'=>2
           
        ]
        ,[
            'option' => 'Zend Engine 9',
            'points'=>0,
            'question_id'=>2
           
        ]
        ,[
            'option' => 'Zend Engine 2',
            'points'=>1,
            'question_id'=>2
           
        ],


        [
            'option' => 'echo $_SESSION ["user"];',
            'points'=>0,
            'question_id'=>3
            
           
        ],[
            'option' => 'echo $_COOKIE ["user"];',
            'points'=>1,
            'question_id'=>3
           
        ]
        ,[
            'option' => 'echo $_COOKIEE ["user"];',
            'points'=>0,
            'question_id'=>3
           
        ]
        ,[
            'option' => 'echo $_COOKIE_USER ["user"];',
            'points'=>0,
            'question_id'=>3
           
        ],


        [
            'option' => '<?php ?>',
            'points'=>0,
            'question_id'=>4
            
           
        ],[
            'option' => '< php >',
            'points'=>0,
            'question_id'=>4
           
        ]
        ,[
            'option' => '< ? php ?>',
            'points'=>0,
            'question_id'=>4
           
        ]
        ,[
            'option' => '<? ?>',
            'points'=>1,
            'question_id'=>4
           
        ],



        [
            'option' => '#',
            'points'=>0,
            'question_id'=>5
            
           
        ],[
            'option' => '//',
            'points'=>0,
            'question_id'=>5
           
        ]
        ,[
            'option' => '/* */',
            'points'=>0,
            'question_id'=>5
           
        ]
        ,[
            'option' => 'All of the mentioned',
            'points'=>1,
            'question_id'=>5
           
        ],

        [
            'option' => '.php',
            'points'=>1,
            'question_id'=>6
            
           
        ],[
            'option' => '.ph',
            'points'=>0,
            'question_id'=>6
           
        ]
        ,[
            'option' => '.phtt',
            'points'=>0,
            'question_id'=>6
           
        ]
        ,[
            'option' => '.phio',
            'points'=>0,
            'question_id'=>6
           
        ],



        [
            'option' => 'md5()',
            'points'=>0,
            'question_id'=>7
            
           
        ],[
            'option' => 'uniqueid()',
            'points'=>1,
            'question_id'=>7
           
        ]
        ,[
            'option' => 'mdid()',
            'points'=>0,
            'question_id'=>7
           
        ]
        ,[
            'option' => 'id()',
            'points'=>0,
            'question_id'=>7
           
        ],




        [
            'option' => 'Default Function',
            'points'=>0,
            'question_id'=>8
            
           
        ],[
            'option' => 'User Defined Function',
            'points'=>0,
            'question_id'=>8
           
        ]
        ,[
            'option' => 'Inbuilt Function',
            'points'=>0,
            'question_id'=>8
           
        ]
        ,[
            'option' => 'Magic Function',
            'points'=>1,
            'question_id'=>8
           
        ],




        [
            'option' => 'Apache and PHP',
            'points'=>0,
            'question_id'=>9
            
           
        ],[
            'option' => 'IIS',
            'points'=>1,
            'question_id'=>9
           
        ]
        ,[
            'option' => 'XAMPP',
            'points'=>0,
            'question_id'=>9
           
        ]
        ,[
            'option' => 'Any of the mentioned',
            'points'=>0,
            'question_id'=>9
           
        ],



        [
            'option' => 'filetime()',
            'points'=>0,
            'question_id'=>10
            
           
        ],[
            'option' => 'fileatime()',
            'points'=>1,
            'question_id'=>10
           
        ]
        ,[
            'option' => 'fileltime()',
            'points'=>0,
            'question_id'=>10
           
        ]
        ,[
            'option' => 'filectime()',
            'points'=>0,
            'question_id'=>10
           
        ],
    ]);


    }
}
