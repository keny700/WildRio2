<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Epreuves;
use AppBundle\Entity\Athletes;
use AppBundle\Form\EpreuvesType;

/**
 * Epreuves controller.
 *
 * @Route("/epreuves")
 */
class EpreuvesController extends Controller
{
    /**
     * Lists all Epreuves entities.
     *
     * @Route("/", name="epreuves_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $epreuves = $em->getRepository('AppBundle:Epreuves')->findAll();
        $athletes = $em->getRepository('AppBundle:Athletes')->findAll();

        return $this->render('epreuves/index.html.twig', array(
            'epreuves' => $epreuves,
            'athletes' => $athletes,
        ));
    }

    /**
     * Creates a new Epreuves entity.
     *
     * @Route("/new", name="epreuves_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $epreufe = new Epreuves();
        $form = $this->createForm('AppBundle\Form\EpreuvesType', $epreufe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($epreufe);
            $em->flush();

            return $this->redirectToRoute('epreuves_show', array('id' => $epreufe->getId()));
        }

        return $this->render('epreuves/new.html.twig', array(
            'epreufe' => $epreufe,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Epreuves entity.
     *
     * @Route("/{id}", name="epreuves_show")
     * @Method("GET")
     */
    public function showAction(Epreuves $epreufe)
    {
        $deleteForm = $this->createDeleteForm($epreufe);

        $em = $this->getDoctrine()->getManager();
        $athletes = $em->getRepository('AppBundle:Athletes')->findBySport('natation');

        return $this->render('epreuves/show.html.twig', array(
            'epreufe' => $epreufe,
            'athletes' => $athletes,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Epreuves entity.
     *
     * @Route("/{id}/edit", name="epreuves_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Epreuves $epreufe)
    {
        $deleteForm = $this->createDeleteForm($epreufe);
        $editForm = $this->createForm('AppBundle\Form\EpreuvesType', $epreufe);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($epreufe);
            $em->flush();

            return $this->redirectToRoute('epreuves_edit', array('id' => $epreufe->getId()));
        }

        return $this->render('epreuves/edit.html.twig', array(
            'epreufe' => $epreufe,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Epreuves entity.
     *
     * @Route("/{id}", name="epreuves_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Epreuves $epreufe)
    {
        $form = $this->createDeleteForm($epreufe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($epreufe);
            $em->flush();
        }

        return $this->redirectToRoute('epreuves_index');
    }

    /**
     * Creates a form to delete a Epreuves entity.
     *
     * @param Epreuves $epreufe The Epreuves entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Epreuves $epreufe)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('epreuves_delete', array('id' => $epreufe->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
