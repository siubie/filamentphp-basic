<?php

namespace App\Filament\Resources\PortfolioCategoryResource\Pages;

use App\Filament\Resources\PortfolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioCategory extends EditRecord
{
    protected static string $resource = PortfolioCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    //customize redirect
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
