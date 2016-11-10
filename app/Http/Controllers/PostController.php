<?php
/**
 * Created by PhpStorm.
 * User: Zoki
 * Date: 11/9/2016
 * Time: 2:31 PM
 */

namespace App\Http\Controllers;


class PostController extends Controller
{
    public function getBlogIndex() {
        // Fetch posts and paginate
        return view('frontend.blog.index');
    }

    public function getSinglePost($post_id, $end = 'frontend') {
        // Fetch the post
        return view($end . '.blog.single');
    }
}