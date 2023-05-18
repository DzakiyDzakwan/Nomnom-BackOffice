@push('style')
@endpush

<div>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>File Uploader</h3>
                    <p class="text-subtitle text-muted">Javascript enhanced uploaders for easier file handling
                    </p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">File Uploader</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">ImgBB Uploader</h5>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <p class="card-text">Test Upload Image with livewire
                                </p>
                                <!-- imgBB file uploader -->
                                <form wire:submit.prevent="save">
                                    <input type="file" name="image" class="form-control" wire:model="file">
                                    @if ($file)
                                        <img src="{{ $file->temporaryUrl() }}">
                                    @endif
                                    <button class="btn btn-success container-fluid my-3" type="submit">Save
                                        Photo</button>
                                    @error('file')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


@push('script')
@endpush
