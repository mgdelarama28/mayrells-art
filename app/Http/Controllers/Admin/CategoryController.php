<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();

    	return view('admin.pages.categories.index', [
    		'categories' => $categories,
    	]);
    }

    public function edit($id)
    {
    	$category = Category::find($id);

    	return view('admin.pages.categories.edit', [
    		'category' => $category,
    	]);
    }

    public function update(Request $request, $id)
    {
    	$vars = $request->except(['_token']);
		$category = Category::findOrFail($id);
		
		if($request->cover_photo_path):
			$cover_photo_path = $request->file('cover_photo_path');
			$vars['cover_photo_path'] = Storage::disk('s3')->putFileAs(
				'cover-images',
				$cover_photo_path,
				$cover_photo_path->getClientOriginalName()
			);
		endif;

    	$category->update($vars);

    	return redirect(route('admin.categories.index'))->with('success', 'Category successfully updated!');
    }

    public function destroy($id)
    {
    	$category = Category::findOrFail($id);
    	$category->delete();

    	return redirect(route('admin.categories.index'))->with('delete', 'Category successfully deleted!');
    }
}
