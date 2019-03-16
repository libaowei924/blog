<?php

use Illuminate\Database\Seeder;

class ArticleTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'type' => 'laravel',
                'icon' => 'laravel',
                'name' => 'Laravel',
            ],
            [
                'type' => 'php',
                'icon' => 'php',
                'name' => 'PHP',
            ],
            [
                'type' => 'node',
                'icon' => 'node',
                'name' => 'Node',
            ],
            [
                'type' => 'linux',
                'icon' => 'linux',
                'name' => 'Linux',
            ],
            [
                'type' => 'react',
                'icon' => 'react',
                'name' => 'React',
            ],
        ];
        DB::table('articletypes')->insert($data);
    }
}
