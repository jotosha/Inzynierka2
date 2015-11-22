<?php
namespace AppBundle\Controller;


use AppBundle\Entity\RegisterEntity;
use AppBundle\Form\Register;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /**
     * @Route("/Register", name="Register")
     */

    public function newAction(Request $request)
    {
        $task = new RegisterEntity();

        $form = $this->createForm(new Register());
        $form->handleRequest($request);

        if ($form->isValid()) {

            $data = $form->getData();
            $uzytkownik = new RegisterEntity();
            $uzytkownik->setEmail($data["email"]);
            $uzytkownik->setHaslo($data["haslo"]);
            $uzytkownik->setImie($data["imie"]);
            $uzytkownik->setNazwisko($data["nazwisko"]);
            $uzytkownik->setTelefon($data["telefon"]);
            $em = $this->getDoctrine()->getManager();
            $em->persist($uzytkownik);
            $em->flush();
            return $this->redirect($this->generateUrl('Login'));
        }


        return $this->render(':Szablony:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}