<?php

namespace App\Form;

use App\Entity\Finance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FinanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('zipCode', TextType::class, [
            'label' => 'Code Postal',
        ]);
        $builder->add('city', ChoiceType::class, [
            'label' => 'Ville',
        ]);
        $builder->get('city')->resetViewTransformers();
        $builder->add('zone', TextType::class, [
            'disabled' => 'disabled',
        ]);
        $builder->add('acquisitionDate', DateType::class, [
            'widget' => 'single_text',
            'label' => 'Date d\'acquisition',
        ]);
        $builder->add('duration', ChoiceType::class, [
            'label' => 'Durée',
            'choices' => $options['data']->getDurations(),
            'multiple' => false,
            'expanded' => true,
        ]);
        $builder->add('surfaceArea', NumberType::class, [
            'label' => 'Surface en M²',
            'scale' => 2,
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('purchasePrice', MoneyType::class, [
            'label' => 'Prix d\'achat',
            'grouping' => true,
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('parkingAmount', MoneyType::class, [
            'label' => 'Montant du parking',
            'grouping' => true,
            'data' => 0,
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('notaryFees', MoneyType::class, [
            'label' => 'Frais de notaire',
            'grouping' => true,
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('otherFeesAcquisition', MoneyType::class, [
            'label' => 'Autres frais d\'acquisition',
            'grouping' => true,
            'data' => 0,
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);

        $builder->add('monthlyRent', MoneyType::class, [
            'label' => 'Loyer mensuel',
            'grouping' => true,
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('borrowedAmount', MoneyType::class, [
            'label' => "Montant emprunté",
            'grouping' => true,
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('inflow', MoneyType::class, [
            'label' => 'Apport',
            'grouping' => true,
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('fundingPeriod', IntegerType::class, [
            'label' => "Durée du financement",
            'help' => "Exprimée en mois.",
            'attr' => ['min' => 0,],
        ]);
        $builder->add('adi', NumberType::class, [
            'label' => "A.D.I.",
            'help' => "Assurance Décès Invalidité exprimée en euros",
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('managementFees', NumberType::class, [
            'label' => "Frais de gestion",
            'help' => "Exprimés en euros.",
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('rentalFee', NumberType::class, [
            'label' => "Honoraires de location",
            'help' => "Exprimés en euros.",
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('rentInsurance', NumberType::class, [
            'label' => "Assurance du loyer",
            'help' => "Exprimés en euros.",
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('coownershipCharges', NumberType::class, [
            'label' => "Charges de copropriété",
            'help' => "Exprimés en euros.",
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->add('propertyTax', MoneyType::class, [
            'label' => "Taxe foncière",
            'invalid_message' => 'Ce champ ne doit contenir que des chiffres' ,
        ]);
        $builder->getForm();
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Finance::class,
        ]);
    }
}
