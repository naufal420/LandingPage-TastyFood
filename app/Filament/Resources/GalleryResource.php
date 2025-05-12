<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Select::make('type')
                    ->label('Type Gallery')
                    ->options([
                        'gallery' => 'Gallery',
                        'gallery-slider' => 'Gallery Slider'
                    ])
                    ->default('gallery')
                    ->required(),
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->label('Image')
                    ->disk('public')
                    ->preserveFilenames()
                    ->directory('gallery-images'),
                DateTimePicker::make('uploaded_at')
                    ->label('Tanggal Upload')
                    ->default(now())
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->square()
                    ->disk('public')
                    ->label('Image')
                    ->size(70),
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('uploaded_at')
                    ->label('Tanggal Diunggah')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('type')
                    ->label('type gallery')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->color('warning'),
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
            'index' => Pages\ListGalleries::route('/'),
            // 'create' => Pages\CreateGallery::route('/create'),
            // 'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }

    public static function afterDelete($record): void
    {
        if ($record->image) {
            Storage::delete('public/gallery-images/' . $record->image);
        }
    }
}
