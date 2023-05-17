@extends('master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="col-12">
            <!-- Search -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select id="kelas" class="select2 form-select form-select-lg">
                                <option selected disabled>Pilih Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select id="jurusan" class="select2 form-select form-select-lg">
                                <option selected disabled>Pilih Jurusan</option>
                                <option value="AK">AK</option>
                                <option value="OTKP">OTKP</option>
                                <option value="MM">MM</option>
                                <option value="RPL">RPL</option>
                                <option value="TBSM">TBSM</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="mapel" class="form-label">Mata Pelajaran</label>
                            <select id="mapel" class="select2 form-select form-select-lg">
                                <option selected disabled>Pilih Mata Pelajaran</option>
                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Kewarganegaraan">Kewarganegaraan</option>
                                <option value="Sejarah">Sejarah</option>
                                <option value="Fisika">Fisika</option>
                                <option value="Biologi">Biologi</option>
                                <option value="Kimia">Kimia</option>
                            </select>
                        </div>

                        <div class="col-md-2 mt-4">
                            <button class="btn btn-primary">
                                <i class="fas fa-search me-1"></i> Cari Siswa
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search -->

            <!-- Hoverable Table rows -->
            <div class="card">
                <div class="card-body">
                    <input type="file" id="fileInput" style="display: none;">
                    <button class="btn btn-sm btn-outline-warning mb-3"
                        onclick="document.getElementById('fileInput').click();">
                        <i class="fas fa-upload me-1"></i> Import
                    </button>

                    <script>
                        var fileInput = document.getElementById('fileInput');
                        fileInput.addEventListener('change', function(event) {
                            var fileName = event.target.files[0].name;
                            var fileNameElement = document.getElementById('fileName');
                            fileNameElement.textContent = fileName;
                        });
                    </script>

                    <a href="{{ asset('assets/files/resume.pdf') }}" class="btn btn-sm btn-outline-info mb-3" download>
                        <i class="fas fa-download me-1"></i> Unduh Excel
                    </a>


                    <button class="btn btn-sm btn-outline-success mb-3" type="submit">
                        <i class="fas fa-save me-1"></i> Simpan
                    </button>
                    <br>
                    <span id="fileName" class="text-small text-center"></span>

                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Absen</th>
                                    <th>Induk</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>
                                        <strong>1</strong>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-dark">
                                            150467379
                                        </span>
                                    </td>
                                    <td>
                                        Muhammad Mauribi
                                    </td>
                                    <td>XII</td>
                                    <td>
                                        <span class="badge bg-label-dark">
                                            Rekayasa Perangkat Lunak
                                        </span>
                                    </td>
                                    <td>
                                        <select class="selectpicker w-100" data-style="btn-default">
                                            <option selected>Masuk</option>
                                            <option>Izin</option>
                                            <option>Sakit</option>
                                            <option>Alpha</option>
                                            <option>Terlambat</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-success" type="submit">
                                            <i class="fas fa-save"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Hoverable Table rows -->
        </div>
    </div>
@endsection
