<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\Route;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key constraints for users and enable it again.
        Schema::disableForeignKeyConstraints();

        \App\Models\User::truncate();
        \App\Models\Role::truncate();
        \App\Models\Category::truncate();
        \App\Models\Post::truncate();
        \App\Models\Tag::truncate();
        \App\Models\Comment::truncate();
        \App\Models\Image::truncate();

        Schema::enableForeignKeyConstraints();

        // Create roles and users
        \App\Models\Role::factory(1)->create();
        \App\Models\Role::factory(1)->create(['name' => 'admin']);

        $blog_routes = Route::getRoutes();
        $permissions_ids = [];
        foreach($blog_routes as $route)
        {
            if(strpos($route->getName(), 'admin') !== false) {
                $permission = \App\Models\Permission::create(['name' => $route->getName()]);
                $permissions_ids[] = $permission->id;
            }
        }

        \App\Models\Role::where('name', 'admin')->first()->permissions()->sync( $permissions_ids );

        $users = \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'newcastle-edumed-foundation',
        'email' => 'newcastle-edumed-foundation@gmail.com',
            'role_id' => 2
        ]);

        foreach ($users as $user) {
            $user->image()->save( \App\Models\Image::factory()->make() );
        }

        \App\Models\Category::factory()->create();

        $posts = \App\Models\Post::factory()->create();

        
        $posts->image()->save( \App\Models\Image::factory()->make() );
        
        \App\Models\Comment::factory(100)->create();

        \App\Models\Tag::factory()->create();

        // foreach($posts as $post)
        // {
        //     $tags_ids = [];
        //     $tags_ids[] = \App\Models\Tag::all()->random()->id;
        //     $tags_ids[] = \App\Models\Tag::all()->random()->id;
        //     $tags_ids[] = \App\Models\Tag::all()->random()->id;

        //     $post->tags()->sync( $tags_ids );
        //     $post->image()->save( \App\Models\Image::factory()->make() );
        // }

        \App\Models\Setting::factory(1)->create();
        \App\Models\Donate::factory()->create();
        \App\Models\Home::factory()->create();
        \App\Models\Footer::factory()->create();
        // \App\Models\About::factory(1)->create();


    }
}
