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
    h2 {
        font-size: 42px;
    }
    p{ font-size:18px; margin:0 0 12px; color:var(--muted); }
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
      display:flex;
      flex-direction:column;
      align-items:flex-end;
      gap:3px;
      font-weight:700;
      font-size:13px;
      letter-spacing:.6px;
      opacity:.95;
      white-space:normal;
    }
    .nav-date-item{
      display:inline-flex;
      align-items:center;
      gap:6px;
    }
    .nav-icon{
      width:14px;
      height:14px;
      fill:currentColor;
      flex:0 0 auto;
    }

    /* Layout sections */
    section{
      padding:78px 18px;
      border-bottom:1px solid rgba(255,255,255,.06);
    }
    .wrap{ max-width:var(--max); margin:0 auto; }

    /* Hero */
    .hero{
      min-height:80vh;
      display:flex;
      align-items:center;
      padding-top:72px;
      background:
        linear-gradient(rgba(7, 7, 7, 0.39), rgba(5, 5, 5, 0.28)),
        url('assets/pp-banner.jpeg') center/cover no-repeat;
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
      font-size: clamp(34px, 4vw, 65px);
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
      font-size:20px;
      letter-spacing:1px;
      color:rgba(255,255,255,.82);
      margin-bottom:10px;
    }
    .meta{
      margin:16px 0 0;
      padding:0;
      list-style:none;
      color:var(--muted2);
      font-size:18px;
      display:grid;
      gap:10px;
    }
    .meta li{
      display:flex;
      align-items:flex-start;
      gap:10px;
      padding:4px 0;
    }
    .meta li::before{
      content:"✓";
      font-weight:700;
      color:#7df3a8;
      line-height:1.3;
    }

    #sunday{
      background:
        radial-gradient(700px 360px at 10% 20%, rgba(255, 138, 245, .30), transparent 60%),
        radial-gradient(850px 420px at 90% 80%, rgba(167, 109, 255, .26), transparent 62%),
        linear-gradient(140deg, #3b184f 0%, #5a2374 45%, #a7338a 100%);
    }

    #saturday{
      background-color:#89D3F4;
      color:#0e2233;
    }
    #saturday p{
      color:rgba(14,34,51,.88);
    }
    #saturday .pill{
      border-color:rgba(14,34,51,.28);
      background:rgba(14,34,51,.08);
      color:#0e2233;
    }
    #saturday .meta{
      color:rgba(14,34,51,.92);
    }
    #saturday .meta li::before{
      color:#0d7a4c;
    }

    #friday{
      background:
        radial-gradient(760px 360px at 8% 16%, rgba(255, 174, 93, .22), transparent 62%),
        radial-gradient(900px 440px at 88% 86%, rgba(128, 77, 33, .28), transparent 64%),
        linear-gradient(140deg, #4b2c18 0%, #7a4522 42%, #b77232 100%);
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
      grid-template-columns: repeat(3, 1fr);
      gap:18px;
      align-items:start;
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

    .day-actions{
      margin-top:16px;
    }

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
    details ul{ margin:8px 0 0 20px; padding:0; }
    details li{ margin-bottom:4px; }

    .faq{
      display:grid;
      gap:12px;
    }
    .faq-layout{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:28px;
      align-items:start;
    }
    .info-card{
      border:1px solid rgba(255,255,255,.12);
      background:rgba(255,255,255,.04);
      border-radius:14px;
      padding:18px;
    }
    .info-card h3{
      font-weight:700;
      letter-spacing:.2px;
      margin-bottom:10px;
    }
    .info-card p, .info-card ul{ margin-top:8px; }
    .info-card ul{ margin-left:20px; padding:0; }
    .info-card li{ margin-bottom:4px; }
    .info-card a{ text-decoration:underline; text-underline-offset:3px; }
    .info-section + .info-section{ margin-top:18px; }

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
      .nav-date{ display:none; }
      .hero-grid, .day-grid, .tickets-grid, .faq-layout{ grid-template-columns:1fr; }
      .nav-links{ gap:10px; }
      .nav-links a{
        font-size:11px;
        letter-spacing:.65px;
        padding:8px 7px;
      }
    }
  </style>
</head>

<body>
  <!-- NAV -->
  <header class="nav">
    <div class="nav-inner">
      <a class="brand" href="#top" aria-label="MartyrsFest home">
        <img src="assets/logo-martyrsfest.png" alt="MartyrsFest logo">
      </a>

      <nav class="nav-links" aria-label="Primary">
        <a href="#friday">FRIDAY</a>
        <a href="#saturday">SATURDAY</a>
        <a href="#sunday">SUNDAY</a>
        <a href="#tickets">TICKETS</a>
        <a href="#faqs">FAQ’s</a>
      </nav>

      <div class="nav-date" aria-label="Festival dates and location">
        <span class="nav-date-item">
          <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M19 4h-1V2h-2v2H8V2H6v2H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V7a1 1 0 0 1 1-1h1v2h2V6h8v2h2V6h1a1 1 0 0 1 1 1Z"/></svg>
          <span>22–24 May</span>
        </span>
        <span class="nav-date-item">
          <svg class="nav-icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5Z"/></svg>
          <span>Penydarren Park.</span>
        </span>
      </div>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero" id="top">
    <div class="wrap">
      <div class="hero-grid">
        <div>
          <div class="kicker">BANK HOLIDAY • OUTDOOR FESTIVAL • PENYDARREN PARK</div>
          <h1>THREE DAYS OF LIVE MUSIC AND COMMUNITY VIBES</h1>
          <p class="lead">
            AT THE HOME OF MERTHYR TOWN FC.
          </p>
          <a class="btn" href="#tickets">BUY TICKETS</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FRIDAY -->
  <section id="friday">
    <div class="wrap">
      <div class="day-grid">
        <div>
          <span class="pill">FRIDAY 22 MAY</span>
          <h2>THE LUKE COMBS EXPERIENCE</h2>
          <p>
            MartyrsFest kicks off with a huge country night as The Luke Combs Experience brings the sound of modern
            Nashville to Merthyr. Expect all the anthems, big choruses and unmistakable Southern energy — from
            “Beautiful Crazy” to “Beer Never Broke My Heart.”
          </p>
          <p>
            This full live-band show is built for singalongs, cold drinks and a packed-out crowd under the lights,
            with support from Diggs Galliers plus licensed bars and street food on site.
          </p>
          <ul class="meta">
            <li>Doors: 6PM</li>
            <li>Tickets: £20</li>
            <li>Ages: 16+ (under 18s must be accompanied by a responsible adult)</li>
            <li>Curfew: 10PM sharp</li>
          </ul>
          <div class="day-actions">
            <a class="btn" href="https://www.seetickets.com/event/the-luke-combs-experience/penydarren-park/3620699" target="_blank" rel="noopener">BUY TICKETS</a>
          </div>
        </div>

        <div class="poster js-reveal">
          <img src="assets/lukecombs.png" alt="Friday poster — The Luke Combs Experience">
        </div>
      </div>
    </div>
  </section>

  <!-- SATURDAY -->
  <section id="saturday">
    <div class="wrap">
      <div class="day-grid">
        <div>
          <span class="pill">SATURDAY 23 MAY</span>
          <h2>BACK TO THE ZONE</h2>
          <p>
            Saturday belongs to Back to the Zone — a daytime disco nightclub experience bringing back the legendary Zone nightclub
            that ruled Merthyr through the 90s and early noughties.
          </p>
          <p>
            DJ Shaun J and Kayleigh J will be dropping the same tracks that packed The Zone out back in the day, plus a load of
            special guests to be announced. Licensed bars and street food all day at Penydarren Park, wrapped up before 10PM.
          </p>
          <ul class="meta">
            <li>Doors: 3PM</li>
            <li>Ages: 18+ only</li>
            <li>Curfew: 10PM</li>
            <li>Licensed bars and street food available throughout the day</li>
          </ul>
          <div class="day-actions">
            <a class="btn" href="https://www.seetickets.com/event/back-to-the-zone/penydarren-park/3620706" target="_blank" rel="noopener">BUY TICKETS</a>
          </div>
        </div>

        <div class="poster js-reveal">
          <img src="assets/back2thezone.jpeg" alt="Saturday poster — Back to the Zone">
        </div>
      </div>
    </div>
  </section>

  <!-- SUNDAY -->
  <section id="sunday">
    <div class="wrap">
      <div class="day-grid">
        <div>
          <span class="pill">SUNDAY 24 MAY</span>
          <h2>VORTEX FOOTBALL FUN DAY</h2>
          <p>
            Bank Holiday Sunday is all about community. VORTEX DAY combines a charity football match, live music,
            family entertainment and festival vibes for a proper day out.
          </p>
          <ul class="meta">
            <li>Bank Holiday Sunday 24 May 2026 • From 10AM</li>
            <li>Vortex Charity Match: Vortex XI vs Celebrity Select • Kick-off 1PM</li>
            <li>Live music on The Vortex Stage from 3PM</li>
            <li>Street food traders, licensed bar, kids activities, family entertainment and market stalls</li>
          </ul>

          <p>
            Featuring live performances from Acacia, Slack, Riverside Buskers and The Ffugs.
          </p>

          <div class="card" style="margin-top:14px;">
            <h3>Sunday ticket guide</h3>
            <p>Adults: £10 • Children (Under 16): £5 • Family Ticket (2 adults + 2 children): £25 • Curfew: 10PM</p>
          </div>
          <div class="day-actions">
            <a class="btn" href="https://www.skiddle.com/e/42147617" target="_blank" rel="noopener">BUY TICKETS</a>
          </div>
        </div>

        <div class="poster js-reveal">
          <img src="assets/vortex-ad.jpeg" alt="Sunday poster — Family & Community Day">
        </div>
      </div>
    </div>
  </section>

  <!-- TICKETS -->
  <section id="tickets">
    <div class="wrap">
      <h2>Tickets</h2>
      <p>Tickets are online-only. Wristbands issued on entry.</p>

      <div class="tickets-grid" style="margin-top:14px;">
        <div class="card">
          <h3>Friday — The Luke Combs Experience</h3>
          <p>Doors 6PM • £20 • Ages 16+</p>
          <a class="btn" href="https://www.seetickets.com/event/the-luke-combs-experience/penydarren-park/3620699" target="_blank" rel="noopener" style="margin-top:12px;">BUY FRIDAY TICKETS</a>
        </div>

        <div class="card">
          <h3>Saturday — Back to the Zone</h3>
          <p>Doors 3PM • Ages 18+</p>
          <a class="btn" href="https://www.seetickets.com/event/back-to-the-zone/penydarren-park/3620706" target="_blank" rel="noopener" style="margin-top:12px;">BUY SATURDAY TICKETS</a>
        </div>

        <div class="card">
          <h3>Sunday — Vortex Football Fun Day</h3>
          <p>Adults £10 • Children £5 • Family (2+2) £25</p>
          <a class="btn" href="https://www.skiddle.com/e/42147617" target="_blank" rel="noopener" style="margin-top:12px;">BUY SUNDAY TICKETS</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ & INFORMATION -->
  <section id="faqs">
    <div class="wrap">
      <div class="faq-layout" style="margin-top:14px;">

        <!-- FAQ column -->
        <div>
          <h2>FAQ’s</h2>
          <div class="faq" style="margin-top:14px;">
            <details>
              <summary>Can I leave and re-enter the event?</summary>
              <p><strong>Friday &amp; Saturday:</strong> No re-entry allowed.<br>
              <strong>Sunday:</strong> Re-entry may be allowed at management discretion.</p>
              <p>Once you’re in on Friday or Saturday, you’re in for the duration.</p>
            </details>

            <details>
              <summary>What items can I bring into the event?</summary>
              <p><strong>You can bring:</strong></p>
              <ul>
                <li>Small personal bags</li>
                <li>Sunscreen, hats, etc.</li>
              </ul>
              <p><strong>You cannot bring:</strong></p>
              <ul>
                <li>Your own alcohol or drinks</li>
                <li>Glass containers</li>
                <li>Weapons or illegal items</li>
              </ul>
              <p>All bags may be searched on entry.</p>
            </details>

            <details>
              <summary>Will there be food and drink available?</summary>
              <p>Yes—plenty.</p>
              <ul>
                <li>Licensed bars operating all weekend</li>
                <li>Street food traders on site</li>
              </ul>
              <p>No need to bring anything—covered.</p>
            </details>

            <details>
              <summary>Is there seating available?</summary>
              <p>Yes, but limited. The event is mainly standing, however:</p>
              <ul>
                <li>Seating is available in designated areas</li>
                <li>Additional seating is available in bar areas</li>
              </ul>
              <p>If you require seating for accessibility reasons, speak to staff on arrival.</p>
            </details>

            <details>
              <summary>Is the event accessible?</summary>
              <p>Yes:</p>
              <ul>
                <li>Step-free access across the site</li>
                <li>Accessible toilets available</li>
                <li>Staff on hand to assist where needed</li>
              </ul>
              <p>There is no raised viewing platform, so plan accordingly.</p>
            </details>

            <details>
              <summary>Will there be security on site?</summary>
              <p>Yes.</p>
              <ul>
                <li>SIA licensed security</li>
                <li>Bag checks on entry</li>
                <li>Stewards and crowd management throughout</li>
              </ul>
              <p>This is a properly managed event—not a free-for-all.</p>
            </details>

            <details>
              <summary>What time does the event finish?</summary>
              <p>All days have a strict <strong>10:00pm curfew</strong>.</p>
              <p>Music and amplified sound will stop at this time without exception.</p>
            </details>

            <details>
              <summary>Is there medical support on site?</summary>
              <p>Yes.</p>
              <ul>
                <li>Dedicated First Aid / Medical centre</li>
                <li>Qualified staff present throughout</li>
                <li>Emergency services access maintained</li>
              </ul>
              <p>If anything happens, you’ll be looked after.</p>
            </details>

            <details>
              <summary>What happens if I lose my wristband?</summary>
              <p>Treat it like a ticket—if it’s gone, it’s gone.</p>
              <p>Lost wristbands will not be replaced without verification.</p>
            </details>

            <details>
              <summary>How do I enter the event?</summary>
              <ul>
                <li>Single controlled entry point</li>
                <li>Tickets scanned on arrival</li>
                <li>Wristband issued</li>
              </ul>
              <p>No ticket = no entry. Simple.</p>
            </details>

            <details>
              <summary>Is the event indoors or outdoors?</summary>
              <p>It’s an outdoor festival inside Penydarren Park stadium, fully enclosed for safety and control.</p>
            </details>
          </div>
        </div>

        <!-- Information column -->
        <div>
          <h2>Information</h2>
          <div style="margin-top:14px; display:grid; gap:14px;">

            <div class="info-card">
              <div class="info-section">
                <h3>Venue</h3>
                <p>Penydarren Park<br>
                Park Terrace<br>
                Merthyr Tydfil<br>
                CF47 8RF</p>
                <p><a href="https://www.google.com/maps/dir//Penydarren+Park,+Park+Terrace,+Merthyr+Tydfil+CF47+8RF" target="_blank" rel="noopener">Get Directions</a></p>
              </div>
            </div>

            <div class="info-card">
              <div class="info-section">
                <h3>Nearest Car Parks</h3>
                <p>There is no on-site parking. The following car parks are a short walk from the venue in Merthyr Town Centre:</p>
                <ul>
                  <li><strong>Castle Car Park</strong></li>
                  <li><strong>Pontmorlais Car Park</strong></li>
                  <li><strong>College Car Park</strong></li>
                  <li><strong>Abermorlais Car Park</strong></li>
                </ul>
                <p><a href="https://maps.merthyr.gov.uk/car-parking-map.htm" target="_blank" rel="noopener">View Car Parking Map</a></p>
              </div>
            </div>

          </div>
        </div>

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
