<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //add file upload for image
                Forms\Components\FileUpload::make('image')
                    ->image(),
                //add title field
                Forms\Components\TextInput::make('title')
                    ->required(),
                //add subtitle field
                Forms\Components\TextInput::make('subtitle')
                    ->required(),
                //add link one field
                Forms\Components\TextInput::make('link_one')
                    ->required(),
                //add link two field
                Forms\Components\TextInput::make('link_two')
                    ->required(),
                //add is active toggle
                Forms\Components\Toggle::make('is_active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //add column for hero
                ImageColumn::make('image')
                    ->circular(),
                TextColumn::make('title')
                    ->searchable(),
                //add is active as toggle collumn
                Tables\Columns\ToggleColumn::make('is_active'),
            ])
            ->filters([
                //add title as filter
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                //add delete action
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHeroes::route('/'),
            'create' => Pages\CreateHero::route('/create'),
            'edit' => Pages\EditHero::route('/{record}/edit'),
        ];
    }
}