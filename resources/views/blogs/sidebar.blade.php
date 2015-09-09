 
<div class="sidebar-widget hidden">
    <h5>Search</h5>
    <div class="widget-search">
        <input class="form-full input-lg" type="text" value="" placeholder="Search Here" name="search" id="wid-search">
            <input type="submit" value="" name="email" id="wid-s-sub">
            </div>
        </div>
        <div class="sidebar-widget">
            <h5>Categories</h5>
            <hr>
                <ul>

            <!--   Select Categories From tb_blogs table and link to routes-->
                    <?php 
                        $blogCategories = DB::table('tb_blogcategories')->get();
                            foreach($blogCategories as $category ) {
                                echo '

                                  <li>
                                      <a>'.$category->name.'</a>
                                  </li>
                                  <hr>

                                ';

                            }
                    ?>
                </ul>
            </div>
            <div class="sidebar-widget hidden">
                <h5>Recent Post</h5>
                <hr>
                    <ul class="widget-post">
                        <li>
                            <a class="widget-post-media">
                                <img src="img/img/blog1.jpg">
                                </a>
                                <div class="widget-post-info">
                                    <h6>
                                        <a>What you need to know about Washington’s new marijuana laws</a>
                                    </h6>
                                    <div class="post-meta">
                                        <span>July 9, 2015</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="widget-post-media">
                                    <img src="img/img/blog3.jpg">
                                    </a>
                                    <div class="widget-post-info">
                                        <h6>
                                            <a>NorCal ‘High Times’ Medical Cannabis Cup 2015 fully baked</a>
                                        </h6>
                                        <div class="post-meta">
                                            <span>June 22, 2015</span>
                                        </div>
                                    </div>
                                </li>
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