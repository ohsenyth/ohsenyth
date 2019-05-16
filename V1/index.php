<?php get_header();  ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <article class="post">
            <?php the_post_thumbnail('large'); //Get the thumbnail to this post. ?>
            <h1 class="title center">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
                    
                    <div class="post-meta center">
                        <span>Posted on <date><?php the_time('m/d/Y'); ?></date> in <?php echo get_the_category_list(); ?> </span> 
                        <?php if( comments_open() ) :  ?>
								<span class="comments-link"> | 
									<?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); 
									?>
								</span>
							<?php endif; ?>
                    </div><!--/post-meta -->
                    
                    <div class="content">                     
                        <?php the_content( '<div class="div-readmore center"><span class="readmore">Read More</span></div>' ); ?>
							
                        <?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
                        
                        <div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
                        
                    </div> <!-- content -->
            

                </article>
    <?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
                
                <!-- pagintation -->
				<div id="pagination" class="clearfix">					
					<div class="next-page"><?php next_posts_link( '&laquo; Previous entries' ); ?></div>
                    <div class="past-page"><?php previous_posts_link( 'Next entries &raquo;' ); ?></div>
				</div><!-- pagination -->

<?php else : // no posts to display ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; ?>

<?php get_footer();             