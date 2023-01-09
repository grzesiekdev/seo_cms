<?php

namespace App\Form;

use App\Entity\Settings;
use App\Repository\SettingsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ThemeSettingsType extends AbstractType
{
    private EntityManagerInterface $em;
    private SettingsRepository $settingsRepository;

    public function __construct(EntityManagerInterface $em, SettingsRepository $settingsRepository)
    {
        $this->em = $em;
        $this->settingsRepository = $settingsRepository;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $logo = $this->settingsRepository->findOneBy(['setting_name' => 'logo_path']);

        $builder
            ->add('logo', FileType::class, [
                'label' => 'Set logo image',
                'mapped' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Settings::class,
        ]);
    }
}
