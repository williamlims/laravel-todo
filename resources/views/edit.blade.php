@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')
    <a href="{{ route('logout') }}" class="position-absolute top-0 end-0 link-secondary p-3">
        <i class="bi bi-box-arrow-right fs-3"></i>
    </a>
    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <div class="shadow-lg p-3 bg-dark text-white rounded p-5" style="width: 850px; min-height: 300px;">
            <h1>Editar Tarefa</h1>
            <form action="/todos/{{ $todo->id }}" method="post" class="mt-3" >
                @csrf
                @method('put')
                <div class="input-group">
                    <div class="input-group-text bg-white p-0">
                        <input type="color" value="{{ $todo->color }}" class="form-control form-control-color border-0" name="color" title="Escolha uma cor">
                    </div>
                    <div>
                        <input type="hidden" name="is_complete" value="{{ $todo->is_complete }}">
                        <input type="hidden" name="user_id" value="{{ $todo->user_id }}">
                        <input type="hidden" name="created_at" value="{{ $todo->created_at }}">
                        <input type="hidden" name="updated_at" value="{{ $todo->updated_at }}">
                    </div>
                    <input type="text" value="{{ $todo->title }}" class="form-control" name="title" placeholder="O que fazer?" required>
                    <button type="submit" class="btn btn-secondary">
                        <i class="bi bi-plus fs-4"></i>
                    </button>
                </div>
            </form>

            </ul>
        </div>
    </div>
@endsection
