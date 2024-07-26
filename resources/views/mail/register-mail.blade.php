<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail verification</title>
    <style>
        body {
            background-color: #f3f4f6;
            color: #333;
            font-family: 'Arial', sans-serif;
            padding: 20px;
        }

        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background-color: #25636c9d;
            padding: 20px;
            text-align: center;
        }

        .email-header img {
            max-height: 80px;
        }

        .email-body {
            padding: 20px;
        }

        .btn .btn-mail {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .email-footer {
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
        }

        .otp-code {
            font-size: 24px;
            font-weight: bold;
            background-color: #f3f4f6;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            {{-- <img src="{{ $message->embed(public_path() . '/images/watermark_preview_image20240717-1-urrith-removebg-preview.png') }}"
                alt="Logo de l'entreprise" class="w-[100px] h-[40px]"> --}}
        </div>
        <div class="email-body">
            <h1 class="text-2xl font-bold text-gray-800">Vérification de votre adresse email</h1>
            {{-- <p class="text-gray-600">Bonjour {{ $user->nom }}</p> --}}
            <p class="text-gray-600">Merci de vous être inscrit chez nous. Pour compléter votre inscription, veuillez
                utiliser le code OTP ci-dessous pour vérifier votre adresse email.</p>
            <div class="otp-code">
                {{-- {{ $user->token }} --}}
            </div>

            <div class="btn">
                <a href="{{ route('valider') }}" class="btn-mail">Valider</a>
            </div>

            <p class="text-gray-600">Si vous n'avez pas demandé cette vérification, veuillez ignorer cet email.</p>
            <p class="text-gray-600">Cordialement,<br>L'équipe ALPHA TRANSIT</p>
        </div>
        <div class="email-footer">
            <p>&copy; 2024 ALPHA TRANSIT. Tous droits réservés.</p>
        </div>
    </div>
</body>

</html>
