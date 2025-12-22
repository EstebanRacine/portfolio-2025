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
$body        = "Nom: {$fn} {$ln}\nEmail: {$email}\nSujet: {$subject}\n\nMessage:\n{$message}\n";

$headers   = [];
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/plain; charset=utf-8';
$headers[] = 'From: Portfolio <no-reply@localhost>';
$headers[] = 'Reply-To: ' . $email;

$sent = @mail($to, $fullSubject, $body, implode("\r\n", $headers));

if ($sent) {
	echo json_encode(['ok' => true]);
} else {
	echo json_encode(['ok' => false, 'error' => "L'envoi a échoué. Vous pouvez envoyer un mail manuellement à esteban.racineecole@gmail.com."]);
}
