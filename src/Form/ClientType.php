<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('client', null, [
                'label' => "Client :",
            ])
            ->add('adresse', null, [
                'label' => "Adresse :",
            ])
            ->add('code_postal', null, [
                'label' => "Code Postal :",
            ])
            ->add('ville', null, [
                'label' => "Ville :",
            ])
            ->add('telephone', null, [
                'label' => "Téléphone :",
            ])
            ->add('civilite', null, [
                'label' => "Civilité :",
            ])
            ->add('prenom', null, [
                'label' => "Prénom :",
            ])
            ->add('nom', null, [
                'label' => "Nom :",
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
