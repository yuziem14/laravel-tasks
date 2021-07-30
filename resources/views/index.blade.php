@extends('layouts.master')

@section('content')
    <main id="page-index">
        <div class="mt-4">
            <h1>Olá,</h1>
            <h4>Organize suas tarefas com o <span class="fw-bold">Laravel Tasks</span>.</h4>
        </div>
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">Continuar</a>
    </main>
@endsection
