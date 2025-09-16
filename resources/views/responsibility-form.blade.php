<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maalum Responsibility Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <style>
    body { background: #f8f9fa; }
    .form-card { max-width: 900px; margin: 2rem auto; }
    h2 { text-align: center; text-transform: uppercase; margin-bottom: 1rem; }
    #signature-pad { border: 2px dashed #aaa; border-radius: 6px; height: 150px; }
  </style>
</head>
<body>
<div class="container form-card">
  <div class="card shadow-sm">
    <div class="card-body p-4">
      
      <h2>Maalum</h2>
      <h2>Responsibility Form</h2>
      <p class="text-center"><strong><h4>Please read carefully the content of this form before signing.</h4></strong></p>

      <p>In consideration for being allowed to access the Maalum Natural Swimming Pool and its facilities, the sufficiency of which is hereby acknowledged:</p>
      <ul>
        <li>In order to preserve the natural resource and in the interests of hygiene, swimmers must visit the toilet and shower before entering the water.</li>
        <li>No use of sun creams, chemical products or insect repellents before swimming.</li>
        <li>No diving from above the cave area; management will hold no responsibility.</li>
        <li>No food is allowed on-premises.</li>
        <li>Children under 15 must be accompanied by an adult for supervision and they must sign this form on their behalf.</li>
        <li>Management hold no liability for any loss or damage for personal items, or any injuries (minor or major).</li>
        <li>All rubbish must be disposed of in allocated bins.</li>
        <li>Please be aware there is no lifeguard — enter pool at your own risk.</li>
        <li>No drones are allowed on-premises unless previously notified when booking.</li>
        <li>The duration of your slot is 1h30 inside the cave area.</li>
      </ul>

      <p>All visitors of Maalum are requested to treat the facilities with respect and as intended. We kindly ask you to report any observed defect and any accidents, immediately.</p>

      <p>I have read and understood the terms mentioned above, and I am aware that by signing this form I agree to abide by the rules.</p>

      {{-- Laravel Form --}}
      <form method="POST" action="{{ route('form.submit') }}" class="form-control">
        @csrf
        <div class="row">
          <!-- Booking Name Input -->
          <div class="mb-3 col-6">
            <div class="input-group">
              <span class="input-group-text">
                <i class="fa-solid fa-user"></i>
              </span>
              <input type="text" class="form-control" name="visitorName" placeholder="Booking Name" required>
            </div>
          </div>

          <!-- Supervisor Name Input -->
          <div class="mb-3 col-6">
            <div class="input-group">
              <span class="input-group-text">
                <i class="fa-solid fa-user-tie"></i>
              </span>
              <input type="text" class="form-control" name="supervisorName" placeholder="Supervisor Name" required>
            </div>
          </div>

        <!-- Row with Phone and Email Inputs -->
        <div class="row">
          <!-- Phone Number -->
          <div class="mb-3 col-md-6">
            <div class="input-group">
              <span class="input-group-text">
                <i class="fa-solid fa-phone"></i>
              </span>
              <input type="text" name="contactInfo" class="form-control" placeholder="Phone Number" required>
            </div>
          </div>

          <!-- Email Address -->
          <div class="mb-3 col-md-6">
            <div class="input-group">
              <span class="input-group-text">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            </div>
          </div>
        </div>

        <!-- Signature Field (Centered) -->
        <div class="mb-3 d-flex justify-content-center">
          <div style="width: 300px; text-align: center;">
            <!-- Icon Label -->
            <div class="form-label mb-2">
              <i class="fa-solid fa-pen"></i> Signature
            </div>

            <!-- Signature Canvas -->
            <canvas id="signature-pad" class="border rounded w-100" height="150" style="touch-action: none;"></canvas>

            <!-- Hidden Input -->
            <input type="hidden" name="signature" id="signatureInput" required>

            <!-- Clear Button -->
            <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="clearSignature()">Clear</button>
          </div>
        </div>

        <!-- <div class="mb-3">
          <label class="form-label col-4">Signature</label>
          <canvas id="signature-pad" class="w-400"></canvas>
          <input type="hidden" name="signature" id="signatureInput" required>
          <button type="button" class="btn btn-sm btn-outline-secondary mt-1" onclick="clearSignature()">Clear</button>
        </div> -->

        <center><button type="submit" class="btn btn-primary col-6 mb-5">Submit</button></center>
      </form>

      <!-- <hr class="mt-4"> -->
      <p class="text-center"><strong>WE HOPE YOU ENJOY YOUR TIME AT MAALUM NATURAL SWIMMING POOL!</strong></p>
    </div>
  </div>
</div>

<script>
const canvas = document.getElementById("signature-pad");
const signaturePad = new SignaturePad(canvas);

function clearSignature() { signaturePad.clear(); }

document.querySelector("form").addEventListener("submit", function(e) {
  if (signaturePad.isEmpty()) {
    alert("Please sign before submitting!");
    e.preventDefault();
  } else {
    document.getElementById("signatureInput").value = signaturePad.toDataURL();
  }
});
</script>
</body>
</html>
