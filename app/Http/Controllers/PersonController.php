<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        $items = Person::simplePaginate(5);
        return view('index', ['items'=>$items]);
    }
    public function find(Request $request)
    {
        return view('find', ['input'=>'']);
    }
    public function search(Request $request)
    {
        $item = Person::where('name', $request->input)->first();
        $param=[
            'input'=>$request->input,
            'item'=>$item
        ];
        return view('find', $param);
    }
    public function add (Request $request)
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, person::$rules);
        $form = $request->all();
        Person::create($form);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('edit',['form'=>$person]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $form = $request->all();
        $form = $request->except(['_token']);
        unset($form['_token']);
        Person::where('id', $request->id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view('delete',['form'=>$person]);
    }
    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/');
    }
}