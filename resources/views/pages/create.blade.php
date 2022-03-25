@extends(backpack_view('blank'))


@section('content')

<div class="container pt-4">
    <div class="row mb-3">
        <div class="col mx-auto mt-2">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action={{ route('store.tests') }} method="POST" class="row g-3 needs-validation" enctype="multipart/form-data">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="titulo" placeholder="TITULO" autocomplete="off" required>
                        </div>
                        <br /><br />
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="texto" placeholder="TEXTO" autocomplete="off" required>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-auto">
                                @csrf
                                <button class="btn btn-primary form-control" type="submit">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection