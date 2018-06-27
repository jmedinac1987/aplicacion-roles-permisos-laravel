@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Productos
                    @can('products.create')
                        <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary pull-right">
                         Crear</a>
                    @endcan
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>NOMBRE</th>
                                <th colspan="3">&nbsp;</th><!--"&nbsp;" significa un espacio entidades html-->   
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td> 
                                <td>
                                    @can('products.show')
                                        <a href="{{ route('products.show', $product->id ) }}" class="btn btn-sm btn-default">Ver</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('products.edit')
                                        <a href="{{ route('products.edit', $product->id ) }}" class="btn btn-sm btn-default">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('products.destroy')
                                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' =>'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->render()}} <!--paginación-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
