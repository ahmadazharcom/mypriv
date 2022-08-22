<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $profiles = Profile::where('id', 1)->first();
        $products = Product::latest()->get();
        
        return view('dashboard/product', [

            'profiles' => $profiles,
            'products' => $products

        ]);        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $profiles = Profile::where('id', 1)->first();

        return view('dashboard/product_add', [

            'profiles' => $profiles,

        ]);         

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        //return $request;

        $validatedData = $request->validate([

            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'img1' => 'image|file|max:1024',
            'img2' => 'image|file|max:1024',
            'img3' => 'image|file|max:1024',
            'img4' => 'image|file|max:1024'

        ]);



        if($request->file('img1')){               
        
            $file = $request->file('img1');

            $destinationPath = 'storage/post-image';
            
            //$validatedData['image'] = $request->file('image')->store('post-image');
            $validatedData['img1'] = $request->file('img1')->move($destinationPath,$file->getClientOriginalName());

        }

        if($request->file('img2')){               
        
            $file = $request->file('img2');

            $destinationPath = 'storage/post-image';
            
            //$validatedData['image'] = $request->file('image')->store('post-image');
            $validatedData['img2'] = $request->file('img2')->move($destinationPath,$file->getClientOriginalName());

        }

        if($request->file('img3')){               
        
            $file = $request->file('img3');

            $destinationPath = 'storage/post-image';
            
            //$validatedData['image'] = $request->file('image')->store('post-image');
            $validatedData['img3'] = $request->file('img3')->move($destinationPath,$file->getClientOriginalName());

        }

        if($request->file('img4')){               
        
            $file = $request->file('img4');

            $destinationPath = 'storage/post-image';
            
            //$validatedData['image'] = $request->file('image')->store('post-image');
            $validatedData['img4'] = $request->file('img4')->move($destinationPath,$file->getClientOriginalName());

        }

        Product::create($validatedData);

        return redirect('/dashboard/product')->with('success', 'New Product has been added!');                                                

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product){

        $profiles = Profile::where('id', 1)->first();
        $product = Product::where('id', $product->id)->first();

        return view('dashboard/product_single', [

            'profiles' => $profiles,
            'product' => $product

        ]);         

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product){

        $profiles = Profile::where('id', 1)->first();
        $product = Product::where('id', $product->id)->first();

        return view('dashboard/product_edit', [

            'profiles' => $profiles,
            'product' => $product

        ]);         

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product){

        

    }

    public function product_link($id){

    $product = Product::where('id', $id)->first();

        return view('product', [

            'product' => $product

        ]);    

    }

    public function product_order(Request $request){

    $id = $request->id;
    $name = $request->name;
    $price = $request->price;
    $description = $request->description;
    $img1 = $request->img1;
    $quantity = $request->quantity;
    $total = $price * $quantity;

    $product = Product::where('id', $id)->first();

        return view('product_order', [

            'id' => $id,
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'img1' => $img1,
            'quantity' => $quantity,
            'total' => $total            

        ]);    

    }

}
