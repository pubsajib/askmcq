<?php 
function inactiveUsers() {
	$where = [
		['is_active', '=', ''],
		['email_verified_at', '<>', ''],
	];
	return DB::table('users')->where($where)->count();
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
