@extends('layouts.app')

    
@section('content')
    <div class="container-flex bg-white">
        <div class="container pt-4 pb-3">
            <h3>Tentang Kami</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page">Tentang Kami</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mb-3 mt-5">
        <div class="row">
            <div class="col-lg-8 offset-md-2">
                <img src="{{'img/about.jpg'}}" alt="PT. RIZKY PUTRA KASIH" class="img-thumbnail">
                <div class="container-flex">
                    <h3 class="my-4">Tentang Kami</h3>
                    <p class="text-secondary">PT.RISKY PUTRA KASIH yang bergerak dalam Bidang Service Alat Kesehatan. Baik Mechanical maupun Electrical (Medis dan Non Medis). Kami Juga Menyediakan berbagai macam Spare Part untuk Alat-Alat Kesehatan. Selain itu kami juga menjual Alat-Alat Kesehatan atau Medical Equipment misalnya : Patient Monitor (Pasien Monitor), Alat USG, Suction Pump, Bed Pasien, dll. Medical Equipment atau Alat-Alat Kesehatan yang kami sediakan Baru maupun bekas (Second) namun dengan kondisi normal. Waktu Pengerjaan Untuk Service Alat-Alat Kesehatan Electrical yang kami butuhkan satu minggu.</p>
                    <h3 class="my-4">Visi</h3>
                    <p class="text-secondary">"Meningkatkan pelayanan kesehatan masyarakat Indonesia dengan menyediakan produk-produk berkualitas dengan harga terjangkau."</p>
                    <h3 class="my-4">Misi</h3>
                    <p class="text-secondary mb-5">"Pengembangan yang konsisten dan terus-menerus meningkatkan kesejahteraan karyawan sambil mempertahankan integritas dalam rutinitas sehari-hari."</p>
                </div>
            </div>
        </div>
    </div>

@endsection