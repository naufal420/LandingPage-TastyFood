<?php

namespace App\Filament\Widgets;

use App\Models\ContactMessage;
use App\Models\Gallery;
use App\Models\News;
use App\Models\testimonials;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Carbon;
use Filament\Forms;
use Livewire\Attributes\On;

class widgetsTotal extends BaseWidget
{
    protected static ?string $pollingInterval = null;

    // Add these properties for the date filtering
    public ?string $startDate = null;
    public ?string $endDate = null;

    public function mount(): void
    {
        // Ambil tanggal pertama kali data dibuat dari tabel yang relevan
        $earliestGalleryDate = Gallery::oldest('created_at')->value('created_at');
        $earliestContactMessageDate = ContactMessage::oldest('created_at')->value('created_at');
        $earliestNewsDate = News::oldest('created_at')->value('created_at');
        $earliestTestimonialsDate = testimonials::oldest('created_at')->value('created_at');
        // Temukan tanggal paling awal di antara semua tabel
        $earliestDate = collect([$earliestGalleryDate, $earliestContactMessageDate, $earliestNewsDate, $earliestTestimonialsDate])
            ->filter()
            ->min();

        // Set startDate ke tanggal paling awal, atau default ke 1 bulan yang lalu jika tidak ada data
        $this->startDate = $earliestDate ? Carbon::parse($earliestDate)->format('Y-m-d') : now()->subMonth()->format('Y-m-d');

        // Set endDate ke tanggal sekarang
        $this->endDate = now()->format('Y-m-d');
    }

    // Override the default view to include our custom date filters
    protected static string $view = 'widgets.stats-overview-with-filters';

    // Add a filter method to be called when the filter button is clicked
    public function filter(): void
    {
        $this->dispatch('filteredStatsOverview');
    }

    #[On('filteredStatsOverview')]
    public function updateStats(): void
    {
        // This method will be called when the stats need to be updated
        // The widget will re-render automatically
    }

    protected function getStats(): array
    {
        $startDate = $this->startDate ? Carbon::parse($this->startDate) : null;
        $endDate = $this->endDate ? Carbon::parse($this->endDate) : null;

        return [
            Stat::make('Gallery', $this->getGalleryCount($startDate, $endDate))
                ->description('Total Gambar yang diunggah')
                ->icon('heroicon-o-photo')
                ->color('success')
                ->url(route('filament.admin.resources.galleries.index')),

            Stat::make('Contact Message', $this->getContactMessageCount($startDate, $endDate))
                ->description('Total message tersimpan')
                ->icon('heroicon-o-chat-bubble-left')
                ->color('success')
                ->url(route('filament.admin.resources.contact-messages.index')),

            Stat::make('News', $this->getNewsCount($startDate, $endDate))
                ->description('Total berita yang dibuat / diterbitkan')
                ->icon('heroicon-o-newspaper')
                ->color('success')
                ->url(route('filament.admin.resources.news.index')),
            Stat::make('testimonials', $this->getTestimonialsCount($startDate, $endDate))
                ->description('Total ulasan tersimpan')
                ->icon('heroicon-o-chat-bubble-left')
                ->color('success')
                ->url(route('filament.admin.resources.testimonials.index')),
        ];
    }

    // Helper methods to get filtered counts
    private function getGalleryCount(?Carbon $startDate, ?Carbon $endDate): int
    {
        $query = Gallery::query();

        if ($startDate && $endDate) {
            $query->whereBetween('created_at', [$startDate->startOfDay(), $endDate->endOfDay()]);
        }

        return $query->count();
    }

    private function getContactMessageCount(?Carbon $startDate, ?Carbon $endDate): int
    {
        $query = ContactMessage::query();

        if ($startDate && $endDate) {
            $query->whereBetween('created_at', [$startDate->startOfDay(), $endDate->endOfDay()]);
        }

        return $query->count();
    }

    private function getNewsCount(?Carbon $startDate, ?Carbon $endDate): int
    {
        $query = News::query();

        if ($startDate && $endDate) {
            $query->whereBetween('created_at', [$startDate->startOfDay(), $endDate->endOfDay()]);
        }

        return $query->count();
    }

    private function getTestimonialsCount(?Carbon $startDate, ?Carbon $endDate): int
    {
        $query = testimonials::query();

        if ($startDate && $endDate) {
            $query->whereBetween('created_at', [$startDate->startOfDay(), $endDate->endOfDay()]);
        }

        return $query->count();
    }

    // Helper to create a date range description
    private function getDateRangeDescription(): string
    {
        if (!$this->startDate || !$this->endDate) {
            return '';
        }

        return ' (' . Carbon::parse($this->startDate)->format('d M Y') . ' - ' .
            Carbon::parse($this->endDate)->format('d M Y') . ')';
    }
}
