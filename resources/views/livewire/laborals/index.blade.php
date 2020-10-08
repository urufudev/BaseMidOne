<div class="grid grid-cols-6 gap-6 mt-3">
    
    <div class="intro-y col-span-12 flex flex-wrap  sm:flex-no-wrap items-center mt-2">
        <select wire:model="perPage" class="w-20 input box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>50</option>
            
        </select>
        <div class="w-full  mt-3 sm:mt-0 sm:ml-auto   md:ml-0">
            <div class="w-56 ml-auto relative text-gray-700 dark:text-gray-300">
                <input wire:model="search"  type="text" class="input w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>
        </div>
    </div>
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2" id="dgwTabla" >
            <thead>
                <tr>
                    <th  wire:click.prevent="sortBy('id')" width="3%" class="text-center border-b-2 dark:border-dark-5 whitespace-no-wrap">
                        <a href="#" role="button" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            @include('partials._sort-icon',['field'=>'id'])ID
                        </a>
                    </th>
                    <th wire:click.prevent="sortBy('name')" class="border-b-2 dark:border-dark-5 whitespace-no-wrap">
                        <a href="#" role="button" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            @include('partials._sort-icon',['field'=>'name'])NOMBRE
                        </a>
                    </th>
                    <th wire:click.prevent="sortBy('description')" class="border-b-2 dark:border-dark-5 whitespace-no-wrap">
                        <a href="#" role="button" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            @include('partials._sort-icon',['field'=>'description'])DESCRIPCION
                        </a>
                    </th>
                    <th wire:click.prevent="sortBy('status')" width="10%" class="text-center border-b-2 dark:border-dark-5 whitespace-no-wrap">
                        <a href="#" role="button" class="flex items-center px-3 py-2 mt-2 rounded-md">
                            @include('partials._sort-icon',['field'=>'status'])ESTADO
                        </a>
                    </th>
                    <th  width="10%" class="text-center border-b-2 dark:border-dark-5 whitespace-no-wrap">
                        ACCIÓNES</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($laborals as $laboral)
                <tr class="intro-x">
                    <td width="3%" class="text-center">
                        <span  class="font-medium text-center whitespace-no-wrap">{{$laboral->id}}</span> 
                    </td>
                    <td>
                        <a href="" class="font-medium whitespace-no-wrap">{{$laboral->name}}</a> 
                    </td>
                    <td class="justify-center">{!!$laboral->description!!}</td>
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
                            <a class="flex items-center mr-3" href="javascript:;"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                                Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        <br>
        {{$laborals->links()}}
    </div>
    <!-- END: Data List -->
</div>

