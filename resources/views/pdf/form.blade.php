<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Signature Audit Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Electronic Signature Audit Report</h1>
    <form action="{{ route('generate.pdf') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="created">Created:</label>
            <input type="datetime-local" id="created" name="created" required>
        </div>
        <div class="form-group">
            <label for="by">By:</label>
            <input type="text" id="by" name="by" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>
        </div>
        <div class="form-group">
            <label for="transaction_id">Transaction ID:</label>
            <input type="text" id="transaction_id" name="transaction_id" required>
        </div>
        <div class="form-group">
            <label for="electronic_signature_id">Electronic Signature ID:</label>
            <input type="text" id="electronic_signature_id" name="electronic_signature_id" required>
        </div>
        <div class="form-group">
            <label for="signed_date">Signed Date:</label>
            <input type="datetime-local" id="signed_date" name="signed_date" required>
        </div>
        <div class="form-group">
            <label for="user_logged_in">User Logged in as:</label>
            <input type="text" id="user_logged_in" name="user_logged_in" required>
        </div>
        <div class="form-group">
            <label for="ip_address">IP address:</label>
            <input type="text" id="ip_address" name="ip_address" required>
        </div>
        <div class="form-group">
            <button type="submit">Generate PDF</button>
        </div>
    </form>
</body>
</html>
