<?php

namespace App\Filament\Resources\PortfolioCategoryResource\Pages;

use App\Filament\Resources\PortfolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePortfolioCategory extends CreateRecord
{
    protected static string $resource = PortfolioCategoryResource::class;
    //customize redirect
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
