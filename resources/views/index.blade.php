@extends("welcome")
@section("content")

    <div class="content">
        <div class="m-b-md">
            @if(session()->has("return"))
                <div class="alert alert-{{ session()->get('return')['css'] }}">{{ session()->get('return')['message'] }}</div>
            {{session()->forget("return")}}
            @endif
        </div>
        <div class="card">
            <div class="card-header">formulario de inserir nova tarifa</div>

            <div class="card-body">
                <form action="{{ route("index.store") }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-left">
                            Selecione o Operador
                        </label>
                        <div class="col-md-7">
                            <select class="form-control" name="operator_id">
                                <option value="">Selecione o Operador da Tarifa</option>
                                @foreach($operators as $operator)
                                    <option value="{{ $operator->name }}">{{ $operator->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-left">
                            Informe a tarifa R$
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" name="fare">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5 col-form-label text-md-left">

                        </label>
                        <div class="col-md-7">
                            <button class="btn btn-success float-right" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
