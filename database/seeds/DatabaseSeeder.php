<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        /*
        Thêm 1 record vào db
        DB::table('articles')->insert([
            'title'=>'ABC',
            'content'=>'laia'
        ]);*/
    }
}
