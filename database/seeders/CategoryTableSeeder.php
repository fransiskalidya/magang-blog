<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                'title' => 'Laravel',
                'slug' => 'laravel',
                'description' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony. ',
                'thumbnail' => 'noimage.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'parent_id' => null
                ],
                [
                'title' => 'React JS',
                'slug' => 'react-js',
                'description' => 'React is a free and open-source front-end JavaScript library for building user interfaces based on UI components. It is maintained by Meta and a community of individual developers and companies.',
                'thumbnail' => 'noimage.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'parent_id' => 1
                ],
                [
                'title' => 'HTML advanced',
                'slug' => 'html-advanced-1',
                'description' => 'HTML tingkat dasar',
                'thumbnail' => 'noimage.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'parent_id' => 1
                ],
                [
                'title' => 'CSS',
                'slug' => 'css',
                'description' => 'CSS atau Cascading Style Sheets adalah salah satu topik yang harus diketahui dalam pengembangan website.',
                'thumbnail' => 'noimage.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'parent_id' => null
                ],
                [
                'title' => 'Javascript',
                'slug' => 'javascript',
                'description' => 'JavaScript adalah salah satu bahasa pemrograman yang sering digunakan oleh website programmer atau website developer.',
                'thumbnail' => 'noimage.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'parent_id' => null
                ],
                [
                'title' => 'PHP',
                'slug' => 'php',
                'description' => 'Hypertext Preprocessor adalah bahasa skrip yang dapat ditanamkan atau disisipkan ke dalam HTML. PHP banyak dipakai untuk memprogram situs web dinamis. PHP dapat digunakan untuk membangun sebuah CMS.',
                'thumbnail' => 'noimage.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'parent_id' => null
                ],
                ]
        );
    }
}
