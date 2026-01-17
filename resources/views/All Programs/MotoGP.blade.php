    <!DOCTYPE html>
    <html class="scroll-smooth" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Ducati Lenovo Team | MotoGP Official Page</title>
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700;1,900&family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
        <script>
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            primary: "#cc0000",
                            "background-light": "#ffffff",
                            "background-dark": "#0a0a0a",
                            "accent-dark": "#1a1a1a",
                        },
                        fontFamily: {
                            display: ["'Roboto Condensed'", "sans-serif"],
                            sans: ["Outfit", "sans-serif"],
                            inter: ["Inter", "sans-serif"],
                        },
                        borderRadius: {
                            DEFAULT: "0px",
                            'md': "4px",
                        },
                        screens: {
                            'laptop-l': '1150px',
                        }
                    },
                },
            };
        </script>
        <style type="text/tailwindcss">
            body { font-family: 'Outfit', sans-serif; }
            .hero-gradient {
                background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.4) 40%, rgba(0,0,0,0) 100%);
            }
            .text-glow {
                text-shadow: 0 0 20px rgba(204, 0, 0, 0.4);
            }
        </style>
    </head>

    <body class="bg-background-light text-slate-900 antialiased">

        <header class="absolute top-0 left-0 right-0 z-50 bg-gradient-to-b from-black/80 to-transparent text-white font-display">
            <div class="container mx-auto px-6">
                <div class="flex justify-between items-center h-20 text-sm font-bold border-b border-white-500/50">
                    <a class="flex items-center space-x-3" href="/">
                        <img src="https://assets.prd.site.awsducati.com/dist/0.39.1/assets/img/ducati_id.png" alt="Ducati Logo" class="w-8 h-8" />
                        <div class="flex flex-col">
                            <span class="text-xl md:text-2xl font-black uppercase tracking-[0.15em] italic leading-none">Ducati</span>
                            <div class="flex h-[4px] w-full mt-1.5">
                                <div class="h-full w-1/3 bg-[#009246]"></div>
                                <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                                <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                            </div>
                        </div>
                    </a>
                    <nav class="hidden laptop-l:flex items-center space-x-6 xl:space-x-10 text-[10px] font-bold tracking-[0.25em] uppercase">
                        <a class="text-white/80 hover:text-white transition-colors duration-300" href="/programs/dre">DRE | Riding Academy</a>
                        <a class="text-primary border-b-2 border-primary pb-1 transition-all" href="/programs/motogp">MotoGP™ | Campioni in festa</a>
                        <a class="bg-primary text-white px-8 py-3 rounded-full hover:bg-red-700 transition-all duration-300 shadow-lg shadow-primary/20" href="/programs">
                            Back to All Programs
                        </a>
                    </nav>
                    <button class="laptop-l:hidden text-white"><span class="material-icons">menu</span></button>
                </div>
            </div>
        </header>

        <section class="relative h-[100vh] w-full flex items-end overflow-hidden group">
            <img alt="Motorcycle on Track" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/275lv2s0PauPdwiBLpHfAE/e4d3c7171cc0b145fd1b934107423d17/2025-09-26_MGP25-RWC-team-Mainpage-hero-1600x1000.jpg" />
            <div class="absolute inset-0 hero-gradient"></div>

            <div class="relative max-w-none w-full px-6 md:px-16 mb-12 md:mb-16 text-left">
                <p class="text-[9px] md:text-[11px] font-black tracking-[0.4em] uppercase mb-4 font-display flex items-center gap-2">
                    <span class="text-[#00c85f]">motogp</span>
                    <span class="text-white">| Campioni</span>
                    <span class="text-[#ff1a1a]">in festa</span>
                </p>

                <h1 class="text-white text-4xl sm:text-6xl md:text-7xl laptop-l:text-[85px] font-black italic tracking-tighter uppercase mb-6 leading-[0.9] font-display text-glow">
                    <span class="text-primary not-italic">Ducati</span> Lenovo Team
                </h1>

                <p class="text-sm md:text-lg text-white/90 max-w-xs md:max-w-xl leading-relaxed mb-8 font-light font-sans italic">
                    Get ready for the live presentation from Madonna di Campiglio of the Ducati Lenovo Team 2026: <span class="font-bold text-white underline decoration-primary">Francesco Bagnaia</span> and <span class="font-bold text-white underline decoration-primary">Marc Márquez</span>.
                </p>

                <div class="flex h-[4px] w-32 md:w-48 gap-1 opacity-80">
                    <div class="h-full w-1/3 bg-[#00c85f]"></div>
                    <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                    <div class="h-full w-1/3 bg-[#ff1a1a]"></div>
                </div>
            </div>
        </section>

        <section class="py-20 md:py-24 bg-slate-50 border-y border-slate-100">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center">
                        <p class="text-primary font-bold uppercase tracking-[0.5em] text-[10px] md:text-sm mb-4">EXCLUSIVE EVENT</p>
                        <h2 class="text-3xl sm:text-5xl md:text-6xl font-black mb-10 text-slate-900 leading-none uppercase italic font-display">Campioni <span class="text-primary not-italic">In Pista</span>
                            2026
                        </h2>
                    </div>

                    <div class="prose prose-sm sm:prose-lg max-w-none text-slate-700 space-y-6 leading-relaxed font-sans font-normal">
                        <p class="first-letter:text-5xl first-letter:font-black first-letter:text-primary first-letter:mr-3 first-letter:float-left">
                            Set against the breathtaking snowy backdrop of <strong>Madonna di Campiglio</strong>, the Dolomites once again witness the unveiling of racing excellence. The "Campioni In Pista" event marks the official start of a historic chapter for the Ducati Lenovo Team, bringing together a dream line-up that has the entire MotoGP world watching with bated breath.
                        </p>
                        <p>
                            This year's presentation is particularly momentous as it welcomes eight-time World Champion <span class="text-slate-900 font-bold border-b-2 border-primary/20">Marc Márquez</span> into the factory squad. Joining forces with two-time MotoGP World Champion <strong>Francesco "Pecco" Bagnaia</strong>, the duo forms what is arguably the most formidable pairing in the history of the premier class.
                        </p>
                        <p class="bg-white p-6 border-l-4 border-primary italic shadow-sm text-slate-800">
                            Beyond the technical prowess and the pursuit of titles, 2026 holds a profound emotional significance for the Borgo Panigale manufacturer. The season is dedicated to the <strong>"A Century Made of Seconds"</strong> celebration.
                        </p>
                        <p>
                            As the red bikes prepare to roar on the world's most iconic circuits, the spirit of Madonna di Campiglio remains—a reminder that at the heart of every victory lies the perfect balance of human talent and mechanical perfection.
                        </p>
                    </div>

                    <div class="mt-12 flex flex-wrap justify-center gap-3">
                        
                        <a href="https://en.wikipedia.org/wiki/Marc_M%C3%A1rquez" class="group flex items-center px-5 py-3 bg-white text-slate-900 text-[10px] md:text-[11px] font-black uppercase tracking-[0.2em] border border-slate-200 hover:border-primary hover:text-primary transition-all duration-300 shadow-sm hover:shadow-md">
                            Marc Márquez
                            <span class="material-icons text-[14px] ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all">north_east</span>
                        </a>
                        <a href="https://en.wikipedia.org/wiki/Francesco_Bagnaia" class="group flex items-center px-5 py-3 bg-white text-slate-900 text-[10px] md:text-[11px] font-black uppercase tracking-[0.2em] border border-slate-200 hover:border-primary hover:text-primary transition-all duration-300 shadow-sm hover:shadow-md">
                            Francesco Bagnaia
                            <span class="material-icons text-[14px] ml-2 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all">north_east</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    <section class="relative w-full h-auto overflow-hidden bg-inherit">
        <div class="max-w-[1300px] mx-auto px-6 py-4"> 
            <img 
                alt="World Champion" 
                class="relative w-full h-auto block rounded-2xl" 
                src="https://images.ctfassets.net/x7j9qwvpvr5s/2m5yIB96SSh9C6sEiG3E2N/5ec008af7a2eb9275f7bf55f008f9343/2025-09-30_MGP25-RWC-video-full-1330x748.jpg" 
            />
        </div>
    </section> 

        <section class="py-24 bg-background-light">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-black mb-12 leading-tight text-slate-900 italic font-display uppercase italic">Relive <span class="text-primary not-italic">the most spectacular</span> moments</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-6 gap-3 auto-rows-[200px] md:auto-rows-[220px] max-w-6xl mx-auto">
                    <div class="md:col-span-2 md:row-span-3 overflow-hidden group">
                        <img alt="Action 1" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/4HbWg6InK6H5QCd3PhzYV7/231bdaecaf4d315a0df7177f8c235268/2025-09-28-mainpage-motogp-gallery-mosaic-1080x1350-05.jpg" />
                    </div>
                    
                    <div class="md:col-span-4 md:row-span-2 overflow-hidden group">
                        <img alt="Action 2" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/3h1iRCURzZKMemZzwlcn8b/4a3dfcf636568a0b468897c2a64a62ac/2025-09-28-mainpage-motogp-gallery-mosaic-1920x1080-04.jpg" />
                    </div>
                    
                    <div class="md:col-span-2 overflow-hidden group">
                        <img alt="Action 3" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/4b3HH3buOPrNWzgEEiuh42/d6b86392598088ae145709d2f34a4368/2025-09-28-mainpage-motogp-gallery-mosaic-1920x1080-01.jpg" />
                    </div>
                    
                    <div class="md:col-span-2 overflow-hidden group">
                        <img alt="Action 4" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/6EeNI6AYwHHcgejnYzPhIF/a8041bd4d81f8c5c152503895adba791/EOS-lenovo-gallery-mosaic-1920x1080-04.jpg" />
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-[#080808] text-neutral-500 py-24 border-t border-neutral-900">
            <div class="container mx-auto px-6 font-display">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 text-center">
                    <div class="flex flex-col items-center">
                        <div class="flex items-center mb-8 gap-4">
                            <img src="https://assets.prd.site.awsducati.com/dist/0.39.1/assets/img/ducati_id.png" alt="Logo" class="w-12 h-12" />
                            <div class="flex flex-col items-center">
                                <h3 class="text-3xl font-bold text-white uppercase tracking-tighter italic leading-none">Ducati</h3>
                                <div class="flex h-[3px] w-14 mt-2">
                                    <div class="h-full w-1/3 bg-[#009246]"></div>
                                    <div class="h-full w-1/3 bg-[#F1F2F1]"></div>
                                    <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                                </div>
                            </div>
                        </div>
                        <p class="text-base leading-relaxed mb-8 max-w-xs font-light tracking-wide text-neutral-400">Experience the passion, design, and performance of Borgo Panigale.</p>
                        <div class="flex justify-center space-x-6 text-neutral-400">
                        <a href="https://www.facebook.com/jeremia.lintang" class="hover:text-primary transition-all transform hover:-translate-y-1"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.407.593 24 1.325 24H12.82v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116c.732 0 1.325-.593 1.325-1.325V1.325C24 .593 23.407 0 22.675 0z"></path></svg></a>
                        <a href="https://www.instagram.com/jermy_lntang/" class="hover:text-primary transition-all transform hover:-translate-y-1"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.012 3.584-.07 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.252-.148-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.85s.012-3.584.07-4.85c.148-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.947s-.014-3.667-.072-4.947c-.196-4.354-2.617-6.78-6.979-6.98-1.28-.059-1.688-.072-4.947-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"></path></svg></a>
                        <a href="https://www.youtube.com/@abhisekachannel8234" class="hover:text-primary transition-all transform hover:-translate-y-1"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"></path></svg></a>
                        <a href="https://github.com/M0R4Xxx" class="hover:text-primary transition-all transform hover:-translate-y-1"><svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg></a>
                    </div>
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-bold text-white uppercase tracking-tighter italic mb-2">Pages</h3>
                        <div class="flex h-[3px] w-12 mb-8">
                            <div class="h-full w-1/3 bg-[#009246]"></div>
                            <div class="h-full w-1/3 bg-[#F1F2F1]"></div>
                            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                        </div>
                        <ul class="space-y-4 text-base font-bold tracking-[0.1em] uppercase text-neutral-500">
                            <li><a class="hover:text-primary transition-all duration-300" href="/">Home</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/products">Products</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/news">News Archive</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/programs">Programs</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/about">About Us</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-bold text-white uppercase tracking-tighter italic mb-2">Legal</h3>
                        <div class="flex h-[3px] w-12 mb-8">
                            <div class="h-full w-1/3 bg-[#009246]"></div>
                            <div class="h-full w-1/3 bg-[#F1F2F1]"></div>
                            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                        </div>
                        <ul class="space-y-4 text-base font-bold tracking-[0.1em] uppercase text-neutral-500">
                            <li><a class="hover:text-primary transition-all duration-300" href="https://www.ducati.com/us/en/home/privacy">Privacy Policy</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="https://www.ducati.com/us/en/home/cookie-policy">Cookie Settings</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="https://my.ducati.com/us/en/footer/terms-of-use">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-bold text-white uppercase tracking-tighter italic mb-2">Contact Us</h3>
                        <div class="flex h-[3px] w-12 mb-8">
                            <div class="h-full w-1/3 bg-[#009246]"></div>
                            <div class="h-full w-1/3 bg-[#F1F2F1]"></div>
                            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                        </div>
                        <ul class="space-y-4 text-base font-bold tracking-[0.1em] uppercase text-neutral-500">
                            <li><a class="hover:text-primary transition-all duration-300" href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-24 pt-10 border-t border-neutral-900 flex flex-col md:flex-row justify-between items-center text-xs tracking-[0.3em] uppercase gap-6 font-bold">
                    <p class="text-neutral-500">© 2026 Ducati Motor Holding S.p.A. - All rights reserved.</p>
                    <p class="text-neutral-700">P.IVA 05113870967</p>
                </div>
            </div>
        </footer>
    </body>

    </html>