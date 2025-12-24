<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	echo json_encode(['ok' => false, 'error' => 'Méthode non autorisée']);
	exit;
}

$fn      = trim($_POST['firstname'] ?? '');
$ln      = trim($_POST['lastname'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($fn === '' || $ln === '' || $subject === '' || $message === '') {
	echo json_encode(['ok' => false, 'error' => 'Veuillez remplir tous les champs.']);
	exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo json_encode(['ok' => false, 'error' => 'Adresse email invalide.']);
	exit;
}

$to          = 'esteban.racineecole@gmail.com';
$fullSubject = 'Contact Portfolio: ' . $subject;

// Template HTML pour l'email
$body = <<<HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message - Portfolio</title>
    <style>
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                max-width: 100% !important;
            }
            .header-section {
                padding: 30px 20px !important;
            }
            .header-title {
                font-size: 24px !important;
            }
            .content-section {
                padding: 30px 20px !important;
            }
            .info-box {
                padding: 15px !important;
                margin-bottom: 20px !important;
            }
            .info-title {
                font-size: 16px !important;
            }
            .message-box {
                padding: 15px !important;
            }
            .button-action {
                padding: 12px 24px !important;
                font-size: 14px !important;
            }
            .footer-section {
                padding: 20px 15px !important;
            }
            .info-table td {
                display: block !important;
                width: 100% !important;
                padding: 4px 0 !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', sans-serif; background: linear-gradient(135deg, #0f051a 0%, #1a0f2e 100%); min-height: 100vh;">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #0f051a 0%, #1a0f2e 100%);">
        <tr>
            <td align="center" style="padding: 60px 20px;">
                <table role="presentation" class="email-container" style="max-width: 600px; width: 100%; border-collapse: collapse; background-color: #16061f; border-radius: 28px; overflow: hidden; box-shadow: 0 20px 60px rgba(147, 51, 234, 0.2), 0 0 40px rgba(139, 92, 246, 0.1); border: 1px solid rgba(139, 92, 246, 0.3);">
                    
                    <!-- En-tête simplifié -->
                    <tr>
                        <td class="header-section" style="background: linear-gradient(135deg, #7c3aed 0%, #5b21b6 50%, #6d28d9 100%); padding: 24px 30px; text-align: center;">
                            <h1 class="header-title" style="margin: 0; color: #ffffff; font-size: 24px; font-weight: 800; letter-spacing: -0.5px;">
                                ✨ Nouveau message
                            </h1>
                        </td>
                    </tr>
                    
                    <!-- Corps du message -->
                    <tr>
                        <td class="content-section" style="padding: 50px 30px; background-color: #16061f;">
                            
                            <!-- Section expéditeur -->
                            <div class="info-box" style="margin-bottom: 28px; padding: 24px; background: linear-gradient(135deg, #2e1a47 0%, #25142f 100%); border-radius: 18px; border: 1px solid rgba(139, 92, 246, 0.4);">
                                <h2 class="info-title" style="margin: 0 0 18px 0; color: #e9d5ff; font-size: 17px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: flex; align-items: center; gap: 10px;">
                                    <span style="font-size: 18px; margin-right: 10px;">👤</span> Expéditeur
                                </h2>
                                <table class="info-table" style="width: 100%; border-collapse: collapse;">
                                    <tr>
                                        <td style="padding: 10px 0; color: #c4b5fd; font-size: 13px; font-weight: 600; width: 70px; text-transform: uppercase;">Nom :</td>
                                        <td style="padding: 10px 0; color: #f3e8ff; font-size: 14px; font-weight: 600;">{$fn} {$ln}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 0; color: #c4b5fd; font-size: 13px; font-weight: 600; text-transform: uppercase;">Email :</td>
                                        <td style="padding: 10px 0;">
                                            <a href="mailto:{$email}" style="color: #a78bfa; text-decoration: none; font-weight: 600; word-break: break-all; transition: color 0.2s;">{$email}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 10px 0; color: #c4b5fd; font-size: 13px; font-weight: 600; text-transform: uppercase;">Sujet :</td>
                                        <td style="padding: 10px 0; color: #f3e8ff; font-size: 14px; font-weight: 700;">{$subject}</td>
                                    </tr>
                                </table>
                            </div>
                            
                            <!-- Section message -->
                            <div style="margin-bottom: 30px;">
                                <h2 class="info-title" style="margin: 0 0 16px 0; color: #e9d5ff; font-size: 17px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px; display: flex; align-items: center; gap: 10px;">
                                    <span style="font-size: 18px; margin-right: 10px;">💬</span> Message
                                </h2>
                                <div class="message-box" style="background: linear-gradient(135deg, #2e1a47 0%, #25142f 100%); border-radius: 18px; padding: 24px; border: 1px solid rgba(139, 92, 246, 0.4);">
                                    <p style="margin: 0; color: #e0e7ff; font-size: 15px; line-height: 1.8; white-space: pre-wrap; word-wrap: break-word;">{$message}</p>
                                </div>
                            </div>
                            
                            <!-- Bouton d'action -->
                            <div style="text-align: center; margin: 40px 0 0 0;">
                                <a href="mailto:{$email}?subject=Re: {$subject}" class="button-action" style="display: inline-block; background: linear-gradient(135deg, #a78bfa 0%, #8b5cf6 50%, #7c3aed 100%); color: #ffffff; text-decoration: none; padding: 16px 40px; border-radius: 12px; font-weight: 700; font-size: 15px; box-shadow: 0 10px 30px rgba(168, 85, 247, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.2); text-transform: uppercase; letter-spacing: 0.5px; transition: all 0.3s;">
                                    📧 Répondre
                                </a>
                            </div>
                            
                        </td>
                    </tr>
                    
                    <!-- Footer -->
                    <tr>
                        <td class="footer-section" style="background: linear-gradient(135deg, #1a0f2e 0%, #16061f 100%); padding: 28px 30px; text-align: center; border-top: 1px solid rgba(139, 92, 246, 0.2);">
                            <p style="margin: 0 0 8px 0; color: #a78bfa; font-size: 13px; font-weight: 500;">
                                Envoyé depuis votre formulaire de contact
                            </p>
                            <p style="margin: 0; color: #6d28d9; font-size: 11px; font-weight: 600;">
                                © 2025 Esteban Racine Portfolio
                            </p>
                        </td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
HTML;

$headers   = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: Portfolio Esteban Racine <no-reply@localhost>';
$headers[] = 'Reply-To: ' . $email;

$sent = @mail($to, $fullSubject, $body, implode("\r\n", $headers));

if ($sent) {
	echo json_encode(['ok' => true]);
} else {
	echo json_encode(['ok' => false, 'error' => "L'envoi a échoué. Vous pouvez envoyer un mail manuellement à esteban.racineecole@gmail.com."]);
}
