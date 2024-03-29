<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductVariant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\ProductImage;
use App\Models\Slider;
use App\Models\Category_slider;
use App\Models\OrderItem;
use App\Models\OtpVerification;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Team;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public  function __construct(Request $request)
    {
        if(!$request->ajax()){
       //   return abort(404);
        }
    }
    public function  get_team_members(){
            $team = Team::where('status',1)->orderBy('position','ASC')->get();
            return response()->json([
                'status' => "OK",
                'team'  => $team ,
        ]);
    }
    public function productIdWise(Request $request,$id){
      $product=Product::where('id',$id)->with(['productImage','productAttribute.attribute','productVariant.variant'])->first();
        return response()->json([
            'product'=>$product
        ]);
    }
    public function products(Request $request)
    {
        $product_categories =SubCategory::with(['subSubCategory','products.productImage'])->get();
        return response()->json($product_categories);
    }

    public function flashSale(){
        $flash_sale_products=Product::where(['status'=>1,'product_placement'=>1])->orderBy('product_position','DESC')->with('productImage')->get();
        return \response()->json($flash_sale_products);
    }

     
    public function product(Request $request,$slug)
    {
         //this slug with encoding for any language 
       

      
        $product = Product::where('slug', $slug)->with(['productAttribute.attribute','productVariant.variant'])->first();
      
       if ($product) {
          return response()->json([
                'status' => "SUCCESS",
                'product' => $product,
              ]);
        }
    }

    public function productImage($slug){

      $product = Product::where('slug', $slug)->first();
      $product_images = ProductImage::where('product_id',$product->id)
                                        ->select('id',DB::raw('CONCAT(prefix_url,product_image) as url'))
                                        ->get();
                              
    return response()->json([
        'normal_size'=>$product_images,
        'large_size'=>$product_images,
        'thumbs'=>$product_images
    ]);                                 
    }

    public function relatedProduct(Request $request){
     $product_find=Product::where('slug',$request->product_slug)->first();
     $products=Product::where('sub_sub_category_id',$product_find->sub_sub_category_id)->where('id','!=',$product_find->id)->with('productImage')->paginate(5);
    return response()->json($products);
 }

    public function category()
    {
       $categories = Category::orderBy('id', 'ASC')->where(['status' => 1, 'is_selected' => 1])->with(['subCategory.SubSubCategory'])->take(11)->get();
        return response()->json([
            'status' => 'SUCCESS',
            'categories' => $categories
        ]);
    }

    public function categoryWiseProduct(Request $request)
    {
      $category=Category::where('slug',$request->slug)->first();
      $products=Product::where('category_id',$category->id)->with('productImage')->paginate(12);
      return response()->json($products);
    }

    public function categoryWiseProductPriceFilter(Request $request){
         
        $category=Category::where('slug',$request->slug)->first();
        $products=Product::where('category_id',$category->id)->where('price','>=',$request->min_price)->where('price','<=',$request->max_price)->with('productImage')->paginate(20);
        return response()->json([
            "status" => "OK",
            "products" => $products ,
        ]);
    }

    public function slider()
    {
       
        $slider = Slider::where('status',1)->where('position',1)->get();
        
        // $slider_banner =Slider::where('status',1)->where('position',2)->orderBy('id','DESC')->first();
        //  $best_selling_produc_id=OrderItem::select('product_id',DB::raw('count(*) as total'))
        //                                         ->groupBy('product_id')
        //                                         ->orderBy('total','DESC')
        //                                         ->take(12)
        //                                         ->pluck('product_id');
        // $best_seller_products =Product::WhereIn('id',$best_selling_produc_id)->where('status',1)->with('productImage')->get();
        return response()->json([
            'status' => 'SUCCESS',
            'sliders' => $slider,
            // 'slider_banner'=>$slider_banner,
            
        ]);

    }

 //function for display category slider 
    public  function display_category_slider(){
         $category_sliders = Category_slider::where('page_position',1)->where('status',1)->orderBy('id','DESC')->get();
            return response()->json([
                    "status" => "OK",
                    "category_sliders" => $category_sliders ,
            ]);
    }

    //function for display sub category slider 
    public  function display_sub_category_slider(){
        $sub_category_sliders = Category_slider::where('page_position',2)->where('status',1)->orderBy('id','DESC')->get();
        return response()->json([
                "status" => "OK",
                "sub_category_sliders" => $sub_category_sliders ,
        ]);
    }

     //function for display sub sub category slider 
     public   function display_sub_sub_category_slider(){
        $sub_sub_category_sliders = Category_slider::where('page_position',3)->where('status',1)->orderBy('id','DESC')->get();
        return response()->json([
                "status" => "OK",
                "sub_sub_category_sliders" => $sub_sub_category_sliders ,
        ]);
    }

     public function offers(){
        $offers = Offer::where('status', 1)->orderBY('id','DESC')->take(12)->get();
        return response()->json([
            'status' => 'SUCCESS',
            'offers' => $offers
        ]);
    }

    public function subCategory($slug){
        $sub_category=SubCategory::where('slug',$slug)->first();
        $sub_categories = SubCategory::orderBy('id', 'DESC')->where('status',1)->where('category_id',$sub_category->category_id)->get();
        return response()->json([
            'status' => 'SUCCESS',
            'sub_categories' => $sub_categories
        ]);
    }

    public function subCategoryWiseProduct(Request $request){
         $sub_category=SubCategory::where('slug',$request->slug)->first();
        $products=Product::where('sub_category_id',$sub_category->id)->with('productImage')->paginate(8);
        return response()->json($products);
    }

    public function SearchProduct($search){
        $products=Product::where('name','like', '%' . $search . '%')
                          ->orWhere('product_code','like', '%' . $search . '%')
                          ->where('status',1)
                          ->with('productImage')
                         ->get();
        return \response()->json($products);                

    }

    public function subSubCategory($slug){

        $sub_sub_category=SubSubCategory::where('slug',$slug)->first();
        $sub_sub_categories = SubSubCategory::orderBy('id', 'DESC')->where('status',1)->where('subcategory_id',$sub_sub_category->subcategory_id)->get();
        return response()->json([
            'status' => 'SUCCESS',
            'sub_sub_categories' => $sub_sub_categories
        ]);
    }
    public function subSubCategoryWiseProduct(Request $request){

        $sub_sub_category=SubSubCategory::where('slug',$request->slug)->first();
        $products=Product::where('sub_sub_category_id',$sub_sub_category->id)->where('status',1)->with('productImage')->paginate(8);
        return response()->json($products);
    }

    public function subSubSubCategoryProduct(){
        $sub_sub_category=SubSubCategory::where('status',1)->where('show_homepage',1)->get();
        return response()->json($sub_sub_category);
    }

//function for sort via price 
   public  function sort_by_price(Request $request){
        $orderBy='ASC';
            if($request->sort_value==2){
                $orderBy='DESC';
            }
            $category=Category::where('slug',$request->slug)->first();
            $products=Product::where('category_id',$category->id)->orderBy('price',$orderBy)->where('status',1)->with('productImage')->get();
            return response()->json([
                    "products" => $products , 
            ]);         
          
   }

   //function for sub_category_sort_by_price
    public  function sub_category_sort_by_price(Request $request){
    
        $orderBy='ASC';
        if($request->sort_value==2){
            $orderBy='DESC';
        }
        $sub_category=SubCategory::where('slug',$request->slug)->first();
        $products=Product::where('sub_category_id',$sub_category->id)->orderBy('price',$orderBy)->where('status',1)->with('productImage')->get();
        return response()->json([
                "products" => $products , 
        ]);         
      
     }

     //function for sub_sub_category_sort_by_price
    public  function sub_sub_category_sort_by_price(Request $request){
    
        $orderBy='ASC';
        if($request->sort_value==2){
            $orderBy='DESC';
        }
        $sub_sub_category=SubSubCategory::where('slug',$request->slug)->first();
        $products=Product::where('sub_sub_category_id',$sub_sub_category->id)->orderBy('price',$orderBy)->where('status',1)->with('productImage')->get();
        return response()->json([
            "products" => $products 
        ]);         
      
     }

      public function get_quick_view_product($id){

        $product= Product::where('id',$id)->with(['productAttribute.attribute','productVariant.variant','productImage'])->first();
        $recommended_products=Product::where('sub_category_id',$product->sub_category_id)->where('id','!=',$product->id)->where('status',1)
        ->with(['productAttribute.attribute','productVariant.variant','productImage'])
        ->take(24)->get();
              return  response()->json([
                  "status" => "OK",
                  "product" => $product ,
                  'recommended_products'=>$recommended_products
              ]);
      }


      public function SendOtp(Request $request){


       // return $request->all();

        $validatedData = $request->validate([

            'mobile_no' => 'required|digits:11 '

        ]);


        $code=random_int(100000, 999999);
        $otp=new OtpVerification();
        $otp->mobile_no=$request->mobile_no;
        $otp->code=Hash::make($code);
        if($otp->save()){
            $this->sendOtpCode ($otp->mobile_no,$code);
             return \response()->json("Send One Time Pin On Your Mobile Number");
        
      }
    }

    

public function sendOtpCode($number,$code){

    $api_key = "C20047545e16e1c02a1b38.69878796";
        $contacts =$number;
        $senderid = '8809601000740';
        $sms = 'Dear Sir, '. 'Your Mohasagor One Time PIN is '.$code.'. It will expire in 3 minute';  
        $URL = "http://bulk.fmsms.biz/smsapi?api_key=" . urlencode($api_key) . "&type=text&contacts=" . urlencode($contacts) . "&senderid=" . urlencode($senderid) . "&msg=" . urlencode($sms);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 0);
        try {
            $output = $content = curl_exec($ch);
          //  print_r($output);
        } catch (Exception $ex) {
           return back();
        }
        return $output;
            return \response()->json($code);
        }


 public function verifyCodeOtp(Request $request)

{   
     $validatedData = $request->validate([
         'verify_code' => 'required '
     ]);

   //  return $request->all();
    $otp=OtpVerification::where('mobile_no',$request->mobile_no)->latest()->first();
     $to_time = strtotime(Carbon::now()->format('Y-m-d g:i:s'));
     $from_time = strtotime(Carbon::parse($otp->created_at)->format('Y-m-d g:i:s'));
    
       $expire_time= round(abs($to_time - $from_time) / 60,2);



     if (Hash::check($request->verify_code, $otp->code)) {
           if($expire_time > 5){
               return \response()->json('Code Time Expired');
             }else{
            $user=User::where('mobile_no',$request->mobile_no)->first();
            if(empty($user)){
                $user=new User();
                $user->mobile_no=$request->mobile_no;
                $user->password=Hash::make($request->mobile_no);
                $user->name=null;
                $user->email=null;
                $user->image=null;
                $user->city_id=null;
                $user->address=null;
                $user->status=1;
                $user->save();
           }
            Auth::loginUsingId($user->id);
            return \response()->json([
                'status'=>"OK",
                'message'=> 'Your number is verified',
                'user'=>Auth::user()
             ]);
              
             }
     }else{
        
        return \response()->json('Code Dose Not Match');
     }
    
}





 public function get_new_arrival_products(){

     $new_arrival_products=Product::where('status','>=','1')->orderBy('id','desc')->take(24)->with('productImage')->paginate(6);
     return response()->json([
        'status' => 'OK',
        'new_arrival_products'=>$new_arrival_products,
    ]);


    }






}


