<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Filament\Resources\ContactMessageResource\RelationManagers;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationLabel = 'Contacts Message';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left';

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
                TextColumn::make('subject')
                    ->label('Subject')
                    ->sortable()
                    ->searchable()
                    ->wrap(),
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
                TextColumn::make('created_at')
                    ->label('Date message')
                    ->dateTime('d M Y, H:i'),
                TextColumn::make('message')
                    ->label('Message')
                    ->sortable()
                    ->searchable()
                    ->limit(100)
                    ->wrap()
            ])
            ->filters([])
            ->actions([
                Action::make('View message details')
                    ->icon('heroicon-o-eye')
                    ->color('warning')
                    ->modalHeading(false)
                    ->modalSubmitAction(false)
                    ->modalCloseButton()
                    ->modalContent(fn($record) => view('admin.contact-message-detail', [
                        'record' => $record
                    ])),
                Tables\Actions\DeleteAction::make()
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListContactMessages::route('/'),
            // 'create' => Pages\CreateContactMessage::route('/create'),
            // 'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {
        return ContactMessage::where('is_read', false)->count() ?: null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'danger';
    }
}
