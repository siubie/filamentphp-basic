<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Filament\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //file upload avatar
                Forms\Components\FileUpload::make('avatar')
                    ->image()
                    ->avatar()
                    ->rules('image', 'max:1024')
                    ->required(),
                //text name
                Forms\Components\TextInput::make('name')
                    ->label('Name')
                    ->rules('required', 'max:255'),
                //text position
                Forms\Components\TextInput::make('position')
                    ->label('Position')
                    ->rules('required', 'max:255'),
                //text twitter
                Forms\Components\TextInput::make('twitter')
                    ->label('Twitter')
                    ->rules('nullable', 'url', 'max:255'),
                //text facebook
                Forms\Components\TextInput::make('facebook')
                    ->label('Facebook')
                    ->rules('nullable', 'url', 'max:255'),
                //text instagram
                Forms\Components\TextInput::make('instagram')
                    ->label('Instagram')
                    ->rules('nullable', 'url', 'max:255'),
                //text linkedin
                Forms\Components\TextInput::make('linkedin')
                    ->label('Linkedin')
                    ->rules('nullable', 'url', 'max:255'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar'),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('position')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
