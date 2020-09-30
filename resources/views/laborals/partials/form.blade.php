@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('dist/plugins/jquery-inputcase/input-case-enforcer.min.css')}}"> 
@endsection

<div class="intro-y box p-5">
    <div>
        <label><b>{{Form::label('name','Nombre')}}</b> </label>
        {{Form::text('name',null,['class'=>'input w-full border mt-2 bestupper','autocomplete'=>'off'])}}
        
    </div>
    
    <div class="mt-3">
        <label><b>{{Form::label('description','Descripción')}}</b></label>
        <div class="mt-2">
            {{Form::textarea('description',null,['class'=>'editor','autocomplete'=>'off','data-simple-toolbar'=>'true'])}}
                        
        </div>
    </div>

    <div class="mt-3">
        <label><b>{{Form::label('status','Estado')}}</b></label>
        <div class="mt-2">
           
            
            {!! Form::checkbox('status', $laboral->status,null,['class'=>'input input--switch border']) !!}
        </div>
    </div>
    <div class="text-right mt-5">
        <button type="button" class="button w-24 border dark:border-dark-5 text-gray-700 dark:text-gray-300 mr-1">Cancelar</button>
        <button type="submit" class="button w-24 bg-theme-1 text-white"><b>Guardar</b></button>
    </div>
</div>

@section('scripts')
<script src="{{asset('dist/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-inputcase/input-case-enforcer.min.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.bestupper').caseEnforcer('uppercase');
        
    });
    
</script>
<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        
        Toastify({                 
            
            text: "{!! $error !!}",
            duration: 5000,
            newWindow: true,
            close: false,
            gravity: "bottom",
            position: "left",
            backgroundColor: "#CC0000",
            stopOnFocus: true
        }).showToast();

        // Non sticky $("#html-non-sticky-toast").on("click", function() { Toastify({ node: $( "<span>Let's test some HTML stuff... <a class="font-medium" href="#">Github</a></span>"" )[0], duration: 3000, newWindow: true, close: true, gravity: "bottom", position: "left", backgroundColor: "#0e2c88", stopOnFocus: true }).showToast(); }) // sticky $("#html-sticky-toast").on("click", function() { Toastify({ node: $( "<span><strong>Remember!</strong> You can <span class="font-medium">always</span> introduce your own × HTML and <span class="font-medium">CSS</span> in the toast.<span>" )[0], duration: -1, newWindow: true, close: true, gravity: "bottom", position: "left", backgroundColor: "#0e2c88", stopOnFocus: true }).showToast(); })
        @endforeach
    @endif
</script>
@endsection