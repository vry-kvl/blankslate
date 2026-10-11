<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0">

  <title>
    <?php
    if (is_front_page()) {
      echo 'Kineva Studios — We build websites that work.';
    } else {
      wp_title('|', true, 'right');
      bloginfo('name');
    }
    ?>
  </title>

  <meta
    name="description"
    content="Modern WordPress development for growing businesses. High velocity with modern Gutenberg block themes and Elementor for rapid turnaround and top performance.">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com?plugins=container-queries"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Google Sans Flex -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,slnt,wdth,wght,ROND@8..144,-10..0,25..150,400..500,0..100&display=swap">

  <!-- Google Sans Code -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Google+Sans+Code:ital,wght@0,400..700;1,400..700&display=swap">

  <!-- Google Symbols -->
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Google+Symbols:opsz,wght,FILL,GRAD,ROND@20..48,100..700,0..1,-50..200,0..100&display=block">

  <!-- Tailwind Configuration -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'ag-bg': '#F8F9FA',
            'ag-surface': '#FFFFFF',
            'ag-grey': '#ECECEE',
            'ag-dark': '#111111',
            'ag-muted': '#5F6368',
            'ag-subtext': '#45474D',
          },

          fontFamily: {
            sans: [
              '"Google Sans Flex"',
              '-apple-system',
              'BlinkMacSystemFont',
              'sans-serif'
            ],

            mono: [
              '"Google Sans Code"',
              '"JetBrains Mono"',
              'monospace'
            ],
          },
        }
      }
    };
  </script>

  <?php wp_head(); ?>

</head>

<body <?php body_class('bg-[#F8F9FA] text-[#111111] font-sans antialiased relative'); ?>>

  <?php wp_body_open(); ?>

  <!-- Cosmic Particle Dust Background Overlay -->
  <div class="fixed inset-0 antigravity-dust-bg pointer-events-none z-0"></div>

  <!-- STICKY NAVIGATION (Antigravity Style) -->
  <nav id="siteHeader"
    class="fixed top-0 left-0 w-full z-50 px-6 lg:px-14 py-4 flex justify-between items-center bg-[#F8F9FA]/85 backdrop-blur-md transition-all duration-200 border-b border-black/[0.04]">
    <!-- Brand Logo -->
    <a href="#hero" class="flex items-center gap-2.5 group" aria-label="Kineva Studios Home">
      <svg class="w-5 h-5 text-[#111111]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke="currentColor" stroke-width="2.2"
          stroke-linecap="round" stroke-linejoin="round" />
      </svg>
      <span class="text-[17px] font-medium tracking-tight text-[#111111]">Kineva Studios</span>
    </a>

    <!-- Center Nav Links -->
    <div class="hidden md:flex items-center gap-8 text-[14px] font-medium text-[#45474D]">
      <a class="text-[#111111] hover:text-black transition-colors" href="#hero">Home</a>
      <a class="hover:text-black transition-colors" href="#architecture">Architecture</a>
      <a class="hover:text-black transition-colors" href="#services">Services</a>
      <a class="hover:text-black transition-colors" href="#process">Process</a>
      <a class="hover:text-black transition-colors" href="#pricing">Pricing</a>
      <a class="hover:text-black transition-colors" href="#faq">FAQ</a>
    </div>

    <!-- Right Action Button & Status -->
    <div class="flex items-center gap-4">
      <div
        class="hidden lg:flex items-center gap-1.5 text-[12px] font-mono text-[#5F6368] bg-[#ECECEE] px-3 py-1 rounded-full">
        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
        <span>STATUS: ACCEPTING FIRST 50 CLIENTS</span>
      </div>
      <a href="#contact" class="btn-ag-primary">
        <span>Get a Free Quote</span>
        <span class="text-xs">↗</span>
      </a>
      <!-- Mobile Menu Toggle Button -->
      <button id="mobileToggle"
        class="md:hidden w-9 h-9 rounded-full bg-[#ECECEE] flex flex-col items-center justify-center gap-1 text-[#111111]"
        aria-label="Toggle navigation">
        <span class="w-4 h-0.5 bg-[#111111] rounded-full"></span>
        <span class="w-4 h-0.5 bg-[#111111] rounded-full"></span>
      </button>
    </div>
  </nav>


  <!-- Mobile Drawer Menu -->
  <div id="navMenu"
    class="fixed inset-x-0 top-[64px] bg-[#F8F9FA] border-b border-black/[0.08] p-6 z-40 hidden flex-col gap-4 shadow-lg md:hidden">
    <a class="nav-link text-base font-medium text-[#111111] py-2 border-b border-black/[0.04]" href="#hero">Home</a>
    <a class="nav-link text-base font-medium text-[#111111] py-2 border-b border-black/[0.04]"
      href="#architecture">Architecture</a>
    <a class="nav-link text-base font-medium text-[#111111] py-2 border-b border-black/[0.04]"
      href="#services">Services</a>
    <a class="nav-link text-base font-medium text-[#111111] py-2 border-b border-black/[0.04]"
      href="#process">Process</a>
    <a class="nav-link text-base font-medium text-[#111111] py-2 border-b border-black/[0.04]"
      href="#pricing">Pricing</a>
    <a class="nav-link text-base font-medium text-[#111111] py-2 border-b border-black/[0.04]" href="#faq">FAQ</a>
    <a class="nav-link text-base font-medium text-black py-2 font-bold" href="#contact">Get a Free Quote →</a>
  </div>