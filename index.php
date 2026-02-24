<!doctype html>
<html lang="en-GB">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>MartyrsFest — 22–24 May 2026</title>
  <meta name="description" content="MartyrsFest — Bank Holiday outdoor festival at Penydarren Park Stadium. 22–24 May 2026." />

  <!-- Adobe Fonts (Brandon Grotesque) -->
  <!-- Replace YOUR_KIT_ID with your Adobe Fonts kit id -->
  <link rel="preconnect" href="https://use.typekit.net" crossorigin>
  <link rel="stylesheet" href="https://use.typekit.net/loh1dbq.css">

  <style>
    :root{
      --bg: #0b0b0b;
      --fg: #ffffff;
      --muted: rgba(255,255,255,.75);
      --muted2: rgba(255,255,255,.6);
      --card: rgba(255,255,255,.06);
      --border: rgba(255,255,255,.12);
      --max: 1160px;
      --radius: 18px;
    }

    *{ box-sizing:border-box; }
    html{ scroll-behavior:smooth; }
    body{
      margin:0;
      background:#070707;
      color:var(--fg);
      font-family: "brandon-grotesque", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      font-weight:400;
      line-height:1.5;
    }
    h1,h2,h3{
      font-family: "brandon-grotesque", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      font-weight:700;
      letter-spacing:.2px;
      margin:0 0 12px;
    }
    p{ margin:0 0 12px; color:var(--muted); }
    a{ color:inherit; text-decoration:none; }

    /* Sticky nav */
    .nav{
      position:sticky; top:0; z-index:50;
      background:#000;
      border-bottom:1px solid rgba(255,255,255,.08);
      backdrop-filter:saturate(120%) blur(10px);
    }
    .nav-inner{
      max-width:var(--max);
      margin:0 auto;
      display:grid;
      grid-template-columns: 220px 1fr 220px;
      align-items:center;
      gap:12px;
      padding:14px 18px;
    }
    .brand{
      display:flex; align-items:center; gap:12px;
      min-width:0;
    }
    .brand img{ height:30px; width:auto; display:block; }
    .brand span{
      font-weight:700; letter-spacing:.3px;
      white-space:nowrap; overflow:hidden; text-overflow:ellipsis;
    }
    .nav-links{
      display:flex;
      justify-content:center;
      gap:18px;
      flex-wrap:wrap;
    }
    .nav-links a{
      font-weight:700;
      font-size:13px;
      letter-spacing:.9px;
      opacity:.9;
      padding:10px 10px;
      border-radius:999px;
      transition: background .18s ease, opacity .18s ease, transform .18s ease;
    }
    .nav-links a:hover{
      background:rgba(255,255,255,.10);
      opacity:1;
      transform: translateY(-1px);
    }
    .nav-date{
      text-align:right;
      font-weight:700;
      font-size:13px;
      letter-spacing:.6px;
      opacity:.95;
      white-space:nowrap;
    }

    /* Layout sections */
    section{
      padding:78px 18px;
      border-bottom:1px solid rgba(255,255,255,.06);
    }
    .wrap{ max-width:var(--max); margin:0 auto; }

    /* Hero */
    .hero{
      padding-top:72px;
      background:
        radial-gradient(800px 420px at 15% 10%, rgba(255,255,255,.12), transparent 55%),
        radial-gradient(900px 520px at 85% 20%, rgba(255,255,255,.10), transparent 60%),
        linear-gradient(#070707, #050505);
    }
    .hero-grid{
      display:grid;
      grid-template-columns: 1.2fr .8fr;
      gap:26px;
      align-items:start;
    }
    .kicker{
      display:inline-flex;
      gap:10px;
      align-items:center;
      padding:8px 12px;
      border:1px solid var(--border);
      background:rgba(255,255,255,.06);
      border-radius:999px;
      color:var(--muted);
      font-size:13px;
      font-weight:700;
      letter-spacing:.6px;
      margin-bottom:14px;
    }
    .hero h1{
      font-size: clamp(34px, 4vw, 56px);
      line-height:1.04;
      margin-bottom:14px;
    }
    .hero .lead{
      font-size: clamp(16px, 1.35vw, 19px);
      color: rgba(255,255,255,.78);
      margin-bottom:18px;
      max-width:56ch;
    }
    .hero-cards{
      display:grid;
      gap:12px;
    }
    .card{
      border:1px solid var(--border);
      background:var(--card);
      border-radius:var(--radius);
      padding:16px 16px;
    }
    .card h3{ font-size:14px; letter-spacing:.8px; margin-bottom:6px; }
    .card p{ margin:0; font-size:14px; color:var(--muted2); }

    /* Day sections */
    .day-grid{
      display:grid;
      grid-template-columns: 1.05fr .95fr;
      gap:26px;
      align-items:start;
    }
    .pill{
      display:inline-block;
      padding:6px 10px;
      border-radius:999px;
      border:1px solid var(--border);
      background:rgba(255,255,255,.05);
      font-weight:700;
      font-size:12px;
      letter-spacing:1px;
      color:rgba(255,255,255,.82);
      margin-bottom:10px;
    }
    .meta{
      display:flex; flex-wrap:wrap; gap:10px;
      margin:14px 0 0;
      padding:0; list-style:none;
      color:var(--muted2);
      font-size:14px;
    }
    .meta li{
      border:1px solid rgba(255,255,255,.10);
      background:rgba(255,255,255,.04);
      border-radius:999px;
      padding:8px 12px;
    }

    #sunday{
      background:
        radial-gradient(700px 360px at 10% 20%, rgba(255, 138, 245, .30), transparent 60%),
        radial-gradient(850px 420px at 90% 80%, rgba(167, 109, 255, .26), transparent 62%),
        linear-gradient(140deg, #3b184f 0%, #5a2374 45%, #a7338a 100%);
    }

    /* Poster reveal animation */
    .poster{
      border-radius:var(--radius);
      overflow:hidden;
      border:1px solid rgba(255,255,255,.14);
      background:#0b0b0b;
      box-shadow: 0 20px 60px rgba(0,0,0,.35);
    }
    .poster img{
      width:100%;
      height:auto;
      display:block;
      transform: translateY(12px) scale(.985);
      opacity: 0;
      transition: transform .8s ease, opacity .8s ease;
      will-change: transform, opacity;
    }
    .poster.revealed img{
      transform: translateY(0) scale(1);
      opacity: 1;
    }

    /* Tickets */
    .tickets-grid{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:18px;
      align-items:start;
    }
    .widget-slot{
      border:1px dashed rgba(255,255,255,.25);
      border-radius:var(--radius);
      padding:18px;
      min-height:260px;
      background:rgba(255,255,255,.03);
      color:var(--muted2);
      display:flex;
      align-items:center;
      justify-content:center;
      text-align:center;
    }
    .btn{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      padding:12px 14px;
      border-radius:12px;
      border:1px solid rgba(255,255,255,.18);
      background:rgba(255,255,255,.08);
      font-weight:700;
      letter-spacing:.4px;
      transition: transform .18s ease, background .18s ease;
    }
    .btn:hover{ transform: translateY(-1px); background:rgba(255,255,255,.12); }

    /* FAQ */
    details{
      border:1px solid rgba(255,255,255,.12);
      background:rgba(255,255,255,.04);
      border-radius:14px;
      padding:14px 14px;
    }
    summary{
      cursor:pointer;
      font-weight:700;
      letter-spacing:.2px;
      list-style:none;
    }
    summary::-webkit-details-marker{ display:none; }
    details p{ margin-top:10px; }

    .faq{
      display:grid;
      gap:12px;
    }

    /* Footer */
    footer{
      background:#000;
      color:#fff;
      padding:26px 18px;
    }
    .footer-inner{
      max-width:var(--max);
      margin:0 auto;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:16px;
      flex-wrap:wrap;
      border-top:1px solid rgba(255,255,255,.10);
      padding-top:18px;
    }
    .footer-logos{
      display:flex; gap:14px; align-items:center;
    }
    .footer-logos img{ height:28px; width:auto; opacity:.95; }

    /* Responsive */
    @media (max-width: 900px){
      .nav-inner{ grid-template-columns: 1fr; gap:8px; text-align:center; }
      .brand{ justify-content:center; }
      .nav-date{ text-align:center; }
      .hero-grid, .day-grid, .tickets-grid{ grid-template-columns:1fr; }
      .nav-links{ gap:10px; }
    }
  </style>
</head>

<body>
  <!-- NAV -->
  <header class="nav">
    <div class="nav-inner">
      <a class="brand" href="#top" aria-label="MartyrsFest home">
        <img src="assets/logo-martyrsfest.svg" alt="MartyrsFest logo">
      </a>

      <nav class="nav-links" aria-label="Primary">
        <a href="#friday">FRIDAY</a>
        <a href="#saturday">SATURDAY</a>
        <a href="#sunday">SUNDAY</a>
        <a href="#tickets">TICKETS</a>
        <a href="#faqs">FAQ’s</a>
      </nav>

      <div class="nav-date">22–24 May 2026</div>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero" id="top">
    <div class="wrap">
      <div class="hero-grid">
        <div>
          <div class="kicker">BANK HOLIDAY • OUTDOOR FESTIVAL • PENYDARREN PARK</div>
          <h1>MartyrsFest is landing in Merthyr.</h1>
          <p class="lead">
            Three days of live music, community vibes, street food and big energy — inside an enclosed stadium site,
            with a strict 10pm curfew across the weekend.
          </p>
          <a class="btn" href="#tickets">Get tickets</a>
        </div>

        <div class="hero-cards">
          <div class="card">
            <h3>Location</h3>
            <p>Penydarren Park Stadium (enclosed site). :contentReference[oaicite:2]{index=2}</p>
          </div>
          <div class="card">
            <h3>Curfew</h3>
            <p>Strict 22:00 — all amplified sound stops. :contentReference[oaicite:3]{index=3}</p>
          </div>
          <div class="card">
            <h3>Capacity</h3>
            <p>Up to 2,000 (Fri/Sat), up to 1,500 (Sun). :contentReference[oaicite:4]{index=4}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FRIDAY -->
  <section id="friday">
    <div class="wrap">
      <div class="day-grid">
        <div>
          <span class="pill">FRIDAY</span>
          <h2>Kicking Country Night</h2>
          <p>
            Country night under the lights — live entertainment, licensed bars, and street food inside Penydarren Park.
            Curfew is 10pm sharp.
          </p>
          <ul class="meta">
            <li>Time: 6pm–10pm :contentReference[oaicite:5]{index=5}</li>
            <li>Curfew: 22:00 :contentReference[oaicite:6]{index=6}</li>
            <li>Re-entry: No (Fri/Sat) :contentReference[oaicite:7]{index=7}</li>
            <li>Under-18s: 16+ (with parent/guardian) :contentReference[oaicite:8]{index=8}</li>
          </ul>
        </div>

        <div class="poster js-reveal">
          <img src="assets/poster-friday.jpg" alt="Friday poster — Kicking Country Night">
        </div>
      </div>
    </div>
  </section>

  <!-- SATURDAY -->
  <section id="saturday">
    <div class="wrap">
      <div class="day-grid">
        <div>
          <span class="pill">SATURDAY</span>
          <h2>Vortex Day</h2>
          <p>
            Big Saturday session with licensed bars, street food, and a full entertainment programme.
          </p>
          <ul class="meta">
            <li>Time: 3pm–10pm :contentReference[oaicite:9]{index=9}</li>
            <li>Curfew: 22:00 :contentReference[oaicite:10]{index=10}</li>
            <li>Re-entry: No :contentReference[oaicite:11]{index=11}</li>
            <li>Age: 18+ for the Saturday event :contentReference[oaicite:12]{index=12}</li>
          </ul>
        </div>

        <div class="poster js-reveal">
          <img src="assets/poster-saturday.jpg" alt="Saturday poster — Vortex Day">
        </div>
      </div>
    </div>
  </section>

  <!-- SUNDAY -->
  <section id="sunday">
    <div class="wrap">
      <div class="day-grid">
        <div>
          <span class="pill">SUNDAY</span>
          <h2>Family Entertainment + Community Day</h2>
          <p>
            A family-focused day featuring charity football, live bands, street food, and family entertainment.
          </p>
          <ul class="meta">
            <li>Charity football + live bands :contentReference[oaicite:13]{index=13}</li>
            <li>Street food + family entertainment :contentReference[oaicite:14]{index=14}</li>
            <li>Sunday capacity: 1,500 :contentReference[oaicite:15]{index=15}</li>
            <li>Family ticketing + under-18 wristbands :contentReference[oaicite:16]{index=16}</li>
          </ul>

          <div class="card" style="margin-top:14px;">
            <h3>Sunday ticket guide</h3>
            <p>Adults: £17.50 • Children: £5 • Families: £40 :contentReference[oaicite:17]{index=17}</p>
          </div>
        </div>

        <div class="poster js-reveal">
          <img src="assets/poster-sunday.jpg" alt="Sunday poster — Family & Community Day">
        </div>
      </div>
    </div>
  </section>

  <!-- TICKETS -->
  <section id="tickets">
    <div class="wrap">
      <h2>Tickets</h2>
      <p>Tickets are online-only. Wristbands issued on entry. :contentReference[oaicite:18]{index=18}</p>

      <div class="tickets-grid" style="margin-top:14px;">
        <div class="card">
          <h3>Buy via See Tickets</h3>
          <p>
            Drop your See Tickets embed code into the widget slot on the right.
            If you want, I’ll wire it up once you paste the exact widget snippet/URL.
          </p>
          <p style="margin-top:10px; color:rgba(255,255,255,.7); font-size:14px;">
            Tip: keep the widget in an iframe container and set a min-height around 600–900px depending on their embed.
          </p>
        </div>

        <div class="widget-slot" aria-label="Seetickets widget slot">
          <div>
            <div style="font-weight:700; letter-spacing:.5px; margin-bottom:6px;">SEE TICKETS WIDGET</div>
            <div style="font-size:14px; color:rgba(255,255,255,.65);">
              Paste embed code here (iframe/script).
            </div>

            <!-- Example (replace with real embed):
            <iframe src="https://www.seetickets.com/..." width="100%" height="720" frameborder="0"></iframe>
            -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faqs">
    <div class="wrap">
      <h2>FAQ’s</h2>

      <div class="faq" style="margin-top:14px;">
        <details>
          <summary>What time does the event finish each night?</summary>
          <p>There’s a strict 22:00 curfew — all music and amplified sound stops at 10pm. :contentReference[oaicite:19]{index=19}</p>
        </details>

        <details>
          <summary>Is re-entry allowed?</summary>
          <p>Friday and Saturday: no re-entry. Sunday: may be allowed at management discretion. :contentReference[oaicite:20]{index=20}</p>
        </details>

        <details>
          <summary>What are the age restrictions?</summary>
          <p>
            Saturday is 18+ only. Friday is 16+ and under-18s must be accompanied by a parent/legal guardian.
            Sunday is family-focused with adult/child tickets and under-18 wristbands. :contentReference[oaicite:21]{index=21}
          </p>
        </details>

        <details>
          <summary>How is alcohol managed?</summary>
          <p>
            Challenge 25 is enforced. Wristbands help identify under/over 18s, but ID checks still apply. :contentReference[oaicite:22]{index=22}
          </p>
        </details>

        <details>
          <summary>What’s the venue setup?</summary>
          <p>
            Enclosed stadium site, single entry point and two exit points. Stage max 10m x 5m. :contentReference[oaicite:23]{index=23}
          </p>
        </details>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-inner">
      <div style="opacity:.9; font-size:14px;">
        © MartyrsFest • Penydarren Park • 22–24 May 2026
      </div>
      <div class="footer-logos" aria-label="Partner logos">
        <img src="assets/logo-merthyr-town.svg" alt="Merthyr Town FC logo">
        <img src="assets/logo-vortex.svg" alt="Vortex logo">
      </div>
    </div>
  </footer>

  <script>
    // Poster reveal on scroll
    const targets = document.querySelectorAll(".js-reveal");
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          entry.target.classList.add("revealed");
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.22 });

    targets.forEach(t => io.observe(t));

    // Optional: highlight active nav link (simple)
    const sections = ["friday","saturday","sunday","tickets","faqs"].map(id => document.getElementById(id));
    const links = Array.from(document.querySelectorAll(".nav-links a"));
    const io2 = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          links.forEach(a => a.style.background = "transparent");
          const active = links.find(a => a.getAttribute("href") === "#" + entry.target.id);
          if(active) active.style.background = "rgba(255,255,255,.10)";
        }
      });
    }, { threshold: 0.35 });

    sections.forEach(s => s && io2.observe(s));
  </script>
</body>
</html>
