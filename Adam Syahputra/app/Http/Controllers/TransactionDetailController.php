<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Transaction, TransactionDetail, Menu};

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction_detail = TransactionDetail::get();

        return view('apps.transaction_detail.index')->with('transaction_detail', $transaction_detail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $transaction = Transaction::get();
        $menu = Menu::get();
        return view('apps.transaction_detail.create')->with('transaction', $transaction)
                                                     ->with('menu', $menu);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        $transaction_detail = $request->all();
        $transaction_detail['user_id'] = auth()->user()->id;
        TransactionDetail::create($transaction_detail);

        return redirect()->route('transaction_detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TransactionDetail $transaction_detail)
    {
        $transaction = Transaction::get();
        $menu = Menu::get();
        return view('apps.transaction_detail.edit')->with('transaction_detail', $transaction_detail)
                                                   ->with('menu', $menu)
                                                   ->with('transaction', $transaction);
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
        $transaction_detail = TransactionDetail::findOrFail($request->id);

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;
        $transaction_detail->update($data);
        return redirect()->route('transaction_detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $transaction_detail = TransactionDetail::findOrFail($request->id);
        $transaction_detail->delete();

        return redirect()->back();
    }
}
