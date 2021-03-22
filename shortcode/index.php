<?php
/**
 * add shortcode "les_mentors" qui affiche les mentors
 */
function get_metors(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'nos_mentors',
		'posts_per_page' => 50,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="liste_mentor">
				<img src="<?php the_post_thumbnail_url(); ?>" class="">
				<h2 class="nom_mentor"><?php the_title(); ?></h2>
				<p class="category_mentor"><?php the_field( 'category' ); ?></p>
				<p class="description_mentor"><?php the_excerpt(); ?></p>
				<?php 
				if (!get_field( 'reseaux1ytb' ) == null) {
					?>
					<a href="<?php the_field( 'reseaux1ytb' );?>"><img class="icon_reseaux" src="http://localhost/number10/wp-content/uploads/2021/03/youtube-1.png" alt="youtube"></a>
					<?php
				}
				if (!get_field( 'reseaux2insta' ) == null) {
					?>
					<a href="<?php the_field( 'reseaux2insta' );?>"><img class="icon_reseaux" src="http://localhost/number10/wp-content/uploads/2021/03/instagram-1.png" alt="insta"></a>
					<?php
				}
				if (!get_field( 'reseaux3behance' ) == null) {
					?>
					<a href="<?php the_field( 'reseaux3behance' );?>"><img class="icon_reseaux" src="http://localhost/number10/wp-content/uploads/2021/03/Subtract.png" alt="behance"></a>
					<?php
				}
				if (!get_field( 'reseaux4dribbble' ) == null) {
					?>
					<a href="<?php get_field( 'reseaux4' );?>"><img class="icon_reseaux" src="http://localhost/number10/wp-content/uploads/2021/03/dribbble-1.png" alt="dribbble"></a>
					<?php
				}
				?>
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else {
		echo "il n'y a pa d article mentors :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_mentors(){
	add_shortcode('les_mentors','get_metors');
}
add_action('init','addshortcode_mentors');

/**
 * add shortcode "les_articles_design_ui_ux" qui affiche les articles design_ui_ux
 */
function get_les_articles_design_ui_ux(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'article_design_ux_ui',
		'posts_per_page' => 5,
		'post_status' => ' published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<img src="<?php the_post_thumbnail_url(); ?>" class="">
				<a href="<?php the_permalink(); ?>">Lire plus</a>		
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else{
		echo "il n'y a pa d article de ux ui :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_les_articles_design_ui_ux(){
	add_shortcode('les_articles_design_ui_ux','get_les_articles_design_ui_ux');
}
add_action('init','addshortcode_les_articles_design_ui_ux');


/**
 * add shortcode "article_illustration" qui affiche les articles illustration
 */
function get_article_illustration(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'article_illustration',
		'posts_per_page' => 5,
		'post_status' => ' published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<img src="<?php the_post_thumbnail_url(); ?>" class="">
				<a href="<?php the_permalink(); ?>">Lire plus</a>		
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else{
		echo "il n'y a pa d article de ilustration :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_article_illustration(){
	add_shortcode('article_illustration','get_article_illustration');
}
add_action('init','addshortcode_article_illustration');

/**
 * add shortcode "articles_photography" qui affiche les articles de photography
 */
function get_articles_photography(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'articles_photography',
		'posts_per_page' => 5,
		'post_status' => ' published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<img src="<?php the_post_thumbnail_url(); ?>" class="">
				<a href="<?php the_permalink(); ?>">Lire plus</a>		
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else{
		echo "il n'y a pa d article de photo :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_articles_photography(){
	add_shortcode('articles_photography','get_articles_photography');
}
add_action('init','addshortcode_articles_photography');

/**
 * add shortcode "article_typography" qui affiche les article de typography
 */
function get_article_typography(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array( 
		'post_type' => 'article_typography',
		'posts_per_page' => 5,
		'post_status' => ' published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<img src="<?php the_post_thumbnail_url(); ?>" class="">
				<a href="<?php the_permalink(); ?>">Lire plus</a>		
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else{
		echo "il n'y a pa d article de typo :!!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_article_typography(){
	add_shortcode('article_typography','get_article_typography');
}
add_action('init','addshortcode_article_typography');


/**
 * add shortcode "les_articles" qui affiche les tous les artticles
 */
function get_articles(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array(
		'post_type' => ['article_illustration','article_design_ux_ui','articles_photography','article_typography'],
		'posts_per_page' => 50,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<img src="<?php the_post_thumbnail_url(); ?>" class="">
				<a href="<?php the_permalink(); ?>">Lire plus</a>		
			</div>
			<?php
		}
		$total_pages = $custom_query->max_num_pages;
		if ($total_pages > 1){
			$current_page = max(1, get_query_var('paged'));
			echo paginate_links(array(
				'base' => get_pagenum_link(1) . '%_%',
				'format' => 'page/%#%',
				'current' => $current_page,
				'total' => $total_pages,
				'prev_text'    => __('« prev'),
				'next_text'    => __('next »'),
			));
		} 
	}else {
		echo "il n'y a pa d article !!!!!!!!!";
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_get_articles(){
	add_shortcode('les_articles','get_articles');
}
add_action('init','addshortcode_get_articles');

/**
 * add shortcode "les_articles_last" qui affiche les 5 dernier article publier
 */
function get_articles_last(){
	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
	$custom_args = array(
		'post_type' => ['article_illustration','article_design_ux_ui','articles_photography','article_typography'],
		'posts_per_page' => 5,
		'post_status' => 'published',
		'order_by' => 'post_date',
		'order' => 'DESC',
		'paged' => $paged
	);

	$custom_query = new WP_Query($custom_args); 
	ob_start();
	if ($custom_query->have_posts() ) {
		while ($custom_query->have_posts() ) {
			$custom_query->the_post();
			?>
			<div class="article-extrait">
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?></p>
				<img src="<?php the_post_thumbnail_url(); ?>" class="">
				<a href="<?php the_permalink(); ?>">Lire plus</a>		
			</div>
			<?php
		}
	}
	wp_reset_postdata();
	return ob_get_clean();
}

function addshortcode_get_articles_last(){
	add_shortcode('les_articles_last','get_articles_last');
}
add_action('init','addshortcode_get_articles_last');
