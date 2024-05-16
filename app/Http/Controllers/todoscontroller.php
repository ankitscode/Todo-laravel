<?php

namespace App\Http\Controllers;
use App\Models\todos;
use Illuminate\Http\Request;

class todoscontroller extends Controller
{
  //function for delete
  public function delete($id)
  {
    todos::find($id)->delete();
    return redirect(route("home.todo"));
  }
  // function for retriving data from database
  public function index()
  {
    $todos = todos::all();
    $data = compact('todos');
    return view("welcome")->with($data);
  }
  // function for saving data into database
  public function store(request $request)
  {
    $request->validate(
      [
        'name' => 'required',
        'work' => 'required',
        'date' => 'required'
      ]
    );
    $todo = new todos;
    $todo->name = $request->name;
    $todo->work = $request->work;
    $todo->date = $request->date;
    $todo->save();
    return redirect(route("home.todo"));
  }
  //function for edit
  public function edit($id)
  {
    $todo = todos::find($id);
    $data = compact('todo');
    return view("edit")->with($data);
  }
  //function for update
  public function update(request $request)
  {
    // dd($request->all());
    $request->validate(
      [
        'name' => 'required',
        'work' => 'required',
        'date' => 'required'
      ]
    );
    $id = $request['id'];
    $todo = todos::find($id);
    if ($todo) {
      $todo->name = $request->name;
      $todo->work = $request->work;
      $todo->date = $request->date;
      $todo->save();
      return redirect(route("home.todo"));
    } else {
      return redirect()->back()->with('error', 'Todo not found.');
    }
  }
}
