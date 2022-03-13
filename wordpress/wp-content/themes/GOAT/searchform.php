<?php
/*
 Template Name : Search Page
 */
?>

<section class="searchBar">
    <h1 class="">Où souhaitez-vous partir ?</h1>
    <form role="search" action="<?php esc_url(home_url('/'))?>">

        <input type="search" name="s" placeholder="Rechercher une ville..." aria-label="Search" value="<?= get_search_query()?>">

<!--        <input type="text" hidden readonly name="page_id" value="0">-->

        <button type="submit" >Search</button>
    </form>
</section>

