<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use App\UserDetail;
use App\businessInformation;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('test');
        return view('client-view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user=User::find(Auth::id());
        // dd($user->userbusinessInformation->name_of_referrer);
        // $nameWhiteSpaceAdded=preg_replace('/(\w+)([A-Z])/U', '\\1 \\2',$user->userbusinessInformation->name_of_referrer);
// dd($nameWhiteSpaceAdded);
        // $user->userbusinessInformation

            // $user->userbusinessInformation->name_of_referrer===$nameWhiteSpaceAdded;

        return view('client-profile',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user=User::find(Auth::id());
        return view('client-editform',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        dd($request);
        $request->validate([
            /** personal input data */
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'birth_date'=>'required|max:255',
            'home_address'=>'required|max:255',
            'mobile_number'=>'required|max:255',
            'shipping_address'=>'required|max:255',
            'land_line_number'=>'required|max:255',
            'shipping_address' =>'required|max:255',


            /** business information */
            'product_user_since'=>'required|max:255',
            'name_of_referrer'=>'required|string|max:255|alpha_spaces',
        ]);
    UserDetail::updateOrCreate([

        'user_id' => Auth::id()

        ],
        [
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'birth_date' => $request->birth_date,
            'land_line_number' => $request->land_line_number,
            'mobile_number' => $request->mobile_number,
            'home_address' =>$request->home_address,
            'shipping_address' => $request->shipping_address,
            'facebook_name' =>$request->facebook_name,
            'facebook_url' => $request->facebook_url,
            'instagram_account' => $request->instagram_account,

        ]);

    // $facebook=(isset($request->facebook)? 1:0);
    //     $instagram=(isset($request->instagram)? 1:0);
    //     $lazada=(isset($request->lazada)? 1:0);
    //     $shopee=(isset($request->shopee)? 1:0);
    //     $personalcontacts=(isset($request->personalcontacts)? 1:0);
    //     $existingbusiness=(isset($request->existingbusiness)? 1:0);

    businessInformation::updateOrCreate(
        [
            'user_id' => Auth::id(),
        ],

        [
            'product_user_since' => $request->product_user_since,
            'name_of_referrer' =>  $request->name_of_referrer,
            'existing_business' =>  $request->existing_business,
            'existing_business_address' =>  $request->existing_business_address,
            'dti_number' =>  $request->dti_number,
            'tin_number' =>  $request->tin_number,
            // 'facebook' =>  $facebook,
            // 'instagram' =>  $instagram,
            // 'lazada' =>  $lazada,
            // 'shopee' =>  $shopee,
            // 'personalcontacts' =>  $personalcontacts,
            // 'existingbusiness' =>  $existingbusiness,
            // ''
            'others' =>  $request->others,
            'facebook_business_account' =>  $request->facebook_business_account,
            'facebook_business_url' =>  $request->facebook_business_url,
            'instragram_business_account' =>  $request->instagram_business_account,
            'lazada_account' =>  $request->lazada_account,
            'instragram_business_account' =>  $request->instragram_business_account,
            'shopee_account' =>  $request->shopee_account,
        ]);

    return redirect()->back()->with('success','You Have Sucessfully Updated Your Profile Information');

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
