<x-layout>
    <div class="container">
        <div class="row p-lg-3">
            <div class="col">
                <form action="/buku" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1>Tambah Buku</h1>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror"  value="{{ old('judul') }}" name="judul" id="judul" required>

                        <!-- Pesan saat error -->
                        @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror

                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control @error('penulis') is-invalid @enderror"  value="{{ old('penulis') }}" name="penulis" id="penulis" required>

                        <!-- Pesan saat error -->
                        @error('penulis') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select form-select-md mb-3 @error('kategori') is-invalid @enderror" name="kategori" id="kategori" required>
                            <option selected>Pilih Kategori</option>
                            <option value="Novel">Novel</option>
                            <option value="Komik">Komik</option>
                            <option value="Biografi">Biografi</option>
                        </select>

                        <!-- Pesan saat error -->
                        @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sampul" class="form-label">Sampul buku</label>
                        <img class="img-preview img-fluid mb-3" width="250px">
                        <input type="file" class="form-control @error('penulis') is-invalid @enderror" onchange="previewImage()" name="sampul" id="sampul" required>

                        <!-- Pesan saat error -->
                        @error('sampul') <div class="invalid-feedback">{{ $message }}</div> @enderror

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#sampul');
            const imagePreview = document.querySelector('.img-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imagePreview.src = oFREvent.target.result;
            }
        }
    </script>
</x-layout>