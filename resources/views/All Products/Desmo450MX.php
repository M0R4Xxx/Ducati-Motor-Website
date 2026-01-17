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
        /* Custom Typography Utility */
        .text-gradient-red {
            @apply bg-clip-text text-transparent bg-gradient-to-r from-[#FF0000] to-[#990000];
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
                    <span class="text-2xl font-bold uppercase tracking-[0.2em] italic leading-none">Ducati</span>
                    <div class="flex h-[5px] w-full mt-1">
                        <div class="h-full w-1/3 bg-[#009246]"></div>
                        <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                        <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                    </div>
                </div>
            </a>

            <nav class="hidden md:flex items-center space-x-10 text-[11px] font-bold tracking-[0.25em] uppercase">
                <a class="hover:text-primary transition-colors duration-300" href="/products/panigale">Panigale</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/streetfighter">Streetfighter</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/monster">Monster</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/multistrada">Multistrada</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products/diavel">Diavel</a>
                <a class="text-primary border-b border-primary pb-1" href="/products/desmo450mx">Desmo450 MX</a>
    
                <a class="bg-primary text-white px-7 py-2.5 rounded-full hover:brightness-110 transition-all duration-300" href="/products">
                    Back to All Products
                </a>
            </nav>

            <button class="md:hidden text-white"><span class="material-icons">menu</span></button>
        </div>
    </div>
</header>

<section class="relative h-screen w-full flex items-end overflow-hidden group">
    <img alt="Motorcycle on Track" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/4nsJxV2I1AhqHhT5ErHNrh/9e1584e2153bc199835614d420a6a17e/v21j-factory-dwp-hero-1600x1000-02.jpg"/>
    
    <div class="absolute inset-0 hero-gradient"></div>
    
    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/25 to-transparent h-1/2 mt-auto"></div>
    
    <div class="relative max-w-none w-full px-8 md:px-16 mb-24 text-left">
        <p class="text-sm font-bold tracking-[0.3em] uppercase mb-2">
            <span class="text-[#009246]">made</span> 
            <span class="text-white">to</span> 
            <span class="text-[#CC0000]">compete</span>
        </p>
        
        <h1 class="text-white text-5xl md:text-7xl font-black italic tracking-tighter uppercase mb-4">
            New Ducati <span class="text-primary italic">Desmo450 MX</span>
        </h1>

        <div class="flex h-[7px] w-64 mt-4 gap-1">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
            <div class="h-full w-1/3 bg-[#CC0000]"></div>
        </div>
    </div>
</section>

<section class="py-24 bg-[#fafafa] dark:bg-background-dark">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl md:text-7xl font-black mb-6 dark:text-white uppercase tracking-tighter italic">
           made to <span class="text-primary not-italic font-light">compete</span> 
        </h2>
        
        <div class="flex h-[5px] w-32 mx-auto mb-10">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-[#F5F5F5]"></div> <div class="h-full w-1/3 bg-[#CE2B37]"></div>
        </div>

        <p class="text-xl md:text-2xl text-slate-500 dark:text-slate-400 leading-relaxed font-light italic">
             <span class="text-slate-900 dark:text-white font-bold not-italic underline decoration-primary decoration-4 underline-offset-8">Born to compete, developed on track</span>. 
             The Desmo450 MX is the first Ducati motocross bike with desmodromic timing designed to carry Borgo Panigale racing DNA off-road. Lightweight, powerful, essential, 
             it combines advanced technology and maximum performance to ensure speed, control and pure adrenaline.
        </p>
    </div>
</section>

<section class="relative bg-[#fafafa] w-full overflow-hidden px-6 md:px-16 py-6">
    <div class="max-w-10xl mx-auto relative">
        <img 
            alt="Aerodynamics Technology" 
            class="w-full h-[400px] md:h-auto object-cover block" 
            src="https://images.ctfassets.net/x7j9qwvpvr5s/74EsiOZpNMNkekng0wsJ09/5516ab5ce399e9f120ca602ec430f9e3/Ducati-Desmo450-MX-MY26-overview-banner-full-1330x600-02.jpg"
        />
        
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
            <div class="max-w-7xl mx-auto px-8 pt-8 md:pt-16 text-left h-full flex items-start">
                <div class="max-w-[70%] md:max-w-[35%] pointer-events-auto bg-black/30 md:bg-transparent p-4 md:p-0">
                    <h2 class="text-white text-2xl md:text-4xl font-bold mb-3 md:mb-4 uppercase italic tracking-tighter">
                        Developed on the racetrack, in the Ducati tradition.
                    </h2>
                    <p class="text-white text-sm md:text-lg leading-relaxed font-light">
                        The Desmo450 MX was born out of a desire to expand and engage new enthusiasts. Launched in 2021, 
                        it fully embodies Ducati's development philosophy: 
                        to experiment and refine in competitions solutions intended later for production motorcycles. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-12 bg-gray-50 dark:bg-zinc-900">
    <div class="max-w-7xl mx-auto px-6 mb-16">
        <h2 class="text-5xl font-black mb-4 dark:text-white uppercase tracking-tighter italic">Maximum performance, <span class="text-primary">zero compromise.</span></h2>
        
        <div class="flex h-[5px] w-40 mb-8">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-[#F5F5F5]"></div> 
            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
        </div>

        <p class="max-w-2xl text-lg text-slate-500 dark:text-slate-400 font-light leading-relaxed">
            A motocross bike imbued <span class="text-slate-900 dark:text-white font-bold">with pure Ducati racing DNA</span>, 
            which concentrates the brand’s experience and passion for competition. 
            Developed at the tracks, this bike offers professional-level performance and reliability.
        </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-12 gap-2 px-2">
        <div class="md:col-span-8 overflow-hidden group">
            <img alt="Action shot" class="w-full h-[500px] object-cover transition duration-700 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/5Kj84pTDVhJSHsAgViIXP5/22394a274d1349442d2de3540676a6d5/v21j-factory-veicolo-design-gallery-mosaic-1920x1080-02.jpg"/>
        </div>
        <div class="md:col-span-4 overflow-hidden group">
            <img alt="Front view" class="w-full h-[500px] object-cover transition duration-700 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/66oeOnLR9VTIikXqQXr38I/e91a8a24b8d9f967ca6082844e75e381/v21j-factory-veicolo-design-gallery-mosaic-1080x1350-03.jpg"/>
        </div>
        <div class="md:col-span-4 overflow-hidden group">
            <img alt="Detail view" class="w-full h-[400px] object-cover transition duration-700 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/70JdHtHkwr5rBs1xpACfkH/499a4d75a17da8bbc1c4d316ed6738bd/v21j-factory-elettronica-gallery-mosaic-1080x1350-02.jpg"/>
        </div>
        <div class="md:col-span-8 overflow-hidden group">
            <img alt="Full profile" class="w-full h-[400px] object-cover transition duration-700 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/1wd10hFtwKFoVZNcIVcbMv/fd88dd62baccb993dfd710451c318201/v21j-factory-elettronica-gallery-mosaic-1920x1080-04.jpg"/>
        </div>
    </div>
</section>

<section class="py-12 bg-slate-50 dark:bg-zinc-950">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-6xl md:text-[5.5rem] font-black dark:text-white uppercase tracking-tighter italic leading-none">
                Tech <span class="text-primary">Spec</span>
            </h2>
            <div class="flex h-[5px] w-48 mt-4">
                <div class="h-full w-1/3 bg-[#009246]"></div>
                <div class="h-full w-1/3 bg-[#F5F5F5]"></div>
                <div class="h-full w-1/3 bg-[#CE2B37]"></div>
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="overflow-hidden bg-white dark:bg-zinc-900">
                <div class="h-auto w-full">
                    <img 
                        src="https://images.ctfassets.net/x7j9qwvpvr5s/0p0oPHngTJkKFD4d2NYmP/9d8bec3cb14e9e4154d40a0fd3f3e37e/2025-04-02_Desmo-450MX-ENG-Curve-768x480.jpg" 
                        alt="Ducati Desmo450 MX Technical View" 
                        class="w-full h-auto block"
                    />
                </div>
            </div>



            
            <div class="h-full flex flex-col justify-center font-display italic">
                <div class="space-y-1"> 
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Displacement</span>
                        <span class="text-xl font-bold dark:text-white">449.6 <span class="text-sm font-light opacity-60">cc</span></span>
                    </div>
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Power</span>
                        <span class="text-2xl font-black text-primary">63.5 hp (46.7 kW) <span class="text-sm font-light opacity-60">@ 9,400 rpm</span></span>
                    </div>
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Torque</span>
                        <span class="text-xl font-bold dark:text-white">53.5 Nm (5.46 kgm, 39.5 lb ft) <span class="text-sm font-light opacity-60">@ 7,500 rpm</span></span>
                    </div>
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Dry Weight</span>
                        <span class="text-xl font-bold dark:text-white">104.8 kg <span class="text-sm font-light opacity-60">(231 lb)</span></span>
                    </div>
                    <div class="flex justify-between py-5 border-b-2 border-slate-200/80 dark:border-zinc-800 group hover:border-primary transition-colors">
                        <span class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 group-hover:text-primary transition-colors">Seat Height</span>
                        <span class="text-xl font-bold dark:text-white">970 mm <span class="text-sm font-light opacity-60">(38.2 in)</span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-[40vh] w-full grid grid-cols-3 gap-0 overflow-hidden bg-black">
    <div class="h-full overflow-hidden group">
        <img alt="Detail 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/3yGTYgkbiT47fB8KxNtjU9/04c4139cc2a8793b131370c1a303280b/Ducati-Desmo450-MX-MY26-specifiche-tecniche-mosaic-gallery-1920x1080-02.jpg"/>
    </div>
    <div class="h-full overflow-hidden group">
        <img alt="Detail 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/5LXfuorgNTK9qQjFhWXoLt/3440260e2b53d86f8539e4a1bcdf45c4/v21j-factory-elettronica-gallery-mosaic-1920x1080-01.jpg"/>
    </div>
    <div class="h-full overflow-hidden group">
        <img alt="Detail 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/n0A7cagjCTYvvEeheS9yg/1aa94edb96582da73f507b87a048e4b3/Ducati-Desmo450-MX-MY26-motore-mosaic-gallery-1920x1080-03.jpg"/>
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
            <p class="text-neutral-500">© 2026 Ducati Motor Holding S.p.A. - All rights reserved.</p>
            <p class="text-neutral-700">P.IVA 05113870967</p>
        </div>
    </div>
</footer>

</body>
</html>