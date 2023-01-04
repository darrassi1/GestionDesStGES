<?php

namespace Admin\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SoutananceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateSoutenance')
            ->add('salleSoutenance','text', ['attr' => ['class' => 'form-control','placeholder' => 'Salle']])
            ->add('idTypesoutenance',null, ['attr' => ['class' => 'form-control','required' =>true]])
            ->add('idStage',null, ['attr' => ['class' => 'form-control','required' =>true]])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UsersBundle\Entity\Soutanance'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_usersbundle_soutanance';
    }
}
