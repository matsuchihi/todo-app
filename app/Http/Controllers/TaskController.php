<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\Task;
class TaskController extends Controller
{
    //
    public function index(int $id)
    {
        $folders = Folder::all();

        $current_folder = Folder::find($id);


    // 選ばれたフォルダに紐づくタスクを取得する
    $tasks = $current_folder->tasks()->get();

        return view('tasks/index', [
            'folders' => $folders,
            'current_folder_id' => $id,
            'tasks' => $tasks,
        ]);
    }
}
