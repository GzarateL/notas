@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Añadir Nota</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('notas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nota">Nota</label>
                            <input type="number" class="form-control" id="nota" name="nota" step="0.1" min="0" max="10" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Nota</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
