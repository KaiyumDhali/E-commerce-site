<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    private static $customer,$image,$imageName,$directory,$imageUrl,$extension,$message;


    public static function getImageUrl($request,$directory)
    {
        self::$image        =$request->file('image');
        self::$extension    =self::$image->getClientOriginalExtension();
        self::$imageName    ='shop1_'.time().'.'.self::$extension;
        self::$image->move($directory,self::$imageName);
        return $directory.self::$imageName;

    }

    public static function registerUser($request)
    {


        self::$customer           = new Customer();
        self::$customer->name     = $request->name;
        self::$customer->email    = $request->email;
        self::$customer->password = bcrypt($request->password);
        self::$customer->mobile   = $request->mobile;
        self::$customer->image    = self::getImageUrl($request,'upload/customer-image/');
        self::$customer->save();
    }


}
