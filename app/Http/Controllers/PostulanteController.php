<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nacionalidad;
use App\Comuna;
use App\EstadoCivil;
use App\TipoCuenta;
use App\Banco;
use App\PuebloOriginario;
use App\Postulante;
use App\TipoTitulo;
use App\Proceso;
use App\Cuenta;
use App\Domicilio;
use App\Error;
use App\Relacion_carga;
use App\Postulante_Carga;


use Illuminate\Support\Facades\DB;

class PostulanteController extends Controller
{
    
    //Funcion HOME principal.
	public function home(){
		return view('home');
	}

    //Este metodo me llena los SELECT del FORMULARIO y me lleva ahí.
    public function index (){
    	
    	$comunas = Comuna::orderBy('nombre_comuna','asc')->get();
        $nacionalidades = Nacionalidad::orderBy('descripcion','asc')->get();
        $estado_civil = EstadoCivil::orderBy('nombre_estado_civil','asc')->get();
        $tipo_cuenta =  TipoCuenta::orderBy('tipo_cuenta','asc')->get();
        $banco = Banco::orderBy('nombre_banco','asc')->get();
        $pueblo_originario = PuebloOriginario::orderBy('nombre','asc')->get();
        $tipo_titulo = TipoTitulo::all();
        return view('formularioPostulante')->with(compact('comunas','nacionalidades','estado_civil','tipo_cuenta','banco','pueblo_originario','tipo_titulo'));
    }

    //Esta función me permite insertar postulante y volver al HOME.
    public function insertarPostulante(Request $request){
        
        //Crear Objeto
        $postulante = new Postulante();
        $cuenta = new Cuenta();
        $domicilio = new Domicilio();
        $error = new Error();

        
        //Capturar del formulario
        $postulante->rut_postulante = $request->input('rut');
        $postulante->primer_nombre = $request->input('name');
        $postulante->segundo_nombre = $request->input('name2');
        $postulante->apellido_paterno = $request->input('apaterno');
        $postulante->apellido_materno = $request->input('amaterno');

        
        //Repetí los números de un solo campo del formulario:
        $postulante->telefono_trabajo = $request->input('telefono');
        $postulante->telefono_domicilio = $request->input('telefono');
        $postulante->telefono_movil = $request->input('telefono');


        $postulante->codigo_postal = $request->input('codigo_postal');
        $postulante->email = $request->input('email');
        $postulante->edad = $request->input('edad');
        $postulante->fecha_nacimiento = $request->input('fecha');

        
        //SELECT
        $postulante->id_nacionalidad = $request->input('nacionalidad');
        $postulante->id_estado_civil = $request->input('estado_civil');


        //Inserción Tabla Cuenta.
        $cuenta->id_cuenta = $request->input('numero_cuenta');
        $cuenta->id_tipo_cuenta = $request->input('tipo_cuenta');
        $cuenta->id_banco = $request->input('id_banco');
        $cuenta->cantidad = $request->input('ahorro');
        
        $postulante->id_cuenta = $request->input('numero_cuenta');

        //Inserción Tabla Domicilio.
        //Paso el primer campo NULO para que se autoincremente
        //$domicilio->id_domicilio = null;
        $domicilio->calle = $request->input('direccion');
        $domicilio->numero = $request->input('numeracion');  
        //Campos vacios por ahora (Validar en el formulario)
        $domicilio->block = '';
        $domicilio->departamento = '';
        $domicilio->manzana = '';
        $domicilio->sitio = '';
        $domicilio->id_comuna = $request->input('id_comuna');
        //Me agrega la misma fecha de nacimiento (Por ahora)
        $domicilio->fecha = $request->input('fecha');
        //Averiguar para que puse esto!!! (Contrastar con requerimiento)
        $domicilio->estado = 1;
        $domicilio->poblacion_villa = $request->input('villa');
        //Referencias vacias por ahora (Validar en el formulario)
        $domicilio->referencias = '';
        
        //Rescato el campo autoincrementable que se ingresa como PK en domicilio y lo inserto en postulante (Se relaciona el domicilio de esta forma)
        $postulante->id_domicilio = $domicilio->id;


        $postulante->sueldo_liquido = $request->input('sueldo_liquido');

        //SELECT
        $postulante->id_pueblo_originario = $request->input('pueblo_originario');


        //Tengo que cambiar esta parte y agregar datos en la tabla Titulo realmente
        $postulante->id_titulo = '6';


        //Tengo que cambiar esta parte y agregar datos en la tabla Certificado_Permanencia realmente
        $postulante->id_certificado = '1';

        //Traigo los datos de la BDD para ver compararlos con el formulario y validar que no existan ya previamente.
        //Ojo que estas variables son ARRAY por eso luego recorro el primer indice
        $validacionRut = Postulante::where('rut_postulante',$request->input('rut'))->get();
        $validacionCuenta = Cuenta::where('id_cuenta',$request->input('numero_cuenta'))->get();


        //Me cranie mas que la chucha xD para validar esto.
        if (!$validacionRut->all() == null  and $validacionRut[0]->rut_postulante == $postulante->rut_postulante) {

            $error = Error::where('id_error',1)->get();
            return view('error')->with(compact('error'));
         
        }
        elseif (!$validacionCuenta->all() == null and $validacionCuenta[0]->id_cuenta == $cuenta->id_cuenta ) {
             
             $error = Error::where('id_error',2)->get();
             return view('error')->with(compact('error'));

        } else {

            $cuenta->save();
            $domicilio->save();
            $postulante->save();
            return view('home');
        
        }
       

    }


    //Esta función me lleva al foirmulario de calculo de puntaje por rut
    public function calculoPuntaje(){
        return view('calculoPuntaje');
    }


    //Esta función actigva el calculo de puntaje unico por rut
    public function calcularPuntajeUnico(Request $request){

        $ano = $request->input('ano');
        $rut = $request->input('rut');


        $validacionRut = Postulante::where('rut_postulante',$rut)->get();

        //Si busco el rut ingresado en el formulario y el objeto retorna vacio significa que el rut no esta registrado en la BDD por lo tanto no hay información y no ocurre el SP
        if($validacionRut->all() == null ){

             $error = Error::where('id_error',3)->get();
             return view('error')->with(compact('error'));
        
        }else{

            //Por el contrario si el objeto viene con datos significa que si esta inscrito como postulante y por lo tanto ejecuto el SP sobre sus datos.
            //Funcionando Perfect
            //DB::statement('EXEC sp_serviu 2019,94737419');
            DB::statement('EXEC sp_serviu2 '.$ano.','.$rut.'');
            $proceso = Proceso::where('rut_postulante',$rut)->get();
            return view('calculoPuntajeResultado')->with(compact('proceso'));

        }

    }



    //Función que llama el formulario para ejecutar el proceso anual.
    public function calculoPuntajeTotal(){
        return view('procesoAnual');
    }


    //Función que ejecuta el proceso Anual de calculo de puntaje
    public function calculoPuntajeTotal2 (){

        //Aqui tengo que meter todo
        DB::statement('EXEC sp_serviu3');
        $proceso = Proceso::all();
        return view('calculoPuntajeTotal')->with(compact('proceso'));

    }


    public function traerPostulantesAsignacion(){


        $tipo_cargas = Relacion_carga::all();
        $postulantes = Postulante::all();
        
        return view('formularioAsignacionCargas')->with(compact('postulantes','tipo_cargas'));
    }


    public function prueba2(Request $request){

        $carga = new Postulante_Carga();

        $carga->rut_postulante = $request->input('rut_postulante');
        $carga->rut_carga = $request->input('rutCarga');
        $carga->nombreCarga = $request->input('nombreCarga');
        $carga->tipoCarga = $request->input('tipo_carga');
        $carga->fechaNacimiento = $request->input('fechaNacimiento');
        
        return 'Se recibieron los siguientes datos: '.$carga->postulante .' '.$carga->rut_carga.' '.$carga->nombreCarga.' '.$carga->tipoCarga.' '.$carga->fechaNacimiento1;
    }

}
