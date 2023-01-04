<?php

namespace Admin\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdministrationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('birth')
            ->add('emailaddress')
            ->add('phone')
            ->add('gender')
            ->add('zipcode')
            ->add('city')
            ->add('iduser')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UsersBundle\Entity\Administration'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_usersbundle_administration';
    }
}
