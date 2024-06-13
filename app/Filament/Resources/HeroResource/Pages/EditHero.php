<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use App\Models\Hero;
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
    //redirect to index page after edit
    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $record->update($data);
        //update other hero records to inactive if new hero is active
        if ($record->is_active) {
            Hero::where('id', '!=', $record->id)->update(['is_active' => 0]);
        }
        return $record;
    }
}
