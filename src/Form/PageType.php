<?php

namespace App\Form;

use App\Entity\Page;
use App\Repository\PageRepository;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageType extends AbstractType
{
    private PageRepository $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $pages = $this->pageRepository->findAll();
        $page_ids = [];

        foreach ($pages as $page) {
            if ($page !== $options['data']) {
                $page_ids[] = $page->getId();
            }
        }

        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'placeholder' => 'SEO-friendly title',
                ],
            ])
            ->add('name', TextType::class, [
                'attr' => [
                    'placeholder' => 'Name',
                ],
            ])
            ->add('description', TextType::class, [
                'attr' => [
                    'placeholder' => 'SEO-friendly description',
                ],
            ])
            ->add('slug', TextType::class, [
                'attr' => [
                    'placeholder' => 'Slug',
                ],
                'required' => false,
                'empty_data' => '',
            ])
            ->add('is_home', CheckboxType::class, [
                'required' => false,
                'label' => 'Is home?',
            ])
            ->add('robots_settings', ChoiceType::class, [
                'choices' => [
                    'index, follow' => 'index, follow',
                    'index, nofollow' => 'index, nofollow',
                    'noindex, follow' => 'noindex, follow',
                    'noindex, nofollow' => 'noindex, nofollow',
                ],
            ])
            ->add('parent_id', ChoiceType::class, [
                'choices' => [
                    'Pages' => $page_ids,
                ],
                'choice_label' => function (?int $id) use ($options) {
                    $page = $this->pageRepository->findOneBy(['id' => $id]);
                    if ($page !== $options['data']) {
                        return $page ? $page->getName().' - '.$_SERVER['HTTP_HOST'].'/'.$page->getSlug() : '';
                    }
                },
                'multiple' => false,
                'label' => 'Parent page',
                'placeholder' => 'None',
                'required' => false,
            ])
            ->add('content', CKEditorType::class, [
                'attr' => [
                    'placeholder' => 'Page content',
                ],
                'config' => [
                    'uiColor' => '#ffffff',
                    'resize_enabled' => false,
                    'height' => '500px',
                ],
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
