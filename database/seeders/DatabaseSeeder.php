<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $hash=Hash::make('12345678');
        DB::table('users')->insert([

            ['name' => "admin",'username'=>'admin','email'=>'admin@gmail.com','role'=>'admin','password'=>''.$hash.'','profile'=>'avatar.jpg'],

        ]);

        DB::table('footers')->insert([

            ['h_image' => "header.png",'f_image'=>'header.png'],

        ]);
//        DB::table('ipaddresses')->insert([
//
//            ['ip' => "72.255.43.80"],
//
//        ]);
        DB::table('radios')->insert([

            ['radio' => "https://usa10.fastcast4u.com/xzelion",'title'=>'test radio text','image'=>'radio.png
            '],

        ]);

        DB::table('social_settings')->insert([
            [
                'googleClient' => "495871250616-rg38ul567u2r8gjofss4fjpmq1ll4uda.apps.googleusercontent.com"
                ,'googleSecret'=>'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',
                'facebookClient'=>'269148538571749',
                'facebookSecret'=>'d349e04db705e11b0367ced9dbc7d57b',
                'twitterClient'=>'1',
                'twitterSecret'=>'1'
            ],

        ]);


    }
}
