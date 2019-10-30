<?php

namespace App\Form;

use App\Entity\Supplementary;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSupplementaryStep8FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('PhotoConsent', ChoiceType::class, ['attr'=>['class'=>'radio_concent'],'label_attr'=>['class'=>'radio-inline'],'label'=>'I consent to photographs / filming being taken of my child if necessary','choices'=>['Yes'=>'Yes','No'=>'No'],'expanded' => true, 'required'=>true])
            ->add('FullNameOfParentGuardian', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('Signature', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('Date', DateType::class,['attr'=>['class'=>'']])
            ->add('hearedAboutAlghazali', TextType::class,['attr'=>['class'=>'form-control']])
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
        return 'createSupplementaryStep8';
    }
}
