<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            ['name' => 'Article 1'],
            ['name' => 'Article 2'],
            ['name' => 'Article 3'],
            ['name' => 'Article 4'],
            ['name' => 'Article 5'],
            ['name' => 'Article 6'],
            ['name' => 'Article 7'],
            ['name' => 'Article 8'],
            ['name' => 'Article 9'],
            ['name' => 'Article 10'],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
