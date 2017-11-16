<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<div class="col-md-3 col-xs-6">
    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form">
        <input type="text" id="<?php echo $unique_id; ?>" placeholder="Buscar..." value="<?php echo get_search_query(); ?>" name="s">
        <button class="submit" type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
