<?php

namespace Acme\DemoBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\DemoBundle\Entity\Clientes;
use Acme\DemoBundle\Form\ClientesType;

/**
 * Clientes controller.
 *
 * @Route("/")
 */
class ClientesController extends Controller
{
    /**
     * Lists all Clientes entities.
     *
     * @Route("/", name="clientes")
	 * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('AcmeDemoBundle:Clientes')
        ->findAll();
		return $this->render('AcmeDemoBundle:Clientes:index.html.twig', 
		array('entities' => $entities,"clientes_show"=>"show"));
		//return new Response($content);
        //return array('entities' => $entities,"clientes_show"=>"show");
    }

    /**
     * Finds and displays a Clientes entity.
     *
     * @Route("/{id}/show", name="clientes_show")
	 *  @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeDemoBundle:Clientes')
        ->find($id);

        if (!$entity) {
            throw $this->createNotFoundException(
            'Unable to find Clientes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
		return $this->render(
		'AcmeDemoBundle:Clientes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView()     ));
        //return array('entity'      => $entity,
        //    'delete_form' => $deleteForm->createView()     );
    }

    /**
     * Displays a form to create a new Clientes entity.
     *
     * @Route("/new", name="clientes_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Clientes();
        $form   = $this->createForm(new ClientesType(), $entity);
		return $this->render('AcmeDemoBundle:Clientes:new.html.twig',array('entity' => $entity,
		'form'   => $form->createView()));
        //return array('entity' => $entity,
		//'form'   => $form->createView());
    }

    /**
     * Creates a new Clientes entity.
     *
     * @Route("/create", name="clientes_create")
     * @Method("post")
     * @Template("AcmeHelloBundle:Clientes:new.html.twig")
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

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Clientes entity.
     *
     * @Route("/{id}/edit", name="clientes_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeHelloBundle:Clientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Clientes entity.');
        }

        $editForm = $this->createForm(new ClientesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
		return $this->render('AcmeDemoBundle:Clientes:edit.html.twig',array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView()));
        /*return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
		 */
    }

    /**
     * Edits an existing Clientes entity.
     *
     * @Route("/{id}/update", name="clientes_update")
     * @Method("post")
     * @Template("AcmeHelloBundle:Clientes:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('AcmeHelloBundle:Clientes')->find($id);

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

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Clientes entity.
     *
     * @Route("/{id}/delete", name="clientes_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('AcmeHelloBundle:Clientes')->find($id);

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
