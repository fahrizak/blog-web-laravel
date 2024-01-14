<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        User::create([
            'name' => 'Fahriza Kurniawan',
            'username' => 'fahriza',
            'email' => 'fahriza@gmail.com',
            'password' => bcrypt('asdfa'),
            'is_admin' => true,
        ]);

        User::factory(3)->create();
        // User::create([
        //     'name' => 'Moly Groves',
        //     'email' => 'moly@gmeil.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'laptop'
        ]);
        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);
        Category::create([
            'name' => 'Kids',
            'slug' => 'kids'
        ]);
        
        Category::create([
            'name' => 'Rumah',
            'slug' => 'home'
        ]);

        Post::factory(35)->create();

        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim voluptatem. Incidunt, unde modi ullam voluptates nemo sunt nam dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ad excepturi quas dolore consectetur eius quos ipsam itaque? Possimus eveniet a ab, provident beatae eum porro sunt asperiores commodi magni impedit ipsam. Commodi facere facilis atque maiores quas aspernatur illum expedita quibusdam iste eligendi nulla sed veniam exercitationem, cupiditate minus reiciendis dolor, fugit hic? Laudantium soluta animi veritatis sed odio libero alias eos perferendis, quos corporis laborum quaerat, quia sapiente totam voluptas deleniti reiciendis sunt commodi nulla sint adipisci. Nihil?',
        //     'category_id' => 1,
        //     'user_id' => 1 
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judulkedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim voluptatem. Incidunt, unde modi ullam voluptates nemo sunt nam dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ad excepturi quas dolore consectetur eius quos ipsam itaque? Possimus eveniet a ab, provident beatae eum porro sunt asperiores commodi magni impedit ipsam. Commodi facere facilis atque maiores quas aspernatur illum expedita quibusdam iste eligendi nulla sed veniam exercitationem, cupiditate minus reiciendis dolor, fugit hic? Laudantium soluta animi veritatis sed odio libero alias eos perferendis, quos corporis laborum quaerat, quia sapiente totam voluptas deleniti reiciendis sunt commodi nulla sint adipisci. Nihil?',
        //     'category_id' => 2,
        //     'user_id' => 1 
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judulktiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim voluptatem. Incidunt, unde modi ullam voluptates nemo sunt nam dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ad excepturi quas dolore consectetur eius quos ipsam itaque? Possimus eveniet a ab, provident beatae eum porro sunt asperiores commodi magni impedit ipsam. Commodi facere facilis atque maiores quas aspernatur illum expedita quibusdam iste eligendi nulla sed veniam exercitationem, cupiditate minus reiciendis dolor, fugit hic? Laudantium soluta animi veritatis sed odio libero alias eos perferendis, quos corporis laborum quaerat, quia sapiente totam voluptas deleniti reiciendis sunt commodi nulla sint adipisci. Nihil?',
        //     'category_id' => 2,
        //     'user_id' => 2 
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judulkmatp',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, enim voluptatem. Incidunt, unde modi ullam voluptates nemo sunt nam dignissimos.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ad excepturi quas dolore consectetur eius quos ipsam itaque? Possimus eveniet a ab, provident beatae eum porro sunt asperiores commodi magni impedit ipsam. Commodi facere facilis atque maiores quas aspernatur illum expedita quibusdam iste eligendi nulla sed veniam exercitationem, cupiditate minus reiciendis dolor, fugit hic? Laudantium soluta animi veritatis sed odio libero alias eos perferendis, quos corporis laborum quaerat, quia sapiente totam voluptas deleniti reiciendis sunt commodi nulla sint adipisci. Nihil?',
        //     'category_id' => 1,
        //     'user_id' => 2 
        // ]);


    }
}
