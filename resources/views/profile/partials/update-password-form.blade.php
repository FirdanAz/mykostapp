<section>
    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="mb-3">
            <label class="form-label fw-semibold">Password Saat Ini</label>
            <input type="password" name="current_password" class="form-control" autocomplete="current-password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-1" />
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Password Baru</label>
            <input type="password" name="password" class="form-control" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-1" />
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-1" />
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-check-lg me-1"></i>Simpan
            </button>
            @if (session('status') === 'password-updated')
                <span class="small text-success d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-1"></i> Tersimpan
                </span>
            @endif
        </div>
    </form>
</section>