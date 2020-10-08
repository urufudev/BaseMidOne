@extends('layout.app')

@section('styles')
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> --}}
<link href="{{asset('dist/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('dist/plugins/jquery-datatable/skin/bootstrap/css/responsive.dataTables.min.css')}}" rel="stylesheet" />
<link href="{{asset('dist/plugins/jquery-datatable/skin/bootstrap/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
{{-- <script src="{{asset('dist/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap4.min.css')}}"></script> --}}
@endsection

@section('breadcrumb')
<div class="-intro-x breadcrumb mr-auto hidden sm:flex"> 
    <a href="" class="">Inicio</a> 
    <i data-feather="chevron-right" class="breadcrumb__icon"></i> 
    <a href="" class="breadcrumb--active">Regimen Laboral</a> 
</div>
@endsection

@section('title')
Lista de Regimen Laboral
@endsection

@section('actionbutton')

<a href="{{route('laborals.create')}}" class="button inline-block ml-auto mr-1 mb-2 bg-theme-1 text-white inline-flex items-center">
    <i class="w-4 h-4 mr-1" data-feather="plus"></i>
    Crear </a>
{{-- <button class="button text-white bg-theme-1 shadow-md mr-2">Crear</button> --}}
@endsection

@section('content')
<livewire:laborals.index/>

@endsection

@section('scripts')
{{-- <script src="{{asset('dist/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/skin/bootstrap/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>

<script src="{{asset('dist/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>


<script>
    
    $(document).ready(function(){
        
        var table= $('#dgwTabla').DataTable({
            "serverSide":true,
            "ajax":"{{url('api/laborals')}}",
            "columns": [
                {data: 'id',class:'text-center',},
                {data: 'name'},
                {data:'description'},
                {data:'status'},
                {data:'btn',class:'table-report__action',}
             ],
             language: {
                sUrl: 'dist/plugins/jquery-datatable/spanish.json'
                },
        dom: 'Blfrtip',
        lengthChange: true,
        
        autoWidth: false,
        responsive: true,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'Todos']],
        buttons: [
            {   extend: "excel", className: "hide-for-mobile" },
            {   extend: "pdf", className: "hide-for-mobile" }
            
        ]
    });
    
    });
</script> --}}

@endsection