<?php

namespace App\Http\Controllers\Web;

use App\Models\Drawing;
use App\Models\Category;
use App\Models\Users\Admin;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
		$user = Admin::find(1);
		$categories = Category::all();

    	return view('web.home', [
			'user' => $user,
			'categories' => $categories,
    	]);
	}
	
	public function portfolio($categoryName)
	{
		$category = Category::where('name', $categoryName)->first();
		$drawings = Drawing::where('category_id', $category->id)->get();

		return view('web.portfolio', [
			'category' => $category,
			'drawings' => $drawings,
		]);
	}
}
