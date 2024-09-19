@extends('layout.app')
@section('content')
@include('includes.header')
@include('includes.sobre.heroSobre')
<div class="history_sobre">
    @include('includes.sobre.timelineSobre')
</div>
@include('includes.sobre.estrutura')
@include('includes.sobre.missao')
@include('includes.footerGeral')
@stop