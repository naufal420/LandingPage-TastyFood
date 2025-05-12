<?php

namespace App\Filament\ContactResource\Widgets;

use Filament\Widgets\Widget;
use App\Models\Contact;

class MapWidget extends Widget
{
    protected static string $view = 'filament.widgets.map-widget';

    protected static bool $isLazy = false;

    protected int | string | array $columnSpan = 'full';

    public $latitude;
    public $longitude;
    public $zoom = 13;

    public function mount(){
        $contact = Contact::first();

        $this->latitude = $contact?->latitude ?? -6.9175;
        $this->longitude = $contact?->longitude ?? 107.6191;
    }

    protected function getViewData(): array
    {
        return [
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'zoom' => $this->zoom,
        ];
    }
}
