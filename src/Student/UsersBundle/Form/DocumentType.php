<?php

namespace Student\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomDocument')
            ->add('cheminDocument')
            ->add('dateDocument')
            ->add('idTypedocument')
            ->add('ncinet')
            ->add('ncined')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Student\UsersBundle\Entity\Document'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'student_usersbundle_document';
    }
}
