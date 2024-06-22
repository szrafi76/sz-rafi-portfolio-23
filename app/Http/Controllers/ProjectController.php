<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

// namespace Intervention\Image\Facades;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Project::orderBy('id', 'DESC')->get();
        $Categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        // dd($products);
        return view('admin.pages.project.index', compact('projects', 'Categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(public_path());
            $Categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        return view('admin.pages.project.create',compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        $data = $request->validate([
            'title' => 'required',
            'client' => 'required',
            'description' => 'required',
            'category' => 'required',
            'completion_date' => 'required',
            'banner' => 'required|image|max:2048', // max file size of 2MB
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();

        $img = Image::make($image->path());
        $img->fit(430, 515); // resize the image to fit within 380x310 while preserving aspect ratio
        $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
        $img->save(base_path('/uploads/projects/') . $imageName);
        $data['image'] = $imageName;
        $lastProduct = Project::orderByDesc('order')->first();
        if ($lastProduct) {
            $data['order'] = $lastProduct->order + 1;
        } else {
            $data['order'] = 1;
        }
        $product = Project::create($data);

        if ($product) {
            return redirect()->route('projects.index')->with('success', 'Project created successfully.');
            # code...
        } else {
            return back()->with('error', 'Project creating showing error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Project $product)
    {
        return view('admin.pages.project.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $product)
    {
        $Categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        return view('admin.pages.project.edit', compact('product', 'Categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $product)
    {
        $data = $request->validate([
            'title' => 'required',
            'order' => 'required',
            'offer_price' => 'required',
            'regular_price' => 'required',
            'product_category' => 'required',
            'description' => 'required',
            'product_sub_category' => 'nullable',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();

            $img = Image::make($image->path());
            $img->fit(430, 515); // resize the image to fit within 380x310 while preserving aspect ratio
            $img->encode('jpg', 80); // convert image to JPEG format with 80% quality and reduce file size to 80kb
            $img->save(base_path('/uploads/projects/') . $imageName);

            $data['image'] = $imageName;
        }

        $product = $product->update($data);



        if ($product) {
            return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Project Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $product)
    {
        // delete the product's image file, if it exists

        if ($product->image && file_exists(asset('uploads/projects/' . $product->image))) {
            unlink(asset('uploads/projects/' . $product->image));
        }

        // delete the product from the database
        $product->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $product
     * @return \Illuminate\Http\Response
     */
    public function Active(Project $product)
    {

        $product->status = '1';
        if ($product->save()) {
            return redirect()->route('projects.index')->with('success', 'Project activation successfully.');
        } else {
            return back()->with('error', 'product Activation unsuccessful');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $product
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Project $product)

    {
        // dd($product->status);
        $product->status = '0';
        if ($product->save()) {
            return redirect()->route('projects.index')->with('success', 'Project deactivation successfully.');
        } else {
            return back()->with('error', 'Project deactivation unsuccessful.');
        }
    }
}
