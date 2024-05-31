@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <!-- Añadimos el enlace para ver las notas -->
                    <a href="{{ route('notas.index') }}" class="btn btn-primary mt-3">Ver Notas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
