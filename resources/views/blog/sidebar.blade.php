 
<div class="sidebar-widget hidden">
    <h5>Search</h5>
    <div class="widget-search">
        <input class="form-full input-lg" type="text" value="" placeholder="Search Here" name="search" id="wid-search">
            <input type="submit" value="" name="email" id="wid-s-sub">
            </div>
        </div>

        <div class="sidebar-widget">
		    <h3 >Categories </h3>	
			<ul class="nav nav-stacked nav-pills"> 
			@foreach($blogcategories as $cat)
				<li class="col-md-12"> 
                    <div class="widget-post-info">
                        <a class="widget-post-media" href="{{ URL::to('blog?category='.$cat->alias)}}"> {{ $cat->name}} &nbsp; 
                        <span class="label label-success pull-right">{{ $cat->total}}</span> 
                        </a> 
                    </div>
                </li>  
			@endforeach	
			</ul>
        </div>

            <div class="sidebar-widget ">
                <h5>Recent Post</h5>
                <hr>
                    <ul class="widget-post">
                            <?php 

                                $employee = DB::table('tb_blogs')->take(3)->get();
                                    foreach($employee as $row ) {
                                        echo ' 
                                        <li>
                                            <a  href="blog/read/'.$row->slug.'" class="widget-post-media">
                                            <img class="item-container" style="height:50px;" alt="'.$row->title.'" src="';?>{{ asset('uploads/images/'.$row->image)}}<?php echo'" class="col-md-12 img-responsive" alt="1" />
                                            </a>
                                            <div class="widget-post-info">
                                                <h6>
                                                    <a href="blog/read/'.$row->slug.'">'.$row->title.'</a>
                                                </h6>
                                                <div class="post-meta">
                                                    <span>July 9, 2015</span>

                                                </div>
                                            </div>
                                        </li>


                                        ';
                                    }
                            ?>

                            </ul>
                        </div>
                        <div class="sidebar-widget">
                            <h5>popular Tags</h5>
                            <hr>
                                <ul class="widget-tag">
                                    <li>
                                        <a>Business</a>
                                    </li>
                                    <li>
                                        <a>Law</a>
                                    </li>
                                    <li>
                                        <a>Medical</a>
                                    </li>
                                    <li>
                                        <a>Science</a>
                                    </li>
                                    <li>
                                        <a>Influence</a>
                                    </li>
                                    <li>
                                        <a>Trending</a>
                                    </li>
                                </ul>
                            </div>