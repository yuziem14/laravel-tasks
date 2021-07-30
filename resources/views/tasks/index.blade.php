@extends('layouts.master')

@section('content')
    <main id="page-tasks">
        <div class="mt-4">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Suas Tarefas</h1>
                <a href="{{ route('tasks.create') }}" class="btn btn-success">Nova Tarefa</a>
            </div>
            <div class="tasks row mt-4">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="{{ route('tasks.show', ['id' => 1]) }}" class="text-decoration-none text-dark card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="card-title flex-grow-1">Lorem ipsum</h3>
                            <span class="badge bg-primary">3</span>
                        </div>
                        <div class="card-body">
                            <p class="m-0">consectetur adipisicing elit. Repudiandae, mollitia reprehenderit porro saepe quas.</p>
                            <p class="m-0 mt-3 text-muted">Criado em 30/07/2021</p>
                        </div>
                        <div class="card-footer bg-success">
                            <p class="m-0 text-white fw-bold">Concluído</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="{{ route('tasks.show', ['id' => 2]) }}" class="text-decoration-none text-dark card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="card-title flex-grow-1">Lorem ipsum</h3>
                            <span class="badge bg-primary">3</span>
                        </div>
                        <div class="card-body">
                            <p class="m-0">consectetur adipisicing elit. Repudiandae, mollitia reprehenderit porro saepe quas.</p>
                            <p class="m-0 mt-3 text-muted">Criado em 30/07/2021</p>
                        </div>
                        <div class="card-footer bg-success">
                            <p class="m-0 text-white fw-bold">Concluído</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="{{ route('tasks.show', ['id' => 3]) }}" class="text-decoration-none text-dark card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h3 class="card-title flex-grow-1">Lorem ipsum</h3>
                            <span class="badge bg-primary">3</span>
                        </div>
                        <div class="card-body">
                            <p class="m-0">consectetur adipisicing elit. Repudiandae, mollitia reprehenderit porro saepe quas.</p>
                            <p class="m-0 mt-3 text-muted">Criado em 30/07/2021</p>
                        </div>
                        <div class="card-footer bg-warning">
                            <p class="m-0 text-white fw-bold">Pendente</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection
