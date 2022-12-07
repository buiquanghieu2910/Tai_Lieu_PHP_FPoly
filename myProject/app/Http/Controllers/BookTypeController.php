<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookType;
use Illuminate\Support\Facades\Redirect;

class BookTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $b = new BookType();
        $bookTypes = BookType::all();
        return view('/bookTypes/index', ['bookTypes' => $bookTypes]);
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
        $bookType = BookType::find($id);
        return view('/bookTypes/edit', ['bookType' => $bookType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        //Khai báo đối tượng
        $bookType = BookType::find($id);
        //Thay đổi trường name
        $bookType->book_type_name = $request->input('book_type_name');
        //Lưu
        $bookType->save();
        //về trang chủ
        $this->goToHome();
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Redirect /book_types
     * @return void
     */
    public function goToHome(){
        header('Location: /book_types',true,301);
        exit();
    }
}
