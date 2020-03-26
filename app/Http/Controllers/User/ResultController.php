<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        ---------------------------------------
        Síntomas propios de la anemia
        ---------------------------------------
        */

        $unias              = $request->unias; //Uñas débiles
        $debilidad          = $request->debilidad; //Debilidad
        $afectaciones       = $request->afectaciones; //Afectación en la piel
        $dolor_cabeza       = $request->dolor_cabeza;
        $dolor_pecho        = $request->dolor_pecho;
        $agitado            = $request->agitado;

        /*
        ---------------------------------------
        Síntomas propios del Hipotiroidismo
        ---------------------------------------
        */

        $latidos            = $request->latidos; //Ritmo cardiaco lento
        $frio               = $request->frio; //Sensiblidad al frío
        $dolores_musculares = $request->dolores_musculares; //Dolores musculares
        $estrenimiento      = $request->estrenimiento; //Estreñimiento
        //Debilidad
        //Afectación en la piel

        /*
        ---------------------------------------
        Síntomas propios del Trastorno Bipolar
        ---------------------------------------
        */

        $hiperactividad     = $request->hiperactividad; //Hiperactividad
        $ritmo              = $request->ritmo; //Habla rápida
        $agresion           = $request->agresion; //Agresión

        /*
        ---------------------------------------
        Síntomas propios de la Distimia
        ---------------------------------------
        */

        $cansancio          = $request->cansancio; //Enojo excesivo
        $enojo              = $request->enojo; //Cansancio psicológico

        /*
        ---------------------------------------
        Síntomas propios de la Encefalomielitis
        ---------------------------------------
        */  


        $participacion      = $request->participacion; //Deseo de participación activa
        $dolores_garganta   = $request->dolores_garganta; //Dolores de garganta
        $frecuencia_dolor_de_cabeza   = $request->frecuencia_dolor_de_cabeza; //Dolores de cabeza
        //Dolores musculares


        /*
        ---------------------------------------
        Síntomas propios de la Depresión
        ---------------------------------------
        */ 

        $placer             = $request->placer;  //Anhedonia
        $interes            = $request->interes; //Anhedonia
        #Incapacidad de sentir y experimentar placer, así como la pérdida del interés por las cosas.
        $aseo               = $request->aseo;    //Abandono personal     
        $desorden           = $request->desorden;
        $acumular           = $request->acumular;   
        $dolor_musculos     = $request->dolor_musculos;

        /*
        ----------------------------------------------------------
        Síntomas comunes de la Depresión y el Trastorno Bipolar
        ----------------------------------------------------------
        */ 

        $culpa              = $request->culpa;      //Sentimiento de culpa
        $fisico             = $request->fisico;     //Baja autoestima
        $mantener_concentracion       = $request->mantener_concentracion; // Déficit de atención
        $animo              = $request->animo;      //Bajo estado de ánimo
        $suicidio           = $request->suicidio;   //Pensamiento de suicidio
        $dormir           = $request->dormir;       //Trastorno de sueño
        $fatiga           = $request->fatiga;       //Fatiga


        /*
        ----------------------------------------------------------
        Síntomas comunes de la Depresión y la Distimia
        ----------------------------------------------------------
        */ 


        //Baja autoestima
        //Déficit de atención
        //Bajo estado de ánimo
        //Fatiga
        $llorar             = $request->llorar; //Llanto
        $gula           = $request->gula; //Trastorno de apetito

        /*
        Es un trastorno de la alimentación en el cual una persona ingiere, de manera regular, cantidades de comida inusualmente grandes. Durante el apetito desenfrenado, la persona también experimenta una sensación de pérdida de control y no es capaz de parar de comer.
        */

        /*
        ----------------------------------------------------------
        Síntomas comunes de la Depresión y la Encefalomielitis
        ----------------------------------------------------------
        */
        
            
        //Trastorno de sueño
        //Fatiga
        //Déficit de atención

        /*
        ----------------------------------------------------------
        Síntomas comunes de la Depresión y el Hipotiroidismo
        ----------------------------------------------------------
        */

        $peso_ideal         = $request->peso_ideal; //Trastorno de peso
        $vomitar            = $request->vomitar;    //Trastorno de peso
        //Bajo estado de ánimo
        //Fatiga
        //Trastorno de apetito

        /*
        ----------------------------------------------------------
        Síntomas comunes de la Depresión y la Anemia
        ----------------------------------------------------------
        */

        //Fatiga
        //Trastorno de peso
        //Trastorno de apetito

        /*
        ----------------------------------------------------------
        Declarar las variables para llevar el contador
        ----------------------------------------------------------
        */

        $hipotiroidismo     = 0;
        $anemia             = 0;
        $trastorno_bipolar  = 0;
        $distimia           = 0;
        $encefalomielitis   = 0;
        $depresion          = 0;

        /*
        ---------------------------------------
        Determinar si es anemia
        ---------------------------------------

        *   Uñas quebradizas
        *   Ritmo cardiado rápido
        *   Afectación de la piel
        *   Dolores de cabeza
        *   Dolor de pecho
        *   Debilidad

        */

        if ($debilidad == "yes")
        {
            $hipotiroidismo += 1;
            $anemia += 1;
        }

        if ($afectaciones == "yes")
        {
            $hipotiroidismo += 1;
            $anemia += 1;
        }

        if ($dolor_cabeza == "yes")
        {
            $encefalomielitis += 1;
            $anemia += 1;
            $encefalomielitis += 1;
        }

        if ($frecuencia_dolor_de_cabeza == "yes")
        {
            $encefalomielitis += 1;
            $anemia += 1;
            $encefalomielitis += 1;
        }

        if ($dolor_pecho == "yes")
        {
            $anemia += 1;
        }

        if ($unias == "yes")
        {
            $anemia += 1;
        }

        if ($agitado == "yes")
        {
            $anemia += 1;
        }

        /*
        ---------------------------------------
        Determinar si es hipotiroidismo
        ---------------------------------------

        *   Ritmo cardiaco lento
        *   Sensiblidad al frío
        *   Estreñimiento
        *   Dolores musculares
        *   Afectación en la piel
        *   Debilidad

        */

        if ($dolores_musculares == "yes")
        {
            $hipotiroidismo += 1;
            $encefalomielitis += 1;
        }

        if ($frio == "yes")
        {
            $hipotiroidismo += 1;
        }

        if ($latidos == "yes")
        {
            $hipotiroidismo += 1;
        }

        if ($estrenimiento == "yes")
        {
            $hipotiroidismo += 1;
        }

        /*
        ---------------------------------------
        Determinar si es trastorno bipolar
        ---------------------------------------

        *   Hiperactividad
        *   Hablar a un ritmo acelerado
        *   Agresión

        #   En común con la depresión

        ·Sentimiento de culpa
        ·Pensamiento de
        ·Baja autoestima
        ·Déficit de
        ·Trastorno de sueño
        ·Fatiga
        ·Bajo estado de…

        */

        if ($hiperactividad == "yes")
        {
            $trastorno_bipolar += 1;
        }

        if ($ritmo == "yes")
        {
            $trastorno_bipolar += 1;
        }

        if ($agresion == "yes")
        {
            $trastorno_bipolar += 1;
        }

        /*
        ---------------------------------------
        Determinar si es distimia
        ---------------------------------------

        *   Enojo excesivo
        *   Cansancio psicológico

        */

        if ($cansancio == "yes")
        {
            $distimia += 1;
        }

        if ($enojo == "yes")
        {
            $distimia += 1;
        }


        /*
        ---------------------------------------
        Determinar si es Encefalomielitis
        ---------------------------------------

        *   Deseo de participación activa
        *   Dolores de garganta
        *   Dolores musculares
        *   Dolores de cabeza

        */

        if ($dolores_garganta == "yes")
        {
            $encefalomielitis += 1;
        }

        if ($participacion == "yes")
        {
            $encefalomielitis += 1;
        }

        /*
        ---------------------------------------
        Determinar si es Depresión
        ---------------------------------------

        *   Anhedonia
        *   Abandono personal
        *   Dolores generalizados

        */

        if ($placer  == "yes")
        {
            $depresion += 1;
        }

        if ($interes == "yes")
        {
            $depresion += 1;
        }

        if ($desorden  == "yes")
        {
            $depresion += 1;
        }

        if ($acumular  == "yes")
        {
            $depresion += 1;
        }

        if ($dolor_musculos  == "yes")
        {
            $depresion += 1;
        }


        


        /*
        ----------------------------------------------------------
        Síntomas comunes de la Depresión y el Trastorno Bipolar
        ----------------------------------------------------------
        */


        if ($culpa  == "yes")
        {
            $depresion += 1;
            $trastorno_bipolar += 1;
        }

        if ($fisico == "yes")
        {
            $depresion += 1;
            $trastorno_bipolar += 1;
            $distimia += 1;
        }

        if ($mantener_concentracion  == "yes")
        {
            $depresion += 1;
            $trastorno_bipolar += 1;
            $distimia += 1;
            $encefalomielitis += 1;
        }

        if ($animo == "yes")
        {
            $depresion += 1;
            $trastorno_bipolar += 1;
            $distimia += 1;
        }

        if ($suicidio  == "yes")
        {
            $depresion += 1;
            $trastorno_bipolar += 1;
        }

        if ($dormir == "yes")
        {
            $depresion += 1;
            $trastorno_bipolar += 1;
            $encefalomielitis += 1;
        }

        if ($fatiga  == "yes")
        {
            $depresion += 1;
            $trastorno_bipolar += 1;
            $distimia += 1;
            $anemia += 1;
            $encefalomielitis += 1;
        }

        /*
        ----------------------------------------------------------
        Síntomas comunes de la Depresión y la Distimia
        ----------------------------------------------------------
        */

        if ($llorar == "yes")
        {
            $distimia += 1;
            $depresion += 1;
        }

        if ($gula == "yes")
        {
            $distimia += 1;
            $anemia += 1;
            $hipotiroidismo += 1;
        }

        /*
        ----------------------------------------------------------
        Síntomas comunes de la Depresión y el Hipotiroidismo
        ----------------------------------------------------------
        */

        if ($peso_ideal == "no")
        {
            $hipotiroidismo += 1;
            $anemia += 1;
        }

        if ($vomitar == "yes")
        {
            $hipotiroidismo += 1;
            $anemia += 1;
        }

        /*
        ----------------------------------------------------------
        Obtener el diagnóstico
        ----------------------------------------------------------
        */

        $lista_enfermedades = [
            'hipotiroidismo'    => $hipotiroidismo,
            'anemia'            => $anemia,
            'trastorno_bipolar' => $trastorno_bipolar,
            'distimia'          => $distimia,
            'encefalomielitis'  => $encefalomielitis,
            'depresion'         => $depresion
        ];

        $getMaxNumber = max($lista_enfermedades);

        $getDiagnostico = array_search($getMaxNumber, $lista_enfermedades);


        //Hipotiroidismo
        if ($getDiagnostico == "hipotiroidismo") {
            $sick = "Hipotiroidismo";
            $description = "Afección en la que la glándula tiroides no produce suficiente hormona tiroidea.
                            La deficiencia de hormona tiroidea del hipotiroidismo puede afectar la frecuencia cardíaca, la temperatura corporal y todos los aspectos del metabolismo. El hipotiroidismo es más frecuente en las mujeres de edad avanzada.
                            Los síntomas principales incluyen fatiga, sensibilidad al frío, constipación, sequedad de la piel y aumento de peso inexplicable.
                            El tratamiento consiste en el reemplazo de hormona tiroidea.";
            $symptom = "<h4>Requiere diagnóstico médico</h4> </br>
                        Los síntomas principales incluyen fatiga, sensibilidad al frío, constipación, sequedad de la piel y aumento de peso inexplicable. </br>

                        <p>Las personas pueden sufrir:</p>
                        <p><span>Todo el cuerpo</span>: fatiga, letargo o sentir frío.</p>
                        <p>Desarrollo: crecimiento lento o pubertad tardía.</p>
                        <p>Pelo: caída del pelo o sequedad.</p>
                        <p>También comunes: agrandamiento de la tiroides, aumento de peso, colesterol alto, disfunción sexual, estreñimiento, frecuencia cardíaca lenta, irritabilidad, lentitud, piel seca, sangrado uterino irregular, sensibilidad al frío o uñas quebradizas</p>";
        }

        //Anemia
        if ($getDiagnostico == "anemia") {
            $sick = "Anemia";
            $description = "Afección en la que la sangre no cuenta con suficientes glóbulos rojos sanos.
                            La anemia se produce por la falta de glóbulos rojos o la presencia de glóbulos rojos disfuncionales en el cuerpo, lo que provoca una reducción del flujo de oxígeno hacia los órganos.
                            Los síntomas pueden incluir fatiga, palidez, dificultad para respirar, aturdimiento, mareos o ritmo cardíaco acelerado.
                            El tratamiento depende del diagnóstico subyacente. Pueden utilizarse suplementos de hierro para la carencia de este mineral. Los suplementos de vitamina B pueden ser utilizados para contrarrestar los niveles bajos de vitaminas. Las transfusiones de sangre pueden ser utilizadas para las hemorragias. Si la producción de sangre del cuerpo se ve reducida, es posible usar medicamentos para inducir la formación de sangre.";

            $symptom = "<h4>Requiere diagnóstico médico</h4> </br>
                        Los síntomas pueden incluir fatiga, palidez, dificultad para respirar, aturdimiento, mareos o ritmo cardíaco acelerado.</br>

                        <p>Las personas pueden sufrir:</p>
                        <p><span>Todo el cuerpo</span>: aturdimiento ligero, fatiga, malestar o mareos</p>
                        <p>Corazón: palpitaciones o frecuencia cardíaca rápida</p>
                        <p>También comunes: dificultad para respirar, dolor de cabeza, palidez o uñas quebradizas</p>";

            $tratamiento = "
            <p>El tratamiento varía.</p>
            <p>El tratamiento depende del diagnóstico subyacente. Pueden utilizarse suplementos de hierro para la carencia de este mineral. Los suplementos de vitamina B pueden ser utilizados para contrarrestar los niveles bajos de vitaminas. Las transfusiones de sangre pueden ser utilizadas para las hemorragias. Si la producción de sangre del cuerpo se ve reducida, es posible usar medicamentos para inducir la formación de sangre.</p>";

            $more_info = "https://www.google.com/search?rlz=1C5CHFA_enCO890CO890&sxsrf=ALeKk02gyGgb5QVypZ2i9NMQCEcBU99YVA%3A1585248944822&ei=sPp8XpvhMYaQsAWlz43oAw&q=anemia&oq=anemia&gs_l=psy-ab.3..0i67l10.257748.258687..258828...0.4..0.161.750.0j5......0....1..gws-wiz.......0i71j35i39j0i131j0.DA1PlbKlCvs&ved=0ahUKEwib-fHB6LjoAhUGCKwKHaVnAz0Q4dUDCAs&uact=5#wptab=s:H4sIAAAAAAAAAONgVuLQz9U3yElOyX7E6Mgt8PLHPWEpi0lrTl5jNOLiCs7IL3fNK8ksqRRS4WKDsqS4eKTgmjQYpLi44DyeXUyCHqmJOSUZvqkpmcmJJZn5ecWLWEUc81JzMxOtFHLBormpeSX5xQALoB6FewAAAA";

            
        }

        //Trastorno Bipolar
        if ($getDiagnostico == "trastorno_bipolar") {
            $sick = "Trastorno Bipolar";
            $description = "Trastorno que provoca altibajos emocionales, que van desde trastornos de depresión hasta episodios maníacos.
                    Se desconoce la causa exacta del trastorno bipolar, pero es posible que tenga que ver con una combinación de factores genéticos y ambientales y de la alteración de las sustancias químicas y las estructuras del cerebro.
                    Los episodios maníacos pueden incluir síntomas como exceso de energía, reducción de la necesidad de dormir y pérdida de noción de la realidad. Los episodios depresivos pueden incluir síntomas como falta de energía, poca motivación y pérdida de interés en las actividades cotidianas. Los episodios de cambios de humor duran de días a meses y también pueden estar asociados con pensamientos suicidas.
                    El tratamiento suele ser de por vida e incluir una combinación de medicamentos y psicoterapia.";

            $symptom = "<h4>Requiere diagnóstico médico</h4> </br>
                        Los episodios maníacos pueden incluir síntomas como exceso de energía, reducción de la necesidad de dormir y pérdida de noción de la realidad. Los episodios depresivos pueden incluir síntomas como falta de energía, poca motivación y pérdida de interés en las actividades cotidianas. Los episodios de cambios de humor duran de días a meses y también pueden estar asociados con pensamientos suicidas.</br>

                        <p>Las personas pueden sufrir:</p>


                        <p><span>Estado de ánimo</span>: altibajos emocionales, tristeza, pérdida de interés o placer en hacer actividades, ansiedad, apatía, culpa, descontento general, desesperanza, enfado, euforia, pérdida de interés o temor</p>

                        <p>Comportamiento: comportamiento desorganizado, conductas de riesgo, irritabilidad, agitación, agresión, automutilación, deseo sexual excesivo, hiperactividad, impulsividad o llanto</p>

                        <p>Cognitivos: pensamientos no deseados, lentitud para realizar actividades, delirio, falsa creencia de superioridad, falta de concentración o pensamientos acelerados</p>


                        <p>Psicológicos: depresión, episodio maníaco, depresión agitada o paranoia</p>
                        <p>Peso: aumento de peso o pérdida de peso</p>

                        <p>Sueño: dificultad para quedarse dormido o somnolencia excesiva</p>
                        <p>También comunes: fatiga o habla rápida y frenética</p>";


                        $tratamiento = "
            <p>El tratamiento consiste en medicamentos y terapia.</p>
            <p>El tratamiento suele ser de por vida e incluir una combinación de medicamentos y psicoterapia.</p>
            <hr>
            <p>
                Tratamiento:

                <ul>
                    <li>
                        Grupo de apoyo: Foro para el asesoramiento de personas y el intercambio de experiencias entre pacientes con una afección o meta similar, como la depresión o la pérdida de peso.
                    </li>

                    <li>
                        Terapia cognitivo-conductual: Terapia verbal que se enfoca en la modificación de las respuestas emocionales, los pensamientos y los comportamientos negativos asociados con los trastornos psicológicos.
                    </li>

                    <li>
                        Psicoeducación: Educación sobre la salud mental que permite asistir, validar y fortalecer a los pacientes.
                    </li>

                    <li>
                        Terapia familiar: Asesoramiento psicológico que ayuda a las familias a resolver conflictos y comunicarse de manera más eficaz.
                    </li>

                    <li>
                        Psicoterapia: Tratamiento de los trastornos mentales o de comportamiento mediante la terapia conversacional. 
                    </li>




                    Consulta a un médico para recibir asistencia.

            </p>
            ";

            $more_info = "https://www.google.com/search?rlz=1C5CHFA_enCO890CO890&sxsrf=ALeKk03vCYdUBAjR6nzDhcMMGa-VEzR8zA%3A1585249204979&ei=tPt8XoSmO4-esQWv6r7YBg&q=trastorno+bipolar&oq=trastorno_bipolar&gs_l=psy-ab.1.0.0i13l10.139495.139495..140929...0.3..0.154.154.0j1......0....2j1..gws-wiz.......0i71.nxTPWAPfCI8#wptab=s:H4sIAAAAAAAAAONgVuLQz9U3MEw3KnzE6Mgt8PLHPWEpi0lrTl5jNOLiCs7IL3fNK8ksqRRS4WKDsqS4eKTgmjQYpLi44DyeXUy8HqmJOSUZIRmpRYkFlYtYpUOKEotL8ovy8hWSMgvycxKLrBRKQHKZicUAy0rL_n4AAAA";

            
        }

        //Distimia
        if ($getDiagnostico == "distimia") {
            $sick = "Distimia";
            $description = "Tipo de depresión moderada pero prolongada.
La distimia se caracteriza por el estado anímico depresivo durante dos años como mínimo, junto con al menos otros dos síntomas de depresión.
Algunos ejemplos de síntomas incluyen pérdida de interés en las actividades normales, desesperanza, baja autoestima, inapetencia, falta de energía, cambios en el sueño y falta de concentración.
El tratamiento incluye el uso de medicamentos y la terapia conversacional.";

            $symptom = "<h4>Requiere diagnóstico médico</h4> </br>
                        Algunos ejemplos de síntomas incluyen pérdida de interés en las actividades normales, desesperanza, baja autoestima, inapetencia, falta de energía, cambios en el sueño y falta de concentración. </br>

                        <p>Las personas pueden sufrir:</p>
                        <p>Estado de ánimo: tristeza, culpa, descontento general, desesperanza, enfado o pérdida de interés
Todo el cuerpo: fatiga, hambre excesiva o pérdida de apetito
Sueño: insomnio o somnolencia excesiva
Cognitivos: lentitud para realizar actividades o falta de concentración
También comunes: baja autoestima, indecisión o irritabilidad</p>";

    $tratamiento = "<p>El tratamiento incluye el uso de medicamentos y la terapia conversacional.</p>";

    $more_info = "https://www.google.com/search?rlz=1C5CHFA_enCO890CO890&sxsrf=ALeKk00ps6-QVkqerIMMzAQvAxYsYGUlYQ%3A1585249347734&ei=Q_x8Xp67LL6HytMPqKu_4Ak&q=distimia&oq=distimia&gs_l=psy-ab.3..0i67l5j0l5.9077.9077..9410...0.4..0.148.148.0j1......0....2j1..gws-wiz.......0i71.4xzGamGnmjw&ved=0ahUKEwje6IGC6rjoAhW-g3IEHajVD5wQ4dUDCAs&uact=5#wptab=s:H4sIAAAAAAAAAONgVuLUz9U3MCksKoh_xOjMLfDyxz1hKatJa05eYzTh4grOyC93zSvJLKkUUuNig7JkuHilELo0GKS4uRBcnl1MAh6piTklGSFFqYklual5JcWLWKVCihJLEnMzgbz8YoWCxKJEBZfM4pLM3MxEAGeeiX6DAAAA";

            
        }

        //Encefalomielitis
        if ($getDiagnostico == "encefalomielitis") {
            $sick = "Encefalomielitis";
            $description = "La encefalitis es la inflamación del cerebro. Puede tener muchas causas, pero la más frecuente es una infección viral.

La encefalitis suele provocar signos y síntomas similares a los de una influenza leve —como fiebre o dolores de cabeza— o puede no generar síntomas en absoluto. A veces, los síntomas similares a los de la influenza son más intensos. La encefalitis también puede provocar confusión, convulsiones o problemas sensoriales o motrices.

En raras ocasiones, la encefalitis puede poner en riesgo la vida. El diagnóstico y el tratamiento oportunos son importantes dado que es difícil predecir la manera en la que la encefalitis afectará a cada individuo.";

            $symptom = "<h4>Requiere diagnóstico médico</h4> </br>
                        La mayoría de las personas con encefalitis viral tienen síntomas leves similares a los de la influenza, como por ejemplo:

Dolor de cabeza
Fiebre
Dolor en músculos o articulaciones
Fatiga o debilidad
A veces, los signos y síntomas son más intensos, y pueden comprender:

Confusión, agitación o alucinaciones
Convulsiones
Pérdida de sensibilidad o parálisis en ciertas zonas del rostro o cuerpo
Debilidad muscular
Problemas con el habla o la audición
Pérdida del conocimiento
En los bebés y los niños, los signos y síntomas también pueden comprender los siguientes:

Protuberancia en los puntos blandos (fontanelas) del cráneo en bebés
Náuseas y vómitos
Rigidez corporal
Alimentación deficiente o no despertarse para alimentarse
Irritabilidad</p>";

                        $tratamiento = "<p>

                        Practica buenos hábitos de higiene. Lávate las manos frecuente y completamente con agua y jabón, en particular, después de usar el baño y antes y después de las comidas.
No compartas utensilios. No compartas platos, cubiertos ni bebidas.
Enseña buenos hábitos a tus hijos. Asegúrate de que sigan buenos hábitos de higiene y eviten compartir sus utensilios en casa y en la escuela.
Vacúnate. Mantén tus vacunas y las de tus hijos al día. Antes de viajar, consulta con el médico acerca de las vacunas que se indican para los diferentes destinos.

</p>";

            $more_info = "https://www.mayoclinic.org/es-es/diseases-conditions/encephalitis/symptoms-causes/syc-20356136";

            
        }

        //Depresión
        if ($getDiagnostico == "depresion") {
            $sick = "Depresión";
            $description = "Trastorno de salud mental que se caracteriza por depresión persistente o pérdida de interés en las actividades, lo que puede causar dificultades significativas en la vida cotidiana.
Las causas posibles incluyen una combinación de fuentes biológicas, psicológicas y sociales de angustia. Cada vez son más las investigaciones que sugieren que estos factores pueden ocasionar cambios en la función cerebral, como la actividad anormal de ciertos circuitos neuronales en el cerebro.
El sentimiento de tristeza permanente o la pérdida de interés que caracterizan a la depresión grave pueden provocar una variedad de trastornos emocionales y físicos. Pueden incluir trastornos en hábitos del sueño, apetito, nivel de energía, concentración, comportamiento diario o autoestima. La depresión también puede asociarse con pensamientos suicidas.
El tratamiento principal son los medicamentos, la terapia conversacional o una combinación de ambos. Cada vez son más las investigaciones que sugieren que estos tratamientos pueden normalizar los cambios cerebrales asociados con la depresión.";
            $symptom = "<h4>Requiere diagnóstico médico</h4> </br>
                        El sentimiento de tristeza permanente o la pérdida de interés que caracterizan a la depresión grave pueden provocar una variedad de trastornos emocionales y físicos. Pueden incluir trastornos en hábitos del sueño, apetito, nivel de energía, concentración, comportamiento diario o autoestima. La depresión también puede asociarse con pensamientos suicidas. </br>

                        <p>Las personas pueden sufrir:</p>
                        <p>Estado de ánimo: pérdida de interés o placer en hacer actividades, altibajos emocionales, ansiedad, apatía, culpa, descontento general, desesperanza, pérdida de interés o tristeza
Comportamiento: agitación, aislamiento social, irritabilidad o llanto excesivo
Sueño: despertar temprano, insomnio, somnolencia excesiva o sueño intranquilo
Todo el cuerpo: fatiga, hambre excesiva o pérdida de apetito
Cognitivos: lentitud para realizar actividades, falta de concentración o pensamientos de suicidio
Peso: aumento de peso o pérdida de peso
También comunes: análisis repetido de pensamientos o poco apetito</p>";

$tratamiento = "<p>

                        El tratamiento principal son los medicamentos, la terapia conversacional o una combinación de ambos. Cada vez son más las investigaciones que sugieren que estos tratamientos pueden normalizar los cambios cerebrales asociados con la depresión.

</p>";

            $more_info = "https://www.google.com/search?rlz=1C5CHFA_enCO890CO890&sxsrf=ALeKk02WqibgrHa6yTNMJjLDAQa-Slbr8g:1585249971893&q=Trastorno+depresivo+mayor&stick=H4sIAAAAAAAAAONgFuLUz9U3ME6LT05S4gAxjZLSSh4xOnILvPxxT1jKYtKak9cYjbi4gjPyy13zSjJLKoVUuNigLCkuHim4Jg0GKS4uOI9nFxNHfllqUVlmavkiVsmQosTikvyivHyFlNSCotTizLJ8hdzEyvwiAH8hoTSCAAAA&sa=X&ved=2ahUKEwjqs9Gr7LjoAhXDmXIEHbDnCFYQ0EAwF3oECAQQBA&biw=1920&bih=1001#wptab=s:H4sIAAAAAAAAAONgVuLQz9U3MEpKK3nE6Mgt8PLHPWEpi0lrTl5jNOLiCs7IL3fNK8ksqRRS4WKDsqS4eKTgmjQYpLi44DyeXUwCHqmJOSUZIUWpiSW5qXklxYtYtUOKEksSczOBvPxihYLEokQFoEhxSX5RXr5CSmpBUWpxZlm-Qm5iZX4RAGpa6wyRAAAA";

            
        }

        return view('user.results.index', compact(
            'description', 
            'sick', 
            'symptom',
            'tratamiento',
            'more_info'
        ));





        //dd($lista_enfermedades);

        /*return 
            "El hipotiroidismo va en " . $hipotiroidismo . "\n" .
            "La anemia va en " . $anemia . "\n" .
            "El trastorno bipolar va en " . $trastorno_bipolar . "\n" .
            "La distimia va en " . $distimia . "\n" .
            "La encefalomielitis va en " . $encefalomielitis . "\n" .
            "La depresión va en " . $depresion . "\n";

        */


        /*if ($debilidad == "yes" && $afectaciones == "yes" && $estrenimiento == "yes") {
            $sick = "Hipotiroidismo";
            $description = "Afección en la que la glándula tiroides no produce suficiente hormona tiroidea.
                            La deficiencia de hormona tiroidea del hipotiroidismo puede afectar la frecuencia cardíaca, la temperatura corporal y todos los aspectos del metabolismo. El hipotiroidismo es más frecuente en las mujeres de edad avanzada.
                            Los síntomas principales incluyen fatiga, sensibilidad al frío, constipación, sequedad de la piel y aumento de peso inexplicable.
                            El tratamiento consiste en el reemplazo de hormona tiroidea.";
            $symptom = "<h4>Requiere diagnóstico médico</h4> </br>
                        Los síntomas principales incluyen fatiga, sensibilidad al frío, constipación, sequedad de la piel y aumento de peso inexplicable. </br>

                        <p>Las personas pueden sufrir:</p>
                        <p><span>Todo el cuerpo</span>: fatiga, letargo o sentir frío.</p>
                        <p>Desarrollo: crecimiento lento o pubertad tardía.</p>
                        <p>Pelo: caída del pelo o sequedad.</p>
                        <p>También comunes: agrandamiento de la tiroides, aumento de peso, colesterol alto, disfunción sexual, estreñimiento, frecuencia cardíaca lenta, irritabilidad, lentitud, piel seca, sangrado uterino irregular, sensibilidad al frío o uñas quebradizas</p>";

            
            //dd("Posiblemente sufras de algo y te vas a morir");
        } else {
            return "Estoy acá";
        }*/


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
