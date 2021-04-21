@extends('layouts.app')

@section('content')
<div class="page-titles">
  <h2> {{ $pageTitle }} <small> {{ $pageNote }} </small></h2>
</div>
<div class="card">
	<div class="card-body">

		<div class="toolbar-nav">
			<div class="row">
				<div class="col-md-6 ">
					<div class="btn-group">
						<a href="{{ url('requests?return='.$return) }}" class="tips btn btn-danger  btn-sm  " title="{{ __('core.btn_back') }}"><i class="fa  fa-times"></i></a>		
						@if($access['is_add'] ==1)
				   		<a href="{{ url('requests/'.$id.'/edit?return='.$return) }}" class="tips btn btn-info btn-sm  " title="{{ __('core.btn_edit') }}"><i class="icon-note"></i></a>
						@endif
					</div>	
				</div>
				<div class="col-md-6 text-right">			
					<div class="btn-group">
				   		<a href="{{ ($prevnext['prev'] != '' ? url('requests/'.$prevnext['prev'].'?return='.$return ) : '#') }}" class="tips btn btn-primary  btn-sm"><i class="fa fa-arrow-left"></i>  </a>	
						<a href="{{ ($prevnext['next'] != '' ? url('requests/'.$prevnext['next'].'?return='.$return ) : '#') }}" class="tips btn btn-primary btn-sm "> <i class="fa fa-arrow-right"></i>  </a>			
					</div>			
				</div>	

				
				
			</div>
		</div>
	
		<div class="table-responsive">
			<table class="table  table-bordered " >
				<tbody>	
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Facility', (isset($fields['facility']['language'])? $fields['facility']['language'] : array())) }}</td>
						<td>{{ $row->facility}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Number', (isset($fields['account_number']['language'])? $fields['account_number']['language'] : array())) }}</td>
						<td>{{ $row->account_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Admit Date', (isset($fields['admit_date']['language'])? $fields['admit_date']['language'] : array())) }}</td>
						<td>{{ $row->admit_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Discharge Date', (isset($fields['discharge_date']['language'])? $fields['discharge_date']['language'] : array())) }}</td>
						<td>{{ $row->discharge_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Patient Name', (isset($fields['patient_name']['language'])? $fields['patient_name']['language'] : array())) }}</td>
						<td>{{ $row->patient_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Po', (isset($fields['po']['language'])? $fields['po']['language'] : array())) }}</td>
						<td>{{ $row->po}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Po Date', (isset($fields['po_date']['language'])? $fields['po_date']['language'] : array())) }}</td>
						<td>{{ $row->po_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Manufacture', (isset($fields['manufacture']['language'])? $fields['manufacture']['language'] : array())) }}</td>
						<td>{{ $row->manufacture}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Requested', (isset($fields['date_requested']['language'])? $fields['date_requested']['language'] : array())) }}</td>
						<td>{{ $row->date_requested}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Closed', (isset($fields['date_closed']['language'])? $fields['date_closed']['language'] : array())) }}</td>
						<td>{{ $row->date_closed}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Attachments', (isset($fields['Attachments']['language'])? $fields['Attachments']['language'] : array())) }}</td>
						<td>{{ $row->Attachments}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Chat Field', (isset($fields['Chat Field']['language'])? $fields['Chat Field']['language'] : array())) }}</td>
						<td>{{ $row->Chat Field}} </td>
						
					</tr>
				
				</tbody>	
			</table>   

		 	

		</div>
			
	</div>
</div>		
@stop
