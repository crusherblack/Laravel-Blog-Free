<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;

class BlogController extends Controller
{
    public function index(Posts $posts){
        $category_widget = Category::all();

    	$data = $posts->latest()->take(8)->get();
    	return view('blog', compact('data','category_widget'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        
    	$data = Posts::where('slug', $slug)->get();
    	return view('blog.isi_post', compact('data','category_widget'));
    }

    public function list_blog(){
        $category_widget = Category::all();

    	$data = Posts::latest()->paginate(6);
    	return view('blog.list_post', compact('data','category_widget'));
    }

    public function list_category(category $category){
        $category_widget = Category::all();

        $data = $category->posts()->paginate();
        return view('blog.list_post', compact('data','category_widget'));
    }
}
