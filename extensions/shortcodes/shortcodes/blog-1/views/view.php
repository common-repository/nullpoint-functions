<?php if (!defined('FW')) die( 'Forbidden' );

$atts['category'] = trim($atts['category']);
if ($atts['number'] == '') $atts['number'] = 1000;
if ($atts['only_posts']['on_off'] == 'off') $atts['only_posts']['on']['posts'] = '';

$blog_template = array(
    'category_name' => '' . sanitize_title($atts['category']) . '',
	'orderby' => '' . esc_attr($atts['order_by']) . '',
    'order'    => '' . esc_attr($atts['order']) . '',
	'posts_per_page'	=>	'' . esc_attr($atts['number']) . '',
	'post__in' => $atts['only_posts']['on']['posts']
);

query_posts($blog_template);


?>
<div id="npt-blog-normal-content">
	<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
    <?php 
	$post_id = get_the_ID();
	$post_format = get_post_format();
	$excerpt = get_the_excerpt();
    $content = get_the_content();
	$content = preg_match_all( '/href\s*=\s*[\"\']([^\"\']+)/', $content, $links );
	$content = $links[1][0];
	$npt_link_format = $content;
	?> 
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="npt-article-container">
			<?php if ($post_format == 'quote') { ?>
            <div class="entry-content">
                <div class="npt-blockquote-2-holder">
                    <div class="npt-blockquote-2">
                        <div class="npt-blockquote-2-content"><?php echo esc_html($excerpt); ?></div>
                        <div class="clear"></div>
                    </div>
                </div>	
            </div>
            <div class="clearfix"></div>
            <?php } else { ?>
            <div class="blog-entry">
                <div class="entry-image">
                	<?php if (($post_format == 'gallery') && (get_post_gallery())) { 
					$npt_gallery_format = get_post_gallery_images( $post_id ); ?>
                    	<div class="postimg">
                            <div id="postgallery-<?php echo get_the_ID() ; ?>" class="flexslider">
                                <ul class="slides">
                                    <?php foreach ( $npt_gallery_format as $attachment):  ?>
                                    <li class="slide">
                                        <div class="npt-spih">
                                            <div class="single-post-image" style="background-image: url(<?php echo esc_url($attachment);?>)"></div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?> 
                                </ul>
                            </div>
                        </div>
                    <?php } else { ?>
					<div class="npt-spih">
                    	<?php the_post_thumbnail( 'nullpoint-entry-image' ) ; ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="npt-entry-texts">
                    <div class="npt-psth">
                        <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'nullpoint-functions' ), the_title_attribute( 'echo=0' ) ); ?>"><h3 class="npt-post-single-title"><?php the_title(); ?></h3></a>
                        <p class="npt-ps-categories"><?php the_category(' '); ?></p>
                    </div>     
                    <div class="entry-content">
                            <p class="npt-entry-excerpt"><?php echo wp_kses_post($excerpt); ?></p>
                            <div class="npt-post-button-holder">
                        <a class="npt-btn npt-btn-basic" href="<?php if (($post_format == 'link') && (!empty ($npt_link_format))) { echo esc_url($npt_link_format); } else { the_permalink(); }?>">
                            <div class="npt-btn-overlay"></div>
                            <div class="npt-btn-content"><?php nullpoint_read_more_text(); ?></div>
                        </a>
                        	</div>
                    </div>
                    <div class="npt-entry-infos">
                        <div class="npt-entry-utility">
                        	<?php if( (isset($atts['infos']['date'])) || (isset($atts['infos']['author'])) || (isset($atts['infos']['categories'])) || (isset($atts['infos']['comments'])) ){ ?>
                        	<div class="npt-post-infos">
								<?php if(isset($atts['infos']['date'])){ ?>
                                <div class="date"><i class="fa fa-calendar"></i> <?php the_time(get_option('date_format')); ?></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['author'])){ ?>
                                <div class="user"> <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author();?></a></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['categories'])){ ?>
                                <div class="category"> <i class="fa fa-folder"></i> <?php the_category(', '); ?></div>
                                <?php } ?>
                                <?php if(isset($atts['infos']['comments'])){ ?>
                                <div class="comment"> <i class="fa fa-comment"></i> 
                                    <?php 
                                      comments_popup_link( 
                                      __( 'No Comments', 'nullpoint-functions' ), 
                                      __( '1 Comment', 'nullpoint-functions' ), 
                                      __( '% Comments', 'nullpoint-functions' ),
                                      __( 'Comments Closed', 'nullpoint-functions' )
                                      );
                                    ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(isset($atts['infos']['tags'])){ ?>
                        <div class="npt-entry-tag">
							<?php
                            $posttags = get_the_tags();
                            if($posttags){
                            ?>
                            <span class="npt-tag-text"><?php _e('Tags:','nullpoint-functions'); ?></span>
                            <?php 
                            the_tags('<div class="npt-tag-items"><span>','</span><span>','</span></div>'); 
                            } 
                            ?>
                        </div>
                        <?php } ?>
                    </div>    
            	</div>
            </div>
            <div class="clearfix"></div>
            <?php } ?>
        </div>
	</article>
	<?php endwhile; // End the loop. Whew. ?>
    
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>