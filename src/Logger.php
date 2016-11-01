<?php

namespace Polevaultweb\PHPUnit_WP_CLI_Runner;

/**
 * PHPUnit logger
 */
class Logger {

	/**
	 * @param string $message Message to write.
	 *
	 * @return string
	 */
	public function info( $message ) {
		// Quiet
	}

	/**
	 * @param $message
	 *
	 * @return mixed
	 */
	public function success( $message ) {
		return $message;
	}

	/**
	 * @param $message
	 *
	 * @return mixed
	 */
	public function warning( $message ) {
		// Quiet
	}

	/**
	 * @param $message
	 *
	 * @return mixed
	 */
	public function error( $message ) {
		return $message;
	}

	/**
	 * @param $message_lines
	 *
	 * @return string
	 */
	public function error_multi_line( $message_lines ) {
		$message = implode( "\n", $message_lines );

		return $message;
	}
}
