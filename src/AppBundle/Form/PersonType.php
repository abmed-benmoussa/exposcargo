<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullname')->add('taxid')->add('email')->add('type')->add('status')->add('logo')->add('url')->add('financialcategory')->add('behaivorcategory')->add('performstaxexemption')->add('averagereleasetime')->add('evaluation')->add('evaluationdate')->add('evaluatoridperson')->add('identificationtype')->add('identificationnumber')->add('birthdate')->add('personality')->add('job')->add('comment')->add('parentid')->add('idphone');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Person'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_person';
    }


}
