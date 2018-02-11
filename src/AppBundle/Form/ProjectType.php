<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//idproject
        $builder
        ->add('timecreated')
        ->add('fullname')
        ->add('budget')
        ->add('departuredate')
        ->add('deliverydate')
        ->add('unknowndeliverydate')
        ->add('realdeparturedate')
        ->add('realdeliverydate')
//        ->add('deliveryidlocation')
//        ->add('internalrepidperson')

        ->add('deliverylocation')
        ->add('deliverylocationid')
        ->add('departurelocation')
        ->add('departurelocationid')

        ->add('comment')
        ->add('previousidproject')
        ->add('nextidproject');
//        ->add('parentidproject')
//        ->add('departureidlocation')
//        ->add('idperson')
//        ->add('idstandarddays');



    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Project'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_project';
    }


}
