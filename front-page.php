<?php
get_header(); ?>

  <main class="w-full relative z-10">

    <!-- 1. HERO SECTION (FITS FULL SCREEN 100vh) WITH MODERN MINIMAL AMBIENT INTERACTION -->
    <section id="hero" class="hero-fullscreen text-center relative overflow-hidden">
      <!-- Modern Minimal Interactive Cursor Spotlight Aura -->
      <div id="heroSpotlight" class="hero-spotlight pointer-events-none"></div>
      <div class="hero-ambient-glow pointer-events-none"></div>

      <div class="container mx-auto max-w-5xl relative z-10">
        <!-- Top Brand Eyebrow with Sleek Shimmer -->
        <div
          class="shimmer-badge magnetic-item inline-flex items-center gap-2 mb-8 text-[#111111] text-[15px] font-medium bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full border border-black/[0.08] shadow-sm hover:border-black/25 transition-all cursor-default">
          <svg class="w-4 h-4 text-[#111111]" viewBox="0 0 24 24" fill="none">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2.2"
              stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <span>Kineva Studios</span>
          <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 ml-1 animate-pulse"></span>
        </div>

        <!-- Big Main Headline (Google Sans Flex exact style) -->
        <h1
          class="text-5xl sm:text-7xl lg:text-[76px] font-normal tracking-[-0.03em] text-[#111111] max-w-4xl mx-auto leading-[1.08] mb-8 select-none">
          We build websites that work.
        </h1>

        <!-- Subtitle -->
        <p class="text-lg sm:text-xl text-[#45474D] max-w-2xl mx-auto mb-10 leading-relaxed font-normal">
          Modern WordPress development for growing businesses. Rapid delivery with modern Gutenberg block themes and
          Elementor for agile launches and top performance.
        </p>

        <!-- Dual Pill Buttons with Magnetic Touch -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
          <a href="#contact" class="magnetic-btn btn-ag-primary w-full sm:w-auto">
            <span>Get a Free Quote</span>
            <span class="btn-arrow transition-transform duration-200">→</span>
          </a>
          <a href="#pricing" class="magnetic-btn btn-ag-secondary w-full sm:w-auto">
            <span>First 50 Clients (Discount Active)</span>
          </a>
        </div>
      </div>
    </section>

    <!-- 2. STATEMENT & TOOL BUBBLES SECTION (NORMAL CONTINUOUS FLOW) -->
    <section id="statement" class="statement-normal text-center">
      <div class="container mx-auto max-w-5xl">
        <!-- Curved Row of Circular White Tool Bubbles -->
        <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4 mb-14">
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="WordPress Clean Architecture">
            <span class="text-lg font-mono">&lt;/&gt;</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Gutenberg Block Themes">
            <span class="text-base">❖</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Elementor Fast Development">
            <span class="text-xs font-mono font-bold text-[#111111]">E</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="WooCommerce Stores">
            <span class="text-base">🛍</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Performance Engine">
            <span class="text-base">⚡</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Security Hardening">
            <span class="text-base">🛡</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Figma Precision">
            <span class="text-base">🎨</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Core Web Vitals">
            <span class="text-base">★</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Deployments">
            <span class="text-base">➔</span>
          </div>
        </div>

        <!-- Large Typographic Statement with Flashing Rainbow Cursor -->
        <h2
          class="text-3xl sm:text-4xl lg:text-[46px] font-normal tracking-tight text-[#111111] max-w-4xl mx-auto leading-snug">
          Kineva Studios is our modern WordPress engineering studio, allowing growing businesses to build
          high-performance websites without bloat.<span class="rainbow-cursor"></span>
        </h2>
      </div>
    </section>

    <!-- SUB-SECTIONS (DISPLAYED AS NORMAL SPACIOUS SECTIONS) -->

    <!-- 3. SUB-SECTION / 01 ARCHITECTURE (Gutenberg Block Themes & Elementor) -->
    <section id="architecture" class="py-24 px-6 z-10 container mx-auto max-w-6xl">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-5 space-y-5">
          <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 01 ARCHITECTURE</span>
          <h3 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111]">Gutenberg Block Themes & Elementor
          </h3>
          <p class="text-base text-[#5F6368] leading-relaxed">
            We leverage modern Gutenberg block themes and Elementor for high-velocity visual development. Your team gets
            effortless drag-and-drop editing and rapid turnaround, while our engineers fine-tune asset loading, server
            caching, and script optimization for sub-second speeds.
          </p>
          <div class="pt-2">
            <a href="#services" class="btn-ag-secondary">
              <span>Explore Our Tech Stack</span>
              <span>→</span>
            </a>
          </div>
        </div>
        <div class="lg:col-span-7">
          <div class="ag-card-light p-8 lg:p-12 relative overflow-hidden">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-black/[0.06] space-y-4">
              <div class="flex justify-between items-center pb-3 border-b border-black/[0.06]">
                <span class="text-xs font-mono text-[#5F6368]">wp-content/themes/kineva-block-theme</span>
                <span class="text-[11px] font-mono text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">High Velocity •
                  Agile Delivery</span>
              </div>
              <div class="space-y-3 font-mono text-xs text-[#45474D]">
                <div class="p-3 bg-[#F8F9FA] rounded-xl border border-black/[0.04] flex justify-between items-center">
                  <span>&lt;GutenbergBlockTheme engine="ModernFSE" /&gt;</span>
                  <span class="text-[#111111] font-semibold">Core Load 0.04s</span>
                </div>
                <div class="p-3 bg-[#F8F9FA] rounded-xl border border-black/[0.04] flex justify-between items-center">
                  <span>&lt;ElementorPageBuilder visualDesign="Agile" /&gt;</span>
                  <span class="text-[#111111] font-semibold">Rapid Sprint Velocity</span>
                </div>
                <div class="p-3 bg-[#F8F9FA] rounded-xl border border-black/[0.04] flex justify-between items-center">
                  <span>&lt;AssetOptimizer deDuplication={true} /&gt;</span>
                  <span class="text-emerald-600 font-semibold">Sub-Second Delivery</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. SUB-SECTION / 02 HARDENING (Bank-Grade WP Hardening & CLI) -->
    <section id="hardening" class="py-24 px-6 z-10 container mx-auto max-w-6xl">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-5 space-y-5">
          <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 02 HARDENING</span>
          <h3 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111]">Bank-Grade WP Hardening</h3>
          <p class="text-base text-[#5F6368] leading-relaxed">
            The lightweight, fast, terminal-verified foundation for your production website. Strict security protocol
            configuration, two-factor authentication, database prefix salting, and automated daily off-site cloud
            backups.
          </p>
          <div class="pt-2">
            <a href="#contact" class="btn-ag-secondary">
              <span>View Security Protocols</span>
              <span>→</span>
            </a>
          </div>
        </div>
        <div class="lg:col-span-7">
          <!-- Deep Black Terminal Card (Antigravity CLI Style) -->
          <div class="ag-card-dark p-8 lg:p-10 relative overflow-hidden bg-black text-white">
            <div class="bg-[#16181D] rounded-2xl border border-white/10 overflow-hidden shadow-2xl">
              <div class="px-4 py-3 bg-[#1F2228] border-b border-white/5 flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <span class="w-3 h-3 rounded-full bg-[#ED6A5E]"></span>
                  <span class="w-3 h-3 rounded-full bg-[#F4BF4F]"></span>
                  <span class="w-3 h-3 rounded-full bg-[#61C554]"></span>
                </div>
                <span class="text-[11px] font-mono text-neutral-400">kineva-studio-cli</span>
              </div>
              <div class="p-6 font-mono text-xs space-y-3">
                <div class="text-neutral-400">$ wp kineva security:verify</div>
                <div class="text-emerald-400">✓ Strict XML-RPC disabled</div>
                <div class="text-emerald-400">✓ Database prefix salted</div>
                <div class="text-neutral-300">✓ Automated daily cloud snapshots active</div>
                <div class="pt-2 text-neutral-400">$ wp kineva audit --performance</div>
                <div class="text-white font-bold">&gt; LCP: 0.42s | CLS: 0.00 | FID: 12ms (Score: 100/100)</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. SUB-SECTION / 03 PERFORMANCE (Sub-Second Speed Execution) -->
    <section id="benchmarks" class="py-24 px-6 z-10 container mx-auto max-w-6xl">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-5 space-y-5">
          <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 03 PERFORMANCE</span>
          <h3 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111]">Sub-Second Speed Execution</h3>
          <p class="text-base text-[#5F6368] leading-relaxed">
            We don't sell bloated $59 marketplace themes. We build lean, high-velocity websites with database query
            tuning, WebP image pipelines, and edge CDN integration that dominate Google PageSpeed.
          </p>
          <div class="pt-2">
            <a href="#pricing" class="btn-ag-secondary">
              <span>Run Audit Benchmarks</span>
              <span>→</span>
            </a>
          </div>
        </div>
        <div class="lg:col-span-7">
          <!-- Deep Midnight Navy Card with Cosmic Glowing Orb -->
          <div
            class="ag-card-dark p-8 lg:p-12 relative overflow-hidden bg-[#0A0D14] text-white flex flex-col items-center justify-center min-h-[360px]">
            <div class="absolute inset-0 ag-blue-glow-orb pointer-events-none"></div>
            <div class="relative z-10 text-center space-y-3">
              <div class="text-6xl sm:text-7xl font-light tracking-tight text-white">100/100</div>
              <div class="text-xs uppercase font-mono tracking-widest text-neutral-400">Google Core Web Vitals</div>
              <div class="text-xs font-mono text-emerald-400 pt-2">Average First Contentful Paint: &lt;0.6s</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. SUB-SECTION / 04 SERVICES (Core Engineering Services Grid) -->
    <section id="services" class="py-28 px-6 z-10 container mx-auto max-w-6xl">
      <div class="max-w-2xl mb-14">
        <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 04 SERVICES</span>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">Full-Spectrum WordPress
          Development</h2>
        <p class="text-base text-[#5F6368] mt-3">Transparent, fixed-price services engineered for high conversion, clean
          maintainability, and exceptional speed. Special discounted rates active for our first 50 clients.</p>
      </div>

      <!-- 6 Services Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Service 1 -->
        <div class="ag-card-white p-8 flex flex-col justify-between min-h-[320px]">
          <div>
            <div class="flex justify-between items-start mb-4">
              <span class="text-xs font-mono text-[#111111] bg-[#ECECEE] px-3 py-1 rounded-full font-medium"><span
                  class="line-through text-[#5F6368] mr-1.5 font-normal">$249</span>FROM $149</span>
              <span class="text-[11px] font-mono text-[#5F6368]">1-2 WEEKS</span>
            </div>
            <h3 class="text-xl font-medium text-[#111111] mb-2">Custom WordPress Website</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Complete multi-page business website, bespoke theme,
              mobile-first responsive design, and SEO-optimized clean markup.</p>
          </div>
          <a href="#contact" data-service-value="Custom WordPress Website (From $149)"
            class="select-service-btn text-xs font-medium text-[#111111] flex items-center gap-1 hover:gap-2 transition-all">
            Request Service <span>→</span>
          </a>
        </div>

        <!-- Service 2 -->
        <div class="ag-card-white p-8 flex flex-col justify-between min-h-[320px]">
          <div>
            <div class="flex justify-between items-start mb-4">
              <span class="text-xs font-mono text-[#111111] bg-[#ECECEE] px-3 py-1 rounded-full font-medium"><span
                  class="line-through text-[#5F6368] mr-1.5 font-normal">$129</span>FROM $79</span>
              <span class="text-[11px] font-mono text-[#5F6368]">3-5 DAYS</span>
            </div>
            <h3 class="text-xl font-medium text-[#111111] mb-2">High-Converting Landing Page</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Single-page conversion engines for ad campaigns,
              product launches, lead magnets, and rapid validations with &lt;0.5s speed.</p>
          </div>
          <a href="#contact" data-service-value="High-Converting Landing Page (From $79)"
            class="select-service-btn text-xs font-medium text-[#111111] flex items-center gap-1 hover:gap-2 transition-all">
            Request Service <span>→</span>
          </a>
        </div>

        <!-- Service 3 -->
        <div class="ag-card-white p-8 flex flex-col justify-between min-h-[320px]">
          <div>
            <div class="flex justify-between items-start mb-4">
              <span class="text-xs font-mono text-[#111111] bg-[#ECECEE] px-3 py-1 rounded-full font-medium"><span
                  class="line-through text-[#5F6368] mr-1.5 font-normal">$399</span>FROM $249</span>
              <span class="text-[11px] font-mono text-[#5F6368]">2-3 WEEKS</span>
            </div>
            <h3 class="text-xl font-medium text-[#111111] mb-2">WooCommerce Online Store</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Full e-commerce setup, frictionless checkout,
              Stripe/PayPal gateway integrations, and streamlined product catalogs.</p>
          </div>
          <a href="#contact" data-service-value="WooCommerce Store (From $249)"
            class="select-service-btn text-xs font-medium text-[#111111] flex items-center gap-1 hover:gap-2 transition-all">
            Request Service <span>→</span>
          </a>
        </div>

        <!-- Service 4 -->
        <div class="ag-card-white p-8 flex flex-col justify-between min-h-[320px]">
          <div>
            <div class="flex justify-between items-start mb-4">
              <span class="text-xs font-mono text-[#111111] bg-[#ECECEE] px-3 py-1 rounded-full font-medium"><span
                  class="line-through text-[#5F6368] mr-1.5 font-normal">$149</span>FROM $99</span>
              <span class="text-[11px] font-mono text-[#5F6368]">5-7 DAYS</span>
            </div>
            <h3 class="text-xl font-medium text-[#111111] mb-2">Figma to Pixel-Perfect WP</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">1:1 fidelity translation of your designer's mockups
              into responsive, lightweight, and accessible WordPress custom blocks.</p>
          </div>
          <a href="#contact" data-service-value="Figma / Design to WordPress (From $99)"
            class="select-service-btn text-xs font-medium text-[#111111] flex items-center gap-1 hover:gap-2 transition-all">
            Request Service <span>→</span>
          </a>
        </div>

        <!-- Service 5 -->
        <div class="ag-card-white p-8 flex flex-col justify-between min-h-[320px]">
          <div>
            <div class="flex justify-between items-start mb-4">
              <span class="text-xs font-mono text-[#111111] bg-[#ECECEE] px-3 py-1 rounded-full font-medium"><span
                  class="line-through text-[#5F6368] mr-1.5 font-normal">$199</span>FROM $129</span>
              <span class="text-[11px] font-mono text-[#5F6368]">1-2 WEEKS</span>
            </div>
            <h3 class="text-xl font-medium text-[#111111] mb-2">Website Redesign & Refresh</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Modernize your outdated WordPress site with fresh
              modern UI, mobile responsiveness, speed boosts, and streamlined navigation.</p>
          </div>
          <a href="#contact" data-service-value="Website Redesign & Refresh (From $129)"
            class="select-service-btn text-xs font-medium text-[#111111] flex items-center gap-1 hover:gap-2 transition-all">
            Request Service <span>→</span>
          </a>
        </div>

        <!-- Service 6 -->
        <div class="ag-card-white p-8 flex flex-col justify-between min-h-[320px]">
          <div>
            <div class="flex justify-between items-start mb-4">
              <span class="text-xs font-mono text-[#111111] bg-[#ECECEE] px-3 py-1 rounded-full font-medium"><span
                  class="line-through text-[#5F6368] mr-1.5 font-normal">$49</span>FROM $29</span>
              <span class="text-[11px] font-mono text-[#5F6368]">24-48 HOURS</span>
            </div>
            <h3 class="text-xl font-medium text-[#111111] mb-2">WP Fixes & Speed Tuning</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Bug fixing, layout adjustments, plugin conflict
              resolution, and Core Web Vitals performance tuning delivered rapidly.</p>
          </div>
          <a href="#contact" data-service-value="WordPress Fixes & Speed Boost (From $29)"
            class="select-service-btn text-xs font-medium text-[#111111] flex items-center gap-1 hover:gap-2 transition-all">
            Request Service <span>→</span>
          </a>
        </div>
      </div>
    </section>

    <!-- 7. SUB-SECTION / 05 SPRINT ROADMAP -->
    <section id="process" class="py-28 px-6 z-10 container mx-auto max-w-6xl">
      <div class="max-w-2xl mb-14">
        <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 05 SPRINT ROADMAP</span>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">From Concept to Production in 4
          Steps</h2>
        <p class="text-base text-[#5F6368] mt-3">A transparent, developer-driven roadmap. No guesswork, no delays, full
          visibility into Git milestones.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="ag-card-light p-8">
          <div class="text-xs font-mono text-[#5F6368] mb-3">STEP 01</div>
          <h4 class="text-lg font-medium text-[#111111] mb-2">Discovery & Scope</h4>
          <p class="text-xs text-[#5F6368] leading-relaxed">Technical alignment on brand goals, audience, and exact
            feature requirements.</p>
        </div>
        <div class="ag-card-light p-8">
          <div class="text-xs font-mono text-[#5F6368] mb-3">STEP 02</div>
          <h4 class="text-lg font-medium text-[#111111] mb-2">Plan & Architect</h4>
          <p class="text-xs text-[#5F6368] leading-relaxed">Information hierarchy, custom block library, and schema
            design before code.</p>
        </div>
        <div class="ag-card-light p-8">
          <div class="text-xs font-mono text-[#5F6368] mb-3">STEP 03</div>
          <h4 class="text-lg font-medium text-[#111111] mb-2">Agile Build Sprint</h4>
          <p class="text-xs text-[#5F6368] leading-relaxed">Modern Gutenberg block themes and optimized Elementor
            templates built on staging.</p>
        </div>
        <div class="ag-card-light p-8">
          <div class="text-xs font-mono text-[#5F6368] mb-3">STEP 04</div>
          <h4 class="text-lg font-medium text-[#111111] mb-2">Verify & Launch</h4>
          <p class="text-xs text-[#5F6368] leading-relaxed">Core Web Vitals validation, DNS/SSL setup, and recorded
            walkthrough handover.</p>
        </div>
      </div>
    </section>

    <!-- 8. SUB-SECTION / 06 FIXED PRICING -->
    <section id="pricing" class="py-28 px-6 z-10 container mx-auto max-w-6xl">
      <div class="max-w-2xl mb-14">
        <div class="flex items-center gap-3">
          <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 06 FIXED PRICING</span>
          <span
            class="text-[11px] font-mono text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full font-medium">FIRST
            50 CLIENTS DISCOUNT</span>
        </div>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">Clear Investment. Zero
          Surprises.</h2>
        <p class="text-base text-[#5F6368] mt-3">We are currently onboarding our first 50 clients at special discounted
          introductory rates. Lock in standard agency-grade engineering before regular rates take effect.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
        <!-- Tier 1: Starter Sprint -->
        <div class="ag-card-white p-8 flex flex-col justify-between">
          <div>
            <div class="flex justify-between items-center mb-4">
              <h4 class="text-lg font-medium text-[#111111]">Starter Sprint</h4>
              <span class="text-xs font-mono text-[#5F6368] bg-[#ECECEE] px-2.5 py-0.5 rounded">3-5 DAYS</span>
            </div>
            <div class="flex items-baseline gap-2.5 mb-2">
              <span class="text-4xl sm:text-5xl font-normal text-[#111111] tracking-tight">$79</span>
              <span class="text-lg font-normal text-[#5F6368] line-through">$129</span>
              <span class="text-xs font-mono text-emerald-800 bg-emerald-100 px-2 py-0.5 rounded font-medium">Save
                $50</span>
            </div>
            <div class="text-xs font-mono text-[#5F6368] mb-4">First 50 Clients Rate • $79 Flat</div>
            <p class="text-xs text-[#5F6368] mb-6">Perfect for lead generation landing pages, ad campaign funnels, and
              single validations.</p>
            <ul class="space-y-2.5 text-xs text-[#45474D] mb-8">
              <li class="flex items-center gap-2"><span>✓</span> 1 High-Converting Landing Page</li>
              <li class="flex items-center gap-2"><span>✓</span> Mobile-First Responsive Layout</li>
              <li class="flex items-center gap-2"><span>✓</span> Lead Form & Email Auto-sync</li>
              <li class="flex items-center gap-2"><span>✓</span> Core Web Vitals &gt;90 Score</li>
              <li class="flex items-center gap-2"><span>✓</span> 14 Days Post-Launch Support</li>
            </ul>
          </div>
          <a href="#contact" data-service-value="High-Converting Landing Page (From $79)"
            class="select-service-btn btn-ag-secondary w-full text-center">Claim Starter Spot ($79)</a>
        </div>

        <!-- Tier 2: Custom WordPress Site (Featured) -->
        <div class="ag-card-dark p-8 flex flex-col justify-between bg-black text-white relative shadow-xl">
          <div>
            <div class="flex justify-between items-center mb-4">
              <h4 class="text-lg font-medium text-white">Custom WordPress Site</h4>
              <span class="text-xs font-mono text-neutral-300 bg-white/10 px-2.5 py-0.5 rounded">1-2 WEEKS</span>
            </div>
            <div class="flex items-baseline gap-2.5 mb-2">
              <span class="text-4xl sm:text-5xl font-normal text-white tracking-tight">$149</span>
              <span class="text-lg font-normal text-neutral-400 line-through">$249</span>
              <span
                class="text-xs font-mono text-emerald-300 bg-emerald-950/80 border border-emerald-500/40 px-2 py-0.5 rounded font-medium">Save
                $100</span>
            </div>
            <div class="text-xs font-mono text-neutral-400 mb-4">First 50 Clients Rate • $149 Flat</div>
            <p class="text-xs text-neutral-400 mb-6">Complete custom website tailored to your business. Modern block
              theme foundation & Elementor visual development.</p>
            <ul class="space-y-2.5 text-xs text-neutral-300 mb-8">
              <li class="flex items-center gap-2"><span>✓</span> Up to 5 Custom Designed & Developed Pages</li>
              <li class="flex items-center gap-2"><span>✓</span> Modern Gutenberg Block Theme Foundation</li>
              <li class="flex items-center gap-2"><span>✓</span> Elementor Drag-and-Drop Visual Builder</li>
              <li class="flex items-center gap-2"><span>✓</span> Sub-second Page Load &lt;0.6s</li>
              <li class="flex items-center gap-2"><span>✓</span> Full Security Hardening & Backups</li>
              <li class="flex items-center gap-2"><span>✓</span> 30 Days Post-Launch Support</li>
            </ul>
          </div>
          <a href="#contact" data-service-value="Custom WordPress Website (From $149)"
            class="select-service-btn btn-ag-white w-full text-center">Claim Custom Site Spot ($149) ↗</a>
        </div>

        <!-- Tier 3: WooCommerce Store -->
        <div class="ag-card-white p-8 flex flex-col justify-between">
          <div>
            <div class="flex justify-between items-center mb-4">
              <h4 class="text-lg font-medium text-[#111111]">WooCommerce Store</h4>
              <span class="text-xs font-mono text-[#5F6368] bg-[#ECECEE] px-2.5 py-0.5 rounded">2-3 WEEKS</span>
            </div>
            <div class="flex items-baseline gap-2.5 mb-2">
              <span class="text-4xl sm:text-5xl font-normal text-[#111111] tracking-tight">$249</span>
              <span class="text-lg font-normal text-[#5F6368] line-through">$399</span>
              <span class="text-xs font-mono text-emerald-800 bg-emerald-100 px-2 py-0.5 rounded font-medium">Save
                $150</span>
            </div>
            <div class="text-xs font-mono text-[#5F6368] mb-4">First 50 Clients Rate • $249 Flat</div>
            <p class="text-xs text-[#5F6368] mb-6">Robust e-commerce store engineered for maximum conversion velocity
              and frictionless checkout.</p>
            <ul class="space-y-2.5 text-xs text-[#45474D] mb-8">
              <li class="flex items-center gap-2"><span>✓</span> Complete WooCommerce Configuration</li>
              <li class="flex items-center gap-2"><span>✓</span> Stripe, PayPal, Apple Pay Integration</li>
              <li class="flex items-center gap-2"><span>✓</span> Custom Filterable Product Catalog</li>
              <li class="flex items-center gap-2"><span>✓</span> Frictionless 1-Page Checkout Flow</li>
              <li class="flex items-center gap-2"><span>✓</span> 45 Days Dedicated Warranty</li>
            </ul>
          </div>
          <a href="#contact" data-service-value="WooCommerce Store (From $249)"
            class="select-service-btn btn-ag-secondary w-full text-center">Claim Store Spot ($249)</a>
        </div>
      </div>

      <!-- Guarantee & First 50 Clients Bar -->
      <div
        class="mt-8 p-5 rounded-2xl bg-[#ECECEE]/70 border border-black/[0.04] flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-mono text-[#45474D]">
        <div class="flex items-center gap-2.5">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span class="font-medium text-[#111111]">FIRST 50 CLIENTS PROGRAM:</span>
          <span>Special introductory pricing active across all tiers.</span>
        </div>
        <div class="text-[#5F6368]">100% Fixed Price Guarantee • Zero Hidden Fees • Staging Preview Included</div>
      </div>
    </section>

    <!-- 10. CALLOUT BANNER (Antigravity Download Section) -->
    <section class="py-20 px-6 z-10 container mx-auto max-w-6xl">
      <div
        class="ag-card-dark bg-black text-white p-10 lg:p-20 relative overflow-hidden flex flex-col lg:flex-row justify-between items-center gap-10">
        <!-- Cosmic Orbit Particle Dots Pattern on Right -->
        <div class="absolute right-0 top-0 bottom-0 w-1/2 cosmic-orbit-dots opacity-20 pointer-events-none"></div>

        <div class="max-w-xl z-10 space-y-4">
          <h2 class="text-4xl sm:text-5xl font-normal tracking-tight leading-tight">
            Ready to Build Your Website?
          </h2>
          <p class="text-base text-neutral-400">
            Join our first 50 clients program and lock in our discounted introductory rates on your project. Direct
            communication with senior engineers.
          </p>
          <div class="flex flex-wrap gap-3 pt-4">
            <a href="#contact" class="btn-ag-white">
              <span>Start Project Spec</span>
              <span>↗</span>
            </a>
            <a href="#services" class="btn-ag-dark-secondary">
              <span>Explore Services</span>
            </a>
          </div>
        </div>

        <div class="z-10 text-right hidden lg:block font-mono text-xs text-neutral-500 space-y-1">
          <div>&lt;kineva-liftoff&gt;</div>
          <div>status: available</div>
          <div>speed: &lt;0.5s</div>
        </div>
      </div>
    </section>

    <!-- 10. CONTACT FORM SECTION -->
    <section id="contact" class="py-24 px-6 z-10 container mx-auto max-w-4xl">
      <div class="text-center mb-14">
        <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 07 START YOUR PROJECT</span>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">Tell Us About Your Vision</h2>
        <p class="text-base text-[#5F6368] mt-3">Receive a detailed proposal and fixed quote within 24 hours directly
          from a senior engineer.</p>
      </div>

      <div class="ag-card-white p-8 lg:p-12 shadow-sm border border-black/[0.08]">
        <!--<form id="projectForm" class="space-y-6">-->
        <!--  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">-->
            <!-- Full Name -->
        <!--    <div class="form-group">-->
        <!--      <label for="clientName" class="block text-xs font-medium text-[#111111] mb-2">Your Name *</label>-->
        <!--      <input type="text" id="clientName" required placeholder="Jane Doe"-->
        <!--        class="ag-input rounded-2xl border border-[#DADCE0] focus:border-[#111111] focus:ring-2 focus:ring-black/[0.08]" />-->
        <!--      <span class="error-msg">Please enter your name.</span>-->
        <!--    </div>-->

            <!-- Business Name -->
        <!--    <div class="form-group">-->
        <!--      <label for="businessName" class="block text-xs font-medium text-[#111111] mb-2">Business Name *</label>-->
        <!--      <input type="text" id="businessName" required placeholder="Acme Inc."-->
        <!--        class="ag-input rounded-2xl border border-[#DADCE0] focus:border-[#111111] focus:ring-2 focus:ring-black/[0.08]" />-->
        <!--      <span class="error-msg">Please enter your business name.</span>-->
        <!--    </div>-->
        <!--  </div>-->

        <!--  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">-->
            <!-- Email -->
        <!--    <div class="form-group">-->
        <!--      <label for="clientEmail" class="block text-xs font-medium text-[#111111] mb-2">Email Address *</label>-->
        <!--      <input type="email" id="clientEmail" required placeholder="jane@acme.com"-->
        <!--        class="ag-input rounded-2xl border border-[#DADCE0] focus:border-[#111111] focus:ring-2 focus:ring-black/[0.08]" />-->
        <!--      <span class="error-msg">Please enter a valid email address.</span>-->
        <!--    </div>-->

            <!-- Current Website -->
        <!--    <div class="form-group">-->
        <!--      <label for="currentWebsite" class="block text-xs font-medium text-[#111111] mb-2">Current Website (if-->
        <!--        any)</label>-->
        <!--      <input type="url" id="currentWebsite" placeholder="https://example.com"-->
        <!--        class="ag-input rounded-2xl border border-[#DADCE0] focus:border-[#111111] focus:ring-2 focus:ring-black/[0.08]" />-->
        <!--    </div>-->
        <!--  </div>-->

          <!-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> -->
          <!-- Service Needed -->
        <!--  <div class="form-group">-->
        <!--    <label for="serviceSelect" class="block text-xs font-medium text-[#111111] mb-2">Service Needed *</label>-->
        <!--    <select id="serviceSelect" required-->
        <!--      class="ag-input rounded-2xl border border-[#DADCE0] focus:border-[#111111] focus:ring-2 focus:ring-black/[0.08]">-->
        <!--      <option value="">Select a service package...</option>-->
        <!--      <option value="Custom WordPress Website (From $149)">Custom WordPress Website (From $149)</option>-->
        <!--      <option value="High-Converting Landing Page (From $79)">High-Converting Landing Page (From $79)</option>-->
        <!--      <option value="WooCommerce Store (From $249)">WooCommerce Store (From $249)</option>-->
        <!--      <option value="Figma / Design to WordPress (From $99)">Figma / Design to WordPress (From $99)</option>-->
        <!--      <option value="Website Redesign & Refresh (From $129)">Website Redesign & Refresh (From $129)</option>-->
        <!--      <option value="WordPress Fixes & Speed Boost (From $29)">WordPress Fixes & Speed Boost (From $29)</option>-->
        <!--    </select>-->
        <!--    <span class="error-msg">Please select a service.</span>-->
        <!--  </div>-->
          <!-- </div> -->

          <!-- Project Details -->
        <!--  <div class="form-group">-->
        <!--    <label for="projectDetails" class="block text-xs font-medium text-[#111111] mb-2">Project Details & Goals-->
        <!--      *</label>-->
        <!--    <textarea id="projectDetails" rows="4" required-->
        <!--      placeholder="Describe what you want to achieve or features you need..."-->
        <!--      class="ag-input rounded-2xl border border-[#DADCE0] focus:border-[#111111] focus:ring-2 focus:ring-black/[0.08]"></textarea>-->
        <!--    <span class="error-msg">Please share a brief description of your project.</span>-->
        <!--  </div>-->

          <!-- Submit Button -->
        <!--  <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">-->
        <!--    <div class="text-xs text-[#5F6368]">-->
        <!--      Guaranteed response within 24 hours directly from an engineer.-->
        <!--    </div>-->
        <!--    <button type="submit" id="submitBtn" class="btn-ag-primary w-full sm:w-auto">-->
        <!--      <span>Submit Project Request</span>-->
        <!--      <span>→</span>-->
        <!--    </button>-->
        <!--  </div>-->

          <!-- Success Message Box -->
        <!--  <div id="formSuccess"-->
        <!--    class="hidden flex-col items-center justify-center p-8 bg-[#F8F9FA] border border-black/[0.08] rounded-2xl text-center space-y-3 mt-6">-->
        <!--    <div-->
        <!--      class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center text-base font-bold">✓-->
        <!--    </div>-->
        <!--    <h4 class="text-xl font-medium text-[#111111]">Project Request Received!</h4>-->
        <!--    <p class="text-xs text-[#5F6368] max-w-md">Thank you! Your project specification has been logged. An-->
        <!--      engineer will review it and reply with a fixed quote within 24 hours.</p>-->
        <!--    <button type="button" id="resetFormBtn" class="text-xs font-medium text-[#111111] underline mt-2">Submit-->
        <!--      another inquiry</button>-->
        <!--  </div>-->
        <!--</form>-->
        <?php echo do_shortcode('[contact-form-7 id="a925e28" title="Contact form 1"]'); ?>
      </div>
    </section>

    <!-- 11. FAQ ACCORDION SECTION -->
    <section id="faq" class="py-24 px-6 z-10 container mx-auto max-w-4xl">
      <div class="max-w-2xl mb-14">
        <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 08 FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">Frequently Asked Questions</h2>
      </div>

      <div class="space-y-4">
        <!-- FAQ 1 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]">
            <span>What does the First 50 Clients discount include?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Our first 50 clients initiative offers exclusive discounted founding pricing across all our services —
            including Starter Landing Pages at $79 (regular $129), Custom WordPress Sites at $149 (regular $249), and
            WooCommerce Stores at $249 (regular $399). In exchange for permission to showcase the finished site in our
            portfolio and an honest review, you receive direct senior developer execution, 100/100 Core Web Vitals
            optimization, and dedicated free post-launch support.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]">
            <span>Why do you use Gutenberg block themes and Elementor?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            We use modern Gutenberg block themes alongside Elementor because they provide the perfect balance between
            fast sprint turnaround and client flexibility. Your marketing team gets intuitive drag-and-drop page
            editing, while our engineers optimize asset loading, caching, and DOM structure so your site maintains
            sub-second speed.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]">
            <span>How long does a typical WordPress project take?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Landing pages and fixes are typically completed in 3-5 business days. A full multi-page custom WordPress
            website is delivered in 1-2 weeks, and a complete WooCommerce store takes 2-3 weeks depending on the number
            of products and custom payment workflows.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]">
            <span>Do I have full ownership of the website and code?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            100% yes. Upon final payment, you receive complete administrative access to your WordPress installation,
            database, and all custom theme code. There are no proprietary lock-ins or mandatory recurring license fees.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]">
            <span>Can you convert my Figma or XD design into WordPress?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Yes! We specialize in pixel-perfect Figma-to-WordPress conversions. We match your typography, responsive
            auto-layouts, hover states, and animations with 1:1 precision into modern Gutenberg block themes and
            Elementor templates for fast delivery and easy ongoing updates.
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]">
            <span>What happens if something breaks after launch?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Every project includes our 30-day warranty. If any bug or issue emerges within 30 days of going live, we fix
            it promptly at zero cost. We also offer optional affordable monthly maintenance packages if you'd like us to
            manage ongoing core updates and backups.
          </div>
        </div>
      </div>
    </section>


  </main>

<?php get_footer();