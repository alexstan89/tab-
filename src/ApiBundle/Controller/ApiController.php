<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Api controller.
 */
class ApiController extends Controller
{
    /**
     * Returns promoted products from a list of all possible search result doc ids.
     *
     * @Route("/promoted", name="promoted_products")
     * @Method({"POST"})
     */
    public function promotedProducts(Request $request)
    {
        $parameters = [];
        if ($content = $request->getContent()) {
            $parameters = json_decode($content, true);
        }

        $provider = $this->get('api.promoted_products_provider.from_doc_id');
        $promotedProducts = $provider->getPromotedProducs($parameters);

        return new JsonResponse($promotedProducts);
    }
}
