<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use App\Models\Posts;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Mukhamad Firdaus',
            'username' => 'daus',
            'email' => 'dauspunya@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Atif Fahrian',
            'username' => 'Atif',
            'email' => 'atifpunyaemail@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Posts::create([
            'title' => 'Postingan Pertama',
            'slug' => 'postingan-pertama',
            'body' =>
            ' <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, mollitia! Quos et ratione deserunt repudiandae similique placeat nostrum praesentium, sint repellat? Minus esse illum, animi dolor iusto quisquam quae eius, inventore provident optio minima nesciunt consectetur blanditiis quis nihil id doloribus tempore error fugiat maxime? Veritatis earum, voluptatum blanditiis tenetur magni dolorum eaque nostrum doloribus quae! Voluptatem ullam libero amet a impedit totam ratione nesciunt, quam repellendus. Nostrum eos ut atque cumque deleniti doloremque aliquam ratione, nulla voluptates velit consequuntur, pariatur accusamus iste dolorum quia harum excepturi impedit nisi quos maxime eveniet. Mollitia eum, optio dolores molestias voluptatibus perferendis doloremque!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis optio consectetur at ex unde! Illum ipsa molestiae corrupti deserunt dolore corporis quibusdam odit enim porro, at quas dolores, nulla sit reprehenderit eligendi aliquid, rem cupiditate distinctio quod molestias quaerat. Nihil voluptatum, nobis nostrum aliquam minima eveniet! Iusto praesentium minus laudantium minima ducimus, officiis adipisci? At, beatae fugiat. Fugiat rerum culpa facilis saepe corrupti, sunt reiciendis nobis repellat totam repudiandae accusantium excepturi debitis praesentium aut fuga adipisci itaque dolorum officia vel asperiores recusandae corporis at repellendus est? Dicta, totam ullam sit repellat dolorem ab maxime provident odit, repudiandae, aliquid necessitatibus labore.</p> ',
            'user_id' => '1'
        ]);
    }
}
