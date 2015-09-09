
        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/cc/2009_newsstand_Chicago_USA_3997396306.jpg');">
            <div class="container">
                <div class="row title">
                          <h1>  {{ $pageTitle}} </h1>
                    <div class="page-breadcrumb">
                       <a href="{{ url('blog') }}"> {{ $pageTitle}} </a> 
                    </div>
                </div>
            </div>
        </section>


<section class="">
<div class="container">
  <div class="row">
    <div class="col-md-9" style="border-right:1px solid #eeeeee">
      <div class="toolbar-line text-right">
 
        </div> 

        @if(Session::has('message'))   

          {!! Session::get('message') !!}

        @endif 

        @foreach ($rowData as $row)

        <div class="blog-post pb">
          <div class="post-media col-md-4 pull-left">
            <a href="">
              @if(file_exists('./uploads/images/'.$row->image) && $row->image !='' )

                <div style="padding-bottom:10px"><img src="{{ asset('uploads/images/'.$row->image)}}" class="img-responsive" /></div>
              
              @endif
            </a>
          </div>
          <div class="col-md-8 ">
          <div class="post-meta">
            <span>{{ date("M j, Y " , strtotime($row->created)) }} </span>
          </div>

          <div class="post-header">
            <h3><a href="{{ url('blog/read/'.$row->slug)}}"> {{ $row->title }} </a></h3>
          </div>

          <div class="post-tag pull-left">{{$row->tags}}</div>
          <div class="post-more-link pull-right">
            <a href="{{ url('blog/read/'.$row->slug)}}" class="btn btn-white btn-xs text-success"><i class="fa  fa-search "></i> Read More <i class="fa fa-angle-right"></i></a>
            
            @if($access['is_edit'] ==1)
              <a  href="{{ URL::to('blog/update/'.$row->blogID.'?return='.$return) }}" class="tips btn btn-xs btn-white text-primary" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit "></i> Edit </a>
            @endif
            
            @if($access['is_remove'] ==1)
              <a href="{{ url('blog/remove/'.$row->blogID)}}"  onclick="sximoDeletePost(this.href); return false; " class="tips btn btn-xs btn-white text-danger" title="{{ Lang::get('core.btn_remove') }}">
              <i class="fa fa-minus-circle "></i>&nbsp;{{ Lang::get('core.btn_remove') }}</a>
            @endif  
          </div>
        </div>   
      </div>
      
      @endforeach
      <div class="text-center">      
        {!! $pagination->appends($pager)->render() !!}
      </div>     
     </div>

     <div class="col-md-3">
        @include('blog.sidebar')
     </div>
   </div>
</div>
@if($access['is_add'] ==1)
<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li>
        <a href="{{ URL::to('blog/update') }}"   title="{{ Lang::get('core.btn_create') }}">
        <i class="fa fa-plus-circle "></i>&nbsp; New Post</a>
      </li>  
      <li>
        <a href="{{ URL::to('blog/categories') }}"  title="{{ Lang::get('core.btn_create') }}">
        <i class="fa fa-edit "></i>&nbsp; Edit Blog Categories</a>
      </li>  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@endif 
<style type="text/css">
  .blog-info-small { font-size: 11px; padding: 10px 0; color: #777;} 
  .blog-info-small a { color: #777; }
  .blog-info-small span { color: #777; padding-right: 15px;}


</style>

  <script type="text/javascript">
   function sximoDeletePost( url )
   {
      if(confirm('Delete this post ?'))
      {
          window.location.href = url;
      } else {
        return false;
      }
      return false;
   }
  </script>  

