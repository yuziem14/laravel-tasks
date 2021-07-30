@php
    $formActions = [
        'tasks.create' => route('tasks.store'),
        'tasks.show' => route('tasks.update', ['id' => $task->id ?? 0]),
    ];
    $isEditing = Route::currentRouteName() === 'tasks.show';
@endphp
<form
    id="task-form"
    action="{{ $formActions[Route::currentRouteName()] }}"
    method="POST"
>
    @if($isEditing)
        @method('PUT')
    @endif

    @csrf
    <div class="mb-3">
        <label for="title" id="title" class="form-label">Título</label>
        <input
            type="text"
            name="title"
            id="title"
            class="form-control"
            @if($isEditing) value="{{ $task->title }}" @endif
        >
    </div>
    <div class="mb-3">
        <label for="description" id="description" class="form-label">Descrição</label>
        <input
            type="text"
            name="description"
            id="description"
            class="form-control"
            @if($isEditing) value="{{ $task->description }}" @endif
        >
    </div>
    @if($isEditing)
        <div class="mb-3 form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                name="done"
                id="done"
                @if($task->done) checked @endif
            >
            <label class="form-check-label" for="done">Concluído</label>
        </div>
    @endif
</form>
<div class="d-flex align-items-center">
    <button form="task-form" type="submit" class="btn btn-success me-2">Salvar</button>
    @if($isEditing)
        <form action="{{ route('tasks.destroy', ['id' => $task->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    @endif
</div>

@if($isEditing)
    <hr>
    <div class="remarks" class="my-4">
        <h3>Observações</h3>
        <form action="{{ route('remarks.store', ['id' => $task->id]) }}" method="POST" class="mb-2">
            @csrf
            <div class="mb-3 d-flex align-items-center justify-content-between">
                <input type="text" name="remark" id="remark" class="form-control w-75 me-4">
                <button type="submit" class="btn btn-success w-25">Adicionar +</button>
            </div>
        </form>

        @if(count($task->remarks) > 0)
            <ul class="list-group">
                @foreach($task->remarks as $remark)
                    <li
                        class="list-group-item d-flex align-items-center justify-content-between"
                    >
                        <span>{{ $remark->description }}</span>
                        <form action="{{ route('remarks.destroy', ['id' => $remark->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-danger fw-bold m-0">Não há observações, no momento.</p>
        @endif
    </div>
@endif
