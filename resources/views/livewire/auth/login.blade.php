<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <h1 class="auth-title">Selamat Datang</h1>
                <form wire:submit.prevent="login">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text"
                            class="form-control form-control-xl @error('username') border-danger @enderror"
                            placeholder="Nama Pengguna" wire:model.defer="username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('username')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password"
                            class="form-control form-control-xl @error('password') border-danger @enderror"
                            placeholder="Sandi" wire:model.defer="password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                            <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Ingat Saya
                        </label>
                    </div> --}}
                    <button class="btn btn-primary btn-block btn-lg shadow-lg">Masuk</button>
                </form>
                <div class="text-center mt-3 text-sm">
                    <p><a class="font-bold" href="auth-forgot-password.html">Lupa Sandi?</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-flex items-center justify-content-center" style="background-color: #ffb03e">
            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo" style="width: 80%">
        </div>
    </div>
</div>
