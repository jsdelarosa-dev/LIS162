<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UP Varsity Swim Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
            background: #111827;
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 24px;
        }

        .logo {
            max-width: 420px;
            width: 80%;
            margin-bottom: 32px;
        }

        h1 {
            font-size: 2.5rem;
            letter-spacing: 2px;
            margin-bottom: 12px;
        }

        p {
            font-size: 1.1rem;
            opacity: 0.7;
            margin-bottom: 36px;
        }

        .actions {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .button {
            display: inline-block;
            padding: 14px 40px;
            background: #dc2626;
            color: white;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
            transition: background 0.2s ease;
        }

        .button:hover {
            background: #b91c1c;
        }

        .button.secondary {
            background: transparent;
            border: 2px solid #dc2626;
        }

        .button.secondary:hover {
            background: #dc2626;
        }

        footer {
            padding: 16px;
            text-align: center;
            font-size: 0.85rem;
            opacity: 0.5;
        }
    </style>
</head>

<body>

<main>
    <img 
        src="{{ asset('images/vst logo.jpeg') }}" 
        alt="UP Varsity Swim Team Logo"
        class="logo"
    >

    <h1>UP VARSITY SWIM TEAM</h1>
    <p>The official portal for UP Diliman Varsity Swimmers</p>

    <div class="actions">
        <a href="{{ route('login') }}" class="button">
            ENTER PORTAL
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="button">
                REGISTER
            </a>
        @endif
    </div>
</main>

<footer>
    © {{ date('Y') }} UP Varsity Swim Team
</footer>

</body>
</html>





