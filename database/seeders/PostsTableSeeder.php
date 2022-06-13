<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = User::create([

            'name'      =>  'John Doe',
            'email'     =>  'john@doe.com',
            'password'  =>  Hash::make('password')

        ]);

        $author2 = User::create([

            'name'      =>  'Jane Doe',
            'email'     =>  'jane@doe.com',
            'password'  =>  Hash::make('password')

        ]);

        $category1 = category::create([
            'name' => 'News'
        ]);

        $category2 = category::create([
            'name' => 'Mrketing'
        ]);
        
        $category3 = category::create([
            'name' => 'Partnership'
        ]);

        $tag1 = Tag::create([
            'name' => 'Job'
        ]);

        $tag2 = Tag::create([
            'name' => 'Customers'
        ]);
        
        $tag3 = Tag::create([
            'name' => 'Record'
        ]);

        $post1 = Post::create([

            'title'         =>  'We relocated our office to a new designed garage.',
            'content'       =>  'Lorem ipsum dolor sit amet lacus neque dui bibendum quam tempor velit fringilla pellentesque erat dignissim cursus lectus ad auctor placerat luctus dictum curabitur gravida nam nullam tristique posuere tincidunt',
            'category_id'   =>  $category1->id,
            'image'         =>  'posts/img1.jpg',
            'user_id'       =>  $author1->id
        ]);

        $post2 = Post::create([

            'title'         =>  'We relocated our office to a new designed garage.',
            'content'       =>  'Lorem ipsum dolor sit amet lacus neque dui bibendum quam tempor velit fringilla pellentesque erat dignissim cursus lectus ad auctor placerat luctus dictum curabitur gravida nam nullam tristique posuere tincidunt',
            'category_id'   =>  $category2->id,
            'image'         =>  'posts/img2.jpg',
            'user_id'       =>  $author2->id
        ]);

        $post3 = Post::create([

            'title'         =>  'We relocated our office to a new designed garage.',
            'content'       =>  'Lorem ipsum dolor sit amet lacus neque dui bibendum quam tempor velit fringilla pellentesque erat dignissim cursus lectus ad auctor placerat luctus dictum curabitur gravida nam nullam tristique posuere tincidunt',
            'category_id'   =>  $category3->id,
            'image'         =>  'posts/img3.jpg',
            'user_id'       =>  $author1->id
        ]);

        $post4 = Post::create([

            'title'         =>  'We relocated our office to a new designed garage.',
            'content'       =>  'Lorem ipsum dolor sit amet lacus neque dui bibendum quam tempor velit fringilla pellentesque erat dignissim cursus lectus ad auctor placerat luctus dictum curabitur gravida nam nullam tristique posuere tincidunt',
            'category_id'   =>  $category2->id,
            'image'         =>  'posts/img4.jpg',
            'user_id'       =>  $author1->id
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);

        $post2->tags()->attach([$tag2->id, $tag3->id]);

        $post3->tags()->attach([$tag1->id, $tag3->id]);


    }
}