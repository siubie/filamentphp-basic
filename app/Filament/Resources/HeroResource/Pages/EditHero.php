<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditHero extends EditRecord
{
    protected static string $resource = HeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    //redirect to index after crate
    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    //override handleRecordUpdate
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record = parent::handleRecordUpdate($record, $data);
        //check if $record is active
        if ($record->is_active) {
            //then set other hero inactive
            HeroResource::getModel()::where('id', '!=', $record->id)->update(['is_active' => false]);
        }
        return $record;
    }
}
