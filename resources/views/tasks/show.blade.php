@extends('layouts.master')

@section('content')
    <main id="page-show-task">
        <div class="mt-4">
            <div class="d-flex align-items-center justify-content-between">
                <h1>{{ $task->title }}</h1>
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Voltar</a>
            </div>

            @include('tasks._form')
        </div>
    </main>
@endsection
