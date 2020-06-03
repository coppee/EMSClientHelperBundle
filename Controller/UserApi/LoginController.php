<?php

declare(strict_types=1);

namespace EMS\ClientHelperBundle\Controller\UserApi;

use EMS\ClientHelperBundle\Service\UserApi\AuthService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class LoginController
{
    /** @var AuthService */
    private $authService;

    public function __construct(AuthService $service)
    {
        $this->authService = $service;
    }

    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse($this->authService->getUserAuthToken($request));
    }
}
