<?php

namespace Admin\UsersBundle\Form;

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
            ->add('sujetStage','textarea', ['attr' => ['class' => 'form-control','placeholder' => 'sujetStage']])
            ->add('dateDebut','date')
            ->add('dateFin','date')
            ->add('affect', 'choice', array(
                'label' => ' ',
                'choices' => array(0 => 'Not Effect'),
                'expanded' => true,
                'required' => true
            ))
            ->add('idTechnologie',null, ['attr' => ['class' => 'form-control','required' =>true]])
            ->add('idDepartement',null, ['attr' => ['class' => 'form-control','required' =>true]])
            ->add('idTypestage',null, ['attr' => ['class' => 'form-control','required' =>true]])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UsersBundle\Entity\Stage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_usersbundle_stage';
    }
}
