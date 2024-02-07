<?php

namespace Database\Seeders;


use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {




        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        $user=User::factory()->create([
            'name'=>'Stephen King'
        ]);

        Post::factory(10)->create([
            'user_id'=>$user->id
        ]);

        // $user=User::factory()->create();

        // $personal=Category::create([
        //     'name'=> 'Personal',
        //     'slug'=> 'personal'
        // ]);

        // $family=Category::create([
        //     'name'=> 'Family',
        //     'slug'=> 'family'
        // ]);

        // $work=Category::create([
        //     'name'=> 'Work',
        //     'slug'=> 'work'
        // ]);

        // Post::create([
        //     'user_id'=> $user->id,
        //     'category_id'=>$family->id,
        //     'title'=>'My Family Post',
        //     'slug'=>'my-family-post',
        //     'excerpt'=>'<p>DevOps is the combination of cultural philosophies, practices, and tools</p>',
        //     'body'=>'<p>DevOps is the combination of cultural philosophies, practices, and tools that increases an organization’s ability to deliver applications and services at high velocity: evolving and improving products at a faster pace than organizations using traditional software development and infrastructure management processes. This speed enables organizations to better serve their customers and compete more effectively in the market.</p>'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$work->id,
        //     'title'=>'My work Post',
        //     'slug'=>'my-work-post',
        //     'excerpt'=>'<p>DevOps is the combination of cultural philosophies, practices, and tools</p>',
        //     'body'=>'<p>DevOps is the combination of cultural philosophies, practices, and tools that increases an organization’s ability to deliver applications and services at high velocity: evolving and improving products at a faster pace than organizations using traditional software development and infrastructure management processes. This speed enables organizations to better serve their customers and compete more effectively in the market.</p>'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$personal->id,
        //     'title'=>'My Personal Post',
        //     'slug'=>'my-personal-post',
        //     'excerpt'=>'<p>DevOps is the combination of cultural philosophies, practices, and tools</p>',
        //     'body'=>'<p>DevOps is the combination of cultural philosophies, practices, and tools that increases an organization’s ability to deliver applications and services at high velocity: evolving and improving products at a faster pace than organizations using traditional software development and infrastructure management processes. This speed enables organizations to better serve their customers and compete more effectively in the market.</p>'
        // ]);
    }


}
