<?php

namespace App\Observers;

use App\Models\ContactMessage;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;

class ContactMessageObserver
{
    /**
     * Handle the ContactMessage "created" event.
     */
    public function created(ContactMessage $contactMessage): void
    {
        Notification::make()
            ->title('Pesan baru dari: ' . $contactMessage->name)
            ->success()
            ->body("$contactMessage->email <br>
            time: $contactMessage->created_at")
            ->actions([
                Action::make('view')
                    ->button()
                    ->markAsRead()
                    ->url(route('filament.admin.resources.contact-messages.index')) // Arahkan ke tabel
            ])
            ->send();
    }

    /**
     * Handle the ContactMessage "updated" event.
     */
    public function updated(ContactMessage $contactMessage): void
    {
        //
    }

    /**
     * Handle the ContactMessage "deleted" event.
     */
    public function deleted(ContactMessage $contactMessage): void
    {
        //
    }

    /**
     * Handle the ContactMessage "restored" event.
     */
    public function restored(ContactMessage $contactMessage): void
    {
        //
    }

    /**
     * Handle the ContactMessage "force deleted" event.
     */
    public function forceDeleted(ContactMessage $contactMessage): void
    {
        //
    }
}
