<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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


        User::create([
            'name' => 'Akbar Imawan Dwi Cahya',
            'username' => 'Akbar Imawan',
            'email' => 'akbarimawan18@gmail.com',
            'password' => bcrypt('123')
        ]);

        // User::create([
        //     'name' => 'Aisyah Nora kurniawati',
        //     'email' => 'aisyah@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure praesentium odio fugit',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure praesentium odio fugit, iste, aut quaerat voluptatem neque, hic quos ipsa porro perferendis assumenda quam consequatur tempore exercitationem. Adipisci modi beatae aperiam tenetur laborum ipsam debitis placeat vitae unde. Reiciendis voluptatibus consectetur corporis veritatis aliquid, placeat ipsam quae cumque fuga iure.</p><p> Iusto nam, quibusdam, obcaecati molestiae magni voluptates autem voluptas mollitia, qui labore odio possimus hic perferendis nulla voluptate ad dolorum corporis sed id iste voluptatibus alias quidem dignissimos nobis? Laborum dignissimos at vero nobis numquam, quisquam ea facilis, iste odio voluptatem totam quod expedita dolor optio eaque cumque, modi sapiente eum ratione id.</p><p> Laboriosam natus, consectetur debitis esse totam perspiciatis, hic atque quisquam quas blanditiis voluptatibus obcaecati porro voluptatum mollitia deleniti fugit fugiat. Iusto id maxime, fugiat laudantium commodi at pariatur quis officiis nesciunt velit doloribus dicta dolore iste consectetur voluptatibus quam omnis deleniti suscipit adipisci laborum accusantium, repellendus necessitatibus quas fuga. Inventore laborum quisquam dolorem facilis aspernatur dicta maxime placeat error, magnam nesciunt debitis reiciendis, cum consectetur, earum at quidem? Qui recusandae laborum facere ad aliquam nisi. Nisi, id?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure praesentium odio fugit',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure praesentium odio fugit, iste, aut quaerat voluptatem neque, hic quos ipsa porro perferendis assumenda quam consequatur tempore exercitationem. Adipisci modi beatae aperiam tenetur laborum ipsam debitis placeat vitae unde. Reiciendis voluptatibus consectetur corporis veritatis aliquid, placeat ipsam quae cumque fuga iure.</p><p> Iusto nam, quibusdam, obcaecati molestiae magni voluptates autem voluptas mollitia, qui labore odio possimus hic perferendis nulla voluptate ad dolorum corporis sed id iste voluptatibus alias quidem dignissimos nobis? Laborum dignissimos at vero nobis numquam, quisquam ea facilis, iste odio voluptatem totam quod expedita dolor optio eaque cumque, modi sapiente eum ratione id.</p><p> Laboriosam natus, consectetur debitis esse totam perspiciatis, hic atque quisquam quas blanditiis voluptatibus obcaecati porro voluptatum mollitia deleniti fugit fugiat. Iusto id maxime, fugiat laudantium commodi at pariatur quis officiis nesciunt velit doloribus dicta dolore iste consectetur voluptatibus quam omnis deleniti suscipit adipisci laborum accusantium, repellendus necessitatibus quas fuga. Inventore laborum quisquam dolorem facilis aspernatur dicta maxime placeat error, magnam nesciunt debitis reiciendis, cum consectetur, earum at quidem? Qui recusandae laborum facere ad aliquam nisi. Nisi, id?</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure praesentium odio fugit',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure praesentium odio fugit, iste, aut quaerat voluptatem neque, hic quos ipsa porro perferendis assumenda quam consequatur tempore exercitationem. Adipisci modi beatae aperiam tenetur laborum ipsam debitis placeat vitae unde. Reiciendis voluptatibus consectetur corporis veritatis aliquid, placeat ipsam quae cumque fuga iure.</p><p> Iusto nam, quibusdam, obcaecati molestiae magni voluptates autem voluptas mollitia, qui labore odio possimus hic perferendis nulla voluptate ad dolorum corporis sed id iste voluptatibus alias quidem dignissimos nobis? Laborum dignissimos at vero nobis numquam, quisquam ea facilis, iste odio voluptatem totam quod expedita dolor optio eaque cumque, modi sapiente eum ratione id.</p><p> Laboriosam natus, consectetur debitis esse totam perspiciatis, hic atque quisquam quas blanditiis voluptatibus obcaecati porro voluptatum mollitia deleniti fugit fugiat. Iusto id maxime, fugiat laudantium commodi at pariatur quis officiis nesciunt velit doloribus dicta dolore iste consectetur voluptatibus quam omnis deleniti suscipit adipisci laborum accusantium, repellendus necessitatibus quas fuga. Inventore laborum quisquam dolorem facilis aspernatur dicta maxime placeat error, magnam nesciunt debitis reiciendis, cum consectetur, earum at quidem? Qui recusandae laborum facere ad aliquam nisi. Nisi, id?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure praesentium odio fugit',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure praesentium odio fugit, iste, aut quaerat voluptatem neque, hic quos ipsa porro perferendis assumenda quam consequatur tempore exercitationem. Adipisci modi beatae aperiam tenetur laborum ipsam debitis placeat vitae unde. Reiciendis voluptatibus consectetur corporis veritatis aliquid, placeat ipsam quae cumque fuga iure.</p><p> Iusto nam, quibusdam, obcaecati molestiae magni voluptates autem voluptas mollitia, qui labore odio possimus hic perferendis nulla voluptate ad dolorum corporis sed id iste voluptatibus alias quidem dignissimos nobis? Laborum dignissimos at vero nobis numquam, quisquam ea facilis, iste odio voluptatem totam quod expedita dolor optio eaque cumque, modi sapiente eum ratione id.</p><p> Laboriosam natus, consectetur debitis esse totam perspiciatis, hic atque quisquam quas blanditiis voluptatibus obcaecati porro voluptatum mollitia deleniti fugit fugiat. Iusto id maxime, fugiat laudantium commodi at pariatur quis officiis nesciunt velit doloribus dicta dolore iste consectetur voluptatibus quam omnis deleniti suscipit adipisci laborum accusantium, repellendus necessitatibus quas fuga. Inventore laborum quisquam dolorem facilis aspernatur dicta maxime placeat error, magnam nesciunt debitis reiciendis, cum consectetur, earum at quidem? Qui recusandae laborum facere ad aliquam nisi. Nisi, id?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
