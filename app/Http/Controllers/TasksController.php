<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
  public $tasksModel;
  function __construct()
  {
    $this->tasksModel =  new Tasks;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(TaskRequest $request)
  {
    // $this->tasksModel::create(
    //   [
    //     'title' => $request->title,
    //     'description' => $request->description,
    //     'uder_id' => id,
    //   ]
    // );
    $this->tasksModel::create($request->all());
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
