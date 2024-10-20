<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class ErrorController extends AbstractController
{
    public function __invoke(): Response
    {
        return new Response('Oups, une erreur est survenue.', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
