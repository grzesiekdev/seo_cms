<?php

namespace App\Service;

use App\Repository\MenuPagesRepository;
use App\Repository\PageRepository;

class Slugify
{
    private PageRepository $pageRepository;
    private MenuPagesRepository $menuPagesRepository;
    public function __construct(PageRepository $pageRepository, MenuPagesRepository $menuPagesRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->menuPagesRepository = $menuPagesRepository;
    }
    public function slugify(string $text): string
    {
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, '-');
        $text = preg_replace('~-+~', '-', $text);
        $text = strtolower($text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    public function getSlug(\Symfony\Component\Form\FormInterface $form, &$page): void
    {
        if (empty($form['slug']->getData()) || !empty($form['parent_id'])) {
            $prev_slug = $page?->getSlug();
            $slug = $this->slugify($form['name']->getData());
            if (!empty($form['parent_id'] && null !== $form['parent_id']->getData())) {
                $parent = $this->pageRepository->findOneBy(['id' => $form->get('parent_id')->getData()]);
                $parent_slug = $parent->getSlug();
                $whole_address = $parent_slug.'/'.$slug;
                $page->setAlias($whole_address);
            } else {
                $page->setAlias($slug);
            }
            // check if there wasn't previous slug, AND current slug is not the same as previous, THEN check if slug is unique
            if ((null !== $prev_slug && '' !== $prev_slug && $slug != $prev_slug) && $this->pageRepository->findBy(['Slug' => $slug])) {
                $slug .= '-'.uniqid();
            }
            $page->setSlug($slug);
        }
    }
}
