<style>
  /* Tambahkan background untuk semua teks yang bold */
  * {
    color: white !important;
  }

  .prose strong,
  .prose b {
    color: black !important;
    background-color: whitesmoke;
    /* Warna transparan */
    padding: 2px 4px;
    /* Padding biar lebih jelas */
    border-radius: 4px;
    /* Biar sudutnya tidak tajam */
  }
</style>
<div class="p-6">
  <h2 class="text-lg text-center font-bold mb-4 bg-blue-500 text-white p-2 rounded"> {{ $record->title }}</h2>
  <h4 class="text-lg font-bold mb-4">{{ $record->created_at }}</h4>
  <span>📝</span>
  <div class="prose max-w-none text-white">
    {!! $record->description !!}
  </div>
</div>
