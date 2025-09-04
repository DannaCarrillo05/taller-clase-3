<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #d1c4e9 0%, #a18cd1 50%, #fbc2eb 100%);
            min-height: 100vh;
        }
        .container {
            max-width: 480px;
            margin: 48px auto;
            background: #fff;
            padding: 36px 32px 32px 32px;
            border-radius: 18px;
            box-shadow: 0 6px 24px rgba(120, 60, 180, 0.15);
            position: relative;
            overflow: hidden;
        }
        .container::before {
            content: '';
            position: absolute;
            top: -60px; left: -60px;
            width: 160px; height: 160px;
            background: radial-gradient(circle, #a18cd1 60%, transparent 100%);
            opacity: 0.25;
            z-index: 0;
        }
        .container::after {
            content: '';
            position: absolute;
            bottom: -60px; right: -60px;
            width: 160px; height: 160px;
            background: radial-gradient(circle, #fbc2eb 60%, transparent 100%);
            opacity: 0.25;
            z-index: 0;
        }
        h2 {
            text-align: center;
            margin-bottom: 28px;
            color: #6c3483;
            font-size: 2.1rem;
            letter-spacing: 1px;
            position: relative;
            z-index: 1;
        }
        form {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 7px;
            font-weight: 600;
            color: #7d3c98;
            width: 100%;
            max-width: 400px;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
            padding-left: 2px;
        }
        input, textarea {
            width: 100%;
            max-width: 400px;
            padding: 11px 12px;
            margin-bottom: 18px;
            border: 1.5px solid #d2b4de;
            border-radius: 7px;
            background: #f8f6fc;
            font-size: 1rem;
            color: #4a235a;
            transition: border-color 0.2s;
            display: block;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
        }
        input:focus, textarea:focus {
            border-color: #a18cd1;
            outline: none;
            background: #f3e6fa;
        }
        textarea {
            resize: vertical;
        }
        button {
            width: 100%;
            max-width: 400px;
            padding: 13px;
            background: linear-gradient(90deg, #a18cd1 0%, #6c3483 100%);
            color: #fff;
            border: none;
            border-radius: 7px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 2px 8px rgba(120, 60, 180, 0.10);
            transition: background 0.2s, transform 0.2s;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        button:hover {
            background: linear-gradient(90deg, #6c3483 0%, #a18cd1 100%);
            transform: translateY(-2px) scale(1.03);
        }
        .icon-contact {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }
        .icon-contact svg {
            width: 48px;
            height: 48px;
            fill: #a18cd1;
            filter: drop-shadow(0 2px 6px #d2b4de);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon-contact">
            <svg viewBox="0 0 48 48"><path d="M24 4C13.1 4 4 13.1 4 24s9.1 20 20 20 20-9.1 20-20S34.9 4 24 4zm0 36c-8.8 0-16-7.2-16-16S15.2 8 24 8s16 7.2 16 16-7.2 16-16 16zm-7-14c0-3.9 3.1-7 7-7s7 3.1 7 7c0 2.2-1.8 4-4 4h-6c-2.2 0-4-1.8-4-4zm7-9c-2.2 0-4 1.8-4 4h8c0-2.2-1.8-4-4-4z"/></svg>
        </div>
        <h2>Contacto</h2>
        <form method="POST" action="/enviar-contacto">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Ingresa tu nombre completo">

            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" required placeholder="Ingresa tu correo electrónico">

            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Escribe tu mensaje aquí"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>