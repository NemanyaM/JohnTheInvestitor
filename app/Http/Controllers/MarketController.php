<?php

namespace App\Http\Controllers;

use App\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $market = Market::get();
        $markets = $market->groupBy('stock_type');
        $onlyCommonStock = $markets['Common stock']->groupBy('company_name');

        return response()->json([
            'markets' => $markets['Preffered stock'],
            'kiveoCommon' => $onlyCommonStock['kiveo AG'],
            'metadeoCommon' => $onlyCommonStock['Metadeo AG'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
           'market' => 'required',
           'company_name' => 'required',
           'stock_type' => 'required',
           'price' => 'required'
        ]);

        Market::forceCreate([
            'market' => request('market'),
            'company_name' => request('company_name'),
            'stock_type' => request('stock_type'),
            'price' => request('price'),
        ]);

        return ['message' => 'Market added!'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $market = Market::find($id);

        return view('specificMarket')->with(compact('market'));

    }

    public function showHighestMarket()
    {
        $market = Market::orderBy('price', 'desc')
            ->take(3)
            ->get();

        return view('highestMarkets')->with(compact('market'));
    }

}
