<?php

namespace App\Form;

use App\Entity\Supplementary;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSupplementaryStep1FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $eth = array('White/British'=>'white/british','White/Other'=>'white/other',
            'Pakistani'=>'pakistani','Indian'=>'indian','Bangladeshi'=>'bangladeshi','Iranian'=>'iranian','Eastern European'=>'Easter European',
            'Somali'=>'Somali','Black Caribbean'=>'Black Caribbean','Black - African'=>'Black - African','Black - Other'=>'Black - Other','Yemeni'=>'Yemeni',
            'Arab'=>'Arab','Other Ethnic Group'=>'Other Ethnic Group','Other Mixed Background'=>'Other Mixed Background','Preferred Not To Say'
            =>'Preferred Not To Say');
        $builder
            ->add('FirstName', TextType::class,['attr'=>['class'=>'']])
            ->add('LastName', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('DateOfBirth', BirthdayType::class,['attr'=>['class'=>'','placeholder'=>'1889-10-01','widget'=>'single_text','format'=>'yyyy-MM-dd']])
            ->add('Age', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('Gender',ChoiceType::class,['attr'=>['class'=>'','placeholder' => 'Select a value'],'choices'=>['Male'=>'Male','Female'=>'Female'],'label_attr'=>['class'=>'radio-inline'],'expanded'=>true])
            ->add('Nationality', TextType::class,['attr'=>['class'=>'form-control wrap-text']])
            ->add('Ethnicity', ChoiceType::class,['attr'=>['class'=>' '],'choices'=>$eth,'label_attr'=>['class'=>'checkbox-inline'], 'expanded'=>true, 'multiple'=>true,'mapped'=>true])
            ->add('HomeAddress', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('PostCode', TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('PlaceOfBirth', TextType::class,['attr'=>['class'=>'form-control']]);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults([
            'data_class' => Supplementary::class,
            ]);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
     return 'form_type_createSupplementaryStep1';
    }
}
