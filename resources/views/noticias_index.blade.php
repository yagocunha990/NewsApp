@extends('layouts.app')

@section('conteudo')
     @if (count($dados)==0)
     {{--não tem noticias na base de dados --}}
         <p class="alert alert-danger text-center">
            Não foram encontradas noticias
         </p>
     @else
            {{--vai apresentar noticias na base de dados--}}

            {{--contador--}}
            @php
                $total = 0;
            @endphp

            @foreach ($dados as $noticia)

           {{--verifica se a noticia estar visivel--}}
                    @if ($noticia->visivel ==1)
                         {{--cabeçalho da noticia(titulo, autor, update-at)--}}
                        <div class="row bg-info">
                        {{--titulo--}}
                            <div class="col-md-9">
                                <h2>{{$noticia->titulo}}</h2>
                            </div>
                            {{--autor e hora de atualização--}}
                            <div class="col-md-3 text-right" style="padding-top:10px ">
                                {{$noticia->autor}} | {{$noticia->update_at}}

                            </div>

                        </div>
                        {{--CORPO DA NOTICIA--}}
                        <div class="row">
                                <div class="col-md-12" style="padding-top: 5px ">
                                    {{ $noticia->texto}}

                                </div>
                        </div>
                        {{--SEPARADOR--}}
                        <hr>
                        {{--atualização do total de noticias aprensetadas--}}
                        @php
                            $total++;
                        @endphp
                    @endif


            @endforeach
            {{--apresenta o numero de noticias visiveis--}}

            <div class="row">
                <div class="col-md-12 text-right">
                        <p>N.° Total de Notícias: {{$total}}</p>
                </div>
            </div>

            @endif

     @endsection
