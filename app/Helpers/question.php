<?php 
function saved($user) {}
function published($user) {
	return $user->questions->count();
}
function options($question) {
	return explode(',', $question->options);
}