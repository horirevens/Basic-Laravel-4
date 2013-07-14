<?php

class Author extends Eloquent {
    protected $guarded = array();
    protected $table = 'authors';

    public static $rules = array();

    public function add(){
        /*-----------------------------------
        | Sintak Insert Eloquent
        |------------------------------------
        */
        $author = new Author;
        $author->name = Input::get('name');
        $author->address = Input::get('address');
        $author->gender = Input::get('gender');
        $author->dob = Input::get('dob');
        $author->active = Input::get('active');
        $author->creator = 'Admin';
        $author->created_at = date('Y-m-d H:i:s');
        $author->save();
    }

    public function edit($id){
        /*-----------------------------------
        | Sintak Update Eloquent
        |------------------------------------
        */
        $author = Author::find($id);
        $author->name = Input::get('name');
        $author->address = Input::get('address');
        $author->gender = Input::get('gender');
        $author->dob = Input::get('dob');
        $author->active = Input::get('active');
        $author->creator = 'Admin';
        $author->created_at = date('Y-m-d H:i:s');
        $author->save();
    }

    public function del($id){
        /*-----------------------------------
        | Sintak Delete Eloquent
        |------------------------------------
        */
        $author = Author::find($id);
        $author->delete();
    }
}