<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        	'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
        	'title' => 'Harry Potter',
        	'description' => 'suppper cool book',
        	'price' => 15
        	]);
        $product->save();

        $product = new \App\Product([
        	'imagePath' => 'https://files.nc.gov/ncdcr/1140-yeager-sell-your-used-books.imgcache.rev661df3f628ce819a8306ca96aa6bc36f_0.jpg',
        	'title' => 'Another Book',
        	'description' => 'suppper cool book',
        	'price' => 15
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'https://ewedit.files.wordpress.com/2016/09/hpsorcstone.jpg?w=405',
        	'title' => 'Harry Potter',
        	'description' => 'suppper cool book',
        	'price' => 15
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'http://milestoneseducation.com/wp-content/uploads/2016/06/Books-bookshelf-person-head-540w.jpg',
        	'title' => 'Harry Potter Update',
        	'description' => 'suppper cool book',
        	'price' => 15
        	]);
        $product->save();
        $product = new \App\Product([
        	'imagePath' => 'https://www.publishersweekly.com/images/cached/ARTICLE_PHOTO/photo/000/000/046/46021-v1-600x.JPG',
        	'title' => 'Harry Potter',
        	'description' => 'suppper cool book',
        	'price' => 15
        	]);
        $product->save();
    }
}
