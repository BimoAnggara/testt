<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="btn btn-primary mb-3" href="{{ route('pengaduan.index') }}">Kembali</a>
                    <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Masukkan Foto</label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label for="laporan">Masukkan laporan</label>
                            <textarea class="form-control" id="laporan" name="laporan" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" id="status" name="status" disabled>
                                <option hidden>Pilih Status</option disabled>
                                <option>Belum diproses</option>
                                <option>Sedang diproses</option>
                                <option>Selesai diproses</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="response">Tanggapan</label>
                            <textarea class="form-control" id="laporan" name="response" rows="3" disabled></textarea>
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn btn-primary" style="background-color: rgb(0, 98, 255);">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
