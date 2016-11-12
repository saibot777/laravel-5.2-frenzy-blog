<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    public function getCategoryIndex() {
        $categories = Category::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.blog.categories', ['categories' => $categories]);
    }
}