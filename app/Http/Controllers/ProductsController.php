<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\StoreProducts;
use Illuminate\Http\Request;
use App\Product;
use App\ProductCategory;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $products = Product::with('details')->get()->sortBy('name')->sortBy('category_id');
        $data = array('active' => 'admin', 'products' => $products);
        return view('admin.products', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ProductCategory::all();
        $data = array('active' => 'admin', 'category' => $category);
        return view('admin.createProduct', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducts $request)
    {
        $data = $request->all();;
        $img_name = $this->getImgName($request);
        $this->upload_file($request, $img_name);

        $data['image'] = $img_name;
        $product = Product::create($data);

        $details = $this->setDetails($request);
        $product->details()->createMany($details);
        return redirect('admin/products')->with('status', 'Produk Berhasil Ditambahkan');
    }

    public function setDetails($request)
    {
        $arrDetails =  preg_split('/\n|\r\n?/', $request->information);
        $details = [[]];
        foreach ($arrDetails as $key => $detail) {
            $details[$key]['information'] = $detail;
        }
        return $details;
    }

    public function upload_file($request, $imgName)
    {
        $file = $request->file('image');
        //resize img with encode data;
        $image_resize = Image::make($file, $imgName)->fit(500, 500)->encode();
        //upload img
        Storage::disk('public')->put('product_image/' . $imgName, $image_resize);
    }

    public function getImgName($request)
    {
        $file = $request->file('image');
        $arr = explode('.', $file->getClientOriginalName());
        $extention =  end($arr);
        date_default_timezone_set('Asia/Jakarta');
        $dateNow = date('YmdHis');
        return md5($file->getClientOriginalName() .  $dateNow) . '.' . $extention;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return redirect('products');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::with('details')->find($id);
        //detail arr to detail string
        $arrDetails = [];
        foreach ($product->details as $detail) {
            array_push($arrDetails, $detail->information);
        }
        $details = implode("\n", $arrDetails);
        $product->details = $details;
        $category = ProductCategory::all();
        $data = array('active' => 'admin', 'product' => $product, 'category' => $category);
        return view('admin.editProduct', $data);
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
        $product = Product::find($id);
        $data = [];
        $data = [
            'code' => $request->code,
            'name' => $request->name,
            'category_id' => $request->category_id
        ];
        if ($request->file('image')) {
            // Replace image old with image new
            Storage::disk('public')->delete("product_image/" . $product->image);
            $img_name = $this->getImgName($request);
            $this->upload_file($request, $img_name);
            $data['image'] = $img_name;
        }
        $product->update($data);
        return redirect('admin/products')->with('status', 'Produk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::disk('public')->delete("product_image/" . $product->image);
        $product->delete();
        return redirect('/admin/products')->with('status', 'Produk Berhasil Dihapus');
    }
}
