<?php
$image_id = get_field('image');
$heading = get_field('heading');
$button = get_field('button');

$className = 'module__hero';

if (!empty($block['className'])) {
	$className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
	$className .= ' align' . $block['align'];
}

?>

<section class="<?php echo esc_attr($className); ?>" style="background:url(<?= wp_get_attachment_image_src( $image_id, 'full' )[0]; ?>) no-repeat center/cover;">
	<div class="module__hero__copy">
		<?php echo $heading; ?>

	</div>
	<div class="module__hero__button">
		<?php
		if ($button) {
			$url = $button['url'];
			$label = $button['title'];
			$target = $button['target']; ?>
			<a href="<?php echo $url; ?>" target="<?php echo $target; ?>"><?php echo $label; ?></a>
		<?php } ?>
	</div>
</section>