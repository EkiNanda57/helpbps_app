<footer class="w-full bg-white/0 backdrop-blur-md p-6 mt-12 border-t border-white/0">
    <div class="flex flex-col items-center md:flex-row md:justify-between max-w-6xl mx-auto">

        {{-- 1. ALAMAT (Ditempatkan di KIRI) --}}
        <div class="text-center md:text-left text-sm text-slate-800 leading-relaxed max-w-xl mb-6 md:mb-0">
            <p class="font-semibold">Badan Pusat Statistik Kabupaten Jember</p>

            <p>Jl. Cendrawasih No. 20 Jember</p>
            <p>East Java — Indonesia</p>

            <p class="mt-2">Telp: (62-331) 487642</p>
            <p>Faks: (62-331) 427533</p>
            <p>Mailbox: bps3509@bps.go.id</p>

            <p class="mt-4 text-xs text-slate-600">
                © 2025 BPS Kabupaten Jember
            </p>
        </div>

        {{-- 2. SOSIAL MEDIA (Ditempatkan di KANAN) --}}
        <div class="flex justify-center md:justify-end gap-6">

            {{-- Instagram --}}
            <a href="https://www.instagram.com/bpsjember?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                target="_blank"
                class="group">
                {{-- Container Ikon --}}
                <div class="p-3 rounded-2xl transition-all
                            bg-gradient-to-tr from-yellow-400 via-pink-500 to-purple-600
                            group-hover:scale-110">
                    {{-- SVG Ikon --}}
                    <svg class="w-7 h-7 text-white transition-all"
                            fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                        <circle cx="12" cy="12" r="4"></circle>
                        <circle cx="17" cy="7" r="1.2" fill="currentColor"></circle>
                    </svg>
                </div>
            </a>

            {{-- YouTube --}}
            <a href="https://www.youtube.com/@BPSKabupatenJember"
                target="_blank"
                class="group">
                {{-- Container Ikon --}}
                <div class="p-3 rounded-2xl transition-all
                            bg-red-600 /* Warna latar belakang merah solid YouTube */
                            group-hover:scale-110 group-hover:bg-red-700 /* Sedikit lebih gelap saat hover */
                            ">
                    {{-- SVG Ikon --}}
                    <svg class="w-7 h-7 text-white transition-all /* Warna ikon menjadi putih */"
                            fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.6 3.2H4.4C2.4 3.2 1 4.7 1 6.7v10.6c0 2 1.4 3.5 3.4 3.5h15.2c2 0 3.4-1.5 3.4-3.5V6.7c0-2-1.4-3.5-3.4-3.5zm-8.6 13V7.8l6 4.2-6 4.2z"/>
                    </svg>
                </div>
            </a>

            {{-- TikTok --}}
            <a href="https://www.tiktok.com/@bpsjember?is_from_webapp=1&sender_device=pc"
                target="_blank"
                class="group">
                {{-- Container Ikon --}}
                <div class="p-3 rounded-2xl transition-all
                            bg-slate-900 /* Latar belakang gelap (hitam) */
                            group-hover:scale-110 group-hover:bg-slate-800 /* Efek hover gelap */
                            ">
                    {{-- SVG Ikon --}}
                    <svg class="w-7 h-7 text-white transition-all
                            /* Efek Box Shadow - ini memerlukan konfigurasi kustom jika Anda ingin efek double shadow RGB */
                            /* Untuk Tailwind default, kita akan gunakan ikon putih biasa di atas latar hitam. */
                            "
                            fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.9 2h3.3c.1 1 .5 2 1.2 2.8.7.8 1.7 1.3 2.8 1.4v3.3c-1.7-.1-3.3-.7-4.6-1.7v8.5c0 2.9-2.4 5.2-5.3 5.2S5 19.2 5 16.3s2.4-5.2 5.3-5.2c.4 0 .8 0 1.2.1v3.4c-.4-.1-.8-.2-1.2-.2-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2V2z"/>
                    </svg>
                </div>
            </a>

            {{-- X (Twitter) --}}
            <a href="https://x.com/bps_jember?s=20"
                target="_blank"
                class="group">
                {{-- Container Ikon --}}
                <div class="p-3 rounded-2xl transition-all
                            bg-slate-900 /* Warna latar belakang hitam solid X */
                            group-hover:scale-110 group-hover:bg-slate-800 /* Sedikit lebih terang saat hover */
                            ">
                    {{-- SVG Ikon --}}
                    <svg class="w-7 h-7 text-white transition-all /* Warna ikon menjadi putih */"
                            fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.36 2H21l-6.5 7.42L22 22h-6.21l-4.4-6.41L6 22H3l7.06-8.07L2 2h6.29l3.9 5.7L18.36 2z" />
                    </svg>
                </div>
            </a>
        </div>
    </div>

</footer>
