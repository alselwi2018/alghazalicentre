<?php

namespace App\Form;

use App\Entity\Supplementary;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSupplementaryStep5FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('LearningDifficulties', ChoiceType::class, ['attr'=>['class'=>''],'label_attr'=>['class'=>'radio-inline'],'expanded'=>true,'choices'=>['Yes'=>'Yes','No'=>'No'],'label'=>'Does the child have any learning difficulties, or special educational needs confirmed or suspected?
for example Dyslexia? if so please specify'])
            ->add('difficultiesSpecifies', TextType::class,['attr'=>['class'=>'form-control'],'required'=>false,'label'=>'Please Specify'])
            ->add('AdditionalSupport', ChoiceType::class,['attr'=>['class'=>'form-control'],'choices'=>['Yes'=>'Yes','No'=>'No']])
            ->add('ParentResidential', ChoiceType::class, ['attr'=>['class'=>'form-control'],'choices'=>['British Citizen'=>'British Citizen','EU Citizen'=>'EU Citizen','Asylum Seeker'=>'Asylum Seeker','Refugee'=>'Refugee','Settlement'=>'Settlement']])
            ->add('MotherStatus',ChoiceType::class, ['attr'=>['class'=>'form-control'],'choices'=>['British Citizen'=>'British Citizen','EU Citizen'=>'EU Citizen','Asylum Seeker'=>'Asylum Seeker','Refugee'=>'Refugee','Settlement'=>'Settlement']])
        ;
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
        return 'createSupplementaryStep5';
    }
}
