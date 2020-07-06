@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-light table-bordered">
                    <thead>
                        <th>Producto</th>
                        <th>Año</th>
                        <th>Precio</th>
                    </thead>
                    <tbody>
                        @foreach ($model as $key)
                            <tr>
                                <td>{{$key->product_name}}</td>
                                <td>{{$key->model_year}}</td>
                                <td>{{$key->list_price}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{ $model->links() }}
@endsection
