@extends('layouts.app')

@push('scripts')
<!-- Main Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="https://cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.core.js"></script>

<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __("Crear enfermedad") }}</div>

                <div class="alert alert-warning text-center">
                	<p> ¡Atención! Es posible que sufras <strong></strong> </p>
                </div>


				<div class="tab-content p-5">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<form action="{{ route('admin.diseases.store') }}" method="POST">
					@csrf

					<div class="form-row">
					    <div class="form-group col-md-12">
							<label for="sick_name">Nombre de la enfermedad</label>
							<input type="text" class="form-control" id="sick_name" name="title">
					    </div>

					    <!--<div class="form-group col-md-12">
							<label for="description">Descripción de la enfermedad</label>
							<textarea class="form-control" rows="10" id="description" name="description"></textarea>
					    </div>-->

					    <div id="description">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div>

					    <div class="form-group col-md-12">
							<label for="symptom">Síntomas de la enfermedad</label>
							<textarea class="form-control" rows="3" id="symptom" name="description"></textarea>
					    </div>

					    <div class="form-group col-md-12">
							<label for="url">Más información de la enfermedad</label>
							<input type="url" class="form-control" id="url" name="title">
					    </div>
					</div>
 
					
						
					</form>

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
  var quill = new Quill('#description', {
    theme: 'snow'
  });

</script>

@endpush
