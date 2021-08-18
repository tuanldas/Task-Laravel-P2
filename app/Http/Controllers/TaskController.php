<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\UpdateRequest;
use App\Model\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Task::all();
        return view('list', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        $create = new Task();
        $create->id = $request->input('id');
        $create->name = $request->input('name');
        $create->phone = $request->input('phone');
        $create->email = $request->input('email');
        $create->save();

        return redirect()->route('list');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $data = Task::find($id);
        return view('update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequest $request, $id)
    {
        $update = Task::where('id', $id)
            ->update([
            'name' => "$request->name",
            'phone' => $request->phone,
            'email' => "$request->email"
        ]);
        return redirect()->route('list');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Task::find($id)->delete();
        return redirect()->route('list');
    }

    public function search(Request $request) {
        $lists =  Task::where('name','like',"%".$request->search."%")
            ->orWhere('phone', 'like', "%".$request->search."%")
            ->orWhere('id', 'like', "%".$request->search."%")
            ->orWhere('email', 'like', "%".$request->search."%")
            ->get();
        return view('search', compact('lists'));
    }
}
