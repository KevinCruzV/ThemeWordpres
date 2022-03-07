<?php
/*
 Template Name : Search Page
 */
?>


<form action="<?php esc_url(home_url('/'))?>">

	<input type="search" name="s" placeholder="Chercher" aria-label="Search" value="<?= get_search_query()?>">

	<input type="text" hidden readonly name="page_id" value="18">

	<button type="submit" >Search</button>
</form>
