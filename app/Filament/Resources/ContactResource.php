<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Filament\Widgets\MapWidget;
use App\Models\Contact;
use App\Services\LocationService;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')->email()
                    ->hintIcon('heroicon-o-envelope')
                    ->placeholder('enter your email address')
                    ->required(),
                TextInput::make('phone')->tel()->required()
                    ->hintIcon('heroicon-o-phone'),
                TextInput::make('location')
                    ->required()
                    ->hint('Masukan alamat lengkap atau tempat')
                    ->hintIcon('heroicon-o-map-pin')
                    ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $nominatim = app(LocationService::class);
                            $coordinates = $nominatim->getCoordinates($state);

                            $set('latitude', $coordinates['latitude']);
                            $set('longitude', $coordinates['longitude']);
                        }
                    }),
                Hidden::make('latitude'),
                Hidden::make('longitude'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email')->label('Email'),
                TextColumn::make('phone')->label('Telepon'),
                TextColumn::make('location')->label('Location'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->color('warning'),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListContacts::route('/'),
            // 'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
    public static function canCreate(): bool
    {
        return !Contact::exists();
    }
}
