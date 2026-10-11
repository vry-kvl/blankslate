<!-- 13. FOOTER SECTION -->
<footer
    id="footer"
    class="pt-24 pb-12 px-6 z-10 container mx-auto max-w-6xl border-t border-black/[0.08]"
    role="contentinfo"
    aria-label="<?php esc_attr_e( 'Site Footer', 'blankslate' ); ?>"
>

    <div class="flex flex-col lg:flex-row justify-between items-start gap-12 mb-16">

        <!-- Footer Intro -->
        <div>
            <h4 class="text-2xl font-normal text-[#111111]">
                Experience Liftoff
            </h4>

            <p class="text-xs text-[#5F6368] mt-2 max-w-sm">
                Modern Shopify and WordPress engineering for growing businesses.
                High velocity with bespoke themes, WooCommerce, and sub-second performance.
            </p>
        </div>


        <!-- Footer Navigation -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-12 text-xs">

            <!-- Product -->
            <div>
                <span class="font-medium text-[#111111] block mb-3">
                    Product
                </span>

                <ul class="space-y-2 text-[#5F6368]">
                    <li>
                        <a href="#services" class="hover:text-black transition-colors">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="#architecture" class="hover:text-black transition-colors">
                            Capabilities
                        </a>
                    </li>

                    <li>
                        <a href="#pricing" class="hover:text-black transition-colors">
                            Pricing
                        </a>
                    </li>

                    <li>
                        <a href="#benchmarks" class="hover:text-black transition-colors">
                            Benchmarks
                        </a>
                    </li>
                </ul>
            </div>


            <!-- Studio -->
            <div>
                <span class="font-medium text-[#111111] block mb-3">
                    Studio
                </span>

                <ul class="space-y-2 text-[#5F6368]">
                    <li>
                        <a href="#pricing" class="hover:text-black transition-colors">
                            Pricing &amp; Plans
                        </a>
                    </li>

                    <li>
                        <a href="#process" class="hover:text-black transition-colors">
                            Sprint Process
                        </a>
                    </li>

                    <li>
                        <a href="#faq" class="hover:text-black transition-colors">
                            FAQ
                        </a>
                    </li>

                    <li>
                        <a href="#contact" class="hover:text-black transition-colors">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>


            <!-- Engineering -->
            <div>
                <span class="font-medium text-[#111111] block mb-3">
                    Engineering
                </span>

                <ul class="space-y-2 text-[#5F6368]">
                    <li>
                        <a href="#architecture" class="hover:text-black transition-colors">
                            Shopify &amp; Block Themes
                        </a>
                    </li>

                    <li>
                        <a href="#hardening" class="hover:text-black transition-colors">
                            Security Hardening
                        </a>
                    </li>

                    <li>
                        <a href="#benchmarks" class="hover:text-black transition-colors">
                            Core Web Vitals
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>


    <!-- Giant Watermark Display Wordmark -->
    <div
        class="w-full select-none overflow-hidden my-6 sm:my-10 text-center flex justify-center items-center"
    >
        <div
            class="ag-watermark-text whitespace-nowrap text-center select-none font-normal tracking-[-0.04em] text-[#111111] leading-none mx-auto w-full"
        >
            Kineva Studios
        </div>
    </div>


    <!-- Bottom Legal Bar -->
    <div
        class="pt-8 border-t border-black/[0.06] flex flex-col sm:flex-row justify-between items-center gap-4 text-[12px] text-[#5F6368]"
    >

        <!-- Copyright -->
        <div class="flex items-center gap-2">

            <span class="font-medium text-[#111111]">
                Kineva Studios
            </span>

            <span>
                &copy; <?php echo esc_html( date('Y') ); ?>
                Kineva Studios. All rights reserved.
            </span>

        </div>


        <!-- Functional On-Page Navigation Links -->
        <div class="flex items-center gap-6">

            <a
                href="#statement"
                class="hover:text-black transition-colors"
            >
                About Studio
            </a>

            <a
                href="#architecture"
                class="hover:text-black transition-colors"
            >
                Architecture Standards
            </a>

            <a
                href="#hardening"
                class="hover:text-black transition-colors"
            >
                Security &amp; Hardening
            </a>

            <a
                href="#faq"
                class="hover:text-black transition-colors"
            >
                FAQ &amp; Terms
            </a>

        </div>

    </div>

</footer>


<!-- WordPress Footer Hook -->
<?php wp_footer(); ?>

</body>
</html>