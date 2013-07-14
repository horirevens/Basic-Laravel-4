<?php

class AuthorsController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $authors = Author::where('id','>=',1)->paginate(5);

        return View::make('authors.index')
            ->with('title', 'AUTHORS - LIST')
            ->with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('authors.create')
            ->with('title', 'AUTHORS - ADD');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $author = new Author;
        $author->add();

        if($author){
            return Redirect::route('authors.index')
                ->with('title', 'AUTHORS - LIST')
                ->with('success', 'Author is Inserted Successfully');  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $author = Author::find($id);

        return View::make('authors.show')
            ->with('title', 'AUTHORS - EDIT')
            ->with('author', $author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $author = Author::find($id);

        return View::make('authors.edit')
            ->with('title', 'AUTHORS - EDIT')
            ->with('author', $author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $author = new Author;
        $author->edit($id);

        if($author){
            return Redirect::route('authors.index')
                ->with('title', 'AUTHORS - LIST')
                ->with('success', 'Author is Updated Successfully');  
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $author = new Author;
        $author->del($id);

        if($author){
            return Redirect::route('authors.index')
                ->with('title', 'AUTHORS - LIST')
                ->with('success', 'Author is Deleted Successfully');  
        }
    }

}