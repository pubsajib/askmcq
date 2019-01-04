<?php 
function filter_questions($user) {
	$result = [];
	$questions = $user->questions->toArray();
	if ($questions) {
		foreach ($questions as $question) {
			$result[$question['type']][] = $question;
		}
	}
	return $result;
}
function options($question) {
	return explode(',', $question->options);
}
function saved($user) {}
function published($user) {
	return $user->questions->count();
}