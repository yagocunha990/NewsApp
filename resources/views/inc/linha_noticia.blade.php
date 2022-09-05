<div class="row">
  {{--Titulo--}}
  <div class="col-md-6">
            <strong>{{$noticia->titulo}}</strong>
  </div>
  {{--Autor--}}
  <div class="col-md-3">
    {{$noticia->autor}}
</div>
  {{--incones de gestão--}}
  <div class="col-md-3 text-right">
    {{--visibilidade--}}
      @if ($noticia->visivel ==1)
      <a href="/colocar_invisivel/{{$noticia->id_noticia}}" class="btn btn-secondary  " role="button" style="margin-bottom:5px ;margin-left:10px ">Visivel</a>
      @else
      <a href="/colocar_visivel/{{$noticia->id_noticia}}" class="btn btn-secondary  " role="button" style="margin-bottom:5px ;margin-left:10px; color:#ddd ">Invisivel</a>
      @endif

{{--------------------------------}}
    {{--editar--}}
    <a href="/editar_noticia/{{$noticia->id_noticia}}" class="btn btn-primary " role="button" style="margin-bottom:5px ;margin-left:10px">Editar</a>
{{--------------------------------}}
    {{--eliminar--}}
    <a href="/eliminar_noticia/{{$noticia->id_noticia}}" class="btn btn-warning" role="button" style="margin-bottom:5px ;margin-left:10px">Deletar</a>
</div>
</div>
