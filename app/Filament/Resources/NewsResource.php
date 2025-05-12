<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title berita')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $state, Forms\Set $set) =>
                    $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->label('url')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('news')
                    ->preserveFilenames()
                    ->columnSpanFull(),
                RichEditor::make('description')
                    ->label('Description news')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_published')
                    ->label('Published')
                    ->default(false)
                    ->live()
                    ->columnSpanFull()
                    ->afterStateUpdated(function ($state, Forms\Set $set) {
                        if ($state) {
                            $set('published_at', now()->format('Y-m-d H:i:s'));
                        } else {
                            $set('published_at', null);
                        }
                    }),
                DateTimePicker::make('published_at')
                    ->label('Publish Date')
                    ->format('Y-m-d H:i:s')
                    ->displayFormat('Y-m-d H:i:s')
                    ->hidden(fn(Forms\Get $get): bool => !$get('is_published'))
                    ->required(fn(Forms\Get $get): bool => $get('is_published'))
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('image')
                    ->square()
                    ->sortable()
                    ->searchable()
                    ->size(70),
                TextColumn::make('description')
                    ->label('Description berita')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn($state) => strip_tags($state))
                    ->limit(50)
                    ->wrap(),
                IconColumn::make('is_published')
                    ->label('status')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('date created')
                    ->dateTime()
                    ->sortable()
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_published')
                    ->options([
                        '1' => 'Published',
                        '0' => 'No Published',
                    ]),
                Tables\Filters\Filter::make('published_at')
                    ->form([
                        Forms\Components\DatePicker::make('date_created_start'),
                        Forms\Components\DatePicker::make('date_created_end'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['date_created_start'],
                                fn(Builder $query, $date): Builder => $query->whereDate('published_at', '>=', $date),
                            )
                            ->when(
                                $data['date_created_end'],
                                fn(Builder $query, $date): Builder => $query->whereDate('published_at', '<=', $date),
                            );
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->color('warning'),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('View description')
                    ->icon('heroicon-o-eye')
                    ->color('info')
                    ->modalSubmitAction(false)
                    ->modalCloseButton()
                    ->modalContent(function (News $record): View {
                        return view('filament.actions.view-description', [
                            'record' => $record
                        ]);
                    })
                    ->modalWidth('4xl'),
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
            'index' => Pages\ListNews::route('/'),
            // 'create' => Pages\CreateNews::route('/create'),
            // 'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
