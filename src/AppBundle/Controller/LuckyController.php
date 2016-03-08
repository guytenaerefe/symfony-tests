<?php namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @return int
     */
    private function number()
    {
        return rand(0, 100);
    }

    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = $this->number();
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/api/lucky/number")
     */
    public function apiNumberaction()
    {
        $data = [
            'lucky_number' => $this->number(),
        ];
        return new JsonResponse($data);
    }

}
