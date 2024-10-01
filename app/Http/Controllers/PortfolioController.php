<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

// namespace Intervention\Image\Facades;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $portfolios = Portfolio::with('category')->orderBy('id', 'DESC')->get();
        $Categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        return view('admin.pages.portfolio.index', compact('portfolios', 'Categories'));
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
        return view('admin.pages.portfolio.create',compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'title' => 'required|string',
            'subTitle' => 'required|string',
            'client' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|string',
            'completion_date' => 'required|date',
            'banner' => 'required|image|max:2048', // Max file size of 2MB
            'gallery' => 'nullable|array',
            'gallery.*' => 'image|max:2048', // Each gallery image max 2MB
            'figma_link' => 'nullable|url',
            'live_link' => 'nullable|url',
        ]);

         // Handle banner image
        $bannerImage = $request->file('banner');
        $bannerName = time() . '_banner.' . $bannerImage->extension();
        $img = Image::make($bannerImage->path());
        $img->fit(1200, 800); // Adjust size as needed
        $img->encode('jpg', 80);
        $img->save(public_path('uploads/portfolio/') . $bannerName);
        $data['banner'] = $bannerName;

        dd($data);
     // Handle gallery images
        $galleryImages = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->extension();
                $img = Image::make($image->path());
                $img->fit(800, 600); // Adjust size as needed
                $img->encode('jpg', 80);
                $img->save(public_path('uploads/portfolio/gallery/') . $imageName);
                $galleryImages[] = $imageName;
            }
        }
        $data['gallery'] = json_encode($galleryImages);
    
        // Set order
        $lastPortfolioItem = Portfolio::orderByDesc('order')->first();
        $data['order'] = $lastPortfolioItem ? $lastPortfolioItem->order + 1 : 1;
    
        $portfolioItem = Portfolio::create($data);
    
        if ($portfolioItem) {
            return redirect()->route('portfolios.index')->with('success', 'Portfolio item created successfully.');
        } else {
            return back()->with('error', 'Error creating portfolio item.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('admin.pages.portfolio.view', compact('portfo$portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $product)
    {
        $Categories = Category::orderBy('order', 'ASC')->where('status', '1')->get();
        return view('admin.pages.portfolio.edit', compact('product', 'Categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $product)
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
            $img->save(base_path('/uploads/portfolios/') . $imageName);

            $data['image'] = $imageName;
        }

        $product = $product->update($data);



        if ($product) {
            return redirect()->route('portfolios.index')->with('success', 'Project updated successfully.');
            # code...
        } else {
            return back()->with('error', 'Project Update showing error.');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        try {
            // Delete the banner image, if it exists
            if ($portfolio->banner && file_exists(public_path('uploads/portfolios/' . $portfolio->banner))) {
                unlink(public_path('uploads/portfolios/' . $portfolio->banner));
            }

            // Delete the gallery images, if they exist
            $galleryImages = json_decode($portfolio->gallery, true);
            if ($galleryImages) {
                foreach ($galleryImages as $image) {
                    $imagePath = public_path('uploads/portfolios/' . $image);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }

            // Attempt to delete the portfolio record
            $portfolio->delete();

            return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully.');
        } catch (\Exception $e) {
            // Log the exception and show an error message
            \Log::error('Error deleting portfolio: ' . $e->getMessage());
            return redirect()->route('portfolios.index')->with('error', 'Failed to delete portfolio.');
        }
    }



    /**
     * Active the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function Active(Portfolio $portfolio)
    {

        $portfolio->status = '1';
        if ($portfolio->save()) {
            return redirect()->route('portfolios.index')->with('success', 'Portfolio activation successfully.');
        } else {
            return back()->with('error', 'Portfolio Activation unsuccessful');
        }
    }
    /**
     * Inactive  the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $product
     * @return \Illuminate\Http\Response
     */
    public function Inactive(Portfolio $portfolio)

    {
        // dd($portfolio->status);
        $portfolio->status = '0';
        if ($portfolio->save()) {
            return redirect()->route('portfolios.index')->with('success', 'Portfolio deactivation successfully.');
        } else {
            return back()->with('error', 'Portfolio deactivation unsuccessful.');
        }
    }
}
