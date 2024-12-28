<?php

declare(strict_types=1);

namespace OCA\NextRAG\Controller;

use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IRequest;

class SettingsController extends Controller {
    public function __construct(IRequest $request) {
        parent::__construct('nextrag', $request);
    }

    public function index(): TemplateResponse {
        // Render the admin settings template
        return new TemplateResponse('nextrag', 'admin');
    }
}