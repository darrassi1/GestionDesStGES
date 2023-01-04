<?php

namespace Student\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sujetStage')
            ->add('dateDebut')
            ->add('dateFin')
            ->add('affect')
            ->add('idTechnologie')
            ->add('idDepartement')
            ->add('idTypestage')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Student\UsersBundle\Entity\Stage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'student_usersbundle_stage';
    }
}
