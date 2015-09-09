<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55cfb6dd47d7c18d" async="async"></script>

        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" 
        style="background-image: url('{{ asset('uploads/images/'.$row->image)}}');">
            <div class="container">
                <div class="row title">
                    <h1 class="col-md-10 col-md-offset-1">{{$row->title}}</h1>
                </div>
            </div>
        </section>

<div class="page-content container pt">
	<div class="row" style="margin-bottom:50px;">
		<div class="col-md-9" style="border-right:1px solid #eeeeee">
		@if(Session::has('message'))	  
			   {!! Session::get('message') !!}
		@endif		
			<div class="blog-post ">
				<div class="post-item">
					
					<div class="blog-info-small">
					<i class="fa fa-user icon-muted"></i>  <span>   </span>   
					<i class="fa fa-calendar icon-muted"></i>  <span> {{ date("M j, Y " , strtotime($row->created)) }} </span> 
					<i class="fa fa-comment-o icon-muted"></i>   <span>  {{ $row->comments }} comment(s)  </span> 
								
					
					</div>				
					<div class="summary">

	            
					{!! SiteHelpers::renderHtml( str_replace('<hr>',"",$row->content)) !!}</div>
					

				</div>	
			</div>
			<hr />

			<h5 id="comments" class="text-success"> ( {{ $row->comments }} )  Comment(s) </h5>
			<hr />
			<div class="comment-list">
			@foreach($comments as $com)
				<div class="comm" >	
					<div class="info">{{ date("F j, Y " , strtotime($com['created'])) }} | {{ $com['name'] }} says :  </div>
					<div class="body">{!! SiteHelpers::BBCode2Html($com['comment']) !!}</div>
					@if(Session::get('gid') == 1 or $com['user_id'] == Session::get('uid'))
						<div class="action"><a href="{{ url('blog/removecomm/'.$com['commentID'].'/'.$row->slug) }}" class="btn btn-white btn-xs text-danger"><i class="fa fa-trash-o"></i> Remove </a></div>
					@endif	
					
				</div>
			@endforeach			
			</div>
			
			@if(Auth::check())
			 {!! Form::open(array('url'=>'blog/savecomment/',  'parsley-validate'=>'','novalidate'=>' ', 'class'=>'form-vertical')) !!}
				<div class="form-group "> 
					
						<label>Post Your Comment</label>
						<textarea placeholder="Type your comment" rows="5" id="comment_area" name="comment" class="form-control markItUp"></textarea> 
					
				</div>
			
				<div class="form-group "> 
					
						<label>&nbsp;</label>
						<button class="btn btn-success" type="submit">Submit comment</button> 
					
				</div> 
				<input type="hidden" name="blogID" value="{{ $id }}" />
				<input type="hidden" name="alias" value="{{ $alias }}" />
			{!! Form::close() !!}	
			@else 
			<div class="alert alert-danger"> Please login to post comment </div>
			@endif	
		
		</div>
			
	
	<div class="col-md-3">
		@include('blog.sidebar')
	</div>
	
	</div>
	
</div>
@if($access['is_edit'] ==1)
<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	<ul class="nav navbar-nav">
    			<li>
	            	<a  href="{{ URL::to('blog/update/'.$row->blogID.'?return='.$return) }}"  
	            		title="{{ Lang::get('core.btn_edit') }}">
	            		<b><i class="fa fa-edit "></i> Edit Post</b>
	            	</a>
	        	</li>
	

    	</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@endif   

<script type="text/javascript" >
   $(document).ready(function() {
     // $(".markItUp").markItUp(mySettings );
   });
</script>
<style type="text/css">
  .blog-info-small { font-size: 11px; padding: 10px 0; color: #777;} 
  .blog-info-small a { color: #777;}
  .comment-list { margin-bottom: 20px;}
  .comm .info { font-weight: bold; padding: 10px 0;}
  .comm .body { color: #777; padding-bottom: 10px; border-bottom: dotted 1px #ddd; } 

</style>