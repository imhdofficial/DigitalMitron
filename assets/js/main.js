(() => {
  const $ = (s, c = document) => c.querySelector(s);
  const $$ = (s, c = document) => [...c.querySelectorAll(s)];

  const header = $('[data-header]');
  const onScroll = () => header?.classList.toggle('is-scrolled', window.scrollY > 10);
  onScroll();
  addEventListener('scroll', onScroll, { passive: true });

  const megaToggle = $('[data-mega-toggle]');
  const mega = $('[data-mega]');
  if (megaToggle && mega) {
    megaToggle.addEventListener('click', () => {
      const open = mega.classList.toggle('is-open');
      megaToggle.setAttribute('aria-expanded', String(open));
    });
    document.addEventListener('click', e => {
      if (!e.target.closest('.has-mega') && mega.classList.contains('is-open')) {
        mega.classList.remove('is-open');
        megaToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  const menuToggle = $('[data-menu-toggle]');
  const panel = $('[data-mobile-panel]');
  const menuClose = $('[data-menu-close]');
  const setMenu = (open) => {
    panel?.classList.toggle('is-open', open);
    document.body.classList.toggle('menu-open', open);
    menuToggle?.setAttribute('aria-expanded', String(open));
  };
  menuToggle?.addEventListener('click', () => setMenu(true));
  menuClose?.addEventListener('click', () => setMenu(false));

  const revealEls = $$('.reveal');
  if ('IntersectionObserver' in window && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(el => io.observe(el));
  } else revealEls.forEach(el => el.classList.add('is-visible'));

  const needFinder = $('[data-need-finder]');
  if (needFinder) {
    const result = $('[data-need-result]', needFinder);
    const data = {
      leads: ['SEO + Paid Media + Landing Pages','Build demand capture and acquisition around a focused conversion experience, then measure what produces qualified enquiries.'],
      outdated: ['UX Audit + Web Design + Development','Restructure the experience first, then redesign and rebuild around clearer journeys, stronger content and performance.'],
      launch: ['Strategy + Brand + Website','Create one connected foundation so identity, website and go-to-market activity feel like parts of the same launch.'],
      sell: ['Ecommerce + Conversion UX + Performance Marketing','Build a clearer buying journey, instrument it properly and connect acquisition to the pages people actually use to decide.'],
      brand: ['Brand Strategy + Identity System','Define the visual and messaging system first, then apply it consistently across website, social and campaign touchpoints.']
    };
    $$('[data-need]', needFinder).forEach(btn => btn.addEventListener('click', () => {
      $$('[data-need]', needFinder).forEach(b => b.classList.remove('is-active'));
      btn.classList.add('is-active');
      const [title, copy] = data[btn.dataset.need];
      $('h3', result).textContent = title;
      $('p', result).textContent = copy;
    }));
  }

  // Build lightweight service visuals from semantic page context.
  $$('[data-visual]').forEach(stage => {
    const type = stage.dataset.visual;
    const templates = {
      ux: '<div class="ux-side"></div><div class="ux-canvas"><div class="ui-bar"></div><div class="ui-hero"></div><div class="ui-grid"><i></i><i></i><i></i></div></div>',
      dev: '<div class="code-lines"><i></i><i></i><i></i><i></i><i></i></div><div class="dev-panel"><span>98</span><small>Performance</small></div>',
      commerce: '<div class="product-card"><i></i><b>Product</b><small>View details</small></div><div class="cart-chip">Cart · 03</div><div class="checkout-line"></div>',
      mobile: '<div class="phone"><div class="phone-notch"></div><div class="phone-card"></div><div class="phone-row"></div><div class="phone-row short"></div></div><div class="tap-dot"></div>',
      brand: '<div class="brand-aa">Aa</div><div class="brand-swatches"><i></i><i></i><i></i></div><div class="brand-lockup">DM / SYSTEM</div>',
      growth: '<div class="funnel"><i></i><i></i><i></i><i></i></div><div class="metric"><b>+42%</b><small>Qualified actions</small></div>',
      seo: '<div class="serp-search">best digital partner</div><div class="serp-result"><b>Digital Mitron</b><span>Strategy, design, technology and growth…</span></div><div class="serp-result muted"></div>',
      paid: '<div class="ad-card"><small>Campaign</small><b>Search / Growth</b><span>CTR 4.8%</span></div><div class="paid-chart"><i></i><i></i><i></i><i></i></div>',
      social: '<div class="social-grid"><i></i><i></i><i></i><i></i></div><div class="social-pill">Content system</div>',
      reputation: '<div class="review-card"><b>★★★★★</b><span>Helpful, clear and responsive.</span></div><div class="sentiment"><i></i><i></i><i></i></div>',
      security: '<div class="scan-grid"></div><div class="risk-card"><small>Risk detected</small><b>Priority: High</b><span>Actionable remediation</span></div>'
    };
    stage.innerHTML = templates[type] || '';
  });
})();
