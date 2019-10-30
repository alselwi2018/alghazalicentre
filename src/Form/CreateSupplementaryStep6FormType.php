<?php

namespace App\Form;

use App\Entity\Supplementary;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSupplementaryStep6FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('EmergencyContactName', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('RelationshipToChild', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('EmergencyContactNumber', NumberType::class,['attr'=>['class'=>'form-control']]);
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
        return 'createSupplementaryStep6';
    }
}
