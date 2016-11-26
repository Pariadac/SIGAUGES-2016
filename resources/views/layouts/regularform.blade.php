	<section class="panel">
									

		{!!Form::open(['url'=>$action, 'class'=>'form-horizontal form-bordered', 'method' => 'post', 'id'=>'modalmicroform'])!!}

	        <header class="panel-heading">
				<h2 class="panel-title">Registration Form</h2>
			</header>

			<div class="waitingimg" style="display: none;">
		    	<div class="waitingback"></div>
		    </div>

			<div class="panel-body">

				<div class="formcontent">
			        @foreach( $fields as $key => $value )

			        	@if( $value['type']=='text' )

			        		<div class="form-group col-md-6">
				                <label class="col-md-4 control-label" for="{!! $key !!}">{!! $value['label'] !!}</label>
				                <div class="col-md-8">
				                    <input type="{!! $value['type'] !!}" class="form-control" id="{!! $value['id'] !!}" name="{!! $key !!}" value="{!! $value['value'] !!}">
				                </div>
				            </div>

			        	@elseif( $value['type']=='select' )

			        		<div class="form-group col-md-6">
				                <label class="col-md-4 control-label" for="{!! $key !!}">{!! $value['label'] !!}</label>
				                <div class="col-md-8">
				                    
				                    <div class="col-md-4">
				                        <select data-plugin-select name="{!! $key !!}" id="{!! $value['id'] !!}" class="form-control populate" value="{!! $value['value'] !!}">
				                            
				                        	@foreach( $value['options'] as $key2 => $value2 )

				                        		<option value="{!! $key2 !!}"> {!! $value2 !!} </option>

				                        	@endforeach

				                        </select>
				                    </div>

				                    <div class="col-md-8">
				                        <input type="text" class="form-control" id="telefono" name="telefono">
				                    </div>

				                </div>
				            </div>

			        	@else


			        	@endif

			        @endforeach
			    </div>

	        </div>

			<footer class="panel-footer">
				<div class="row">
					<div class="col-md-12 text-right">
						<button class="btn btn-primary" name="finregistro">Finalizar Registro</button>
						<button class="btn btn-default modal-dismiss">Cancelar</button>
					</div>
				</div>
			</footer>

	    {!! Form::close() !!}

    </section>