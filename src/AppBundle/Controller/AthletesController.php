<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Athletes;
use AppBundle\Entity\Epreuves;

use AppBundle\Form\AthletesType;

/**
 * Athletes controller.
 *
 * @Route("/athletes")
 */
class AthletesController extends Controller
{
    /**
     * Lists all Athletes entities.
     *
     * @Route("/", name="athletes_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $athletes = $em->getRepository('AppBundle:Athletes')->findAll();
        $epreuves = $em->getRepository('AppBundle:Epreuves')->findAll();

        return $this->render('athletes/index.html.twig', array(
            'athletes' => $athletes,
            'epreuves' => $epreuves,
        ));
    }

    /**
     * Creates a new Athletes entity.
     *
     * @Route("/new", name="athletes_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $athlete = new Athletes();
        $form = $this->createForm('AppBundle\Form\AthletesType', $athlete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($athlete);
            $em->flush();

            return $this->redirectToRoute('athletes_show', array('id' => $athlete->getId()));
        }

        return $this->render('athletes/new.html.twig', array(
            'athlete' => $athlete,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Athletes entity.
     *
     * @Route("/{id}", name="athletes_show")
     * @Method("GET")
     */
    public function showAction(Athletes $athlete)
    {
        $deleteForm = $this->createDeleteForm($athlete);

        return $this->render('athletes/show.html.twig', array(
            'athlete' => $athlete,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Athletes entity.
     *
     * @Route("/{id}/edit", name="athletes_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Athletes $athlete)
    {
        $deleteForm = $this->createDeleteForm($athlete);
        $editForm = $this->createForm('AppBundle\Form\AthletesType', $athlete);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($athlete);
            $em->flush();

            return $this->redirectToRoute('athletes_edit', array('id' => $athlete->getId()));
        }

        return $this->render('athletes/edit.html.twig', array(
            'athlete' => $athlete,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Athletes entity.
     *
     * @Route("/{id}", name="athletes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Athletes $athlete)
    {
        $form = $this->createDeleteForm($athlete);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($athlete);
            $em->flush();
        }

        return $this->redirectToRoute('athletes_index');
    }

    /**
     * Creates a form to delete a Athletes entity.
     *
     * @param Athletes $athlete The Athletes entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Athletes $athlete)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('athletes_delete', array('id' => $athlete->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
