                <aside class="sidebar">
                    <div class="section-heading" style="padding: 0px 0px 15px 0px">
                        <i class="fa fa-search"></i>
                        <h2>Search Car</h2>
                        <div class="border"></div>
                        <h4>Search your desire car</h4>
                    </div>
                    <div class="search-block">
                        <h2 class="title">Review Rating</h2>
                        <ul class="ratings">
                            <li>
                                <a href="#">
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(100)</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(1525)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(252)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(5665)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star-o orange-color"></i>
                                    <span>(1587)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <i class="fa fa-star orange-color"></i>
                                    <span>(554)</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="search-block">
                    <?php echo $search->the_form(); ?>
                        
                    </div>

                    <div class="search-block">
                        <h2 class="title">Archive</h2>
                        <ul class="list-1">
                           <?php
                            $categories = get_terms( 'brands');
                            foreach($categories as $category){
                        ?>
                            <li><a href="<?php echo esc_url(get_category_link( $category->cat_ID )); ?>"><?php echo $category->name; ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                </aside>

                <div class="Recent-news">
                    <h2 class="title">Recent News</h2>
                    <?php
                        global $data;
                        $datas = get_posts([
                                        'posts_per_page'    => '3',
                                        'post_type'         => 'products',
                                        'post_status'       => 'publish',
                                        'order'             => 'DESC'
                                ]);

                        foreach($datas as $data): setup_postdata($data);
                        $title = get_the_title($data->ID);
                        $images = get_the_post_thumbnail($data->ID,'recents','img-responsive');
                        $price = get_post_meta($data->ID,'carprice', true);
                        ?>
                        <div class="media">
                            <div class="media-left">
                                <a href="<?php echo get_the_permalink($data->ID); ?>">
                                    <?php echo $images; ?>
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="<?php echo get_the_permalink($data->ID); ?>"><?php echo $title; ?></a>
                                <div class="line-dec-o"></div>
                                <span>$<?php echo $price; ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                </div>