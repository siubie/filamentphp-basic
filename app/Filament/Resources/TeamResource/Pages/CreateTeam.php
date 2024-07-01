<?php

namespace App\Filament\Resources\TeamResource\Pages;

use App\Filament\Resources\TeamResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTeam extends CreateRecord
{
    protected static string $resource = TeamResource::class;

    //redirect to index after crate
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
