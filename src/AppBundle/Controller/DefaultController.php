<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $coverage = xdebug_get_code_coverage();
        $base_dir = realpath($this->getParameter('kernel.root_dir').'/..');
        return $this->render('default/index.html.twig', [
            'base_dir' => $base_dir,
            'coverage' => $coverage,
        ]);
    }
}
