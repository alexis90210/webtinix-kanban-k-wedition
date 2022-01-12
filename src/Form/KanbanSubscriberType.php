<?php

namespace App\Form;

use App\Entity\KanbanSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class KanbanSubscriberType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class,
                [
                    'label' => false,
                    'required' => true,
                    'constraints' => [],
                    'attr'=>['maxlength'=>30, 'minlength'=>8]
                ])
            ->add('Souscrire', SubmitType::class,[
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => KanbanSubscriber::class,
        ]);
    }
}
