<?php 
function bodyClass($class='') {
	$classes = '';
	$classes .= Route::currentRouteName() .' ';
	if ($class) $classes .= $class .' ';
	$classes = str_replace('.', '_', $classes);
	echo trim($classes); 
}
function excerpt($value, $moreText = '...', $size = 50) {
	$value = strip_tags($value);
	$text = substr( $value, 0, $size);
	$more = strlen($value) > $size ? ' '.$moreText : '';

	return $text.$more;
}

function formatedDate($value) {
	return date( 'M j, Y h:i A', strtotime($value) );
}
function expNameFor($user_type) {
	# code...
}
function ModalCategories($categories='') {
	$modal = '';
	if ($categories) {
		foreach ($categories['categories'] as $catID => $cat) {
			if ($cat['subcategories']) {
			$modal .= '<div class="card">';
				$modal .= '<div class="card-header" id="category_'. $cat['id'] .'">
				  		<h5 class="mb-0">
				    		<button class="btn cat-block" type="button" data-toggle="collapse" data-target="#catCollapse_'. $cat['id'] .'" aria-expanded="true" aria-controls="catCollapse_'. $cat['id'] .'">
				      			'. $cat['name'] .'
				    		</button>
				  		</h5>
					</div>';
				$modal .= '<div id="catCollapse_'. $cat['id'] .'" class="collapse" aria-labelledby="headingOne" data-parent="#subcategoryList">
				  		<div class="card-body">
				    		<div class="row">';
				    		foreach ($cat['subcategories'] as $subCat) {
				    			$modal .= '<div class="col-sm-4">';
				    				$modal .= '<p> 
				    						<input type="radio" name="sub-select" /> 
				    						<label for="sub12-one-1">'. $subCat['name'] .'</label> 
				    					</p> ';
				    			$modal .= '</div>';
				    		}
					$modal .= '</div>
				  		</div>
					</div>';
				$modal .= '</div>';
			}
		}
	}
	return $modal;
}