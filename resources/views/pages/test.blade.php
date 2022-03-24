@extends(backpack_view('blank'))


@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Fecha</th>
                        <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $iteracion)
                    <tr>
                        <th>{{$iteracion->id}}</th>
                        <td>{{$iteracion->titulo}}</td>
                        <td>{{$iteracion->texto}}</td>
                        <td>
                            <a href="" type="button" class="btn btn-warning btn-sm">EDITAR</a>
                            <form action="" class="d-inline" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection