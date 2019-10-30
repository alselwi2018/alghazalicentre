<?php

namespace App\Form;

use App\Entity\Supplementary;
use Craue\FormFlowBundle\Form\FormFlow;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SupplementartDetailsType extends FormFlow
{

    /**
     *
     * {@inheritDoc}
     */
    public function loadStepsConfig()
    {
        return [
            [ 'label' => 'Personal Details',
                'form_type'=> CreateSupplementaryStep1FormType::class,
                ],
            [
                'label' => 'Parent / Guardian details',
                'form_type' => CreateSupplementaryStep2FormType::class,
            ],
            [
                'label' => 'Language Spoken',
                'form_type' => CreateSupplementaryStep3FormType::class,
            ],
            [
                'label' => 'Medical Information',
                'form_type' => CreateSupplementaryStep4FormType::class,
            ],
            [
                'label' => 'Learning Information',
                'form_type' => CreateSupplementaryStep5FormType::class,
            ],
            [
                'label' => 'Emergency Contact',
                'form_type' => CreateSupplementaryStep6FormType::class,
            ],
            [
                'label' => 'Education',
                'form_type' => CreateSupplementaryStep7FormType::class,
            ],
            [
                'label' => 'Declaration',
                'form_type' => CreateSupplementaryStep8FormType::class,
            ],
            [
                'label' => 'confirmation',
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getFormOptions($step, array $options = []) {
        $options = parent::getFormOptions($step, $options);

        return $options;
    }

}
