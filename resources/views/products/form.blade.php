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
        <li class="active">{{ Lang::get('core.addedit') }} </li>
      </ul>
	  	  
    </div>
 
 	<div class="page-content-wrapper">

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
<div class="sbox animated fadeInRight">
	<div class="sbox-title"> <h4> <i class="fa fa-table"></i> </h4></div>
	<div class="sbox-content"> 	

		 {!! Form::open(array('url'=>'products/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Products</legend>
									
								  <div class="form-group  " > 
									<label for="Id" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('id', $row['id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="IdCategory" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('IdCategory', (isset($fields['idCategory']['language'])? $fields['idCategory']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('idCategory', $row['idCategory'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="ProductCode" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('ProductCode', (isset($fields['productCode']['language'])? $fields['productCode']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('productCode', $row['productCode'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Img" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Img', (isset($fields['img']['language'])? $fields['img']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('img', $row['img'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Img Detail1" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Img Detail1', (isset($fields['img_detail1']['language'])? $fields['img_detail1']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('img_detail1', $row['img_detail1'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Img Detail2" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Img Detail2', (isset($fields['img_detail2']['language'])? $fields['img_detail2']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('img_detail2', $row['img_detail2'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Img Detail3" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Img Detail3', (isset($fields['img_detail3']['language'])? $fields['img_detail3']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('img_detail3', $row['img_detail3'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Name" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('name', $row['name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Description" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Description', (isset($fields['description']['language'])? $fields['description']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('description', $row['description'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Download" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Download', (isset($fields['download']['language'])? $fields['download']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('download', $row['download'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Ordering" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Ordering', (isset($fields['ordering']['language'])? $fields['ordering']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('ordering', $row['ordering'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> 					
								  <div class="form-group  " > 
									<label for="Visible" class=" control-label col-md-4 text-left"> 
									{!! SiteHelpers::activeLang('Visible', (isset($fields['visible']['language'])? $fields['visible']['language'] : array())) !!}	
									</label>
									<div class="col-md-6">
									  {!! Form::text('visible', $row['visible'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
									 </div> 
									 <div class="col-md-2">
									 	
									 </div>
								  </div> </fieldset>
			</div>
			
			

		
			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('products?return='.$return) }}' " class="btn btn-success btn-sm "><i class="fa  fa-arrow-circle-left "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop