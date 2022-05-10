<?php

namespace App\Http\Controllers;

use App\Models\Coupons;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    public function index(){
        return view('BackEnd.coupon.add');
    }
    public function code_store(Request $request){
        $coupon = new Coupons();
        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->coupon_value = $request->coupon_value;
        $coupon->cart_min_value = $request->cart_min_value;
        $coupon->expired_on = $request->expired_on;
        $coupon->coupon_status = $request->coupon_status;
        $coupon->added_on = $request->added_on;

        $coupon->save();
        return back()->with('sms','Kupon Berhasil ditambahkan');
    }
    public function code_manage(){
        $coupons = Coupons::all();
        return view('Backend.Coupon.manage', compact('coupons'));
    }
    public function code_active($coupon_id){
        $coupon = Coupons::find($coupon_id);
        $coupon->coupon_status = 1;
        $coupon->save();

        return back();
    }
    public function code_inactive($coupon_id){
        $coupon = Coupons::find($coupon_id);
        $coupon->coupon_status = 0;
        $coupon->save();

        return back();
    }
    public function code_delete($coupon_id){
        $coupon = Coupons::find($coupon_id);
        $coupon->delete();

        return back()->with('sms','Data Kupon Berhasil Dihapus');
    }
    public function code_update(Request $request){
        $coupon = Coupons::find($request->coupon_id);

        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->coupon_value = $request->coupon_value;
        $coupon->cart_min_value = $request->cart_min_value;
        $coupon->save();

        return back()->with('sms','Kupon Berhasil Diupdate');

    }
}
