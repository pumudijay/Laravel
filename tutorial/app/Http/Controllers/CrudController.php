<?php

namespace App\Http\Controllers;
use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Crud::latest()->paginate(5);
        return view('crud.index',compact('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crud.create');
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required'
        ]);

        $form_data = array(
            'first_name' =>$request->first_name ,
            'last_name' =>$request->last_name ,
            'email' => $request->email
        );
        Crud::create($form_data);

        return redirect('crud')->with('success','Data Added successfully.');
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
        $data=Crud::findOrFail($id);
        return view('crud.view',compact('data'));
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
        $data=Crud::findOrFail($id);
        return view('crud.edit',compact('data'));
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',            
            'email'=>'required'
        ]);

        $form_data = array(
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name,
            'email' =>$request->email
        );
        Crud::whereId($id)->update($form_data);

        return redirect('crud')->with('success','Data is successfully updated!!');
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
        $data=Crud::findOrFail($id);
        $data->delete();

        return redirect('crud')->with('success','Data is successfully deleted!!');
    }
}
