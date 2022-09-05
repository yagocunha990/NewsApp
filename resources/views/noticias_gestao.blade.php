@extends('layouts.app')

@section('conteudo')


    @if (count($noticias)==0)
        <div class="col-md-12" text-center>
            <p class="alert alert-danger text-center">Não foram encontradas notícias.</p>
        </div>

    @else
        @foreach ($noticias as $noticia )
            @include('inc.linha_noticia')
        @endforeach

    @endif
@endsection
