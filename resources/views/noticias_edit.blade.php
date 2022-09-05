@extends('layouts.app');

@section('conteudo')
{{--formaulario para ediatr noticia--}}
    <form action="/atualizar_noticia/{{$noticia->id_noticia}}" method="POST">
      {{--csrf--}}
      {{csrf_field() }}

      <h3>Editar Notícia</h3>

      {{--titulo da noticia--}}
      <div class="form-group">
      <label for="titulo">Título:</label>
      <input type="text" class="form-control" id="titulo" name="text_titulo" value="{{$noticia->titulo}}" required>
      </div>


      {{--texto da noticia--}}
      <div class="form-group">
        <label for="texto">Texto:</label>
         <textarea class="form-control"  name="text_texto" id="texto" rows="5" required>{{$noticia->texto}}</textarea>
        </div>


      {{--autor da noticia--}}
      <div class="form-group">
        <label for="autor">Texto:</label>
        <input type="text" class="form-control" id="autor" name="text_autor" value="{{$noticia->autor}}" required>
        </div>

        {{--visibilidade da noticia--}}
        <div class="form-group text-center">
            @if ($noticia->visivel == 1)
            <input type="checkbox" name="check_visivel" checked>Notícia visivel.
            @else
            <input type="checkbox" name="check_visivel" >Notícia visivel.
            @endif



        </div>
        {{--ATUALIZAR--}}

        <div class="text-center">
            <button class="btn btn-primary" role="submit">Atualizar</button>
        </div>


    </form>

@endsection
