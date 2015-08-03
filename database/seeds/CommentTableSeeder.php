<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
        [
            'post_id' => '1',
            'email' =>  'alban1@gmail.com',
            'message' => 'genial',
        ],
        [
            'post_id' => '2',
            'email' =>  'alban2@gmail.com',
            'message' => 'genial',
        ],
        [
            'post_id' => '3',
            'email' =>  'alban3@gmail.com',
            'message' => 'genial',
        ],
        [
            'post_id' => '1',
            'email' =>  'alban11@gmail.com',
            'message' => 'genial',
        ]
    ]);
    }
}
