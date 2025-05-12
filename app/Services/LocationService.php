<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LocationService
{
  public function getCoordinates(string $location): array
  {
    // Default coordinates (Bandung)
    $defaultCoordinates = [
      'latitude' => -6.9175,
      'longitude' => 107.6191,
    ];

    try {
      // Add user-agent as required by Nominatim usage policy
      $response = Http::withHeaders([
        'User-Agent' => 'Laravel/ContactApp'
      ])->get('https://nominatim.openstreetmap.org/search', [
        'q' => $location,
        'format' => 'json',
        'limit' => 1,
      ]);

      // Check if response is successful and has data
      if ($response->successful() && !empty($response->json())) {
        $data = $response->json();

        // Check if we have results
        if (isset($data[0]['lat']) && isset($data[0]['lon'])) {
          return [
            'latitude' => (float) $data[0]['lat'],
            'longitude' => (float) $data[0]['lon'],
          ];
        }
      }

      // Return default coordinates if no results found
      return $defaultCoordinates;
    } catch (\Exception $e) {
      // Log the error if needed
      Log::error('Nominatim Geocoding Error: ' . $e->getMessage());

      // Return default coordinates on any error
      return $defaultCoordinates;
    }
  }
}
