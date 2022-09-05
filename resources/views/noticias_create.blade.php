@extends('layouts.app');

@section('conteudo')
{{--formaulario denova noticia--}}
    <form action="/salvar_noticia" method="POST">
      {{--csrf--}}
      {{csrf_field() }}

      <h3>Nova notíca</h3>

      {{--titulo da noticia--}}
      <div class="form-group">
      <label for="titulo">Título:</label>
      <input type="text" class="form-control" id="titulo" name="text_titulo" placeholder="Título" required>
      </div>


      {{--texto da noticia--}}
      <div class="form-group">
        <label for="texto">Texto:</label>
         <textarea class="form-control" placeholder="Texto da Noticia" name="text_texto" id="texto" rows="5" required></textarea>
        </div>


      {{--autor da noticia--}}
      <div class="form-group">
        <label for="autor">Texto:</label>
        <input type="text" class="form-control" id="autor" name="text_autor" placeholder="Autor" required>
        </div>

        {{--visibilidade da noticia--}}
        <div class="form-group text-center">
            <input type="checkbox" name="check_visivel" checked>Notícia visivel.

        </div>
        {{--submeter--}}

        <div class="text-center">
            <button class="btn btn-primary" role="submit">Salvar</button>
        </div>


    </form>

@endsection
