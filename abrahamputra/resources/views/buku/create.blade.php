<x-layout>
    <div class="container">
        <div class="row p-lg-3">
            <div class="col">
                <form>
                    <h1>Tambah Buku</h1>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" value="{{ old('judul') }}" name="judul" id="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" value="{{ old('penulis') }}" name="penulis" id="penulis" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select form-select-md mb-3" name="kategori" id="kategori" required>
                            <option selected>Pilih Kategori</option>
                            <option value="Novel">Novel</option>
                            <option value="Komik">Komik</option>
                            <option value="Biografi">Biografi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sampul" class="form-label">Sampul buku</label>
                        <img class="img-preview img-fluid mb-3" width="250px">
                        <input type="file" class="form-control" onchange="previewImage()" name="sampul" id="sampul" required>
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