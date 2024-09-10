<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Inquiry Email</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            background-color: #ffffff;
        }

        .message header {
            background-color: #11254A;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1%;
        }

        .message header img {
            width: 30%;
        }

        .content {
            padding: 20px;
        }

        .content h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .content p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }

        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 12px;
            background-color: #11254A;
            padding: 1% 0;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="message">
            <header>
                <img src="{{ asset('/logo.png') }}" alt="">
            </header>
            <div class="content">
                <h2>Form Submission</h2>
                <p><b>Destination:</b> {{ $data['destination'] }}.</p>
                <p><b>Full Name:</b> {{ $data['full_name'] }}.</p>
                <p><b>Email Address:</b> {{ $data['email_address'] }}</p>
                <p><b>Phone No:</b> {{ $data['phone_no'] }}.</p>
                <p><b>Country:</b> {{ $data['country'] }}.</p>
                <p><b>Comment:</b> {{ $data['comment'] }}</p>
            </div>
            <footer>
                <p>Copyright &#169 Shinkyowa International</p>
            </footer>
        </div>
    </div>
</body>

</html>
