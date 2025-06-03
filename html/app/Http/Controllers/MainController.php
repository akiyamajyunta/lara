<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mains = Main::get();
        //dd($mains);
        return view('front/main', ['mains' => $mains]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        $main = new Main();
        $main->title = $title;
        $main->content = $content;
        $main->save();

        return redirect()->route('main.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $main = Main::find($id);
        if (is_null($main)){
            \Session::flash('err_masg','データがないです');
            return redirect(route('main.all'));
        }
        return view('front/get', ['id' => $id, 'main' => $main]);
    }

    public function all()
    {
        $mains = Main::get();
        return view('front/all', ['mains' => $mains]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('front/creates');
    }

    public function rewrite(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $id = $request->input('id');
        // $title = 'たいとる';
        // $content = 'こんてんつ';
        return view('front/rewrite', ['title' => $title, 'content' => $content,'id' => $id]);
    }

    //rewrite

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, main $main)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $id = $request->input('id');

        $main = Main::find($id);
        $main->title = $title;
        $main->content = $content;
        $main->save();
        return redirect()->route('main.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(main $main)
    {
        //
    }

    public function delete(Request $request)
    {
        $id = $request ->input('delete_id');
        $main = Main::find($id);
        //dd($main);
        if ($main){
            $main->delete();
            return redirect()->route('main.list');
    }else{
            return redirect()->route('main.list');
    }
    }
}
