<?php

namespace App\Form;

use App\Entity\Menu;
use App\Entity\MenuPages;
use App\Entity\Page;
use App\Repository\PageRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddToMenuType extends AbstractType
{
    private $pageRepository;

    public function __construct(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $pages = $this->pageRepository->findAll();

        $builder
            ->add('Page', ChoiceType::class, [
                'choices' => $pages,
                'choice_label' => function (?Page $page) {
                    return $page ? $page->getId() . ' ' . $page->getName() . ' - ' . $_SERVER['HTTP_HOST'] . '/' . $page->getSlug() . ' | ' . $page->getCreationDate()->format('d-m-Y h:m:s') : '';
                },
                'label' => false,
                'attr' => [
                    // due to hidden overflow and margins in select, I'm adding 2 to size, for showing all the options
                    'size' => count($pages)+2,
                ],
                'multiple' => true,
            ])
            ->add('Submit', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success mt-2',
                ],
                'label' => 'Add pages to menu'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }
}
