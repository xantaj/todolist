@extends('layouts.app')

@section('content')
<style>
    .todo-description {
        display: none;
        color: #666;
        font-size: 14px;
        margin-top: 5px;
        background-color: #f9f9f9;
        padding: 8px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }
</style>

<div class="container todo-container">
    <h2 class="todo-title">Todo Listem</h2>

    @if ($todos->isEmpty())
    <p class="no-task">Henüz görev eklemediniz.</p>
    @else
    <ul class="todo-list">
        @foreach ($todos as $todo)
        <li class="todo-item">
            <div class="todo-header" onclick="toggleDescription(this)">
                <form method="POST" action="{{ route('todos.toggle', $todo) }}" class="inline-form">
                    @csrf
                    @method('POST')
                    <button type="submit" class="todo-toggle-btn">
                        {{ $todo->is_done ? 'Yapılmadı' : 'Tamamlandı' }}
                    </button>
                </form>

                <span class="todo-title-text {{ $todo->is_done ? 'done' : '' }}">
                    {{ $todo->title }}
                </span>

                <form method="POST" action="{{ route('todos.destroy', $todo) }}" class="inline-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="todo-delete-btn">Sil</button>
                </form>
            </div>

            <div class="todo-description">
                {{ $todo->description }}
            </div>
        </li>
        @endforeach
    </ul>
    @endif

    <!-- Yeni görev ekleme formu -->
    <form method="POST" action="{{ route('todos.store') }}" class="add-todo-form">
        @csrf
        <input type="text" name="title" placeholder="Yeni görev başlığı" class="todo-input" required>
        <textarea name="description" placeholder="Açıklama (isteğe bağlı)" rows="3" class="todo-textarea"></textarea>
        <button type="submit" class="todo-add-btn">Ekle</button>
    </form>
</div>

<script>
    function toggleDescription(headerElement) {
    const descriptionDiv = headerElement.nextElementSibling;
    if (descriptionDiv && descriptionDiv.classList.contains('todo-description')) {
        // Eğer açıklama kutusu zaten görünürse, gizle
        if (descriptionDiv.classList.contains('show')) {
            descriptionDiv.classList.remove('show');
        } else {
            // Eğer açıklama kutusu gizli ise, göster
            descriptionDiv.classList.add('show');
        }
    }
}

</script>
@endsection