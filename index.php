<?php
/* Author: Ganesh Rathinavel
 * Description: Form input handler for GET, POST and REQUEST; Sanitizes Form inputs - prevents 'undefined' variable error.
 **/

/*
 * Description: Post input
 * @param: input field name
 * @return: input value
 * */
function post_input( $param ) {
	if ( isset( $_POST[ $param ] ) ) {
		return $_POST[ $param ];
	}

	return "";
}

/*
 * Description: Get input
 * @param: input field name
 * @return: input value
 * */
function get_input( $param ) {
	if ( isset( $_GET[ $param ] ) ) {
		return $_GET[ $param ];
	}

	return "";
}

/*
 * Description: Request input
 * @param: input field name
 * @return: input value
 * */
function request_input( $param ) {
	if ( isset( $_REQUEST[ $param ] ) ) {
		return $_REQUEST[ $param ];
	}

	return "";
}