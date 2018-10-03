<?php 
function inactiveUsers() {
	return DB::table('users')->where('is_active', '')->count();
}
function getBadgeFor($users = null) {
	if ($users) {
		return '<span class="badge badge-light">'. $users .'</span>';
	}
	return '';
}
function fullName($first_name, $last_name) {
	return ucfirst($first_name .' '. $last_name);
}