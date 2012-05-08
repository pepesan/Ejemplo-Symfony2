<?php

namespace Pepesan\NuevoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pepesan\NuevoBundle\Entity\Clientes;
use Pepesan\NuevoBundle\Form\ClientesType;

/**
 * Clientes controller.
 *
 */
class ClientesController extends Controller
{
    /**
     * Lists all Clientes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('PepesanNuevoBundle:Clientes')->findAll();

        return $this->render('PepesanNuevoBundle:Clientes:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Clientes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PepesanNuevoBundle:Clientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clientes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PepesanNuevoBundle:Clientes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Clientes entity.
     *
     */
    public function newAction()
    {
        $entity = new Clientes();
        $form   = $this->createForm(new ClientesType(), $entity);

        return $this->render('PepesanNuevoBundle:Clientes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Clientes entity.
     *
     */
    public function createAction()
    {
        $entity  = new Clientes();
        $request = $this->getRequest();
        $form    = $this->createForm(new ClientesType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clientes_show', array('id' => $entity->getId())));
            
        }

        return $this->render('PepesanNuevoBundle:Clientes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Clientes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PepesanNuevoBundle:Clientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clientes entity.');
        }

        $editForm = $this->createForm(new ClientesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PepesanNuevoBundle:Clientes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Clientes entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('PepesanNuevoBundle:Clientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clientes entity.');
        }

        $editForm   = $this->createForm(new ClientesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('clientes_edit', array('id' => $id)));
        }

        return $this->render('PepesanNuevoBundle:Clientes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Clientes entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('PepesanNuevoBundle:Clientes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Clientes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('clientes'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
