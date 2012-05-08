<?php

namespace Pepesan\NuevoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ClientesType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('tlf')
            ->add('web')
            ->add('image')
            ->add('dir')
        ;
    }

    public function getName()
    {
        return 'pepesan_nuevobundle_clientestype';
    }
}
