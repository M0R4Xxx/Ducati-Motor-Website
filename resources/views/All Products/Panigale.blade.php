<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Product Detail Panigale V4 R</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#CC0000",
                        "background-light": "#FFFFFF",
                        "background-dark": "#121212",
                    },
                    fontFamily: {
                        display: ["'Roboto Condensed'", "sans-serif"],
                        sans: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0px",
                    },
                    screens: {
                        'sm-xs': '320px',
                        'md-sm': '576px',
                        'tablet': '760px',
                        'laptop-l': '1150px',
                        '2k-res': '2048px',
                    }
                },
            },
        };
    </script>
    <style type="text/tailwindcss">
        body { font-family: 'Inter', sans-serif; }
        .hero-gradient {
            background: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 30%, rgba(0,0,0,0.8) 100%);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 48;
        }
        .text-gradient-red {
            @apply bg-clip-text text-transparent bg-gradient-to-r from-[#FF0000] to-[#990000];
        }
        /* Custom Media Queries untuk presisi sesuai instruksi */
        @media screen and (max-width: 320px) {
            .hero-h1 { font-size: 2.5rem !important; }
        }
        @media screen and (min-width: 2048px) {
            .container { max-width: 1900px !important; }
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 antialiased overflow-x-hidden">

<header class="absolute top-0 left-0 right-0 z-50 bg-gradient-to-b from-black/80 to-transparent text-white font-display">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center h-20 text-sm font-bold border-b border-white-500/50">
            
            <a class="flex items-center space-x-3" href="/">
                <img src="https://assets.prd.site.awsducati.com/dist/0.39.1/assets/img/ducati_id.png" alt="Ducati Logo" class="w-8 h-8" />
                <div class="flex flex-col">
                    <span class="text-xl md:text-2xl font-bold uppercase tracking-[0.2em] italic leading-none">Ducati</span>
                    <div class="flex h-[5px] w-full mt-1">
                        <div class="h-full w-1/3 bg-[#009246]"></div>
                        <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                        <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                    </div>
                </div>
            </a>

            <nav class="hidden laptop-l:flex items-center space-x-6 xl:space-x-10 text-[11px] font-bold tracking-[0.25em] uppercase">
                <a class="text-primary border-b border-primary pb-1" href="/products/panigale">Panigale</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/streetfighter">Streetfighter</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/monster">Monster</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/multistrada">Multistrada</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/diavel">Diavel</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/desmo450mx">Desmo450 MX</a>
    
                <a class="bg-primary text-white px-7 py-2.5 rounded-full hover:brightness-110 transition-all duration-300" href="/products">
                    Back to All Products
                </a>
            </nav>

            <button class="laptop-l:hidden text-white"><span class="material-icons">menu</span></button>
        </div>
    </div>
</header>

<section class="relative h-screen w-full flex items-end overflow-hidden group">
    <img alt="Motorcycle on Track" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/6MnwDix9fBUmWTWzoKGhap/33f1d1e7b367b2576d3cb9d73e7eb5d1/Panigale-V4-R-specifiche-tecniche-gallery-mosaic-1920x1080-6.jpg"/>
    
    <div class="absolute inset-0 hero-gradient"></div>
    
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/25 to-transparent h-1/2 mt-auto"></div>
    
    <div class="relative max-w-none w-full px-8 md:px-16 mb-24 text-left">
        <p class="text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-2">
            <span class="text-[#009246]">Racing</span> 
            <span class="text-white">is just the</span> 
            <span class="text-[#CC0000]">beginning</span>
        </p>
        
        <h1 class="hero-h1 text-white text-5xl md:text-7xl laptop-l:text-8xl font-black italic tracking-tighter uppercase mb-4 leading-none">
            New Panigale <span class="text-primary italic">V4 R</span>
        </h1>

        <div class="flex h-[7px] w-48 md:w-64 mt-4 gap-1">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
            <div class="h-full w-1/3 bg-[#CC0000]"></div>
        </div>
    </div>
</section>

<section class="py-16 md:py-24 bg-background-light dark:bg-background-dark">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-6xl laptop-l:text-7xl font-black mb-6 dark:text-white uppercase tracking-tighter italic">
            Racing is <span class="text-primary not-italic font-light">just the</span> beginning
        </h2>
        
        <div class="flex h-[5px] w-32 mx-auto mb-10">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-[#F5F5F5]"></div> <div class="h-full w-1/3 bg-[#CE2B37]"></div>
        </div>

        <p class="text-lg md:text-2xl text-slate-500 dark:text-slate-400 leading-relaxed font-light italic">
            The latest evolution of a legendary saga that <span class="text-slate-900 dark:text-white font-bold not-italic underline decoration-primary decoration-4 underline-offset-8">epitomises our sports attitude</span>. Developed to respect the WorldSBK championship regulation, the new Panigale V4 R embodies the success achieved in MotoGP and Superbike.
            Powered by the 998 cc Desmosedici Stradale, it is the first bike homologated for road use to feature Corner Sidepods and the Racing Gearbox with Neutral Lock (DNL).
        </p>
    </div>
</section>

<section class="relative bg-white w-full overflow-hidden">
    <img 
        alt="Aerodynamics Technology" 
        class="w-full h-[400px] md:h-auto object-cover block" 
        src="https://images.ctfassets.net/x7j9qwvpvr5s/3EwvyfyqNhe1yvfZW0owFU/f695de174fceec2c90dc9e50e0b37dbc/Panigale-V4-R-overview-aerodinamica-ENG-banner-full-1330x600.jpg"
    />
    
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
        <div class="max-w-7xl mx-auto px-6 pt-8 md:pt-16 text-left">
            <div class="max-w-xl pointer-events-auto bg-black/30 md:bg-transparent p-4 md:p-0">
                <h2 class="text-white text-3xl md:text-5xl font-bold mb-4 md:mb-6 uppercase italic tracking-tighter">
                    Aerodynamics
                </h2>
                <p class="text-white text-base md:text-xl leading-relaxed font-light">
                    Born in the wind tunnel, developed by the aerodynamics department. Delve into the aerodynamic details of the Panigale V4 R, where every winglet and air duct is sculpted for maximum downforce and stability at high speeds.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 dark:bg-zinc-900">
    <div class="max-w-7xl mx-auto px-6 mb-16">
        <h2 class="text-3xl md:text-5xl font-black mb-4 dark:text-white uppercase tracking-tighter italic">Built for the <span class="text-primary">challenge</span></h2>
        
        <div class="flex h-[5px] w-40 mb-8">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-[#F5F5F5]"></div> 
            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
        </div>

        <p class="max-w-2xl text-base md:text-lg text-slate-500 dark:text-slate-400 font-light leading-relaxed">
            The Panigale V4 R flaunts the very best of <span class="text-slate-900 dark:text-white font-bold">racing technology</span> applied to a homologated sports bike. This bike gives access to technical solutions that were previously only available to official riders.
        </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-12 gap-2 px-2">
        <div class="md:col-span-8 overflow-hidden group">
            <img alt="Action shot" class="w-full h-[300px] md:h-[500px] object-cover transition duration-700 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/7tp2csU81em5g8pyxx5nLi/5b973fd51ecf25121e49c42d1531a852/Panigale-V4-R-elettronica-gallery-mosaic-1930x1080-5.jpg"/>
        </div>
        <div class="md:col-span-4 overflow-hidden group">
            <img alt="Front view" class="w-full h-[300px] md:h-[500px] object-cover transition duration-700 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/4b8GQg3ZHqxXo1Q2bfqirW/332fb3f8bca4f686b60099892a65853d/Panigale-V4-R-overview-gallery-mosaic-1080x1350-2.jpg"/>
        </div>
        <div class="md:col-span-4 overflow-hidden group">
            <img alt="Detail view" class="w-full h-[250px] md:h-[400px] object-cover transition duration-700 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/2ouNZmwcM9TaAVfNRDhuL4/b9b1cc4aabc923aaf762ba7796088927/Panigale-V4-R-overview-gallery-mosaic-1920x1080-1.jpg"/>
        </div>
        <div class="md:col-span-8 overflow-hidden group">
            <img alt="Full profile" class="w-full h-[250px] md:h-[400px] object-cover transition duration-700 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/428Lib7D4CZ5WBZM2yn8xs/ebdc4d1e24b8a19fb4d474b8b487d5da/Panigale-V4-R-overview-gallery-mosaic-1920x1080-4.jpg"/>
        </div>
    </div>
</section>

<section class="py-12 bg-slate-50 dark:bg-zinc-950">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-5xl md:text-7xl laptop-l:text-[5.5rem] font-black dark:text-white uppercase tracking-tighter italic leading-none">
                Tech <span class="text-primary">Spec</span>
            </h2>
            <div class="flex h-[5px] w-48 mt-4">
                <div class="h-full w-1/3 bg-[#009246]"></div>
                <div class="h-full w-1/3 bg-[#F5F5F5]"></div>
                <div class="h-full w-1/3 bg-[#CE2B37]"></div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 laptop-l:grid-cols-2 gap-16 items-center">
            <div class="overflow-hidden bg-white dark:bg-zinc-900">
                <div class="h-auto w-full">
                    <img 
                        src="https://images.ctfassets.net/o6sr41tx16eu/t1DW7HYftXEVJdez2rh04/0f1056f003812c6a0b20999899c750cf/2025-09-18_Panigale-V4-US-Curve-768x480.jpg" 
                        alt="Ducati Panigale V4 R Technical View" 
                        class="w-full h-auto block"
                    />
                </div>
            </div>

            <div class="h-full flex flex-col justify-center font-display italic">
                <div class="space-y-1"> 
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Displacement</span>
                        <span class="text-lg md:text-xl font-bold dark:text-white">998 cc <span class="text-sm font-light opacity-60">(60.9 cu in)</span></span>
                    </div>
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Power</span>
                        <span class="text-xl md:text-2xl font-black text-primary">218 hp (160,3 kW) <span class="text-sm font-light opacity-60">@ 15.750 rpm</span></span>
                    </div>
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Torque</span>
                        <span class="text-lg md:text-xl font-bold dark:text-white">114,5 Nm (11,7 kgm) <span class="text-sm font-light opacity-60">@ 12.000 rpm</span></span>
                    </div>
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Dry Weight</span>
                        <span class="text-lg md:text-xl font-bold dark:text-white">167 kg <span class="text-sm font-light opacity-60">(368 lb)</span></span>
                    </div>
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Seat Height</span>
                        <span class="text-lg md:text-xl font-bold dark:text-white">850 mm <span class="text-sm font-light opacity-60">(33.5 in)</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-auto md:h-[40vh] w-full grid grid-cols-1 md:grid-cols-3 gap-0 overflow-hidden bg-black">
    <div class="h-64 md:h-full overflow-hidden group">
        <img alt="Detail 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/5RARfcSs60kQk6egvN37xh/cd05495bc513fbef40a8a1cb953e5296/Panigale-V4-R-aerodinamica-gallery-mosaic-1920x1080-5.jpg"/>
    </div>
    <div class="h-64 md:h-full overflow-hidden group">
        <img alt="Detail 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/rBOhwA72gWlLLbOFMoXxZ/5ecccfaadc67ef9976c7e1bbea5618a9/Panigale-V4-R-specifiche-tecniche-gallery-mosaic-1920x1080-5.jpg"/>
    </div>
    <div class="h-64 md:h-full overflow-hidden group">
        <img alt="Detail 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/5RO8qV71wa36QYgne87bnN/02cd9f09e58e5c817b9d02be617fc443/Panigale-V4-R-overview-gallery-mosaic-1920x1080-6.jpg"/>
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
                <p class="text-base leading-relaxed mb-8 max-w-xs font-light tracking-wide text-neutral-400">
                    Experience the passion, design, and performance of Borgo Panigale. Join the world's most sophisticated riding community.
                </p>
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
                <ul class="space-y-4 text-base font-bold tracking-[0.1em] uppercase">
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
                <ul class="space-y-4 text-base font-bold tracking-[0.1em] uppercase">
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
                <ul class="space-y-4 text-base font-bold tracking-[0.1em] uppercase">
                    <li><a class="hover:text-primary transition-all duration-300" href="/contact">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-24 pt-10 border-t border-neutral-900 flex flex-col md:flex-row justify-between items-center text-xs tracking-[0.3em] uppercase gap-6 font-bold">
            <p class="text-neutral-500 text-center md:text-left">© 2026 Ducati Motor Holding S.p.A. - All rights reserved.</p>
            <p class="text-neutral-700">P.IVA 05113870967</p>
        </div>
    </div>
</footer>

</body>
</html>