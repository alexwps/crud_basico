@extends('template_crud')
@section('content')
<div class="card">
<div class="card-header text-center">
<h2>Login</h2>
</div>
<div class="card-body">
<!-- erros alimentados pelo validate no controller -->
<div class="row">
@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
<strong>Opa!</strong> Existem alguns problemas com seus dados. <button
type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
<br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
</div>
<!-- formulário que dispara POST para rota /login -->
<form action="{{ url('/login') }}" method="POST">
@csrf
<strong>Email</strong>
<input class="form-control mb-3" type="email" name="email" id="email">
<strong>Senha</strong>
<input class="form-control mb-3" type="password" name="password" id="password">
<div class="text-center">
<button class="btn btn-primary" type="submit"> Entrar </button>
</div>
</form>
</div>
</div>
@endsection