<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialsResource\Pages;
use App\Filament\Resources\TestimonialsResource\RelationManagers;
use App\Models\testimonials;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class TestimonialsResource extends Resource
{
    protected static ?string $model = Testimonials::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->url(fn($record) => 'https://mail.google.com/mail/?view=cm&fs=1&to=' . $record->email)
                    ->color('primary')
                    ->openUrlInNewTab()
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->circular()
                    ->size(70),
                TextColumn::make('rating')
                    ->label('Rating')
                    ->formatStateUsing(function ($state) {
                        return str_repeat('⭐', $state); // tampilkan bintang sebanyak nilai rating
                    })
                    ->sortable(),
                TextColumn::make('comment')
                    ->label('Comentar')
                    ->sortable()
                    ->searchable()
                    ->limit(40)
                    ->wrap()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('viewComment')
                    ->label('Lihat Komentar')
                    ->icon('heroicon-o-eye')
                    ->color('warning')
                    ->modalHeading('Komentar Lengkap')
                    ->modalDescription(fn($record) => 'Dari: ' . $record->name)
                    ->modalContent(fn($record) => new HtmlString(nl2br(e($record->comment))))
                    ->modalSubmitAction(false)
                    ->modalCloseButton(),
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
            'index' => Pages\ListTestimonials::route('/'),
            // 'create' => Pages\CreateTestimonials::route('/create'),
            // 'edit' => Pages\EditTestimonials::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
