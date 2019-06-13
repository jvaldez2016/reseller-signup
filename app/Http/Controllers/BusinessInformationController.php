<?php

namespace App\Http\Controllers;

use App\businessInformation;
use Illuminate\Http\Request;
use Auth;
use App\User;


class BusinessInformationController extends Controller
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
        //
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

        // find user if exist
        $user=businessInformation::where('user_id','=',Auth::id())->first();
        //Validate if exists
       if(isset($user->id)){
           return redirect('');

        }

        //set the checkbox "labaled Where do you intend to sell Beautederm?", 1 if true and 0 if false
        $facebook=(isset($request->facebook)? 1:0);
        $instagram=(isset($request->instagram)? 1:0);
        $lazada=(isset($request->lazada)? 1:0);
        $shopee=(isset($request->shopee)? 1:0);
        $personalcontacts=(isset($request->personalcontacts)? 1:0);
        $existingbusiness=(isset($request->existingbusiness)? 1:0);



        businessInformation::create([
            'product_user_since' => $request->user_since,
            'name_of_referrer' =>  $request->name_referrer,
            'existing_business' =>  $request->existing_business,
            'existing_business_address' =>  $request->existing_business_adress,
            'dti_number' =>  $request->dti_number,
            'tin_number' =>  $request->tin_number,
            'facebook' =>  $facebook,
            'instagram' =>  $instagram,
            'lazada' =>  $lazada,
            'shopee' =>  $shopee,
            'personalcontacts' =>  $personalcontacts,
            'existingbusiness' =>  $existingbusiness,
            'others' =>  $request->others,
            'facebook_business_account' =>  $request->facebook_business_account,
            'facebook_business_url' =>  $request->facebook_business_url,
            'instragram_business_account' =>  $request->instagram_business_account,
            'lazada_account' =>  $request->instagram_business_account,
            'instragram_business_account' =>  $request->lazada_account,
            'shopee_account' =>  $request->shopee_account,
            'user_id' => Auth::id(),

        ]);
        $user=User::find(Auth::id());
        if($user)
        {
            $user->completed= true;
            $user->save();
        }
        return redirect('/user/page')->withSuccess('Registration Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\businessInformation  $businessInformation
     * @return \Illuminate\Http\Response
     */
    public function show(businessInformation $businessInformation)
    {
         // find user if exist
         $user=businessInformation::where('user_id','=',Auth::id())->first();
         //Validate if exists
        if(isset($user->id)){
            return redirect('');
         }

        return view('auth.businessinformation');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\businessInformation  $businessInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(businessInformation $businessInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\businessInformation  $businessInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, businessInformation $businessInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\businessInformation  $businessInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(businessInformation $businessInformation)
    {
        //
    }
}
