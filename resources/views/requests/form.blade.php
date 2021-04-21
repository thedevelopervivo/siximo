@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">


	{!! Form::open(array('url'=>'requests?return='.$return, 'class'=>'form-horizontal  validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			<div class="col-md-6 " >
				 <a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-danger  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a>
			</div>
			<div class="col-md-6  text-right " >
				<div class="btn-group">
					
						<button name="apply" class="tips btn btn-sm btn-info  "  title="{{ __('core.btn_back') }}" > {{ __('core.sb_apply') }} </button>
						<button name="save" class="tips btn btn-sm btn-primary "  id="saved-button" title="{{ __('core.btn_back') }}" > {{ __('core.sb_save') }} </button> 
						
					
				</div>		
			</div>
			
		</div>
	</div>	


	
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		
	<div class="">
		<div class="col-md-12">
						<fieldset><legend> requests</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Facility" class=" control-label col-md-4 "> Facility </label>
										<div class="col-md-8">
										  <input  type='text' name='facility' id='facility' value='{{ $row['facility'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Account Number" class=" control-label col-md-4 "> Account Number </label>
										<div class="col-md-8">
										  <input  type='text' name='account_number' id='account_number' value='{{ $row['account_number'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Admit Date" class=" control-label col-md-4 "> Admit Date </label>
										<div class="col-md-8">
										  <input  type='text' name='admit_date' id='admit_date' value='{{ $row['admit_date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Discharge Date" class=" control-label col-md-4 "> Discharge Date </label>
										<div class="col-md-8">
										  <input  type='text' name='discharge_date' id='discharge_date' value='{{ $row['discharge_date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Patient Name" class=" control-label col-md-4 "> Patient Name </label>
										<div class="col-md-8">
										  <input  type='text' name='patient_name' id='patient_name' value='{{ $row['patient_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Po" class=" control-label col-md-4 "> Po </label>
										<div class="col-md-8">
										  <input  type='text' name='po' id='po' value='{{ $row['po'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Po Date" class=" control-label col-md-4 "> Po Date </label>
										<div class="col-md-8">
										  <input  type='text' name='po_date' id='po_date' value='{{ $row['po_date'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Manufacture" class=" control-label col-md-4 "> Manufacture </label>
										<div class="col-md-8">
										  <input  type='text' name='manufacture' id='manufacture' value='{{ $row['manufacture'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Requested" class=" control-label col-md-4 "> Date Requested </label>
										<div class="col-md-8">
										  
					{!! Form::text('date_requested', $row['date_requested'],array('class'=>'form-control form-control-sm datetime')) !!}
				 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date Closed" class=" control-label col-md-4 "> Date Closed </label>
										<div class="col-md-8">
										  <input  type='text' name='date_closed' id='date_closed' value='{{ $row['date_closed'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 "> Status </label>
										<div class="col-md-8">
										  <input  type='text' name='status' id='status' value='{{ $row['status'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Attachments" class=" control-label col-md-4 "> Attachments </label>
										<div class="col-md-8">
										  <input  type='text' name='Attachments' id='Attachments' value='{{ $row['Attachments'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> 					
									  <div class="form-group row  " >
										<label for="Chat Field" class=" control-label col-md-4 "> Chat Field </label>
										<div class="col-md-8">
										  <input  type='text' name='Chat Field' id='Chat Field' value='{{ $row['Chat Field'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 
									  </div> </fieldset></div>

	</div>
	
	<input type="hidden" name="action_task" value="save" />
	{!! Form::close() !!}
	</div>
</div>
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("requests/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop