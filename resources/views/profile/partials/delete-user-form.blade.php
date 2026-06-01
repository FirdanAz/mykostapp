<section>
    <p class="text-muted small mb-3">
        Setelah akun dihapus, semua data akan hilang permanen. Harap download data penting sebelum menghapus akun.
    </p>

    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
        <i class="bi bi-trash3 me-1"></i>Hapus Akun
    </button>

    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow" style="border-radius: 1rem;">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold text-danger">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>Konfirmasi Hapus Akun
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        <p class="small text-muted mb-3">Masukkan password Anda untuk konfirmasi penghapusan akun.</p>
                        <input type="password" name="password" class="form-control" placeholder="Password Anda"
                            required>
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-1" />
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash3 me-1"></i>Hapus Permanen
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>