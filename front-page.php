<?php
get_header(); ?>

  <main id="content" class="w-full relative z-10">

    <!-- 1. HERO SECTION (FITS FULL SCREEN 100vh) WITH MODERN MINIMAL AMBIENT INTERACTION -->
    <section id="hero" class="hero-fullscreen text-center relative overflow-hidden" aria-label="Introduction">
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
          Shopify & WordPress Development for Growing Businesses
        </h1>

        <!-- Subtitle -->
        <p class="text-lg sm:text-xl text-[#45474D] max-w-2xl mx-auto mb-10 leading-relaxed font-normal">
          Custom Shopify themes, bespoke WordPress architecture, and high-converting eCommerce solutions engineered for performance, clean maintainability, and rapid turnaround.
        </p>

        <!-- Dual Pill Buttons with Magnetic Touch -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
          <a href="#contact" class="magnetic-btn btn-ag-primary w-full sm:w-auto">
            <span>Discuss Your Project</span>
            <span class="btn-arrow transition-transform duration-200">→</span>
          </a>
          <a href="#pricing" class="magnetic-btn btn-ag-secondary w-full sm:w-auto">
            <span>First 50 Clients (Discount Active)</span>
          </a>
        </div>
      </div>
    </section>

    <!-- 2. STATEMENT & TOOL BUBBLES SECTION (NORMAL CONTINUOUS FLOW) -->
    <section id="statement" class="statement-normal text-center" aria-label="Agency Overview">
      <div class="container mx-auto max-w-5xl">
        <!-- Curved Row of Circular White Tool Bubbles -->
        <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4 mb-14">
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Shopify Liquid Themes">
            <span class="text-xs font-mono font-bold text-[#111111]">S</span>
          </div>
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
            title="WooCommerce Stores">
            <span class="text-base">🛍</span>
          </div>
          <div
            class="w-12 h-12 rounded-full bg-white shadow-sm border border-black/[0.06] flex items-center justify-center text-[#45474D]"
            title="Elementor Fast Development">
            <span class="text-xs font-mono font-bold text-[#111111]">E</span>
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
          Kineva Studios is a modern Shopify and WordPress development agency, helping growing businesses build high-performance websites and eCommerce stores without bloat.<span class="rainbow-cursor"></span>
        </h2>
      </div>
    </section>

    <!-- SUB-SECTIONS (DISPLAYED AS NORMAL SPACIOUS SECTIONS) -->

    <!-- 3. SUB-SECTION / 01 ARCHITECTURE (Shopify Liquid & WordPress Block Themes) -->
    <section id="architecture" class="py-24 px-6 z-10 container mx-auto max-w-6xl" aria-label="Architecture and Capabilities">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-5 space-y-5">
          <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 01 ARCHITECTURE</span>
          <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111]">Shopify Liquid & WordPress Block Architecture</h2>
          <p class="text-base text-[#5F6368] leading-relaxed">
            We engineer lean, maintainable codebases across both Shopify and WordPress. From bespoke Shopify 2.0 Liquid theme development to modern WordPress Gutenberg block themes and Elementor templates, your team gains agile content editing while our developers fine-tune database queries, asset loading, and server caching for sub-second speeds.
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
                <span class="text-xs font-mono text-[#5F6368]">wp-content/themes &amp; shopify/templates</span>
                <span class="text-[11px] font-mono text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">High Velocity •
                  Agile Delivery</span>
              </div>
              <div class="space-y-3 font-mono text-xs text-[#45474D]">
                <div class="p-3 bg-[#F8F9FA] rounded-xl border border-black/[0.04] flex justify-between items-center">
                  <span>&lt;ShopifyLiquidTheme engine="Storefront2.0" /&gt;</span>
                  <span class="text-[#111111] font-semibold">Core Load 0.04s</span>
                </div>
                <div class="p-3 bg-[#F8F9FA] rounded-xl border border-black/[0.04] flex justify-between items-center">
                  <span>&lt;GutenbergBlockTheme engine="ModernFSE" /&gt;</span>
                  <span class="text-[#111111] font-semibold">Clean Block Architecture</span>
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
    <section id="hardening" class="py-24 px-6 z-10 container mx-auto max-w-6xl" aria-label="Security and Hardening">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-5 space-y-5">
          <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 02 HARDENING</span>
          <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111]">Platform Security & Website Hardening</h2>
          <p class="text-base text-[#5F6368] leading-relaxed">
            The lightweight, fast, terminal-verified foundation for your production website and store. Strict security protocol configuration, two-factor authentication, database prefix salting, protected checkout endpoints, and automated daily off-site cloud backups.
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
    <section id="benchmarks" class="py-24 px-6 z-10 container mx-auto max-w-6xl" aria-label="Performance Benchmarks">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-5 space-y-5">
          <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 03 PERFORMANCE</span>
          <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111]">Shopify & WordPress Speed Optimization</h2>
          <p class="text-base text-[#5F6368] leading-relaxed">
            We don't sell bloated $59 marketplace themes. We build lean, high-velocity websites and eCommerce stores with database query tuning, WebP image pipelines, script deduplication, and edge CDN integration that dominate Google PageSpeed and Core Web Vitals.
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
        </d    <!-- 6. SUB-SECTION / 04 SERVICES (Core Engineering Services Grid) -->
    <section id="services" class="py-28 px-6 z-10 container mx-auto max-w-6xl" aria-label="Shopify and WordPress Development Services">
      <div class="max-w-2xl mb-14">
        <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 04 SERVICES</span>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">Shopify &amp; WordPress Development Services</h2>
        <p class="text-base text-[#5F6368] mt-3">Transparent, fixed-price services engineered for high conversion, clean maintainability, and exceptional speed. Special discounted rates active for our first 50 clients.</p>
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
            <h3 class="text-xl font-medium text-[#111111] mb-2">Custom Shopify &amp; WordPress Development</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Complete bespoke business websites and custom Shopify stores. Clean code architecture, mobile-first responsive design, and SEO-optimized clean markup.</p>
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
            <h3 class="text-xl font-medium text-[#111111] mb-2">Shopify Theme Customization &amp; Landing Pages</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">High-converting landing pages and bespoke Shopify section development. Tailored for ad campaigns, product drops, and sales funnels with &lt;0.5s speed.</p>
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
            <h3 class="text-xl font-medium text-[#111111] mb-2">WooCommerce &amp; Shopify Online Stores</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Full eCommerce setup, frictionless checkout flows, Stripe, PayPal, and Apple Pay integrations, streamlined product catalogs, and conversion optimization.</p>
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
            <h3 class="text-xl font-medium text-[#111111] mb-2">Figma to Shopify &amp; WordPress</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Pixel-perfect 1:1 translation of your Figma or Adobe XD designs into lightweight, responsive, and accessible WordPress blocks or custom Shopify Liquid templates.</p>
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
            <h3 class="text-xl font-medium text-[#111111] mb-2">Website Redesign &amp; Store Modernization</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Modernize your outdated WordPress site or Shopify store with fresh UI/UX design, mobile responsiveness, Core Web Vitals speed boosts, and intuitive navigation.</p>
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
            <h3 class="text-xl font-medium text-[#111111] mb-2">Bug Fixing, Speed Boost &amp; Maintenance</h3>
            <p class="text-xs text-[#5F6368] leading-relaxed mb-6">Rapid troubleshooting, theme bug fixes, plugin and app conflict resolution, Core Web Vitals performance tuning, and ongoing technical maintenance.</p>
          </div>
          <a href="#contact" data-service-value="WordPress Fixes & Speed Boost (From $29)"
            class="select-service-btn text-xs font-medium text-[#111111] flex items-center gap-1 hover:gap-2 transition-all">
            Request Service <span>→</span>
          </a>
        </div>
      </div>
    </section>

    <!-- 7. SUB-SECTION / 05 SPRINT ROADMAP -->
    <section id="process" class="py-28 px-6 z-10 container mx-auto max-w-6xl" aria-label="Development Sprint Process">
      <div class="max-w-2xl mb-14">
        <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 05 SPRINT ROADMAP</span>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">From Concept to Production in 4 Steps</h2>
        <p class="text-base text-[#5F6368] mt-3">A transparent, developer-driven roadmap. No guesswork, no delays, full visibility into Git milestones.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="ag-card-light p-8">
          <div class="text-xs font-mono text-[#5F6368] mb-3">STEP 01</div>
          <h3 class="text-lg font-medium text-[#111111] mb-2">Discovery &amp; Scope</h3>
          <p class="text-xs text-[#5F6368] leading-relaxed">Technical alignment on project goals, platform choice (Shopify or WordPress), target audience, and feature specs.</p>
        </div>
        <div class="ag-card-light p-8">
          <div class="text-xs font-mono text-[#5F6368] mb-3">STEP 02</div>
          <h3 class="text-lg font-medium text-[#111111] mb-2">Plan &amp; Architect</h3>
          <p class="text-xs text-[#5F6368] leading-relaxed">Information hierarchy, component wireframes, database schema, and technical SEO structure before coding.</p>
        </div>
        <div class="ag-card-light p-8">
          <div class="text-xs font-mono text-[#5F6368] mb-3">STEP 03</div>
          <h3 class="text-lg font-medium text-[#111111] mb-2">Agile Build Sprint</h3>
          <p class="text-xs text-[#5F6368] leading-relaxed">Bespoke Shopify Liquid themes, WordPress Gutenberg blocks, or Elementor templates developed in isolated staging.</p>
        </div>
        <div class="ag-card-light p-8">
          <div class="text-xs font-mono text-[#5F6368] mb-3">STEP 04</div>
          <h3 class="text-lg font-medium text-[#111111] mb-2">Verify &amp; Launch</h3>
          <p class="text-xs text-[#5F6368] leading-relaxed">Core Web Vitals validation, cross-browser testing, SSL/DNS handover, and video walkthrough documentation.</p>
        </div>
      </div>
    </section>

    <!-- 8. SUB-SECTION / 06 FIXED PRICING -->
    <section id="pricing" class="py-28 px-6 z-10 container mx-auto max-w-6xl" aria-label="Development Pricing and Packages">
      <div class="max-w-2xl mb-14">
        <div class="flex items-center gap-3">
          <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 06 FIXED PRICING</span>
          <span
            class="text-[11px] font-mono text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full font-medium">FIRST
            50 CLIENTS DISCOUNT</span>
        </div>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">Clear Investment. Zero Surprises.</h2>
        <p class="text-base text-[#5F6368] mt-3">We are currently onboarding our first 50 clients at special discounted introductory rates. Lock in standard agency-grade engineering before regular rates take effect.</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
        <!-- Tier 1: Starter Sprint -->
        <div class="ag-card-white p-8 flex flex-col justify-between">
          <div>
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium text-[#111111]">Starter Sprint</h3>
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
              <li class="flex items-center gap-2"><span>✓</span> Lead Form &amp; Email Auto-sync</li>
              <li class="flex items-center gap-2"><span>✓</span> Core Web Vitals &gt;90 Score</li>
              <li class="flex items-center gap-2"><span>✓</span> 14 Days Post-Launch Support</li>
            </ul>
          </div>
          <a href="#contact" data-service-value="High-Converting Landing Page (From $79)"
            class="select-service-btn btn-ag-secondary w-full text-center">Claim Starter Spot ($79)</a>
        </div>

        <!-- Tier 2: Custom Development Sprint (Featured) -->
        <div class="ag-card-dark p-8 flex flex-col justify-between bg-black text-white relative shadow-xl">
          <div>
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium text-white">Custom Development Sprint</h3>
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
            <p class="text-xs text-neutral-400 mb-6">Complete custom website tailored to your business. Modern WordPress block theme foundation or bespoke Shopify store setup.</p>
            <ul class="space-y-2.5 text-xs text-neutral-300 mb-8">
              <li class="flex items-center gap-2"><span>✓</span> Up to 5 Custom Designed &amp; Developed Pages</li>
              <li class="flex items-center gap-2"><span>✓</span> Modern Gutenberg Block Theme Foundation</li>
              <li class="flex items-center gap-2"><span>✓</span> Elementor or Shopify Liquid Templating</li>
              <li class="flex items-center gap-2"><span>✓</span> Sub-second Page Load &lt;0.6s</li>
              <li class="flex items-center gap-2"><span>✓</span> Full Security Hardening &amp; Backups</li>
              <li class="flex items-center gap-2"><span>✓</span> 30 Days Post-Launch Support</li>
            </ul>
          </div>
          <a href="#contact" data-service-value="Custom WordPress Website (From $149)"
            class="select-service-btn btn-ag-white w-full text-center">Claim Custom Site Spot ($149) ↗</a>
        </div>

        <!-- Tier 3: eCommerce Storefront -->
        <div class="ag-card-white p-8 flex flex-col justify-between">
          <div>
            <div class="flex justify-between items-center mb-4">
              <h3 class="text-lg font-medium text-[#111111]">eCommerce Storefront</h3>
              <span class="text-xs font-mono text-[#5F6368] bg-[#ECECEE] px-2.5 py-0.5 rounded">2-3 WEEKS</span>
            </div>
            <div class="flex items-baseline gap-2.5 mb-2">
              <span class="text-4xl sm:text-5xl font-normal text-[#111111] tracking-tight">$249</span>
              <span class="text-lg font-normal text-[#5F6368] line-through">$399</span>
              <span class="text-xs font-mono text-emerald-800 bg-emerald-100 px-2 py-0.5 rounded font-medium">Save
                $150</span>
            </div>
            <div class="text-xs font-mono text-[#5F6368] mb-4">First 50 Clients Rate • $249 Flat</div>
            <p class="text-xs text-[#5F6368] mb-6">Robust WooCommerce or Shopify store engineered for conversion velocity, high average order value, and frictionless checkout.</p>
            <ul class="space-y-2.5 text-xs text-[#45474D] mb-8">
              <li class="flex items-center gap-2"><span>✓</span> Complete WooCommerce or Shopify Configuration</li>
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

    <!-- 9. CALLOUT BANNER (Antigravity Download Section) -->
    <section class="py-20 px-6 z-10 container mx-auto max-w-6xl" aria-label="Project Consultation Callout">
      <div
        class="ag-card-dark bg-black text-white p-10 lg:p-20 relative overflow-hidden flex flex-col lg:flex-row justify-between items-center gap-10">
        <!-- Cosmic Orbit Particle Dots Pattern on Right -->
        <div class="absolute right-0 top-0 bottom-0 w-1/2 cosmic-orbit-dots opacity-20 pointer-events-none"></div>

        <div class="max-w-xl z-10 space-y-4">
          <h2 class="text-4xl sm:text-5xl font-normal tracking-tight leading-tight">
            Ready to Build Your Website or Store?
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
    <section id="contact" class="py-24 px-6 z-10 container mx-auto max-w-4xl" aria-label="Contact and Project Inquiry">
      <div class="text-center mb-14">
        <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 07 START YOUR PROJECT</span>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">Discuss Your Project with a Senior Developer</h2>
        <p class="text-base text-[#5F6368] mt-3">Receive a detailed proposal and fixed quote within 24 hours directly from a senior engineer.</p>
      </div>

      <div class="ag-card-white p-8 lg:p-12 shadow-sm border border-black/[0.08]">
        <?php echo do_shortcode('[contact-form-7 id="a925e28" title="Contact form 1"]'); ?>
      </div>
    </section>

    <!-- 11. FAQ ACCORDION SECTION -->
    <section id="faq" class="py-24 px-6 z-10 container mx-auto max-w-4xl" aria-label="Frequently Asked Questions">
      <div class="max-w-2xl mb-14">
        <span class="text-xs font-mono uppercase tracking-widest text-[#5F6368]">/ 08 FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="text-3xl sm:text-4xl font-normal tracking-tight text-[#111111] mt-2">Frequently Asked Questions</h2>
      </div>

      <div class="space-y-4">
        <!-- FAQ 1 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]"
            aria-expanded="false">
            <span>What Shopify and WordPress development services do you offer?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            We provide end-to-end development services across both platforms. For Shopify, we deliver custom Liquid theme development, Shopify 2.0 section customization, store migrations, app integrations, and conversion optimization. For WordPress, we engineer custom Gutenberg block themes, WooCommerce stores, pixel-perfect Figma translations, and speed optimizations. Every project is built without bloat to achieve sub-second load times.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]"
            aria-expanded="false">
            <span>Can you customize an existing Shopify theme or WordPress website?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Yes. We regularly help businesses refactor, redesign, and customize existing themes without starting from scratch. Whether you need custom Liquid sections added to your Shopify store, custom Gutenberg blocks coded for WordPress, responsive styling fixes, or third-party API connections, our engineers can audit and improve your existing setup safely on staging.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]"
            aria-expanded="false">
            <span>What does the First 50 Clients discount include?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Our first 50 clients program provides discounted founding rates across all packages: Starter Landing Pages at $79 (regular $129), Custom Development Sprints at $149 (regular $249), and eCommerce Stores at $249 (regular $399). In exchange for permission to showcase the finished work in our portfolio and an honest review, you get direct senior developer collaboration, Core Web Vitals optimization, and free post-launch support.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]"
            aria-expanded="false">
            <span>Can you fix bugs, plugin errors, and speed issues on an existing site?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Absolutely. We offer dedicated troubleshooting and speed optimization services starting at $29. We resolve broken layouts, JavaScript errors, checkout bugs, plugin/app conflicts, and database bottlenecks, while tuning Core Web Vitals (LCP, CLS, INP) so your website passes Google PageSpeed standards.
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]"
            aria-expanded="false">
            <span>Can you convert Figma or Adobe XD designs into pixel-perfect code?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Yes. We specialize in translating design files into 1:1 pixel-perfect code. We match typography, micro-interactions, responsive breakpoints, and animations cleanly into modular WordPress blocks, Elementor sections, or custom Shopify Liquid templates that are easy for your team to edit and update.
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]"
            aria-expanded="false">
            <span>Do I have full ownership of the website and code?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            100% yes. Upon project handover, you retain complete administrative ownership and access to your Shopify store, WordPress installation, code repository, and assets. We do not lock you into proprietary platforms or charge ongoing mandatory licensing fees.
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="ag-faq-item ag-card-white p-6 transition-all">
          <button
            class="ag-faq-question w-full flex justify-between items-center text-left text-base font-medium text-[#111111]"
            aria-expanded="false">
            <span>How long does a typical development project take?</span>
            <span
              class="ag-faq-toggle w-8 h-8 rounded-full bg-[#ECECEE] flex items-center justify-center text-[#111111] text-sm transition-transform flex-shrink-0">+</span>
          </button>
          <div class="ag-faq-answer pt-4 text-xs text-[#5F6368] leading-relaxed border-t border-black/[0.04] mt-4">
            Turnaround times depend on project scope: bug fixes are completed within 24–48 hours, high-converting landing pages take 3–5 business days, complete custom websites take 1–2 weeks, and full-scale WooCommerce or Shopify stores are typically delivered in 2–3 weeks with staging review and quality assurance included.
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer();