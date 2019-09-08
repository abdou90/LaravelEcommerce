<?Php


namespace App\Helpers\Karim;


use Illuminate\Http\Request;


use App\Product;

class Img {


    public static function noimg(  $what = null){

        if($what == 'none' or $what == '' or $what == null){
            return 'images/Application/noimg.jpg';
        }else{
            return 'images/'.$what;
        }

    }
    
    
	public static function store(Request $request, Product $product)
	{ 
        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $folder = '/images/';
            $img_name = rand(1, 999999). '-' . $img->getClientOriginalName();
            //dd($filePath);
            $img->move(public_path().$folder,$img_name.'.'.$img->getClientOriginalExtension());
            $complet_name = $img_name. '.' . $img->getClientOriginalExtension();

            $product->photo = $complet_name;
            $product->save();
        }

        return $product;
	  
    }

    public static function update(Request $request, Product $product){

        if($product->photo == 'none' or $product->photo == '' or $product->photo == null ){

            $product = self::store($request, $product);
            $product->save();

        }else{

            self::delete($product);
            $product = self::store($request, $product);
            $product->save();

        }

        return $product;
    }
    
    
	public static function delete(Product $product )
	{
		if($product->photo != 'none' or $product->photo != '' or $product->photo != null){

            $folder = '/images/';
            $path = public_path().$folder.$product->photo;
            if( file_exists($path) ){
				unlink($path);
			}
        }
	  
    }
    




}