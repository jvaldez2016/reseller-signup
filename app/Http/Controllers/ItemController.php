<?php

namespace App\Http\Controllers;

use App\item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

        return view('auth.show-all-items');
    }

    /**Ajax data for ALl item */
    public function allItemsData()
    {
          $users=item::all();
    return datatables()->of($users)->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.itemform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Item::create([
            'name' => $request->name,
            'category' => $request->category,
            'suggested_retail_price' => $request->srp,
            'reseller' => $request->reseller,
            'distributor' => $request->distributor,
            'mega_distributor' => $request->mega_distributor
        ]);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($item)
    {
        $result=Item::find($item);

        return view('auth.show-item',compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {

        return view('auth.updateform');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        //
    }

    public function pdf_view()
    {

            $url=storage_path('/app/public/pricelist05152019.pdf');
            return response()->file($url);

    }
}
