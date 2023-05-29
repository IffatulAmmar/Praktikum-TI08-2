@extends('user.layout.app')
@section('about')
<div style="min-height: 80vh">
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">My name is Muhammad Iffatul Ammar and i'll tell you about me!</p>

                        <ul style="text-align: left">
                            <h3 class="text-center">Pendidikan</h3>
                            <li>Kampus : STT Terpadu Nurul Fikri</li>
                            <li>Status : Mahasiswa Aktif </li>
                            <li>Jurusan : Teknik Informatika</li>
                            <li>Rombel : TI-08</li>
                            <h3 class="text-center">hobi</h3>
                            <li>Badminton</li>
                            <li>Jalan-Jalan</li>
                            <li>Tidur</li>
                        <ul>

                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="https://www.instagram.com/muhammad_thoel/"><i class="bi bi-instagram"></i></a>
                            <a class="text-gradient" href="https://www.linkedin.com/in/muhammad-iffatul-ammar-1630111b8/?originalSubdomain=id"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="https://github.com/IffatulAmmar"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
