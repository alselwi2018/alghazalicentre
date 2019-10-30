<?php

namespace App\Form;

use App\Entity\Supplementary;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CreateSupplementaryStep4FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('Suffer',ChoiceType::class,['attr'=>['class'=>''],'label_attr'=>['class'=>'radio-inline'],'choices'=>['Yes'=>'Yes','No'=>'No'],'expanded'=>true])
            ->add('Medication', ChoiceType::class,['attr'=>['class'=>''],'label_attr'=>['class'=>'radio-inline'],'expanded'=>true,'choices'=>['Yes'=>'Yes','No'=>'No'],'label'=>'Any other important medical information'])
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
        return 'createSupplementaryStep4';
    }
}
