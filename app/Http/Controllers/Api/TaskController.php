<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        
        return response()->json([
            'success' => true,
            'data' => $tasks,
        ], 200);
    }


    public function store(Request $request)
    {
        //
    }

   
    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

 
    public function destroy(string $id)
    {
        //
    }
}
