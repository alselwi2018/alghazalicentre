<?php

namespace App\Controller;

use App\Entity\Users;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Annotation\Route;


class RegisterController extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $option)
    {
        $builder->add('firstname', TextType::class,['attr'=>['class'=>'form-control']])
            ->add('lastname',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('email',EmailType::class,['attr'=>['class'=>'form-control']])
            ->add('password',RepeatedType::class,array(
                'type' => PasswordType::class,
                'first_options' =>array('label'=>'Password'),
                'second_options'=>array('label'=>'Repeat Password'),
            ))
            ->add('type',TextType::class,['attr'=>['class'=>'form-control']])
            ->add('profession',TextType::class,['attr'=>['class'=>'form-control']]);

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' =>Users::class,
        ));
    }
}
