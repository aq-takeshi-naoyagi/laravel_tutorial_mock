<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\lead;
use App\Models\login;

use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //アカウントページへの遷移
    public function account()
    {
        return view('business.account');
    }

    //顧客ページへの遷移
    public function client()
    {
        //$clients = client::all();
        //return view('business.client',compact('clients'));
        return view('business.client');
    }
    //顧客情報新規登録ページへの遷移
    public function client_create()
    {
        return view('business.client_create');
    }

    //顧客情報DBへのデータ追加
    public function client_add(Request $request)
    {
        //データ追加
        client::create([
            'company_name'=>$request->input('company_name'),
            'person_name'=>$request->input('person_name'),
            'contact'=>$request->input('contact'),
            'nda_availability'=>$request->input('nda_availability'),
        ]);
        return $this->client();
    }
    //詳細ページへの遷移
    public function client_index(client $client)
    {
        return view('business.client_index', compact('client'));
    }
    //顧客情報削除
    public function client_destroy($id)
    {
        //
    }

    //予実ページへの遷移
    public function estimate()
    {
        return view('business.estimate');
    }

    //リードページへの遷移
    public function lead()
    {
        return view('business.lead');
    }

    //提案案件ページへの遷移
    public function suggestion()
    {
        return view('business.suggestion');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
