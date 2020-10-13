<?php
$className = 'module__form';

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

<section id="enquiry-form" class="<?php echo esc_attr($className); ?>">
	<div id="reactform"></div>


</section>



<section class="only_show_on_amdin">

	<form class="module__form__content">

		<h2>Request a quote</h2>
		<div class="module__form__group">
			<label for="company_name">COMPANY NAME</label>
			<input type="text" id="company_name" name="company_name" />


		</div>
		<div class="module__form__group">
			<label for="phone_number">PHONE NUMBER</label>
			<input type="text" id="phone_number" name="phone_number" />

		</div>
		<div class="module__form__group">
			<label></label>
			<small>The information collected will be used in accordance with our <a href="http://www.newscorpaustraliaprivacy.com/" target="_blank">privacy policy</a>.
			</small>
		</div>
		<div class="module__form__group">
			<label></label>
			<input type="submit" class="button" value="Request a quote" />
		</div>


	</form>
</section>