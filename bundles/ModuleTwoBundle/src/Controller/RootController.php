<?php
/**
 * @author Anton Acc <me@anton-a.cc>
 */
declare(strict_types=1);

namespace ModuleTwoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RootController extends AbstractController
{
    #[Route('/', name: 'module_two_root')]
    public function root(): Response
    {
        return new Response('Hello module2');
    }
}
