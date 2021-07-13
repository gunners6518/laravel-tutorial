<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class GetTaskAction extends Controller
{
    public function __invoke(int $id)
    {
        $task = Task::query()->findOfFail($id);

        return response()->json([
            'id' => $task->id,
            'name' => $task->name
        ]);
    }
}
