<?php

namespace Admin\UsersBundle\Form;

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
            ->add('nomDocument','text', ['attr' => ['class' => 'form-control','placeholder' => 'Nom Document']])
            ->add('cheminDocument','file', array(
                'data_class' => null
            ))
            ->add('dateDocument')
            ->add('ncined',null, ['attr' => ['class' => 'form-control','required' =>true]])
            ->add('ncinet',null, ['attr' => ['class' => 'form-control','required' =>true]])
            ->add('idTypedocument',null, ['attr' => ['class' => 'form-control','required' =>true]])
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\UsersBundle\Entity\Document'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_usersbundle_document';
    }
}
