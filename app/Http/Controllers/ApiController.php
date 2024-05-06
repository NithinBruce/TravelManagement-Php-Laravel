<?php

namespace App\Http\Controllers;
use App\Models\travel;
use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function createProduct(Request $request){
        $userId = auth()->user()->user_id;
        $user = User::find($userId);
        $request->validate([
            'packagename' => 'required|max:255|string',
            'destination' => 'required|max:255|string',
            'description'=>'required|max:255|string',
            'price' => 'required|numeric',
        ]);
        travel::create([
            'packagename'=>$request->packagename,
            'destination'=>$request->destination,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return response()->json([
            'message' => 'Travel details saved',
     
        ]);
    }
    public function getProducts(){
        $userId = auth()->user()->user_id;
        $user = User::find($userId);
        $products = travel::get();
        return response()->json([
                'message' => 'All Travel details',
                'data' => $products,
            ]);
    }
    
public function getProductDetails($id){
    $userId = auth()->user()->user_id;
    $user = User::find($userId);
    $product = travel::findOrFail($id);
    return response()->json([
        'message' => 'Travel details',
        'data' => $product
    ]);
}
public function updateProductDetails(Request $request,$id){
    $userId = auth()->user()->user_id;
    $user = User::find($userId);
    travel::findOrFail($id)->update([
        'packagename'=>$request->packagename,
        'destination'=>$request->destination,
        'description' => $request->description,
        'price' => $request->price,
    ]);

    return response()->json([
        'message' => 'travel details updated',
    ]);
}
public function deleteProductDetails($id){
    $userId = auth()->user()->user_id;
    $user = User::find($userId);
    $product = travel::find($id);
    $product->delete();
    return response()->json([
        'message' => 'Travel  details deleted',
    ]);
}
}
