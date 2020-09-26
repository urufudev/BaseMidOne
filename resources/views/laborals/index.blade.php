@extends('layout.app')

@section('styles')
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> --}}
<link href="{{asset('dist/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet" />
@endsection

@section('breadcrumb')
<div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
@endsection

@section('title')
Lista de Regimen Laboral
@endsection

@section('actionbutton')
<button class="button text-white bg-theme-1 shadow-md mr-2">Add New Product</button>
@endsection

@section('content')
<div class="grid grid-cols-6 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">

        
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <input type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2" id="dgwTabla">
            <thead>
                <tr>
                    <th class="whitespace-no-wrap">ID</th>
                    <th class="whitespace-no-wrap">NOMBRE</th>
                    <th class="text-center whitespace-no-wrap">DESCRIPCIÓN</th>
                    <th class="text-center whitespace-no-wrap">ESTADO</th>
                    <th class="text-center whitespace-no-wrap">ACCIÓNES</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
        <ul class="pagination">
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li> <a class="pagination__link" href="">1</a> </li>
            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
            <li> <a class="pagination__link" href="">3</a> </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
            </li>
        </ul>
        <select class="w-20 input box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
    <!-- END: Pagination -->
</div>

@endsection

@section('scripts')
<script src="{{asset('dist/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>

<script>
    $(document).ready(function(){
        
        $('#dgwTabla').DataTable({

        language: {
                           "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    },
                    "buttons": {
                       
                           
                           "copy":"Copiar",
                           "colvis":"Filtro"
               }
                },
        dom: 'Bfrtip',
        lengthChange: false,
        autoWidth: false,
        responsive: true,
        buttons: [
             'copy','excel', 'pdf','colvis'
        ]
    });
    });
</script>

@endsection