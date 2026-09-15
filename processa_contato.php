<?php
/* =========================================================
   CAT SESI - Protótipo (Atividade de Retorno às Aulas)
   Este arquivo é o BACK: recebe o formulário de contato,
   valida os dados e salva num arquivo local (dados/contatos.txt).
   Isso mostra o PHP funcionando "de verdade" sem precisar
   configurar um servidor de e-mail para a apresentação.
   ========================================================= */

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html');
    exit;
}

// Pega os dados do formulário e remove espaços em branco nas pontas
$nome      = trim($_POST['nome'] ?? '');
$email     = trim($_POST['email'] ?? '');
$telefone  = trim($_POST['telefone'] ?? '');
$mensagem  = trim($_POST['mensagem'] ?? '');

// Validação simples
$valido = true;
if ($nome === '') {
    $valido = false;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $valido = false;
}
if ($mensagem === '') {
    $valido = false;
}

if (!$valido) {
    header('Location: index.html?erro=1#contato');
    exit;
}

// Pasta onde os contatos ficam salvos (criada automaticamente se não existir)
$pastaDados = __DIR__ . '/dados';
if (!is_dir($pastaDados)) {
    mkdir($pastaDados, 0755, true);
}

// Monta uma linha de texto com os dados, protegendo contra quebras de linha indevidas
$linha = sprintf(
    "%s | %s | %s | %s | %s%s",
    date('d/m/Y H:i:s'),
    $nome,
    $email,
    $telefone !== '' ? $telefone : '-',
    str_replace(["\r", "\n"], ' ', $mensagem),
    PHP_EOL
);

// Salva no arquivo (cria o arquivo se não existir, e vai acumulando os contatos)
file_put_contents($pastaDados . '/contatos.txt', $linha, FILE_APPEND | LOCK_EX);

// Volta para a página inicial, direto na seção de contato, com aviso de sucesso
header('Location: index.html?enviado=1#contato');
exit;
