<?php

	class Database {

		private static $database;

		public static function set_connection ($database) {

			self::$database = $database;

			if (self::$database->connect_error) {

				echo "There was an error in connection to the server";
			}
		}
	}

	$database = new mysqli ("localhost", "root", "", "crud");
	Database::set_connection($database);