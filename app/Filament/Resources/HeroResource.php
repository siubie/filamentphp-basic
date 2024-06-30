<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeroResource\Pages;
use App\Filament\Resources\HeroResource\RelationManagers;
use App\Models\Hero;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroResource extends Resource
{
    protected static ?string $model = Hero::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //add field for image
                FileUpload::make('image'),
                //add field for title
                TextInput::make('title')
                    ->required()
                    ->placeholder('Enter title'),
                //add field for subtitle
                TextInput::make('subtitle')
                    ->required()
                    ->placeholder('Enter subtitle'),
                //add field for link 1
                TextInput::make('link1')
                    ->required()
                    ->placeholder('Enter link 1'),
                //add field for link 2
                TextInput::make('link2')
                    ->required()
                    ->placeholder('Enter link 2'),
                //add field for is active
                Toggle::make('is_active')
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //add image column
                ImageColumn::make('image'),
                //add title column
                TextColumn::make('title')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                //add subtitle column
                TextColumn::make('subtitle')
                    ->wrap()
                    ->sortable()
                    ->searchable(),
                //add is active column
                ToggleColumn::make('is_active')
                    ->sortable()
                    ->beforeStateUpdated(
                        //set current data to active and the other to inactive
                        function (Hero $hero, $state) {
                            //set current hero to active and other hero data to inactive
                            Hero::where('id', '!=', $hero->id)->update(['is_active' => 0]);
                        }
                    )
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                DeleteAction::make()
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
