<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<?php if ( ! empty( $items ) ) : ?>
<!-- NULLPOINT BREADCRUMB -->   
<div id="npt-breadcrumbs" class="npt-brc-layout-lt-re">
    <div class="container">
		<?php for ( $i = 0; $i < count( $items ); $i ++ ) : ?>
			<?php if ( $i == ( count( $items ) - 1 ) ) : ?>
				<span class="last-item"><?php echo $items[ $i ]['name'] ?></span>
                <div class="npt-breadcrumbs-page"><span class="last-item"><?php echo $items[ $i ]['name'] ; ?></span></div>
			<?php elseif ( $i == 0 ) : ?>
				<span class="first-item">
				<?php if( isset( $items[ $i ]['url'] ) ) : ?>
					<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
				<?php else : echo $items[ $i ]['name']; endif ?>
				<span><?php echo $separator ?></span>
			<?php
			else : ?>
				<span class="<?php echo( $i - 1 ) ?>-item">
					<?php if( isset( $items[ $i ]['url'] ) ) : ?>
						<a href="<?php echo $items[ $i ]['url'] ?>"><?php echo $items[ $i ]['name'] ?></a></span>
					<?php else : echo $items[ $i ]['name']; endif ?>
				<span><?php echo $separator ?></span>
			<?php endif ?>
		<?php endfor ?>
	</div>
</div>
<!-- END NULLPOINT BREADCRUMB --> 
<?php endif ?>