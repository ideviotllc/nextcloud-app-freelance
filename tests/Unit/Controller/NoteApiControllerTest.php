<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Nate Armentrout <nate@ideviot.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\Freelance\Tests\Unit\Controller;

use OCA\Freelance\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
