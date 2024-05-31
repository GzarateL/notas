@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Notas</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a href="{{ route('notas.create') }}" class="btn btn-primary mb-3">Añadir Nota</a>
                    <ul class="list-group">
                        @forelse ($notas as $nota)
                            <li class="list-group-item">
                                Nota: {{ $nota->nota }}
                            </li>
                        @empty
                            <li class="list-group-item">No hay notas aún.</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
