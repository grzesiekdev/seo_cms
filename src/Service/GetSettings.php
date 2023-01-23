<?php

namespace App\Service;

use App\Repository\SettingsRepository;

class GetSettings
{
    private SettingsRepository $settingsRepository;

    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->settingsRepository = $settingsRepository;
    }

    public function getSettings(): array
    {
        $logo = $this->settingsRepository->findOneBy(['setting_name' => 'logo_path']);

        return [
            'logo' => $logo->getSettingValue(),
        ];
    }
}
