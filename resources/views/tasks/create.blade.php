@extends('layouts.master')

@section('content')
    <main id="page-new-task">
        <div class="mt-4">
            <div>
                <div class="d-flex align-items-center justify-content-between">
                    <h1>Nova Tarefa</h1>
                    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Voltar</a>
                </div>

                @include('tasks._form')
            </div>
        </div>
    </main>
@endsection
