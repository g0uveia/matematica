@extends('template.quiz')

@section('title')
    Quiz
@endsection

@section('content')
    <div class="py-5 px-5">
        <h2 class="pb-4">Simulado do ENEM</h2>

        <div class="container-fluid bg-white py-5 px-5">
            <form method="post" class="m-0" action="{{route('enem.resultado')}}">
                @foreach ($questoes as $questao)

                <fieldset>
                    <h5>Questão {{$questao->id}}</h5>
                    <p>{{$questao->enunciado_1}}</p>
                    @isset($questao->img_path)
                        <img src="{{asset($questao->img_path)}}" alt="" />
                    @endisset
                    @isset($questao->enunciado_2)
                        <p>{{$questao->enunciado_2}}</p>
                    @endisset
                    <div class="container">
                        <div class="custom-control custom-radio mb-3">
                            <input value="a" type="radio" name="resposta-q{{$questao->id}}" id="a-q{{$questao->id}}" class="custom-control-input" required>
                            <label for="a-q{{$questao->id}}" class="custom-control-label"><?php echo htmlspecialchars_decode($questao->a)?></label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input value="b" type="radio" name="resposta-q{{$questao->id}}" id="b-q{{$questao->id}}" class="custom-control-input">
                            <label for="b-q{{$questao->id}}" class="custom-control-label"><?php echo htmlspecialchars_decode($questao->b)?></label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input value="c" type="radio" name="resposta-q{{$questao->id}}" id="c-q{{$questao->id}}" class="custom-control-input">
                            <label for="c-q{{$questao->id}}" class="custom-control-label"><?php echo htmlspecialchars_decode($questao->c)?></label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input value="d" type="radio" name="resposta-q{{$questao->id}}" id="d-q{{$questao->id}}" class="custom-control-input">
                            <label for="d-q{{$questao->id}}" class="custom-control-label"><?php echo htmlspecialchars_decode($questao->d)?></label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input value="e" type="radio" name="resposta-q{{$questao->id}}" id="e-q{{$questao->id}}" class="custom-control-input">
                            <label for="e-q{{$questao->id}}" class="custom-control-label"><?php echo htmlspecialchars_decode($questao->e) ?></label>
                        </div>
                    </div>
                </fieldset>
                <hr class="my-5">
                @endforeach
                @csrf
                <div class="text-right">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
