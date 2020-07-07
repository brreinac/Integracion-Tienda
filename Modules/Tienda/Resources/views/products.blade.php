@extends('adminlte::page')
@section('content')
    <div class="container">
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered" style="margin: 0px;">
                        <thead class="thead-dark">
                            <th>Producto</th>
                            <th>Año</th>
                            <th>Precio</th>
                        </thead>
                        <tbody>
                            @foreach ($model as $key)
                                <tr>
                                    <td class="">{{$key->product_name}}</td>
                                    <td class="">{{$key->model_year}}</td>
                                    <td class="">{{$key->list_price}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    {{ $model->links() }}
@endsection
