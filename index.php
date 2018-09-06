<?php
/* Author: Ganesh Rathinavel
 * Description: Form input handler for GET, POST and REQUEST; Sanitizes Form inputs
 * Prevents 'undefined' variable error.
 * Sanity check for array inputs and triming
 **/

namespace input;

class input {

	private function sanitize( $data, $trim, $isArray ) {
		if ( ! $isArray && is_array( $data ) ) {
			return null;
		} else if ( $isArray && ! is_array( $data ) ) {
			return null;
		}
		if ( $trim ) {
			if ( $data !== null && ! is_array( $data ) ) {
				return trim( $data );
			} elseif ( is_array( $data ) ) {
				return array_map( 'trim', $data );
			}

			return null;
		}

		return $data;
	}

	/**
	 * Description: Post input
	 *
	 * @param $param
	 * @param bool $trim
	 * @param bool $isArray
	 *
	 * @return null|string
	 */
	function post( $param, $trim = true, $isArray = false ) {
		if ( isset( $_POST[ $param ] ) ) {
			return $this->sanitize( $_POST[ $param ], $trim, $isArray );
		}

		return null;
	}

	/**
	 * Description: Get input
	 *
	 * @param $param
	 * @param bool $trim
	 * @param bool $isArray
	 *
	 * @return null|string
	 */
	function get( $param, $trim = true, $isArray = false ) {
		if ( isset( $_GET[ $param ] ) ) {
			return $this->sanitize( $_GET[ $param ], $trim, $isArray );
		}

		return null;
	}

	/**
	 * Description: Request input
	 *
	 * @param $param
	 * @param bool $trim
	 * @param bool $isArray
	 *
	 * @return null|string
	 */
	function request( $param, $trim = true, $isArray = false ) {
		if ( isset( $_REQUEST[ $param ] ) ) {
			return $this->sanitize( $_REQUEST[ $param ], $trim, $isArray );
		}

		return null;
	}
}

