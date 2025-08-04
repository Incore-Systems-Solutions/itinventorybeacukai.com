@extends('layouts.main')

@section('content')
<div class="post-area">
  <div id="contact" class="container">
  <div class="row mb-2">
    <div class="col-md-12 text-center">
      <h2 class="fw-bold" style="color: #2c3e50;">{{ __('contact.title') }}</h2>
      <p>{{ __('contact.description') }}</p>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6 my-2">
      <div class="form-group">
        <label class="control-label">{{ __('contact.first_name') }}</label>
        <input type="text" name="first_name" class="form-control" placeholder="{{ __('contact.placeholder_first_name') }}" required>
      </div>
    </div>
    <div class="col-md-6 my-2">
      <div class="form-group">
        <label class="control-label">{{ __('contact.last_name') }}</label>
        <input type="text" name="last_name" class="form-control" placeholder="{{ __('contact.placeholder_last_name') }}" required>
      </div>
    </div>
    <div class="col-md-6 my-2">
      <div class="form-group">
        <label class="control-label">{{ __('contact.email') }}</label>
        <input type="email" name="email" class="form-control" placeholder="{{ __('contact.placeholder_email') }}" required>
      </div>
    </div>
    <div class="col-md-6 my-2">
      <div class="form-group">
        <label class="control-label">{{ __('contact.phone_number') }}</label>
        <div class="d-flex border rounded overflow-hidden shadow-sm">
          <select id="countryCode" class="form-select border-end-0" style="max-width: 120px;">
            <!-- negara tetap manual (tidak perlu translate) -->
            <option value="62">IDN (+62)</option>
            <option value="60">MYS (+60)</option>
            <option value="65">SGP (+65)</option>
            <option value="66">THA (+66)</option>
            <option value="84">VNM (+84)</option>
            <option value="63">PHL (+63)</option>
            <option value="91">IND (+91)</option>
            <option value="81">JPN (+81)</option>
            <option value="82">KOR (+82)</option>
            <option value="86">CHN (+86)</option>
            <option value="1">USA (+1)</option>
            <option value="44">GBR (+44)</option>
            <option value="61">AUS (+61)</option>
            <option value="49">DEU (+49)</option>
            <option value="33">FRA (+33)</option>
            <option value="39">ITA (+39)</option>
            <option value="34">ESP (+34)</option>
            <option value="971">ARE (+971)</option>
            <option value="974">QAT (+974)</option>
            <option value="966">SAU (+966)</option>
          </select>
          <input type="text" id="txtPhone" class="form-control border-start-0 rounded-end-pill" placeholder="8200000000" required>
        </div>
      </div>
    </div>
    <div class="col-md-12 my-2">
      <div class="form-group">
        <label class="control-label">{{ __('contact.message') }}</label>
        <textarea name="message" class="form-control" cols="30" rows="5" placeholder="{{ __('contact.placeholder_message') }}"></textarea>
      </div>
    </div>
    <div class="col-md-12 my-2">
      <div class="form-group">
        <button id="submitFormBtn" class="btn btn-success w-100">{{ __('contact.send') }}</button>
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

@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
  const submitBtn = document.getElementById("submitFormBtn");

  submitBtn.addEventListener("click", function (e) {
    e.preventDefault();

    const firstName = document.querySelector("input[name='first_name']").value.trim();
    const lastName = document.querySelector("input[name='last_name']").value.trim();
    const email = document.querySelector("input[name='email']").value.trim();
    const countryCode = document.getElementById("countryCode").value;
    const phone = document.getElementById("txtPhone").value.trim();
    const message = document.querySelector("textarea[name='message']").value.trim();

    if (!firstName || !lastName || !email || !phone) {
      alert("Mohon lengkapi semua field yang wajib diisi.");
      return;
    }

    const fullPhone = countryCode + phone;

    const data = {
      first_name: firstName,
      last_name: lastName,
      country_code: countryCode,
      phone: fullPhone,
      email: email,
      message: message
    };

    fetch("https://www.digimar.id/api/contact-us", {
      method: "POST",
      headers: {
        "Origin": "https://www.indonesiacore.com",
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    })
    .then(response => {
      if (!response.ok) {
        throw new Error("Gagal mengirim data");
      }
      return response.json();
    })
    .then(result => {
      console.log(result);
      alert("Pesan berhasil dikirim. Kami akan segera menghubungi Anda.");
      // Optional: reset form
      document.querySelector("input[name='first_name']").value = "";
      document.querySelector("input[name='last_name']").value = "";
      document.querySelector("input[name='email']").value = "";
      document.getElementById("txtPhone").value = "";
      document.querySelector("textarea[name='message']").value = "";
    })
    .catch(error => {
      console.error(error);
      alert("Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.");
    });
  });
});
</script>
@endsection
