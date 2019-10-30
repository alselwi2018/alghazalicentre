<?php

namespace App\Form;

use App\Entity\Supplementary;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSupplementaryStep7FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('SchoolAttending', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('YearGroup', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('AttendArabicSchool', ChoiceType::class,['attr'=>['class'=>''],'label_attr'=>['class'=>'radio-inline'],'expanded'=>true,'choices'=>['Yes'=>'Yes','No'=>'No']])
            ->add('YesAttended', TextType::class,['attr'=>['class'=>'form-control'],'required'=>false])
            ->add('AttendFromDate', DateType::class,['attr'=>['class'=>'']])
            ->add('AttendToDate', DateType::class,['attr'=>['class'=>'']])
            ->add('ArabicLevel', ChoiceType::class,['attr'=>['class'=>''],'label_attr'=>['class'=>'radio-inline'],'expanded'=>true,'choices'=>['Beginner'=>'Beginner','Intermediate'=>'Intermediate','Advanced'=>'Advanced']]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Supplementary::class,
        ]);
    }
    /**
     * @inheritDoc
     */
    public function getBlockPrefix()
    {
        return 'createSupplementaryStep7';
    }
}
