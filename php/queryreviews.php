<?php
require_once "connection.php";
$result = $link->query("SELECT * FROM " . $dbase . ".reviews");

$idarr = $datearr = $namearr = $textarr = array();
$i = "0";
$rows = $count = $result->num_rows; // считаем количество строк в базе.
$date = $result->fetch_all();

$review = <<<EOT
<div class="col-lg-4 reviews__wrapper">
	<blockquote class="reviews__text">
		Скоро здесь будут отзывы! Будьте первым!
	</blockquote>
	<p class="reviews__date">
		"$today"
	</p>
	<p class="reviews__autor">
		;)
	</p>
</div>
EOT;

foreach ($date as $val) {
	// val[0] - id , val[1] - date, val[2] - name_autor, val[3] - text
	$idarr[$i] = $val["0"]; // Все id из базы
	$datearr[$i] = $val["1"]; // Все даты формирования комментария из базы
	$namearr[$i] = $val["2"]; // Все имена комментаторов из базы
	$textarr[$i] = $val["3"]; // Все комментарии из базы
	$i++;
};

if ($count > 3) {
	# вывод всех отзывов из базы.
	$repeat = (intdiv($count, 3));
	$division = (fmod($count, 3));

	for ($i = 0; $i < $repeat; $i++) {
		$allreviews .= '<div class="col-12 text-center d-flex justify-content-center reviews">';
		$k = 0;
		do {
			$allreviews .= ('<div class="col-lg-4 reviews__wrapper"><blockquote class="reviews__text">' . $textarr[$count-1] . '</blockquote><p class="reviews__date">"' . $datearr[$count-1] . '"</p><p class="reviews__autor">' . $namearr[$count-1] . '</p></div>');
			$count--;
			$k++;
		} while ($k < 3);
		$allreviews .= '</div><div class="filler"></div>';
	}
	if ($count > 0) {
		$allreviews .= '<div class="col-12 text-center d-flex justify-content-center reviews">';
		for ($i=$count; $i != 0; $i--) {
						$allreviews .= ('<div class="col-lg-4 reviews__wrapper"><blockquote class="reviews__text">' . $textarr[$i-1] . '</blockquote><p class="reviews__date">"' . $datearr[$i-1] . '"</p><p class="reviews__autor">' . $namearr[$i-1] . '</p></div>');
				}
				$allreviews .= '</div><div class="filler"></div>';
	}

} elseif ($count <= 3) {
	$value = "3" - $count;
	$allreviews .= '<div class="col-12 text-center d-flex justify-content-center reviews">';

	switch ($count) {
		case 3:
			for ($i=0; $i < 3; $i++) { 
				$allreviews .= ('<div class="col-lg-4 reviews__wrapper"><blockquote class="reviews__text">' . $textarr[$i] . '</blockquote><p class="reviews__date">"' . $datearr[$i] . '"</p><p class="reviews__autor">' . $namearr[$i] . '</p></div>');
			}
			break;
		case 2:
			for ($i=0; $i < 2; $i++) { 
				$allreviews .= ('<div class="col-lg-4 reviews__wrapper"><blockquote class="reviews__text">' . $textarr[$i] . '</blockquote><p class="reviews__date">"' . $datearr[$i] . '"</p><p class="reviews__autor">' . $namearr[$i] . '</p></div>');
			}
			break;
		case 1:
			for ($i=0; $i < 1; $i++) { 
				$allreviews .= ('<div class="col-lg-4 reviews__wrapper"><blockquote class="reviews__text">' . $textarr[$i] . '</blockquote><p class="reviews__date">"' . $datearr[$i] . '"</p><p class="reviews__autor">' . $namearr[$i] . '</p></div>');
			}
			break;
		case 0:
			break;
	};

	# заполняем шаблонами вывод отзывов
	for ($i=0; $i < $value; $i++) { 
		$allreviews .= $review;
	};
	$allreviews .= '</div>';
};


?>