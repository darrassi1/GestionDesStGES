<?php

namespace Admin\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EncadreurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEncadreur')
            ->add('prenomEncadreur')
            ->add('sexeEncadreur')
            ->add('dateNaissance')
            ->add('adresseEncadreur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UsersBundle\Entity\Encadreur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_usersbundle_encadreur';
    }
}
