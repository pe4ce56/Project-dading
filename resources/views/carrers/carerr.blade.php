@extends('layouts.app')

@section('content')
    <div class="container-flex bg-white">
        <div class="container pt-4 pb-3">
            <h3>Karir</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item" aria-current="page">Karir</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mb-5 px-5 mt-5">
        <div class="container px-5">
            <h1 class="text-bold">PT. Risky Putra Kasih</h1>
            <h3 class="text-bold my-3">Kualifikasi Umum :</h3>
            <ol class="qualify">
                <li class="py-1">Minimal pendidikan D3.</li>
                <li class="py-1">Memiliki kemampuan komunikasi dan negosiasi yang baik.</li>
                <li class="py-1">Berpenampilan menarik dan percaya diri.</li>
                <li class="py-1">Jujur, tanggung jawab, dan disiplin.</li>
                <li class="py-1">Motivasi tinggi untuk belajar dan pencapaian target.</li>
            </ol>
            <a href="/recruitment/register"><button class="btn btn-main text-light dftr">Daftar</button></a>
        </div>
    </div>
@endsection