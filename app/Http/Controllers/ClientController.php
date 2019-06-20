<?php

namespace App\Http\Controllers;
// require app_path().'/helpers/validator/Validation.php';
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;

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
        // dd($request);
        if(preg_match('/\s/',$request->name_of_referrer));
            {
                $nameNoSpace=($trimmed=str_replace(' ','',$request->name_of_referrer));
            }
        $request->merge([
            'name_of_referrer'=> $nameNoSpace
        ]);
        // dd($request);
          $validateData = $request->validate([
            /** personal input data */
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'birth_date'=>'required|max:255',
            'home_address'=>'required|max:255',
            'mobile_number'=>'required|max:255',
            'shipping_address'=>'required|max:255',
            'land_line_number'=>'required|max:255',
            'mobile_number'=>'required|max:255',

            /** business information */
            'product_user_since'=>'required|max:255',
            'name_of_referrer'=>'required|string|max:255|alpha',
            'password' => 'required||max:255'
        ]);
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
