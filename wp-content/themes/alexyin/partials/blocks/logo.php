<?php
$className = 'module__logo';

if (!empty($block['className'])) {
	$className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
	$className .= ' align' . $block['align'];
}


//Get logos from REST API
$rest_api = get_field('rest_api');
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $rest_api,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
));

$response = curl_exec($curl);

curl_close($curl);
$logos = json_decode($response);

?>

<section class="<?php echo esc_attr($className); ?>">
	<div class="logo-set-content">
		<div class="logo-group">
			<ul>
				<?php 
				
				foreach ($logos as $logo) {
					echo '<li><img src="'.$logo->url.'"></li>';
				}
				?>
			</ul>
		</div>
	</div>
</section>