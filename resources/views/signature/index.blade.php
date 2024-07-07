<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signatures</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .signature {
            margin-bottom: 20px;
        }
        .signature img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your Signatures</h2>
        @foreach($signatures as $signature)
            <div class="signature">
                <img src="{{ asset('uploads/signatures/' . $signature->file_name) }}" alt="Signature">
                <p>Uploaded at: {{ $signature->created_at }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
