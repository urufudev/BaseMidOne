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
<div class="grid grid-cols-6 gap-6 mt-5">
    
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2" id="dgwTabla" data-order='[[ 0, "desc" ]]'>
            <thead>
                <tr>
                    <th width="3%" class="text-center border-b-2 dark:border-dark-5 whitespace-no-wrap">ID</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">NOMBRE</th>
                    <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">DESCRIPCIÓN</th>
                    <th width="10%" class="text-center border-b-2 dark:border-dark-5 whitespace-no-wrap">ESTADO</th>
                    <th width="10%" class="text-center border-b-2 dark:border-dark-5 whitespace-no-wrap">ACCIÓNES</th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach($laborals as $laboral)
                <tr class="intro-x">
                    <td class="w-40">
                        <span  class="font-medium whitespace-no-wrap">{{$laboral->id}}</span> 
                    </td>
                    <td>
                        <a href="" class="font-medium whitespace-no-wrap">{{$laboral->name}}</a> 
                    </td>
                    <td class="text-center">{{$laboral->description}}</td>
                    <td class="w-40">

                        @if($laboral->status=='ACTIVO')
                        <div class="flex items-center justify-center text-theme-9"> 
                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Activo
                        </div>

                        @elseif($laboral->status=='INACTIVO')
                        <div class="flex items-center justify-center text-theme-6"> 
                            <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactivo 
                        </div>

                        @endif
                        
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody> --}}
        </table>
    </div>
    <!-- END: Data List -->
</div>


@endsection

@section('scripts')
<script src="{{asset('dist/plugins/jquery/jquery.min.js')}}"></script>
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

{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
 --}}
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
</script>

@endsection