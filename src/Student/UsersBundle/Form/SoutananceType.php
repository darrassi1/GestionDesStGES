<?php

namespace Student\UsersBundle\Form;

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
            ->add('salleSoutenance')
            ->add('idStage')
            ->add('idTypesoutenance')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Student\UsersBundle\Entity\Soutanance'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'student_usersbundle_soutanance';
    }
}
