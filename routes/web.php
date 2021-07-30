<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Remark;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/tasks', function () {
    $tasks = Task::withCount('remarks')->get();
    return view('tasks.index')->with(['tasks' => $tasks]);
})->name('tasks.index');

Route::get('/tasks/create', function () {
    return view('tasks.create');
})->name('tasks.create');

Route::post('/tasks', function(Request $request) {
    $data = $request->only(['title', 'description']);
    $task = Task::create($data);

    return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('tasks.store');

Route::get('/tasks/{id}', function ($id) {
    $task = Task::find($id);
    $task->load('remarks');
    return view('tasks.show')->with(['task' => $task]);
})->name('tasks.show');

Route::put('/tasks/{id}', function ($id, Request $request) {
    $data = $request->only(['title', 'description', 'done']);
    $task = Task::find($id);
    $task->done = false;
    $task->fill($data);
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('tasks.update');

Route::patch('/tasks/{id}', function ($id, Request $request) {
    $data = $request->only(['title', 'description', 'done']);
    $task = Task::find($id);
    $task->fill($data);
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('tasks.update');

Route::delete('/tasks/{id}', function ($id) {
    $task = Task::find($id);
    $task->remarks()->delete();
    $task->delete();
    return redirect()->route('tasks.index');
})->name('tasks.destroy');

Route::post('/tasks/{id}/remarks', function ($id, Request $request) {
    $task = Task::find($id);
    $task->remarks()->create(['description' => $request->input('remark')]);
    return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('remarks.store');

Route::delete('/remarks/{id}', function ($id) {
    $task = Remark::find($id)->task;
    Remark::destroy($id);
    return redirect()->route('tasks.show', ['id' => $task->id]);
})->name('remarks.destroy');
