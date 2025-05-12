<x-filament::widget class="filament-widgets-stats-overview-widget">
  <x-filament::section class="mb-5">
    <div class="flex flex-col gap-4">
      <!-- Add custom date filter controls here -->
      <div class="flex items-end justify-between gap-4 p-2">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 flex-1">
          <div>
            <label for="startDate" class="block text-white font-medium text-gray-700 dark:text-gray-300">Start date</label>
            <input wire:model="startDate" type="date" id="startDate"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm">
          </div>
          <div>
            <label for="endDate" class="block text-white font-medium text-gray-700 dark:text-gray-300">End date</label>
            <input wire:model="endDate" type="date" id="endDate"
              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white sm:text-sm">
          </div>
        </div>
        <div>
          <button wire:click="filter" type="button"
            class="inline-flex align-items-center justify-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600">
            Filter
          </button>
        </div>
      </div>
    </div>
  </x-filament::section>
    <!-- Stats content -->
    <div @class([ 'grid gap-4' , 'sm:grid-cols-3'=> count($this->getCachedStats()) === 4,
      'sm:grid-cols-2' => count($this->getCachedStats()) === 2,
      'sm:grid-cols-1' => count($this->getCachedStats()) === 1,
      ])>
      @foreach ($this->getCachedStats() as $stat)
      {{ $stat }}
      @endforeach
    </div>
</x-filament::widget>