<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Signature</title>
    <style>
        .signature-pad {
            border: 1px solid #000000;
            width: 400px;
            height: 200px;
        }
    </style>
</head>
<body>
    <h1>Signature Form</h1>
    <form method="POST" action="{{ route('signature.save') }}">
        @csrf
        <input type="hidden" name="signature" id="signature">
        <div id="signature-pad" class="signature-pad"></div>
        <button type="button" id="clear">Clear</button>
        <button type="submit">Save</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <script>
        var canvas = document.getElementById('signature-pad');
        var signaturePad = new SignaturePad(canvas);

        document.getElementById('clear').addEventListener('click', function () {
            signaturePad.clear();
        });

        document.querySelector('form').addEventListener('submit', function (e) {
            if (signaturePad.isEmpty()) {
                alert('Please provide a signature first.');
                e.preventDefault();
            } else {
                var data = signaturePad.toDataURL('image/png');
                document.getElementById('signature').value = data;
            }
        });
    </script>
</body>
</html>
