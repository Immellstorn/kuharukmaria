<?php
require_once "queryreviews.php";

if ($rows <= 3) {
	echo json_encode($allreviews);
} else {
	$limit = 3;
	$used_nums = array();
	while(1) {
 		$random = rand(1, $rows);
		if(!in_array($random, $used_nums)) {
			$used_nums[] = $random;
		}
	if(count($used_nums) == $limit) { break; }
	}
	$allreviews = '<div class="col-12 text-center d-flex justify-content-between reviews">';
	foreach ($used_nums as $num) {
		$allreviews .= ('<div class="col-lg-4 reviews__wrapper"><blockquote class="reviews__text">' . $textarr[$num-1] . '</blockquote><p class="reviews__date">"' . $datearr[$num-1] . '"</p><p class="reviews__autor">' . $namearr[$num-1] . '</p></div> ');
	}
	$allreviews .= '</div>';
	echo json_encode($allreviews);
}

?>