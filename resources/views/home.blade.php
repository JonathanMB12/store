@extends('layouts.app')


@section('title')
    Loggeado - Musical Store
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Status</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Haz ingresado con éxito!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
