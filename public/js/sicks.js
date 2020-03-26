<script>


	$(function () {
		//Pregunta 1
		$('input[name=debilidad]').change(function(){

	    	debilidad = $(this).val();

	    	if(debilidad == "yes"){
	    		$('#afectaciones').show();
	    	} else {
	    		$('#dolores_musculares').show();
	    	}

	    });

	    //Pregunta 2
	    $('input[name=afectaciones]').change(function(){
	    	//Obtener el tipo de lección 
	    	afectaciones = $(this).val();
	    	if(afectaciones == "yes"){
	    		$('#dolor_cabeza').show();
	    	} else {
	    		$('#dolor_pecho').show();
	    	}
	    	$('#').show();
	    });

	    //Pregunta 3
	    $('input[name=dolor_cabeza]').change(function(){
	    	//Obtener el tipo de lección 
	    	estrenimiento = $(this).val();

	    	if(debilidad == "yes"){
	    		$('#dolor_pecho').show();
	    	} else {
	    		alert("Marcó que no");
	    	}
	    });

	    //Pregunta 4
	    $('input[name=dolor_pecho]').change(function(){
	    	//Obtener el tipo de lección 
	    	dolor_pecho = $(this).val();

	    	if(debilidad == "yes"){
	    		$('#unias').show();
	    	} else {
	    		$('#dolores_musculares').show();
	    	}
	    });

	    //Pregunta 5
	    $('input[name=unias]').change(function(){
	    	//Obtener el tipo de lección 
	    	afectaciones = $(this).val();
	    	$('#agitado').show();
	    });

	    //Pregunta 6
	    $('input[name=agitado]').change(function(){
	    	//Obtener el tipo de lección 
	    	agitado = $(this).val();
	    	if(debilidad == "yes"){
	    		$('#validar').show();
	    	} else {
	    		$('#cansancio').show();
	    	}
	    });

	    //Pregunta 7
	    $('input[name=dolores_musculares]').change(function(){
	    	//Obtener el tipo de lección 
	    	dolores_musculares = $(this).val();
	    	if(dolores_musculares == "yes"){
	    		$('#frio').show();
	    	} else {
	    		$('#unias').show();
	    	}
	    });

	    //Pregunta 8
	    $('input[name=frio]').change(function(){
	    	//Obtener el tipo de lección 
	    	frio = $(this).val();
	    	if(frio == "yes"){
	    		$('#latidos').show();
	    	} else {
	    		$('#frecuencia_dolor_de_cabeza').show();
	    	}
	    });

	    //Pregunta 9
	    $('input[name=latidos]').change(function(){
	    	//Obtener el tipo de lección 
	    	dolores_musculares = $(this).val();
	    	if(dolores_musculares == "yes"){
	    		$('#validar').show();
	    	} else {
	    		$('#frecuencia_dolor_de_cabeza').show();
	    	}
	    });

	    //Pregunta 10

	    $('input[name=estrenimiento]').change(function(){
	    	//Obtener el tipo de lección 
	    	estrenimiento = $(this).val();
	    	if(estrenimiento == "yes"){
	    		$('#validar').show();
	    	} else {
	    		$('#vomitar').show(); //Pregunta 29
	    	}
	    });

	    //Pregunta 11

	    $('input[name=cansancio]').change(function(){
	    	//Obtener el tipo de lección 
	    	cansancio = $(this).val();
	    	if(estrenimiento == "yes"){
	    		$('#enojo').show();
	    	} else {
	    		$('#vomitar').show();
	    	}
	    });

	    //Pregunta 12

	    $('input[name=enojo]').change(function(){
	    	//Obtener el tipo de lección 
	    	cansancio = $(this).val();
	    	if(enojo == "yes"){
	    		$('#llorar').show();
	    	} else {
	    		$('#culpa').show();
	    	}
	    });

	    //Pregunta 13

	    $('input[name=llorar]').change(function(){
	    	//Obtener el tipo de lección 
	    	llorar = $(this).val();
	    	if(llorar == "yes"){
	    		$('#fisico').show();
	    	} else {
	    		$('#culpa').show();
	    	}
	    });

	    //Pregunta 14

	    $('input[name=fisico]').change(function(){
	    	//Obtener el tipo de lección 
	    	fisico = $(this).val();
	    	if(fisico == "yes"){
	    		$('#validar').show(); //Decir que sufre de DISTIMIA
	    	} else {
	    		$('#culpa').show();
	    	}
	    });

	    //Pregunta 15

	    $('input[name=culpa]').change(function(){
	    	//Obtener el tipo de lección 
	    	culpa = $(this).val();
	    	if(culpa == "yes"){
	    		$('#hiperactividad').show(); //Pregunta 16
	    	} else {
	    		$('#placer').show(); //Pregunta 24
	    	}
	    });

	    //Pregunta 16

	    $('input[name=hiperactividad]').change(function(){
	    	//Obtener el tipo de lección 
	    	hiperactividad = $(this).val();
	    	if(hiperactividad == "yes"){
	    		$('#ritmo').show(); //Pregunta 17
	    	} else {
	    		$('#ritmo').show(); //Pregunta 17
	    	}
	    });

	    //Pregunta 17 - Ritmo

	    $('input[name=ritmo]').change(function(){
	    	//Obtener el tipo de lección 
	    	ritmo = $(this).val();
	    	if(ritmo == "yes"){
	    		$('#validar').show(); // TRASTORNO BIPOLAR:
	    	} else {
	    		$('#dolores_garganta').show(); //Pregunta 18
	    	}
	    });

	    //Pregunta 18 - Dolores de garganta

	    $('input[name=dolores_garganta]').change(function(){
	    	//Obtener el tipo de lección 
	    	dolores_garganta = $(this).val();
	    	if(dolores_garganta == "yes"){
	    		$('#frecuencia_dolor_de_cabeza').show(); // Pregunta 19
	    	} else {
	    		alert("Pregunta 28");
	    		//$('#dolores_garganta').show(); //Pregunta 28
	    	}
	    });

	    //Pregunta 19 - Frecuencia del dolor de cabeza

	    $('input[name=frecuencia_dolor_de_cabeza]').change(function(){
	    	//Obtener el tipo de lección 
	    	frecuencia_dolor_de_cabeza = $(this).val();
	    	if(frecuencia_dolor_de_cabeza == "yes"){
	    		$('#mantener_concentracion').show(); // Pregunta 20
	    	} else {
	    		alert("Pregunta 11");
	    		//$('#dolores_garganta').show(); //Pregunta 24
	    	}
	    });

	    //Pregunta 20 - Mantener la concentración

	    $('input[name=mantener_concentracion]').change(function(){
	    	//Obtener el tipo de lección 
	    	mantener_concentracion = $(this).val();
	    	if(mantener_concentracion == "yes"){
	    		$('#validar').show(); // Diagnosticar Encefalomielitis

	    	} else {
	    		$('#desorden').show(); //Pregunta 22
	    	}
	    });

	    //Pregunta 21

	    //Pregunta 22

	    $('input[name=desorden]').change(function(){
	    	//Obtener el tipo de lección 
	    	desorden = $(this).val();
	    	if(desorden == "yes"){
	    		$('#acumular').show(); //Pregunta 23
	    	} else {
	    		alert("Pregunta 24");
	    		//$('#dolores_garganta').show(); //Pregunta 22
	    	}
	    });

	    //Pregunta 23 - Acumular

	    $('input[name=acumular]').change(function(){
	    	//Obtener el tipo de lección 
	    	acumular = $(this).val();
	    	if(acumular == "yes"){
	    		$('#placer').show(); // Pregunta 24

	    	} else {
                //$('#dolores_garganta').show(); //Pregunta 29
	    	}
	    });

	    //Pregunta 24 - Placer

	    $('input[name=placer]').change(function(){
	    	//Obtener el tipo de lección 
	    	placer = $(this).val();
	    	if(placer == "yes"){
	    		$('#suicidio').show(); // Pregunta 26

	    	} else {
	    		$('#suicidio').show(); // Pregunta 26
	    	}
	    });

	    //Pregunta 25 - Placer

	    $('input[name=vomitar]').change(function(){
	    	//Obtener el tipo de lección 
	    	vomitar = $(this).val();
	    	if(vomitar == "yes"){
	    		$('#validar').show(); // Diagonostica Hipotiroidismo

	    	} else {
	    		$('#cansancio').show(); // Pregunta 11
	    	}
	    });

	    //Pregunta 26 - Suicidio

	    $('input[name=suicidio]').change(function(){
	    	//Obtener el tipo de lección 
	    	suicidio = $(this).val();
	    	if(suicidio == "yes"){
	    		$('#validar').show(); // Decir que tiene depresión

	    	} else {
	    		$('#vomitar').show(); //Pregunta 29
	    	}
	    });

	    //Pregunta 28 - Dolor en los músculos

	    $('input[name=dolor_musculos]').change(function(){
	    	//Obtener el tipo de lección 
	    	dolor_musculos = $(this).val();
	    	if(dolor_musculos == "yes"){
	    		$('#mantener_concentracion').show(); //Pregunta 20
	    	} else {
	    		$('#vomitar').show(); //Pregunta 29
	    	}
	    });

	    //Pregunta 29 - Hacer aseo

	    $('input[name=aseo]').change(function(){
	    	//Obtener el tipo de lección 
	    	aseo = $(this).val();
	    	if(aseo == "yes"){
	    		$('#animo').show(); //Pregunta 30
	    	} else {
	    		$('#vomitar').show(); //Pregunta 29
	    	}
	    });

	    //Pregunta 30 - Estado de ánimo

	    $('input[name=animo]').change(function(){
	    	//Obtener el tipo de lección 
	    	animo = $(this).val();
	    	if(animo == "yes"){
	    		$('#validar').show(); //Depresión
	    	} else {
	    		$('#suicidio').show(); //Pregunta 26
	    	}
	    });
	})
	
</script>