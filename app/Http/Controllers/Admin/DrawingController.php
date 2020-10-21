<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Drawing;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DrawingPostRequest;

class DrawingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drawings = Drawing::all();

        return view('admin.pages.drawings.index', [
            'drawings' => $drawings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.pages.drawings.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrawingPostRequest $request)
    {
        $vars = $request->except(['_token', 'image_path']);
        $vars['admin_id'] = Auth::user()->id;
        $vars['image_path'] = $this->storeInAppropriateFolder($request->category_id, $request->image_path);

        Drawing::create($vars);

        return redirect(route('admin.drawings.index'))->with('success', 'Drawing successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drawing  $drawing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drawing = Drawing::findOrFail($id);

        return view('admin.pages.drawings.show', [
            'drawing' => $drawing,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drawing  $drawing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drawing = Drawing::findOrFail($id);
        $categories = Category::all();

        return view('admin.pages.drawings.edit', [
            'categories' => $categories,
            'drawing' => $drawing,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drawing  $drawing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $drawing = Drawing::find($id);
        $vars = $request->except(['_token',]);
        
        if($request->image_path):
            $vars['image_path'] = $this->storeInAppropriateFolder($request->category_id, $request->image_path);
        endif;

        $drawing->update($vars);

        return redirect(route('admin.drawings.index'))->with('success', 'Drawing successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drawing  $drawing
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drawing = Drawing::findOrFail($id);
        $drawing->delete();

        return redirect(route('admin.drawings.index'))->with('delete', 'Drawing successfully deleted!');
    }

    protected function storeInAppropriateFolder($categoryId, $imagePath)
    {
        switch ($categoryId):
            case 1:
                $image_path = Storage::disk('s3')->putFileAs(
                    'portfolio/baybayin',
                    $imagePath,
                    $imagePath->getClientOriginalName()
                );
                return $image_path; 
                break;
            
            case 2:
                $image_path = Storage::disk('s3')->putFileAs(
                    'portfolio/calligraphy',
                    $imagePath,
                    $imagePath->getClientOriginalName()
                );
                return $image_path;
                break;

            case 3:
                $image_path = Storage::disk('s3')->putFileAs(
                    'portfolio/watercolor-art',
                    $imagePath,
                    $imagePath->getClientOriginalName()
                );
                return $image_path;
                break;
        endswitch;
    }
}
