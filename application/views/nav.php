    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="<?= base_url('assets/icon.ico') ?>" height="15" alt="" loading="lazy" />
                </a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('mahasiswa') ?>">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('prodi') ?>">Prodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('semester') ?>">Semester</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kelas') ?>">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('tahun') ?>">Tahun Angkatan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= base_url('login/logout') ?>">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>