<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use PDF;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();
        $params = [
            'title' => 'Product Listing',
            'category' => $category,
        ];

        return view('products.index')->with($params);
		
    }
    public function pdfview(Request $request)
    {
        
        $product = Product::all();
        
        view()->share('product',$product);
        

        if($request->has('download')){

          
            $pdf = PDF::loadView('pdfview');
            dd('testt');die;  
            dd($pdf);
        die;
            return $pdf->download('pdfview.pdf');
        }
        return view('products.pdfview');
    }

    public function search($categoryId = null,$productName=null)
    {
        if($productName == "null"){
            $productName = "";
        }
        if($categoryId != 0)
        {
            $product = Product::where('category_id',"=", $categoryId )
                               ->where('product_name','like','%'.$productName.'%')->orderBy('id','desc')->get(); 
        }else{
            $product = Product::where('product_name','like','%'.$productName.'%')->orderBy('id','desc')->get(); 
        }
      
       
        $params = [
            'title' => 'Product Listing',
            'product' => $product        ];

        return view('products.search')->with($params);
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        
		$category = Category::all();

        $params = [
            'title' => 'Product Listing',
            'category' => $category,
        ];

     
		 return view('products.create')->with($params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'product_name' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif,bmp',
            'status' => 'required'
        ]);

        $product = Product::where('category_id',"=", $request->input('category_id') )
                               ->where('product_name','=', $request->input('product_name'))->get(); 
        
        if(count($product) > 0)
        {
            $v->errors()->add('product_name', 'Please enter unique product name for category');
            return redirect()->back()->withErrors($v->errors());
        }
        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

      $product = new Product;
      $product->category_id = $request->input('category_id');
      $product->product_name = $request->input('product_name');      
      $product->image ='test';
      $product->status = $request->input('status');
      $product->created_date =date('Y-m-d');

      if (!$product->save()) {
        $errors = $product->getErrors();
        return redirect()
              ->action('ProductController@create')
          ->with('errors', $errors)
          ->withInput();
      }
     
      $imageName = $product->id . '.' . 
      $request->file('image')->getClientOriginalExtension();
      $request->file('image')->move(
       base_path() . '/public/images/products/', $imageName
      );

      $product = Product::find($product->id);
      $product->image = $imageName;
      $product->save();



        return redirect()->action('ProductController@index')->with('success', "Product Created");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
