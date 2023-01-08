<?php

namespace App\Form;

use App\Entity\Page;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class PageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => array(
                    'placeholder' => 'SEO-friendly title',
                )
            ])
            ->add('name', TextType::class, [
                'attr' => array(
                    'placeholder' => 'Name',
                )
            ])
            ->add('description', TextType::class, [
                'attr' => array(
                    'placeholder' => 'SEO-friendly description',
                )
            ])
            ->add('slug', TextType::class, [
                'attr' => array(
                    'placeholder' => 'Slug',
                ),
                'required' => false,
                'empty_data' => '',
            ])
            ->add('is_home', CheckboxType::class,[
                'required' => false,
                'label' => 'Is home?',
            ])
            ->add('content', CKEditorType::class, [
                'attr' => array(
                    'placeholder' => 'Page content',
                ),
                'config' => array(
                    'uiColor' => '#ffffff',
                    'resize_enabled' => false,
                    'height' => '500px'
                ),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Page::class,
        ]);
    }
}
