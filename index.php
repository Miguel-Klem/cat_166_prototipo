<?php
/* =========================================================
   CAT SESI - Protótipo (Atividade de Retorno às Aulas)
   Este arquivo é o FRONT: HTML + CSS, com PHP só organizando
   o conteúdo em listas (arrays) pra não repetir código.
   ========================================================= */

$esportes = [
    ['titulo' => 'Piscina semi-olímpica', 'img' => 'esporte-1.jpg', 'texto' => 'Água aquecida a no mínimo 21°C, com aulas e horário livre para nadar.'],
    ['titulo' => 'Piscinas recreativas', 'img' => 'esporte-2.jpg', 'texto' => 'Espaço de lazer aquático para a família toda, com área infantil.'],
    ['titulo' => 'Quadras poliesportivas', 'img' => 'esporte-3.jpg', 'texto' => 'Futsal, vôlei, basquete e handebol na mesma quadra.'],
    ['titulo' => 'Academia de musculação', 'img' => 'esporte-4.jpg', 'texto' => 'Equipamentos completos, disponíveis nos planos Musculação e Plus.'],
    ['titulo' => 'Playground', 'img' => 'esporte-5.jpg', 'texto' => 'Área de brinquedos pensada para crianças de 4 a 12 anos.'],
    ['titulo' => 'Aulas e modalidades', 'img' => 'esporte-6.jpg', 'texto' => 'Ginástica coletiva, alongamento, hidroginástica e pilates.'],
];

$cursos = [
    ['titulo' => 'Teatro', 'img' => 'educacao-1.jpg', 'texto' => 'Turmas abertas por ordem de matrícula, com certificado para quem cumprir 75% de frequência.'],
    ['titulo' => 'Dança', 'img' => 'educacao-2.jpg', 'texto' => 'Aulas em grupo para diferentes idades, sem necessidade de experiência prévia.'],
    ['titulo' => 'Música instrumental e cordas', 'img' => 'educacao-3.jpg', 'texto' => 'Quem já toca um instrumento pode ingressar a qualquer momento, mediante avaliação.'],
];

$depoimentos = [
    ['nome' => 'Fabio Yonashiro', 'papel' => 'Pai de aluno', 'foto' => 'depoimento-1.jpg', 'texto' => 'Meu filho treina natação e faz teatro no mesmo lugar. Eu não preciso rodar a cidade inteira.'],
    ['nome' => 'Rogério( Rô ) Lima', 'papel' => 'Sócio Plano Plus', 'foto' => 'depoimento-2.jpg', 'texto' => 'Uso a academia de manhã e jogo vôlei à noite. O CAT virou parte da minha rotina.'],
    ['nome' => 'André Luiz Denani', 'papel' => 'Aluno de música', 'foto' => 'depoimento-3.jpg', 'texto' => 'Comecei no curso de percursão sem saber nada e hoje já toco bateria em apresentações em bares.'],
];

$galeria = ['galeria-1.jpg','galeria-2.jpg','galeria-3.jpg','galeria-4.jpg','galeria-5.jpg','galeria-6.jpg'];

$planos = [
    [
        'nome' => 'Básico', 'cor' => '#1E8A8A',
        'beneficios' => ['Acesso ao CAT SESI' => true, 'Piscina' => true, 'Áreas de lazer' => true, 'Quadras poliesportivas' => true, 'Academia de musculação' => false, 'Aulas coletivas' => false],
        'industria' => ['individual' => 'R$ 44,00', 'familiar' => 'R$ 83,00'],
        'geral' => ['individual' => 'R$ 72,00', 'familiar' => 'R$ 126,00'],
    ],
    [
        'nome' => 'Musculação', 'cor' => '#9C2AA0',
        'beneficios' => ['Acesso ao CAT SESI' => true, 'Piscina' => true, 'Áreas de lazer' => true, 'Quadras poliesportivas' => true, 'Academia de musculação' => true, 'Aulas coletivas' => true],
        'industria' => ['individual' => 'R$ 120,00', 'familiar' => null],
        'geral' => ['individual' => 'R$ 138,00', 'familiar' => null],
    ],
    [
        'nome' => 'Plus', 'cor' => '#D4A017',
        'beneficios' => ['Acesso ao CAT SESI' => true, 'Piscina' => true, 'Áreas de lazer' => true, 'Quadras poliesportivas' => true, 'Academia de musculação' => true, 'Aulas coletivas' => true],
        'industria' => ['individual' => null, 'familiar' => 'R$ 256,00'],
        'geral' => ['individual' => null, 'familiar' => 'R$ 312,00'],
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CAT SESI Santo André | Esporte e Educação</title>
<link rel="icon" href="images/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --vermelho:#E30613;
    --preto:#111111;
    --creme:#F3F1EA;
    --branco:#FFFFFF;
    --cinza:#6B6B66;
    --linha:rgba(17,17,17,.14);
  }
  *{box-sizing:border-box;margin:0;padding:0;}
  html{scroll-behavior:smooth;}
  body{font-family:'Inter',sans-serif;color:var(--preto);background:var(--branco);line-height:1.55;}
  h1,h2,h3{font-family:'Anton',sans-serif;font-weight:400;letter-spacing:.3px;line-height:1.05;}
  a{color:inherit;text-decoration:none;}
  img{max-width:100%;display:block;}
  .container{max-width:1120px;margin:0 auto;padding:0 24px;}
  .btn{display:inline-block;background:var(--vermelho);color:#fff;padding:14px 28px;border-radius:3px;font-weight:600;border:none;cursor:pointer;font-size:15px;transition:transform .15s ease, background .15s ease;}
  .btn:hover{background:#B90510;transform:translateY(-1px);}
  .btn-outline{background:transparent;border:2px solid var(--preto);color:var(--preto);}
  .btn-outline:hover{background:var(--preto);color:#fff;}
  section{padding:88px 0;}
  .titulo-secao{font-size:38px;max-width:560px;margin-bottom:14px;}
  .subtitulo-secao{color:var(--cinza);max-width:520px;margin-bottom:48px;font-size:16px;}
  .barra{width:56px;height:5px;background:var(--vermelho);margin-bottom:22px;}

  /* ---------- TOPO ---------- */
  .topo-fita{background:var(--vermelho);color:#fff;font-size:13px;}
  .topo-fita .container{display:flex;justify-content:flex-end;gap:18px;padding-top:7px;padding-bottom:7px;}
  .topo-fita a{opacity:.9;}
  .topo-fita a:hover{opacity:1;text-decoration:underline;}

  header.principal{border-bottom:1px solid var(--linha);position:sticky;top:0;background:#fff;z-index:50;}
  nav.wrap{display:flex;align-items:center;justify-content:space-between;padding:16px 0;}
  .marca{display:flex;align-items:center;gap:12px;}
  .marca img{height:40px;}
  .marca .nome{font-family:'Anton',sans-serif;font-size:18px;line-height:1;}
  .marca .nome span{display:block;font-family:'Inter',sans-serif;font-size:11px;font-weight:600;color:var(--cinza);letter-spacing:.5px;}
  .menu{display:flex;gap:28px;list-style:none;}
  .menu a{font-size:14px;font-weight:600;}
  .menu a:hover{color:var(--vermelho);}
  .nav-cta{display:flex;align-items:center;gap:24px;}

  /* ---------- ALERTAS DO FORM ---------- */
  .alerta{padding:14px 18px;border-radius:3px;font-size:14px;margin-bottom:22px;font-weight:600;}
  .alerta.sucesso{background:#E7F5EE;color:#146C43;border:1px solid #146C43;}
  .alerta.erro{background:#FBEAEA;color:var(--vermelho);border:1px solid var(--vermelho);}

  /* ---------- HERO ---------- */
  .hero{background:var(--creme);padding:90px 0 70px;overflow:hidden;position:relative;}
  .hero .container{display:grid;grid-template-columns:1.1fr .9fr;gap:40px;align-items:center;}
  .hero h1{font-size:56px;}
  .hero h1 .destaque{color:var(--vermelho);}
  .hero p{margin:22px 0 30px;color:var(--cinza);font-size:17px;max-width:460px;}
  .stats{display:flex;gap:26px;margin-top:44px;flex-wrap:wrap;}
  .stats div{border-left:3px solid var(--vermelho);padding-left:12px;font-size:13.5px;color:var(--preto);max-width:150px;font-weight:600;}
  .hero-arte{width:100%;height:auto;}

  /* ---------- ESPORTES / EDUCAÇÃO (grid de cards) ---------- */
  .grid-cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:26px;}
  .card{border:1px solid var(--linha);border-radius:3px;overflow:hidden;background:#fff;}
  .card .foto{width:100%;aspect-ratio:3/2;object-fit:cover;background:var(--creme);}
  .card .corpo{padding:20px 22px 24px;}
  .card h3{font-size:19px;margin-bottom:8px;font-family:'Inter',sans-serif;font-weight:700;}
  .card p{font-size:14.5px;color:var(--cinza);}

  .secao-escura{background:var(--preto);color:#fff;}
  .secao-escura .subtitulo-secao{color:#c9c9c6;}
  .secao-escura .card{background:#181818;border-color:rgba(255,255,255,.14);}
  .secao-escura .card p{color:#b9b9b6;}

  /* ---------- DEPOIMENTOS ---------- */
  .grid-depo{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:26px;}
  .depo{border:1px solid var(--linha);border-radius:3px;padding:26px;}
  .depo .quem{display:flex;align-items:center;gap:14px;margin-top:18px;}
  .depo img{width:48px;height:48px;border-radius:50%;object-fit:cover;background:var(--creme);}
  .depo .quem strong{display:block;font-size:14.5px;}
  .depo .quem span{font-size:13px;color:var(--cinza);}
  .depo p.fala{font-size:15.5px;}
  .depo p.fala::before{content:"“";color:var(--vermelho);font-family:'Anton',sans-serif;font-size:26px;}

  /* ---------- GALERIA ---------- */
  .grid-galeria{display:grid;grid-template-columns:repeat(3,1fr);gap:12px;}
  .grid-galeria img{width:100%;height:230px;object-fit:cover;border-radius:3px;background:var(--creme);}

  /* ---------- PLANOS ---------- */
  .grid-planos{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:26px;}
  .plano{border:1px solid var(--linha);border-radius:3px;overflow:hidden;}
  .plano .topo-plano{padding:22px 24px;color:#fff;}
  .plano .topo-plano h3{font-size:26px;font-family:'Anton',sans-serif;}
  .plano ul.beneficios{list-style:none;padding:22px 24px 6px;}
  .plano ul.beneficios li{display:flex;align-items:center;gap:10px;font-size:14.5px;padding:7px 0;border-bottom:1px solid var(--linha);}
  .plano ul.beneficios li:last-child{border-bottom:none;}
  .marca-sim{color:#1E8A8A;font-weight:700;}
  .marca-nao{color:#c2c2c2;font-weight:700;}
  .precos-plano{padding:18px 24px 26px;background:var(--creme);}
  .precos-plano h4{font-size:12.5px;text-transform:uppercase;letter-spacing:.6px;color:var(--cinza);margin:14px 0 6px;font-family:'Inter',sans-serif;font-weight:700;}
  .precos-plano h4:first-child{margin-top:0;}
  .linha-preco{display:flex;justify-content:space-between;font-size:14.5px;padding:3px 0;}
  .linha-preco b{font-family:'Inter',sans-serif;}

  /* ---------- CONTATO ---------- */
  .grid-contato{display:grid;grid-template-columns:1fr 1fr;gap:50px;}
  .info-contato p{margin-bottom:16px;font-size:15px;}
  .info-contato strong{display:block;font-size:12.5px;text-transform:uppercase;letter-spacing:.5px;color:var(--vermelho);margin-bottom:3px;}
  .redes{display:flex;gap:14px;margin-top:20px;}
  .redes a{width:42px;height:42px;border:1px solid var(--linha);border-radius:50%;display:flex;align-items:center;justify-content:center;}
  .redes a:hover{background:var(--vermelho);border-color:var(--vermelho);color:#fff;}
  form.form-contato label{display:block;font-size:13px;font-weight:600;margin-bottom:6px;margin-top:16px;}
  form.form-contato label:first-child{margin-top:0;}
  form.form-contato input,form.form-contato textarea{width:100%;padding:12px 14px;border:1px solid var(--linha);border-radius:3px;font-family:'Inter',sans-serif;font-size:14.5px;}
  form.form-contato textarea{resize:vertical;min-height:110px;}
  form.form-contato .btn{margin-top:20px;width:100%;}

  footer{background:var(--preto);color:#c9c9c6;padding:36px 0;font-size:13.5px;}
  footer .container{display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;}

  @media(max-width:820px){
    .hero .container{grid-template-columns:1fr;}
    .hero-arte{display:none;}
    .grid-contato{grid-template-columns:1fr;}
    .grid-galeria{grid-template-columns:repeat(2,1fr);}
    .menu{display:none;}
    .hero h1{font-size:40px;}
  }
</style>
</head>
<body>

<div class="topo-fita">
  <div class="container">
    <a href="tel:+551149968600">(11) 4996-8600</a>
    <a href="https://www.instagram.com/sesisp.santoandre" target="_blank">Instagram</a>
    <a href="https://www.facebook.com/sesisantoandre" target="_blank">Facebook</a>
  </div>
</div>

<header class="principal">
  <div class="container">
    <nav class="wrap">
      <a href="#inicio" class="marca">
        <img src="images/logo.png" alt="Logo SESI">
        <span class="nome">CAT SESI<span>SANTO ANDRÉ</span></span>
      </a>
      <ul class="menu">
        <li><a href="#esportiva">Esporte</a></li>
        <li><a href="#educacao">Educação</a></li>
        <li><a href="#depoimentos">Depoimentos</a></li>
        <li><a href="#galeria">Galeria</a></li>
        <li><a href="#planos">Planos</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
      <div class="nav-cta">
        <a href="#planos" class="btn">Associe-se</a>
      </div>
    </nav>
  </div>
</header>

<section class="hero" id="inicio">
  <div class="container">
    <div>
      <h1>Seu centro de <span class="destaque">atividades</span> para esporte e lazer</h1>
      <p>Piscinas, quadras, academia e cursos de cultura no mesmo lugar. Conheça o CAT SESI Santo André e associe sua família.</p>
      <a href="#contato" class="btn">Quero me associar</a>
      <div class="stats">
        <div>Piscina semi-olímpica e recreativas</div>
        <div>Quadras poliesportivas</div>
        <div>Academia e aulas coletivas</div>
      </div>
    </div>
    <svg class="hero-arte" viewBox="0 0 420 380" xmlns="http://www.w3.org/2000/svg">
      <ellipse cx="210" cy="120" rx="150" ry="60" fill="none" stroke="#E30613" stroke-width="2"/>
      <ellipse cx="210" cy="120" rx="110" ry="42" fill="none" stroke="#E30613" stroke-width="1" opacity=".6"/>
      <rect x="60" y="200" width="140" height="90" fill="none" stroke="#111111" stroke-width="2"/>
      <line x1="130" y1="200" x2="130" y2="290" stroke="#111111" stroke-width="1"/>
      <path d="M40 320 q15 -14 30 0 t30 0 t30 0 t30 0" fill="none" stroke="#1E8A8A" stroke-width="2"/>
      <path d="M40 340 q15 -14 30 0 t30 0 t30 0 t30 0" fill="none" stroke="#1E8A8A" stroke-width="2"/>
      <circle cx="330" cy="260" r="46" fill="none" stroke="#D4A017" stroke-width="2"/>
      <line x1="330" y1="214" x2="330" y2="306" stroke="#D4A017" stroke-width="1"/>
      <line x1="284" y1="260" x2="376" y2="260" stroke="#D4A017" stroke-width="1"/>
    </svg>
  </div>
</section>

<section id="esportiva">
  <div class="container">
    <div class="barra"></div>
    <h2 class="titulo-secao">Esporte é aqui</h2>
    <p class="subtitulo-secao">Piscinas, quadras e academia para todas as idades — sozinho, em família ou com a turma.</p>
    <div class="grid-cards">
      <?php foreach ($esportes as $e): ?>
      <div class="card">
        <img class="foto" src="images/<?php echo $e['img']; ?>" alt="<?php echo htmlspecialchars($e['titulo']); ?>">
        <div class="corpo">
          <h3><?php echo htmlspecialchars($e['titulo']); ?></h3>
          <p><?php echo htmlspecialchars($e['texto']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="educacao" class="secao-escura">
  <div class="container">
    <div class="barra"></div>
    <h2 class="titulo-secao">Também é escola</h2>
    <p class="subtitulo-secao">Cursos de cultura do SESI, abertos por ordem de matrícula, com certificado para quem cumpre a frequência mínima.</p>
    <div class="grid-cards">
      <?php foreach ($cursos as $c): ?>
      <div class="card">
        <img class="foto" src="images/<?php echo $c['img']; ?>" alt="<?php echo htmlspecialchars($c['titulo']); ?>">
        <div class="corpo">
          <h3><?php echo htmlspecialchars($c['titulo']); ?></h3>
          <p><?php echo htmlspecialchars($c['texto']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="depoimentos">
  <div class="container">
    <div class="barra"></div>
    <h2 class="titulo-secao">Quem já é de casa</h2>
    <p class="subtitulo-secao">Depoimentos de sócios do CAT SESI Santo André.</p>
    <div class="grid-depo">
      <?php foreach ($depoimentos as $d): ?>
      <div class="depo">
        <p class="fala"><?php echo htmlspecialchars($d['texto']); ?></p>
        <div class="quem">
          <img src="images/<?php echo $d['foto']; ?>" alt="<?php echo htmlspecialchars($d['nome']); ?>">
          <div>
            <strong><?php echo htmlspecialchars($d['nome']); ?></strong>
            <span><?php echo htmlspecialchars($d['papel']); ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="galeria" class="secao-escura">
  <div class="container">
    <div class="barra"></div>
    <h2 class="titulo-secao">Um giro pelas instalações</h2>
    <p class="subtitulo-secao">Fotos reais tiradas pelos líderes de grupo dentro do CAT.</p>
    <div class="grid-galeria">
      <?php foreach ($galeria as $g): ?>
        <img src="images/<?php echo $g; ?>" alt="Foto das instalações do CAT SESI">
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="planos">
  <div class="container">
    <div class="barra"></div>
    <h2 class="titulo-secao">Planos e valores</h2>
    <p class="subtitulo-secao">Valores diferentes para Trabalhador da Indústria (beneficiário SESI) e Público Geral.</p>
    <div class="grid-planos">
      <?php foreach ($planos as $p): ?>
      <div class="plano">
        <div class="topo-plano" style="background:<?php echo $p['cor']; ?>;">
          <h3><?php echo htmlspecialchars($p['nome']); ?></h3>
        </div>
        <ul class="beneficios">
          <?php foreach ($p['beneficios'] as $nome => $incluso): ?>
          <li>
            <span class="<?php echo $incluso ? 'marca-sim' : 'marca-nao'; ?>"><?php echo $incluso ? '✓' : '✕'; ?></span>
            <?php echo htmlspecialchars($nome); ?>
          </li>
          <?php endforeach; ?>
        </ul>
        <div class="precos-plano">
          <h4>Trabalhador da indústria</h4>
          <div class="linha-preco"><span>Individual</span><b><?php echo $p['industria']['individual'] ?? 'Consulte a unidade'; ?></b></div>
          <div class="linha-preco"><span>Familiar</span><b><?php echo $p['industria']['familiar'] ?? 'Consulte a unidade'; ?></b></div>
          <h4>Público geral</h4>
          <div class="linha-preco"><span>Individual</span><b><?php echo $p['geral']['individual'] ?? 'Consulte a unidade'; ?></b></div>
          <div class="linha-preco"><span>Familiar</span><b><?php echo $p['geral']['familiar'] ?? 'Consulte a unidade'; ?></b></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section id="contato" class="secao-escura">
  <div class="container">
    <div class="barra"></div>
    <h2 class="titulo-secao">Vem pra cá</h2>
    <p class="subtitulo-secao">Fale com a gente e venha conhecer o CAT SESI Santo André.</p>

    <?php if (isset($_GET['enviado'])): ?>
      <div class="alerta sucesso">Mensagem enviada! Em breve entraremos em contato.</div>
    <?php elseif (isset($_GET['erro'])): ?>
      <div class="alerta erro">Preencha nome, e-mail válido e mensagem antes de enviar.</div>
    <?php endif; ?>

    <div class="grid-contato">
      <div class="info-contato">
        <p><strong>Endereço</strong>Praça Dr. Armando de Arruda Pereira, 100 — Santa Terezinha, Santo André - SP, CEP 09210-550</p>
        <p><strong>Telefone</strong><a href="tel:+551149968600">(11) 4996-8600</a></p>
        <p><strong>E-mail</strong><a href="mailto:susandre@sesisp.org.br">susandre@sesisp.org.br</a></p>
        <p><strong>Horário da secretaria</strong>Terça a sexta: 8h às 11h30 e 14h às 19h<br>Sábados: 8h30 às 13h<br>Domingos e feriados: fechado</p>
        <div class="redes">
          <a href="https://www.instagram.com/sesisp.santoandre" target="_blank" title="Instagram">IG</a>
          <a href="https://www.facebook.com/sesisantoandre" target="_blank" title="Facebook">FB</a>
          <a href="https://santoandre.sesisp.org.br/home" target="_blank" title="Site oficial">WEB</a>
        </div>
      </div>
      <form class="form-contato" action="processa_contato.php" method="POST">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
        <label for="telefone">Telefone (opcional)</label>
        <input type="text" id="telefone" name="telefone">
        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" required></textarea>
        <button type="submit" class="btn">Enviar mensagem</button>
      </form>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <span>CAT SESI Santo André — protótipo criado para a Atividade de Retorno às Aulas.</span>
    <span>#Vempro CATSESI</span>
  </div>
</footer>

</body>
</html>
