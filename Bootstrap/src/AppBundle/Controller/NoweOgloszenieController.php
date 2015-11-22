<?php

namespace AppBundle\Controller;

use AppBundle\Entity\NoweOgloszenieEntity;
use AppBundle\Form\NoweOgloszenie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NoweOgloszenieController extends Controller
{
    /**
     * @Route("/NoweOgloszenie", name="NoweOgloszenie")
     */

    public function newAction()
    {
        $task = new NoweOgloszenieEntity();

        $form = $this->createForm(new NoweOgloszenie());

        return $this->render(':Szablony:noweogloszenie.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}