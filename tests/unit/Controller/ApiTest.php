<?php

declare(strict_types=1);

namespace OCA\NextRAG\Tests\Controller;

use OCA\NextRAG\AppInfo\Application;
use OCA\NextRAG\Controller\ApiController;
use OCP\IRequest;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase {
    public function testIndex() {
        $request = $this->createMock(IRequest::class);
        $controller = new ApiController(Application::APP_ID, $request);

        // Call the index method and get the DataResponse
        $response = $controller->index();

        // Assert the response data
        $data = $response->getData();
        $this->assertArrayHasKey('message', $data);
        $this->assertEquals('Hello world!', $data['message']);
    }
}
