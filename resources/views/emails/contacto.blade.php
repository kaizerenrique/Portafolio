<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo mensaje de contacto - Portafolio Oliver Gómez</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #c65151, #8a5bc4);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .content {
            padding: 30px;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #c65151;
        }
        .field-label {
            font-weight: 600;
            color: #c65151;
            font-size: 14px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .field-value {
            color: #333;
            font-size: 16px;
        }
        .message-content {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #e9ecef;
            white-space: pre-wrap;
            line-height: 1.6;
        }
        .footer {
            background: #1a1d23;
            color: #f0f2f5;
            padding: 20px;
            text-align: center;
            font-size: 14px;
        }
        .info-box {
            background: #e8f4fd;
            border: 1px solid #b6e0fe;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            font-size: 14px;
        }
        .button {
            display: inline-block;
            background: #c65151;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin: 10px 5px;
        }
        @media (max-width: 600px) {
            .container {
                border-radius: 0;
            }
            .header {
                padding: 20px 15px;
            }
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>📧 Nuevo Mensaje de Contacto</h1>
            <p>Has recibido un nuevo mensaje desde tu portafolio web</p>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Nombre -->
            <div class="field">
                <div class="field-label">Nombre Completo</div>
                <div class="field-value">{{ $name }}</div>
            </div>

            <!-- Email -->
            <div class="field">
                <div class="field-label">Correo Electrónico</div>
                <div class="field-value">
                    <a href="mailto:{{ $email }}" style="color: #c65151; text-decoration: none;">
                        {{ $email }}
                    </a>
                </div>
            </div>

            <!-- Asunto -->
            <div class="field">
                <div class="field-label">Asunto del Mensaje</div>
                <div class="field-value">{{ $subject }}</div>
            </div>

            <!-- Mensaje -->
            <div class="field">
                <div class="field-label">Mensaje</div>
                <div class="message-content">
                    {{ $messageContent }}
                </div>
            </div>

            <!-- Acciones rápidas -->
            <div style="text-align: center; margin-top: 30px;">
                <a href="mailto:{{ $email }}?subject=Re: {{ $subject }}&body=Hola {{ $name }},%0D%0A%0D%0A" 
                   class="button">
                    📨 Responder a {{ $name }}
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Este mensaje fue enviado desde el formulario de contacto de <strong>Oliver Gómez - Portafolio</strong></p>
            <p>📍 Puerto Ordaz, Venezuela | 🌐 Desarrollador Backend</p>
        </div>
    </div>
</body>
</html>