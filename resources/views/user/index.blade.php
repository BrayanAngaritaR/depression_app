@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Diagnóstico aproximado de enfermedades') }}</div>

                <div class="alert alert-warning text-center">
                	<p>Precaución, los resultados aquí son aproximados. Recomendamos visitar tu médico de confianza</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.result.store') }}">
                        @csrf

                        <!--Pregunta 1-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes debilidad?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="debilidad_si" name="debilidad" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="debilidad_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="debilidad_no" name="debilidad" class="custom-control-input" value="no">
										<label class="custom-control-label" for="debilidad_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 2-->
                        <div class="form-group row" id="afectaciones" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">¿Sientes afectaciones en la piel?</label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="afectaciones_si" name="afectaciones" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="afectaciones_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="afectaciones_no" name="afectaciones" class="custom-control-input" value="no"> 
										<label class="custom-control-label" for="afectaciones_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 3-->
                        <div class="form-group row" id="dolor_cabeza" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sufres de dolores de cabeza a menudo?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolor_cabeza_si" name="dolor_cabeza" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="dolor_cabeza_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolor_cabeza_no" name="dolor_cabeza" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="dolor_cabeza_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 4-->
                        <div class="form-group row" id="dolor_pecho" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">¿Sufres de dolor en el pecho?</label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolor_pecho_si" name="dolor_pecho" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="dolor_pecho_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolor_pecho_no" name="dolor_pecho" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="dolor_pecho_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 5-->
                        <div class="form-group row" id="unias" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes que tus uñas se quiebran?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="unias_si" name="unias" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="unias_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="unias_no" name="unias" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="unias_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 6-->
                        <div class="form-group row" id="agitado" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Te sientes agitado?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="agitado_si" name="agitado" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="agitado_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="agitado_no" name="agitado" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="agitado_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 7-->
                        <div class="form-group row" id="dolores_musculares" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes dolores musculares?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolores_musculares_si" name="dolores_musculares" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="dolores_musculares_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolores_musculares_no" name="dolores_musculares" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="dolores_musculares_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 8-->
                        <div class="form-group row" id="frio" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Te da frío regularmente?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="frio_si" name="frio" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="frio_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="frio_no" name="frio" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="frio_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 9-->
                        <div class="form-group row" id="latidos" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes que tu corazón late lentamente?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="latidos_si" name="latidos" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="latidos_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="latidos_no" name="latidos" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="latidos_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 10-->
                        <div class="form-group row" id="estrenimiento" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes estreñimiento? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="estrenimiento_si" name="estrenimiento" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="estrenimiento_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="estrenimiento_no" name="estrenimiento" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="estrenimiento_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 11-->
                        <div class="form-group row" id="cansancio" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Te sientes cansado física y mentalmente? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="cansancio_si" name="cansancio" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="cansancio_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="cansancio_no" name="cansancio" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="cansancio_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 12-->
                        <div class="form-group row" id="enojo" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Te enojas con facilidad? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="enojo_si" name="enojo" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="enojo_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="enojo_no" name="enojo" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="enojo_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 13-->
                        <div class="form-group row" id="llorar" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Lloras con frecuencia? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="llorar_si" name="llorar" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="llorar_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="llorar_no" name="llorar" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="llorar_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 14-->
                        <div class="form-group row" id="fisico" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Te gusta tu apariencia física?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="fisico_si" name="fisico" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="fisico_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="fisico_no" name="fisico" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="fisico_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 15-->
                        <div class="form-group row" id="culpa" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes que es tu culpa cuando las cosas salen mal? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="culpa_si" name="culpa" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="culpa_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="culpa_no" name="culpa" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="culpa_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 16-->
                        <div class="form-group row" id="hiperactividad" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes que no puedes quedarte quieto (Hiperactividad)? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="hiperactividad_si" name="hiperactividad" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="hiperactividad_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="hiperactividad_no" name="hiperactividad" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="hiperactividad_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 17-->
                        <div class="form-group row" id="ritmo" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿A qué ritmo hablas? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="ritmo_si" name="ritmo" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="ritmo_si">Rápido</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="ritmo_no" name="ritmo" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="ritmo_no">Lento</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 18-->
                        <div class="form-group row" id="dolores_garganta" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Te han dado dolores de garganta? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolores_garganta_si" name="dolores_garganta" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="dolores_garganta_si">Si</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolores_garganta_no" name="dolores_garganta" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="dolores_garganta_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta X-->
                        <div class="form-group row" id="participacion" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                ¿Deseas participar en las actividades que te proponen? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="participacion_si" name="participacion" class="custom-control-input" value="yes"> 
                                        <label class="custom-control-label" for="participacion_si">Si</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="participacion_no" name="participacion" class="custom-control-input" value="yes">
                                        <label class="custom-control-label" for="participacion_no">No</label>
                                    </div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta Y-->
                        <div class="form-group row" id="interes" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                ¿Le perdiste el interés a las cosas? 
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="interes_si" name="interes" class="custom-control-input" value="yes"> 
                                        <label class="custom-control-label" for="interes_si">Si</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="interes_no" name="interes" class="custom-control-input" value="yes">
                                        <label class="custom-control-label" for="interes_no">No</label>
                                    </div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 19-->
                        <div class="form-group row" id="frecuencia_dolor_de_cabeza" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Cada cuánto te está doliendo la cabeza?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="frecuencia_dolor_de_cabeza_si" name="frecuencia_dolor_de_cabeza" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="frecuencia_dolor_de_cabeza_si">Todos los días</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="frecuencia_dolor_de_cabeza_no" name="frecuencia_dolor_de_cabeza" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="frecuencia_dolor_de_cabeza_no">Casi nunca</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 20-->
                        <div class="form-group row" id="mantener_concentracion" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Es difícil que puedas mantener tu concentración?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="mantener_concentracion_si" name="mantener_concentracion" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="mantener_concentracion_si">Sí, me distraigo con facilidad</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="mantener_concentracion_no" name="mantener_concentracion" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="mantener_concentracion_no">No, generalmente estoy muy concentrado</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!--Pregunta 21-->

                        <!--Pregunta 22-->
                        <div class="form-group row" id="desorden" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes que necesitas conseguir más “cosas” para guardar?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="desorden_si" name="desorden" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="desorden_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="desorden_no" name="desorden" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="desorden_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 23-->
                        <div class="form-group row" id="acumular" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Acumulas cosas que no necesitas?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="acumular_si" name="acumular" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="acumular_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="acumular_no" name="acumular" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="acumular_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 24-->
                        <div class="form-group row" id="placer" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes placer?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="placer_si" name="placer" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="placer_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="placer_no" name="placer" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="placer_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 25-->
                        <div class="form-group row" id="vomitar" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Vomitas a menudo?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="vomitar_si" name="vomitar" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="vomitar_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="vomitar_no" name="vomitar" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="vomitar_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 26-->
                        <div class="form-group row" id="suicidio" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Piensas en cómo sería la vida sin ti?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="suicidio_si" name="suicidio" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="suicidio_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="suicidio_no" name="suicidio" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="suicidio_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 27-->
                        <div class="form-group row" id="agresion" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                ¿Te gustaría hacerle daño a alguien?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="agresion_si" name="agresion" class="custom-control-input" value="yes"> 
                                        <label class="custom-control-label" for="agresion_si">Sí</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="agresion_no" name="agresion" class="custom-control-input" value="yes">
                                        <label class="custom-control-label" for="agresion_no">No</label>
                                    </div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 28-->
                        <div class="form-group row" id="dolor_musculos" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                            	¿Sientes que los músculos te duelen?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                	<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolor_musculos_si" name="dolor_musculos" class="custom-control-input" value="yes"> 
										<label class="custom-control-label" for="dolor_musculos_si">Sí</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="dolor_musculos_no" name="dolor_musculos" class="custom-control-input" value="yes">
										<label class="custom-control-label" for="dolor_musculos_no">No</label>
									</div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 29-->
                        <div class="form-group row" id="aseo" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                ¿Cada cuánto haces aseo?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="aseo_si" name="aseo" class="custom-control-input" value="yes"> 
                                        <label class="custom-control-label" for="aseo_si">Generalmente es muy seguido.</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="aseo_no" name="aseo" class="custom-control-input" value="yes">
                                        <label class="custom-control-label" for="aseo_no">Casi nunca, no me preocupa si los demás ven desorden.</label>
                                    </div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 30-->
                        <div class="form-group row" id="dormir" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                ¿Te duermes fácil?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="dormir_si" name="dormir" class="custom-control-input" value="yes"> 
                                        <label class="custom-control-label" for="dormir_si">Sí, me demoro más o menos 5 minutos en quedarme dormido.</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="dormir_no" name="dormir" class="custom-control-input" value="yes">
                                        <label class="custom-control-label" for="dormir_no">No, no logro conciliar el sueño</label>
                                    </div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 31-->
                        <div class="form-group row" id="fatiga" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                ¿Te sientes cansado, con poca energía y tienes un fuerte deseo de dormir?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="fatiga_si" name="fatiga" class="custom-control-input" value="yes"> 
                                        <label class="custom-control-label" for="fatiga_si">Sí, me demoro más o menos 5 minutos en quedarme dormido.</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="fatiga_no" name="fatiga" class="custom-control-input" value="yes">
                                        <label class="custom-control-label" for="fatiga_no">No, no logro conciliar el sueño</label>
                                    </div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 32-->
                        <div class="form-group row" id="gula" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                ¿Comes sin parar?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="gula_si" name="gula" class="custom-control-input" value="yes"> 
                                        <label class="custom-control-label" for="gula_si">Sí, y son cantidades de comida inusualmente grandes.</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="gula_no" name="gula" class="custom-control-input" value="yes">
                                        <label class="custom-control-label" for="gula_no">No, solamente me alimento hasta quedar satisfecho.</label>
                                    </div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--Pregunta 32-->
                        <div class="form-group row" id="peso_ideal" >
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                ¿Crees que tienes "El peso ideal"?
                            </label>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="peso_ideal_si" name="peso_ideal" class="custom-control-input" value="yes"> 
                                        <label class="custom-control-label" for="peso_ideal_si">Sí, y son cantidades de comida inusualmente grandes.</label>
                                    </div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="peso_ideal_no" name="peso_ideal" class="custom-control-input" value="yes">
                                        <label class="custom-control-label" for="peso_ideal_no">No, solamente me alimento hasta quedar satisfecho.</label>
                                    </div>
                                </fieldset>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" id="validar"  class="btn btn-outline-dark">
                                    {{ __('Validar') }}
                                </button>
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



@endpush
