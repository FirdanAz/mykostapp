@php
    $user = auth()->user();
@endphp

<section>
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required
                autocomplete="name">
            <x-input-error class="mt-1" :messages="$errors->get('name')" />
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required
                autocomplete="username">
            <x-input-error class="mt-1" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="small text-muted mb-1">Email Anda belum terverifikasi.</p>
                    <button form="send-verification" type="submit" class="btn btn-link p-0 small text-decoration-none"
                        style="color: var(--mk-primary);">
                        Klik di sini untuk kirim ulang verifikasi.
                    </button>
                    @if (session('status') === 'verification-link-sent')
                        <p class="small text-success mt-1 mb-0">
                            <i class="bi bi-check-circle-fill me-1"></i>Link verifikasi baru telah dikirim.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg me-1"></i>Simpan
            </button>
            @if (session('status') === 'profile-updated')
                <span class="small text-success d-flex align-items-center fade show">
                    <i class="bi bi-check-circle-fill me-1"></i> Tersimpan
                </span>
            @endif
        </div>
    </form>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-none">
        @csrf
    </form>
</section>