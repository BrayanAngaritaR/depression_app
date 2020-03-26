@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($sick) }}</div>

                <div class="alert alert-warning text-center">
                	<p> ¡Atención! Es posible que sufras <strong>{{ $sick }}</strong> </p>
                </div>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Resumen</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Síntomas</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tratamiento</a>
					</li>
				</ul>

				<div class="tab-content p-5" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						{{$description}}	
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						{!! $symptom !!}
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						{!! $tratamiento !!}

						<p>¿Deseas más información?</p>

						<p>Haz clic <a href="{{ $more_info }}" target="_blank">aquí</a> para ver más</p>
					</div>
				</div>

                

            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script>


	$(function () {
		//Pregunta 1
		$('input[name=debilidad]').change(function(){

	    	debilidad = $(this).val();

	    	if(debilidad == "yes"){
	    		$('#afectaciones').show();
	    	} else {
	    		alert("Marcó que no");
	    	}

	    });

	    //Pregunta 2
	    $('input[name=afectaciones]').change(function(){
	    	//Obtener el tipo de lección 
	    	afectaciones = $(this).val();

	    	if(afectaciones == "yes"){
	    		$('#estrenimiento').show();
	    	} else {
	    		alert("Marcó que no");
	    	}
	    });

	    //Mandar la otra pregunta. Luego enviar el formulario y validar en el lado del servidor
	})
	
</script>

@endpush
