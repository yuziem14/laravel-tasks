<a href="{{ route('tasks.show', ['id' => $task->id]) }}" class="text-decoration-none text-dark card">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h3 class="card-title flex-grow-1">{{ $task->title }}</h3>
        <span class="badge bg-primary">{{ $task->remarks_count }}</span>
    </div>
    <div class="card-body">
        <p class="m-0">{{ $task->description }}</p>
        <p class="m-0 mt-3 text-muted">Criado em {{ date_format($task->created_at, 'd/m/Y') }}</p>
    </div>
    <div class="card-footer @if($task->done) bg-success @else bg-warning @endif">
        <p class="m-0 text-white fw-bold">@if($task->done) Concluído @else Pendente @endif</p>
    </div>
</a>
