<div wire:ignore>
  <div class="card shadow-sm border-0">
    <div class="card-body">
      <h4 class="card-title mb-2 text-center text-primary fw-bold" style="font-weight: 700; color: #0d6efd ">📩 Detail
        Pesan
      </h4>
      <hr>

      <div class="mt-3">
        <strong style="color: #0d6efd ">📌 Subject:</strong>
        <p class="text-muted">{{ $record->subject }}</p>
      </div>

      <div class="mt-2">
        <strong style=" color: #198754">👤 Name:</strong>
        <p class="text-muted">{{ $record->name }}</p>
      </div>

      <div class="mt-2">
        <strong style="color: #ffc107 ">📧 Email:</strong>
        <p class="text-muted">{{ $record->email }}</p>
      </div>

      <div class="mt-2">
        <strong style="color: #dc3545">📝 Message:</strong>
        <div class="mt-3 rounded-lg alert alert-light border text-secondary p-3">
          {{ $record->message }}
        </div>
      </div>
    </div>
  </div>
</div>