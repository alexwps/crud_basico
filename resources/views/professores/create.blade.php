@extends('template_crud')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Cadastro de Professores</h2>
    </div>
    <div class="card-body">
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible">
            <strong>Há Problema nos seus dados</strong>
            <button data-bs-dismiss="alert" type="button" class="btn-close"></button>
            <br>
            @foreach($errors->all() as $error )
            <li style="color:red;"> {{ $error }} </li>
            @endforeach
            </div>
            @endif
        </div>
        <div class="row">
            <form action="{{ url('professores/novo') }}" method="POST">
                @csrf
                <div class="row">
                    <strong>Nome:</strong>
                    <input placeholder="Informe seu nome" class="form-control mb-3" name="nome" type="text" />

                    <strong>Idade:</strong>
                    <input placeholder="Informe sua idade" class="form-control mb-3" name="idade" type="number" />

                    <strong>Email:</strong>
                    <input placeholder="Informe seu Email" class="form-control mb-3" name="email" type="text" />

                    <div class="col">
                        <a class="btn btn-secondary" href="{{ url('/professores') }}">Voltar</a>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary float-end" type="submit">Salvar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection