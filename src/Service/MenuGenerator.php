<?php

namespace App\Service;

use App\Repository\MenuPagesRepository;
use App\Repository\PageRepository;

class MenuGenerator
{
    private MenuPagesRepository $menuPagesRepository;
    private PageRepository $page_repository;

    public function __construct(MenuPagesRepository $menuPagesRepository, PageRepository $page_repository)
    {
        $this->menuPagesRepository = $menuPagesRepository;
        $this->page_repository = $page_repository;
    }

    public function getMenu(): array
    {
        $menu = $this->menuPagesRepository->findAll();
        usort($menu, function ($first, $second) {
            return $first->getPageOrder() > $second->getPageOrder();
        });
        $pages = [];
        foreach ($menu as $item) {
            $pages[] = $this->page_repository->findOneBy(['id' => $item->getPageId()]);
        }
        return $pages;
    }
}
