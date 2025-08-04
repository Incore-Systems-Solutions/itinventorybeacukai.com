@extends('layouts.main')

@section('content')
<div class="post-area">
  <div id="contact" class="container my-5">
    <h2 class="mb-5 text-center fw-bold" style="color: #2c3e50;">Kontak Kami</h2>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card p-5 shadow-lg rounded-4 border-0" style="background: #f9fafd;">
          <!-- Alamat kantor -->
          <h5 class="mb-4 fw-semibold" style="color: #34495e;">PT INCORE SYSTEMS SOLUTIONS</h5>
          <p class="mb-5 fs-5 text-secondary" style="line-height: 1.6;">
            Jl. Palmerah Sel. No.30 A, RT.4/RW.2, Gelora, Kecamatan Tanah Abang,<br>
            Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270
          </p>

          <!-- Tombol Hubungi -->
          <div class="d-flex gap-4 justify-content-center flex-wrap">
            <!-- WhatsApp Button -->
            <a href="https://wa.me/6281234567890" target="_blank" class="btn btn-success btn-lg d-flex align-items-center px-4 rounded-pill shadow-sm"
               style="transition: background-color 0.3s ease;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-whatsapp me-3" viewBox="0 0 16 16">
                <path d="M13.601 2.326a7.497 7.497 0 0 0-10.6 10.6l-.5 2.04 2.1-.5a7.497 7.497 0 0 0 9-12.14zm-5.4 11.154a5.63 5.63 0 0 1-3.21-.92l-.23-.15-1.9.47.5-1.85-.15-.24a5.63 5.63 0 0 1 8-8 5.61 5.61 0 0 1 1.6 3.86 5.57 5.57 0 0 1-5.81 5.81z"/>
                <path d="M11.74 9.498c-.16-.08-.92-.46-1.06-.52-.14-.06-.24-.08-.34.08-.1.15-.4.52-.5.63-.1.1-.2.11-.37.04-.17-.07-.7-.26-1.33-.82-.5-.44-.83-.98-.93-1.15-.1-.17-.01-.26.07-.34.07-.07.16-.18.25-.27.08-.08.11-.15.17-.25.06-.1.03-.18-.02-.26-.05-.08-.34-.82-.47-1.12-.12-.3-.25-.26-.34-.26-.08-.01-.17-.01-.26-.01-.09 0-.24.04-.37.18-.14.13-.53.52-.53 1.26 0 .74.54 1.46.62 1.56.08.1 1.07 1.64 2.6 2.3 1.53.66 1.53.44 1.8.41.27-.03.87-.35.99-.68.12-.34.12-.63.08-.68-.04-.05-.15-.08-.31-.14z"/>
              </svg>
              Hubungi via WhatsApp
            </a>

            <!-- Email Button -->
            <a href="mailto:info@incore.co.id" class="btn btn-primary btn-lg d-flex align-items-center px-4 rounded-pill shadow-sm"
               style="transition: background-color 0.3s ease;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-envelope-fill me-3" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2.5 2h11a2 2 0 0 1 2.45 1.555L8 8.414.05 3.555z"/>
                <path d="M0 4.697v7.104l5.803-3.803L0 4.697zM6.761 8.83l-6.457 4.232A2 2 0 0 0 2.5 14h11a2 2 0 0 0 1.935-1.46l-6.457-4.23L8 9.586l-1.239-.757z"/>
              </svg>
              Kirim Email
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .btn-success:hover {
    background-color: #128c7e !important;
    box-shadow: 0 8px 15px rgba(18, 140, 126, 0.4);
  }

  .btn-primary:hover {
    background-color: #1a73e8 !important;
    box-shadow: 0 8px 15px rgba(26, 115, 232, 0.4);
  }
</style>
@endsection
