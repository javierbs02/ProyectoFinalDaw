@extends('layouts.plantilla')
@section("content")
<link href="assets/plantilla/css/puntuacion.css" rel="stylesheet">

<div class="row justify-content-center mt-5">
    <div class="col-12">
        <div class="card shadow-2-strong">
            <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                    style="position: relative; height: 700px">
                    <table class="table table-dark mb-0">
                        <thead style="background-color: #393939;">
                            <tr class="text-uppercase text-success">
                                <th scope="col">Usuario</th>
                                <th scope="col">Puntuación</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->user }}</td>
                                <td>{{ $usuario->bestScore }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection