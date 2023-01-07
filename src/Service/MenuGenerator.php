<?php

namespace App\Service;


use App\Repository\MenuPagesRepository;

class MenuGenerator
{
    private $menuPagesRepository;

    public function __construct(MenuPagesRepository $menuPagesRepository)
    {
        $this->menuPagesRepository = $menuPagesRepository;
    }
    public function getMenu(): array
    {
        $menu = $this->menuPagesRepository->findAll();
        usort($menu, function ($first, $second) {
            return $first->getPageOrder() > $second->getPageOrder();
        });

        return $menu;
    }
}