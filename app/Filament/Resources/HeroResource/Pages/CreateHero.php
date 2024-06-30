<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateHero extends CreateRecord
{
    protected static string $resource = HeroResource::class;

    //redirect to index after crate
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    //override handle record creation
    protected function handleRecordCreation(array $data): Model
    {
        //handle creation following parent
        $hero = parent::handleRecordCreation($data);
        //check if $hero is active
        if ($hero->is_active) {
            //then set other hero inactive
            HeroResource::getModel()::where('id', '!=', $hero->id)->update(['is_active' => false]);
        }
        return $hero;
    }
}
