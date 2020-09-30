@extends('layout.app')


@section('breadcrumb')
<div class="-intro-x breadcrumb mr-auto hidden sm:flex"> 
    <a href="" class="">Inicio</a> 
    <i data-feather="chevron-right" class="breadcrumb__icon"></i> 
    <a href="" class="">Regimen Laboral</a> 
    <i data-feather="chevron-right" class="breadcrumb__icon"></i>
    <a href="" class="breadcrumb--active">Editar</a> 
</div>
@endsection

@section('title')
Editar Regimen Laboral
@endsection

@section('content')
<div class="grid grid-cols-12 gap-6 mt-5">
    
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Form Layout -->


        {!! Form::model($laboral,['route'=>['laborals.update', $laboral->id],'method'=>'PUT']) !!}
            
        @include('laborals.partials.form')

        {!! Form::close() !!}  
        <!-- END: Form Layout -->
    </div>
</div>

@endsection
