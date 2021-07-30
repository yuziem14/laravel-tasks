@extends('layouts.master')

@section('content')
    <main id="page-tasks">
        <div class="mt-4">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Suas Tarefas</h1>
                <a href="{{ route('tasks.create') }}" class="btn btn-success">Nova Tarefa</a>
            </div>
            <div class="tasks row mt-4">
                @foreach($tasks as $task)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-2">
                        <x-task :task="$task"/>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
