<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('surname')
            ->add('fullName')
            ->add('dob')
            ->add('title')
            ->add('gender')
            ->add('indexNo')
            ->add('age')
            ->add('othernames')
            ->add('studentType')
            ->add('status')
            ->add('classAdmitted')
            ->add('currentClass')
            ->add('waecIndexNo')
            ->add('hometown')
            ->add('address')
            ->add('region')
            ->add('phone')
            ->add('formerSchool')
            ->add('programme')
            ->add('house')
            ->add('nationality')
            ->add('dateAdmitted')
            ->add('parentName')
            ->add('parentAddress')
            ->add('parentPhone')
            ->add('parentEmail')
            ->add('studentLivesWith')
            ->add('schoolarship')
            ->add('subjectCombination')
            ->add('yearGroup')
            ->add('issues')
            ->add('termBill')
            ->add('ptaOwing')
            ->add('academicBillOwing')
            ->add('disabilty')
            ->add('residenceStatus')
            ->add('religion')
            ->add('bloodGroup')
            ->add('sickling')
            ->add('nhisNo')
             
            ->add('parentOccupation')
            ->add('email')
            ->add('boardingOwing')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Student'
        ));
    }
}
