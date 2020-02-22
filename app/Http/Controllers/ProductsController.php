<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\StoreProducts;
use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $data = array('products' => $products, 'active' => 'product');
        return view('products.products', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ProductCategory::all();
        $data = array('active' => 'product', 'category' => $category);
        return view('products.createProduct', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducts $request)
    {
        $data = $request->all();
        $file = $request->file('image');
        $img_name = md5($file->getClientOriginalName() .  $this->time()) . '.' . $this->getExtension($file->getClientOriginalName());

        $this->upload_file($file->getRealPath(), $img_name);

        $data['image'] = $img_name;
        Product::create($data);
        return redirect('products')->with('status', 'Produk Berhasil Ditambahkan');
    }

    public function upload_file($realPath, $imgName)
    {
        $image_risize = Image::make($realPath, $imgName);
        // resize_dimensi
        $image_risize->resize(500, 500);
        $image_risize->save(public_path('Product_Images/' . $imgName));
    }
    public function time()
    {
        date_default_timezone_set('Asia/Jakarta');
        return date('YmdHis');
    }
    public function getExtension($file)
    {
        $arr = explode('.', $file);
        return end($arr);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
