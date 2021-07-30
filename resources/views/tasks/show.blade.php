@extends('layouts.master')

@section('content')
    <main id="page-show-task">
        <div class="mt-4">
            <div class="d-flex align-items-center justify-content-between">
                <h1>Lorem Ipsum</h1>
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Voltar</a>
            </div>

            <form action="">
                <div class="mb-3">
                    <label for="title" id="title" class="form-label">Título</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="description" id="description" class="form-label">Descrição</label>
                    <input type="text" name="description" id="description" class="form-control">
                </div>
                <div class="mb-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="done">
                    <label class="form-check-label" for="done">Concluído</label>
                </div>

                <button class="btn btn-success">Salvar</button>
            </form>
            <hr>
            <div class="remarks" class="my-4">
                <h3>Observações</h3>
                <form action="" class="mb-2">
                    <div class="mb-3 d-flex align-items-center justify-content-between">
                        <input type="text" name="remark" id="remark" class="form-control w-75 me-4">
                        <button class="btn btn-success w-25">Adicionar +</button>
                    </div>
                </form>

                <ul class="list-group">
                    <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="list-group-item">Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
        </div>
    </main>
@endsection
