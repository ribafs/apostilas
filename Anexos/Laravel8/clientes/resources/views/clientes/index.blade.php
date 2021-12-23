@extends('clientes.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Create New Cliente</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->email }}</td>
            <td>
                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('clientes.show',$cliente->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $clientes->links() !!}
      
@endsection
