@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Lista de categorias</h2>
                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#categoria">New categoria</button>
                    </div>
                    <div class="card-body">
                        <table class="table">

                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </thead>

                            <tbody>
                                @foreach ($categorias as $categoria)
                                    <tr>
                                        <td>{{$categoria->id}}</td>
                                        <td>{{$categoria->nombre}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </div>
        <div class="row">
            <div class="modal fade" id="categoria" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2>A new  categoria</h2>
                        <form action="{{route('categorias.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Categoria</label>
                                    <input type="text" class="form-control" name="nombre">

                                </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
