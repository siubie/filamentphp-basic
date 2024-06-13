<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use App\Models\Hero;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHero extends CreateRecord
{
    protected static string $resource = HeroResource::class;

    //customize redirect after create
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    //customize record creation
    protected function handleRecordCreation(array $data): Hero
    {
        $hero =  static::getModel()::create($data);
        // update other hero records to inactive if new hero is active
        if ($hero->is_active) {
            Hero::where('id', '!=', $hero->id)->update(['is_active' => 0]);
        }
        return $hero;
    }
}
