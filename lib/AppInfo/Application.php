<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Nate Armentrout <nate@ideviot.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\Freelance\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'freelance';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
