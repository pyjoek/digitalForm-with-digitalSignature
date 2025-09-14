<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Maalum Responsibility Form</title>
  <style>
    body { font-family: DejaVu Sans, sans-serif; font-size: 12px; }
    h2 { text-align: center; text-transform: uppercase; margin-bottom: 10px; }
    .rules { margin-left: 20px; }
    .signature { border: 1px solid #000; width: 200px; height: 80px; margin-top: 5px; }
    .footer { text-align: center; margin-top: 40px; font-weight: bold; }
  </style>
</head>
<body>
  <h2>Maalum Responsibility Form</h2>
  <p style="text-align:center"><strong>Please read carefully the content of this form before signing.</strong></p>

  <p>In consideration for being allowed to access the Maalum Natural Swimming Pool and its facilities, the sufficiency of which is hereby acknowledged:</p>

  <ul class="rules">
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

  <p><strong>I have read and understood the terms mentioned above, and I am aware that by signing this form I agree to abide by the rules.</strong></p>

  <p><strong>Visitor’s Name:</strong> {{ $visitorName }}</p>
  <p><strong>Adult Supervisor:</strong> {{ $supervisorName ?? 'N/A' }}</p>
  <p><strong>Email / WhatsApp:</strong> {{ $contactInfo }}</p>
  <p><strong>Date:</strong> {{ $date }}</p>

  <p><strong>Signature:</strong></p>
  <div class="signature">
    <img src="{{ $signatureFile }}" alt="Signature" style="width:200px;"/>
  </div>

  <p class="footer">WE HOPE YOU ENJOY YOUR TIME AT MAALUM NATURAL SWIMMING POOL!</p>
</body>
</html>
