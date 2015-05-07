<?php
/**
 * AppShell file
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Shell', 'Console');

/**
 * Application Shell
 *
 * Add your application-wide methods in the class below, your shells
 * will inherit them.
 *
 * @package       app.Console.Command
 */
class AppShell extends Shell {
	public function worker() {
		// initiate counter to use for cronjob replacement
		$interval = 15;
		// Force initial run when worker is started by settint counter to interval
		$counter = $interval; 
		while (true) {
			// One second between checks
			sleep(1);
			// Check if "cronjobs" should be run
			$counter++;
			if ($counter > $interval) {
				echo "A work is done\n";
				$counter = 1;
			}
		}
	}
}
