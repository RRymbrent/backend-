<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Example Categories
        DB::table('categories')->insert([
            ['name' => 'Math'],
            ['name' => 'Science'],
        ]);

        // Example Levels
        DB::table('levels')->insert([
            ['category_id' => 1, 'name' => 'Level 1'],
            ['category_id' => 1, 'name' => 'Level 2'],
            ['category_id' => 2, 'name' => 'Level 1'],
        ]);

        // Example Questions
        DB::table('questions')->insert([
            ['level_id' => 1, 'question_text' => 'What is 2 + 2?'],
            ['level_id' => 1, 'question_text' => 'What is 3 x 3?'],
        ]);

        // Example Answers
        DB::table('answers')->insert([
            ['question_id' => 1, 'answer_text' => '3', 'is_correct' => false],
            ['question_id' => 1, 'answer_text' => '4', 'is_correct' => true],
            ['question_id' => 2, 'answer_text' => '6', 'is_correct' => false],
            ['question_id' => 2, 'answer_text' => '9', 'is_correct' => true],
        ]);
    }
}


