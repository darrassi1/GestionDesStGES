<?php

namespace Admin\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FilliereType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Filliere', 'text', ['attr' => ['class' => 'form-control', 'placeholder' => 'Filliere']])
            ->add('diplome', 'text', ['attr' => ['class' => 'form-control', 'placeholder' => 'diplome']])
            ->add('idDepartement');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UsersBundle\Entity\Filliere'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_usersbundle_filliere';
    }
}
