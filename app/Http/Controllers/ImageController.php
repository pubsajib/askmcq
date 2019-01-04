<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ImageController extends Controller {
	public function index() {
      return view('imageUpload');
    }
    public function uploadImage(Request $request) {
        $name = $this->imageIdFromString(auth()->user()->name.'-'.auth()->user()->id);
        $image = $request->image;
        list($type, $image) = explode(';', $image);
        list(, $image)      = explode(',', $image);
        $image = base64_decode($image);
        $image_name= $name.'.png';
        $path = public_path('images/users/'.$image_name);
        file_put_contents($path, $image);
        $url = asset('images/users/'.$image_name);
        return response()->json(['status'=>true, 'image'=>$image_name, 'path'=> $path, 'url'=> $url, 'username'=> $name]);
    }
    public function imageIdFromString($string){
        $string = str_replace(['#', '[', '(', ')', '-', '+', '/', ']', ' ', '?'], '_', strtolower(trim($string)));
        $string = str_replace(['&'], 'sand', $string);
        return $string;
    }
}