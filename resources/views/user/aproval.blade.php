@extends('user.layouts.app')

@section('title', 'Welcome')

@section('content')

    <!-- Section Aproval Kaprodi -->
    <section id="aproval-kaprodi" class="mt-5 mb-5">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="fs-3 fw-bolder">Aproval Kaprodi</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>
                        <div class="mb-3">
                            <label for="namaSurat" class="form-label">Nama Surat</label>
                            <input type="text" class="form-control" id="namaSurat" placeholder="Masukkan nama surat">
                        </div>
                        <div class="mb-3">
                            <label for="catatan" class="form-label">Catatan</label>
                            <textarea class="form-control" id="catatan" rows="3" placeholder="Masukkan catatan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="uploadFile" class="form-label">Upload File</label>
                            <input class="form-control" type="file" id="uploadFile">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-secondary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
