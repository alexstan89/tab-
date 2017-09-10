<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Campaign;
use AppBundle\Factory\CampaignRequestFactory;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Campaign controller.
 *
 * @Route("campaign")
 */
class CampaignController extends Controller
{
    /**
     * Lists all campaign entities.
     *
     * @Route("/", name="campaign_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $campaigns = $em->getRepository('AppBundle:Campaign')->findAll();

        return $this->render('campaign/index.html.twig', array(
            'campaigns' => $campaigns,
        ));
    }

    /**
     * Creates a new campaign.
     *
     * @Route("/new", name="campaign_create")
     * @Method({"GET"})
     */
    public function newAction()
    {
        return $this->render('campaign/add.html.twig', []);
    }

    /**
     * Creates a new campaign entity.
     *
     * @Route("/create", name="campaign_new")
     * @Method({"POST"})
     */
    public function createAction(Request $request)
    {
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        /** @var CampaignRequestFactory $campaignFactory */
        $campaignFactory = $this->get('factory.campaign');
        $campaign = $campaignFactory->create($request);

        $em->persist($campaign);
        $em->flush();

        return $this->redirectToRoute('app_homepage');
    }

    /**
     * Finds and displays a campaign entity.
     *
     * @Route("/{id}", name="campaign_show")
     * @Method("GET")
     */
    public function showAction(Campaign $campaign)
    {
        return $this->render('campaign/show.html.twig', array(
            'campaign' => $campaign,
        ));
    }

    /**
     * Displays a form to edit an existing campaign entity.
     *
     * @Route("/{id}/edit", name="campaign_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Campaign $campaign)
    {
        return $this->render('campaign/edit.html.twig', array(
            'campaign' => $campaign,
        ));
    }

    /**
     * Deletes a campaign entity.
     *
     * @Route("/{id}", name="campaign_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Campaign $campaign)
    {
        return $this->redirectToRoute('campaign_index');
    }
}
