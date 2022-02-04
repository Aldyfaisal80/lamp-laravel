<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Aldy Faizal',
            'username' => 'aldyfaisal80',
            'email' => 'aldyfaisal80@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Erwan',
        //     'email' => 'Erwan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

         User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-progamming'

        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'

        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nulla tempore',
        //     'body' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nulla tempore consequatur voluptatibus, natus id animi adipisci odit porro obcaecati vero ex dolorum sapiente, debitis numquam placeat consequuntur veritatis ducimus aliquid sequi. Aut molestiae laudantium odit vel adipisci assumenda numquam nobis ullam. Id aliquid quod officiis sed quisquam iure minus. Modi provident error incidunt sunt tempora quo repudiandae nihil enim, nostrum veritatis culpa sequi eos quia cumque illo quaerat! Suscipit, ea fugit? Soluta, veniam, consectetur, fuga sit quibusdam iure earum distinctio temporibus exercitationem accusantium aspernatur. Exercitationem nobis fugit facilis non sequi error, rem necessitatibus sint vitae, temporibus doloremque officia amet?',
        //     'category_id' => 1,
        //     'user_id' => 1
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nulla tempore',
        //     'body' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nulla tempore consequatur voluptatibus, natus id animi adipisci odit porro obcaecati vero ex dolorum sapiente, debitis numquam placeat consequuntur veritatis ducimus aliquid sequi. Aut molestiae laudantium odit vel adipisci assumenda numquam nobis ullam. Id aliquid quod officiis sed quisquam iure minus. Modi provident error incidunt sunt tempora quo repudiandae nihil enim, nostrum veritatis culpa sequi eos quia cumque illo quaerat! Suscipit, ea fugit? Soluta, veniam, consectetur, fuga sit quibusdam iure earum distinctio temporibus exercitationem accusantium aspernatur. Exercitationem nobis fugit facilis non sequi error, rem necessitatibus sint vitae, temporibus doloremque officia amet?',
        //     'category_id' => 1,
        //     'user_id' => 1
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nulla tempore',
        //     'body' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nulla tempore consequatur voluptatibus, natus id animi adipisci odit porro obcaecati vero ex dolorum sapiente, debitis numquam placeat consequuntur veritatis ducimus aliquid sequi. Aut molestiae laudantium odit vel adipisci assumenda numquam nobis ullam. Id aliquid quod officiis sed quisquam iure minus. Modi provident error incidunt sunt tempora quo repudiandae nihil enim, nostrum veritatis culpa sequi eos quia cumque illo quaerat! Suscipit, ea fugit? Soluta, veniam, consectetur, fuga sit quibusdam iure earum distinctio temporibus exercitationem accusantium aspernatur. Exercitationem nobis fugit facilis non sequi error, rem necessitatibus sint vitae, temporibus doloremque officia amet?',
        //     'category_id' => 2,
        //     'user_id' => 1
        //  ]);

        //  Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nulla tempore',
        //     'body' =>  'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim, nulla tempore consequatur voluptatibus, natus id animi adipisci odit porro obcaecati vero ex dolorum sapiente, debitis numquam placeat consequuntur veritatis ducimus aliquid sequi. Aut molestiae laudantium odit vel adipisci assumenda numquam nobis ullam. Id aliquid quod officiis sed quisquam iure minus. Modi provident error incidunt sunt tempora quo repudiandae nihil enim, nostrum veritatis culpa sequi eos quia cumque illo quaerat! Suscipit, ea fugit? Soluta, veniam, consectetur, fuga sit quibusdam iure earum distinctio temporibus exercitationem accusantium aspernatur. Exercitationem nobis fugit facilis non sequi error, rem necessitatibus sint vitae, temporibus doloremque officia amet?',
        //     'category_id' => 2,
        //     'user_id' => 2
        //  ]);


    }
}
