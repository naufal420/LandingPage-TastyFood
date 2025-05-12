<?php

namespace App\Filament\Resources\ContactMessageResource\Pages;

use App\Filament\Resources\ContactMessageResource;
use App\Models\ContactMessage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactMessages extends ListRecords
{
    protected static string $resource = ContactMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        // Panggil parent mount terlebih dahulu
        parent::mount();

        // Tandai semua pesan sebagai telah dibaca
        ContactMessage::where('is_read', false)->update(['is_read' => true]);

        // Refresh halaman untuk memperbarui badge
        $this->dispatch('refresh-navigation-badge');
    }
}
