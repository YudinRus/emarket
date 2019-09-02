<?php

namespace App\Form;

use App\Entity\Invoice;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'label' => 'Имя'
                ])
            ->add('lastName', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'label' => 'Фамилия'
            ])
            ->add('phoneNumber', \Symfony\Component\Form\Extension\Core\Type\TextType::class, [
                'label' => 'Телефон'
            ])
            ->add('product', EntityType::class, [
                'label' => 'Товар',
                'class' => Product::class,
                'choice_label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Invoice::class,
        ]);
    }
}
