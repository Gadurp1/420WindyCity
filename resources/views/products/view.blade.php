@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->
    <div class="page-header">
      <div class="page-title">
        <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
      </div>
      <ul class="breadcrumb">
        <li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
		<li><a href="{{ URL::to('products?return='.$return) }}">{{ $pageTitle }}</a></li>
        <li class="active"> {{ Lang::get('core.detail') }} </li>
      </ul>
	 </div>  
	 
	 
 	<div class="page-content-wrapper">   
	   <div class="toolbar-line">
	   		<a href="{{ URL::to('products?return='.$return) }}" class="tips btn btn-xs btn-default" title="{{ Lang::get('core.btn_back') }}"><i class="fa fa-arrow-circle-left"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('products/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
			@endif  		   	  
		</div>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	


	
	<table class="table table-striped table-bordered" >
		<tbody>	
	
					<tr>
						<td width='30%' class='label-view text-right'>Id</td>
						<td>{{ $row->id }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>IdCategory</td>
						<td>{{ $row->idCategory }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>ProductCode</td>
						<td>{{ $row->productCode }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Img</td>
						<td>{{ $row->img }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Img Detail1</td>
						<td>{{ $row->img_detail1 }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Img Detail2</td>
						<td>{{ $row->img_detail2 }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Img Detail3</td>
						<td>{{ $row->img_detail3 }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Name</td>
						<td>{{ $row->name }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Description</td>
						<td>{{ $row->description }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Price</td>
						<td>{{ $row->price }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Price Offer</td>
						<td>{{ $row->price_offer }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Download</td>
						<td>{{ $row->download }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Ordering</td>
						<td>{{ $row->ordering }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>Visible</td>
						<td>{{ $row->visible }} </td>
						
					</tr>
				
		</tbody>	
	</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop