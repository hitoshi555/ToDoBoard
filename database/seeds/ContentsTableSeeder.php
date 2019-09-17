<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->truncate();

        $contents = [
            ['content' => 'PHP Bookを読む'],
            ['content' => 'laravel Bookを読む'],
            ['content' => 'rails Bookを読む']
        ];

        foreach($contents as $content) {
            \App\Content::create($content);
        }
    }
}
