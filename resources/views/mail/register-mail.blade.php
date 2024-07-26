<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail verification</title>
    <link rel="stylesheet" href="{{asset('css/mail.css')}}">
</head>
<body>
<div class="email-container">
    <div class="email-header">
        <img src="/images/watermark_preview_image20240717-1-urrith-removebg-preview.png" alt="Logo de l'entreprise" class="w-[100px] h-[40px]">
    </div>
    <div class="email-body">
        <h1 class="text-2xl font-bold text-gray-800">Vérification de votre adresse email</h1>
        <p class="text-gray-600">Bonjour {{$user->nom}}</p>
        <p class="text-gray-600">Merci de vous être inscrit chez nous. Pour compléter votre inscription, veuillez utiliser le code OTP ci-dessous pour vérifier votre adresse email.</p>
        <div class="otp-code">
            {{$user->token}}
        </div>
        
        <div>
            <button type="submit" class='class="submit-button text-white bg-green-600 hover:bg-green-800 
            focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg 
            text-sm inline-flex items-center px-5 py-2.5 text-center">'>Valider</button>
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
