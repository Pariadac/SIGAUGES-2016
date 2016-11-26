<?php

namespace SISAUGES\Http\Controllers;


use Illuminate\Http\Request;

use SISAUGES\Http\Requests;
use SISAUGES\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


/**
* 
*/
class TestController extends Controller
{
	
	function __construct()
	{}

	public function index()
    {
        return view('test.index');
    }

    public function renderform(Request $request){

		if ($request->typeform=='add') {
			$action="test/crear";
		}elseif($request->typeform=='modify'){
			$action="test/modificar";
		}

		$fields=array(

			'nombre' => array(
				'type'	=> 'text',
				'value'	=> '',
				'id'	=> 'nombre',
				'label'	=> 'Campo'
			),
			'apellido' => array(
				'type'	=> 'text',
				'value'	=> '',
				'id'	=> 'apellido',
				'label'	=> 'Campo'
			),
			'cedula' => array(
				'type'	=> 'text',
				'value'	=> '',
				'id'	=> 'cedula',
				'label'	=> 'Campo'
			),
			'telefono' => array(
				'type'		=> 'select',
				'value'		=> '',
				'id'		=> 'telefono',
				'label'		=> 'Campo',
				'options'	=> array(
					'212',
					'412',
					'414',
					'424',
					'416',
					'426'
				)
			),
			'rol' => array(
				'type'		=> 'select',
				'value'		=> '',
				'id'		=> 'telefono',
				'label'		=> 'Campo',
				'options'	=> array(
					'XXX',
					'YYY',
					'ZZZ',
				)
			),
			'email' => array(
				'type'	=> 'text',
				'value'	=> '',
				'id'	=> 'email',
				'label'	=> 'Campo'
			),
			'username' => array(
				'type'	=> 'text',
				'value'	=> '',
				'id'	=> 'username',
				'label'	=> 'Campo'
			),
			'password' => array(
				'type'	=> 'text',
				'value'	=> '',
				'id'	=> 'password',
				'label'	=> 'Campo'
			),
		);

    	$htmlbody=View::make('layouts.regularform',compact('action','fields'))->render();

    	if ($htmlbody) {
    		$retorno=array(
    			'result'=>true,
    			'html'	=>$htmlbody
    		);
    	}else{
    		$retorno=array(
    			'result'=>false,
    		);
    	}

    	echo json_encode($retorno);

    }
}


?>