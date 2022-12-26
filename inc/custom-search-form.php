<?php
add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

    $form = '
	<form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '" >
		<label>
		<span class="screen-reader-text">Найти:</span>
		<input type="search" class="search-field"  value="' . get_search_query() . '" name="s" placeholder="Поиск..." />
		</label>
		
		<button type="submit" class="submit"></button>
	</form>';

    return $form;
}
