<?php

namespace App\Form;

use App\Entity\Supplementary;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSupplementaryStep2FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('FullNameOfFather',TextType::class,['attr'=>['class'=>'form-control','required'=>false]])
            ->add('Guardian',ChoiceType::class,['attr'=>['class'=>'','required'=>false],'choices'=>['Father'=>'Father'],'expanded'=>true, 'multiple'=>true,'mapped'=>false])
            ->add('ContactNumber', NumberType::class, ['attr'=>['class'=>'form-control','required'=>false]])
            ->add('Email', EmailType::class, ['attr'=>['class'=>'form-control','required'=>false]])
            ->add('FullNameOfMother', TextType::class, ['attr'=>['class'=>'form-control'],'required'=>false])
            ->add('Guardian2',ChoiceType::class,['attr'=>['class'=>''],'required'=>false,'choices'=>['Mother'=>'Mother'], 'expanded'=>true, 'multiple'=>true,'mapped'=>false])
            ->add('ContactNumberTwo',  NumberType::class, ['attr'=>['class'=>'form-control'],'required'=>false])
            ->add('EmailTwo', EmailType::class, ['attr'=>['class'=>'form-control'],'required'=>false]);
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
        return 'createSupplementaryStep2';
    }
}
