<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Who we are - Ducati</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#CC0000",
                        "background-light": "#f0f0f0",
                        "background-dark": "#121212",
                    },
                    fontFamily: {
                        display: ["'Roboto Condensed'", "sans-serif"],
                        body: ["Roboto", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0px",
                    },
                },
            },
        };
    </script>
    <style type="text/tailwindcss">
    body {
        font-family: 'Roboto', sans-serif;
    }
    .hero-text-shadow {
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    
    /* Efek Khusus Image Legacy */
    .legacy-img {
        filter: grayscale(100%);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }
    .legacy-img:hover {
        filter: grayscale(0%) !important;
        transform: scale(1.05);
        /* Shadow hitam pekat */
        box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.7) !important;
        z-index: 20;
    }
    .mission-section {
    position: relative;
    overflow: hidden;
}

.mission-bg {
    @apply absolute inset-0 bg-cover bg-center transition-all duration-[1000ms] ease-in-out;
    filter: grayscale(100%);
    z-index: 0;
}

.mission-section:hover .mission-bg {
    filter: grayscale(0%);
    transform: scale(1.1);
}

.mission-content {
    @apply relative z-10 bg-black/70 py-24 text-white transition-colors duration-500;
}

/* Mengurangi kegelapan overlay saat hover agar warna lebih terlihat */
.mission-section:hover .mission-content {
    @apply bg-black/50;
}
</style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 antialiased">

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
                <a class="hover:text-primary transition-colors duration-300" href="/">Home</a>
                <a class="hover:text-primary transition-colors duration-300" href="/products">Products</a>
                <a class="hover:text-primary transition-colors duration-300" href="/news">News</a>
                <a class="hover:text-primary transition-colors duration-300" href="/programs">Programs</a>
                <a class="text-primary border-b border-primary pb-1" href="/about">About Us</a>
                <a class="hover:text-primary transition-colors duration-300" href="/contact">Contact Us</a>
            </nav>

            <button class="md:hidden text-white">
                <span class="material-icons">menu</span>
            </button>          
        </div>
    </div>
</header>

<main>
    <section class="relative h-[80vh] md:h-[95vh] flex items-end overflow-hidden group">
    <div class="absolute inset-0 transition-transform duration-[1500ms] ease-out group-hover:scale-110">
        <img 
            src="https://images.ctfassets.net/x7j9qwvpvr5s/7hSq3EexdSgoyACMUkWMcU/922bd258b6085c906da97c49dd54421c/Corporate-Chi-Siamo-01-Hero-Short-1600x1000.jpg?fm=webp&q=80" 
            class="w-full h-full object-cover object-[22%_center] md:object-center block"
            alt="Ducati Hero"
        />
    </div>

    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
    
    <div class="container mx-auto px-6 md:px-20 pb-16 md:pb-24 relative z-10">
        <p class="text-white text-xs md:text-base font-black uppercase tracking-[0.3em] md:tracking-[0.5em] mb-2 md:mb-4 opacity-90 font-display">
            COMPANY
        </p>
        
        <div class="inline-block">
            <h1 class="text-white text-4xl sm:text-6xl md:text-8xl font-black uppercase tracking-tighter hero-text-shadow font-display italic leading-none">
                Who we are
            </h1>
            
            <div class="flex h-[5px] md:h-[7px] w-full mt-4 md:mt-6 gap-0.5 md:gap-1">
                <div class="h-full w-1/3 bg-[#009246]"></div>
                <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                <div class="h-full w-1/3 bg-[#CC0000]"></div>
            </div>
        </div>
    </div>
</section>

    <section class="py-24 bg-background-light dark:bg-background-dark">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="mb-12">
    <div class="inline-block">
        <h2 class="text-4xl md:text-6xl font-black leading-[1.1] mb-6 tracking-tight font-display italic uppercase">
            <span class="text-[#009246]">Style,</span><br/>
            <span class="text-white drop-shadow-md">Sophistication,</span><br/>
            <span class="text-[#CE2B37]">Performance.</span>
        </h2>

        <div class="flex h-[5px] w-full mb-10">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
        </div>
    </div>

                <div class="space-y-8 text-lg text-slate-600 dark:text-slate-400 leading-relaxed font-light tracking-wide">
                    <p>
                        <strong class="font-bold text-slate-900 dark:text-white underline decoration-primary decoration-2 underline-offset-8">Powerful engines, distinctive design, innovative technologies</strong> and a lot of <strong class="font-bold text-primary italic">passion</strong>: this is the credo according to which Ducati, founded in 1926, still works today in the development and manufacturing of its <strong class="font-bold text-slate-900 dark:text-white">world-famous motorcycles</strong>. In its factory in <strong class="font-bold text-slate-900 dark:text-white">Borgo Panigale</strong> (Bologna, Italy), Ducati crafts the dream of every Ducatista, giving life to motorcycles that are the purest expression of <strong class="font-bold text-slate-900 dark:text-white">refined engineering</strong> with a constant attention to the highest <strong class="font-bold text-slate-900 dark:text-white">standards of quality</strong>.
                    </p>
                    <p>
                        The Italian motorcycle manufacturer has <strong class="font-bold text-primary italic uppercase tracking-tighter">racing in its DNA</strong> and competes with official teams in the <strong class="font-bold text-slate-900 dark:text-white">MotoGP</strong> and <strong class="font-bold text-slate-900 dark:text-white">WorldSBK Championships</strong>, where it tackles every race determined to continuously improve its performance and share the emotions of the sport with its community. 2024 marked an extraordinary year for Ducati, which for the third year in a row became <strong class="font-black text-slate-900 dark:text-white text-xl">World Champion in MotoGP</strong>, achieving the unprecedented feat of winning <strong class="font-bold text-slate-900 dark:text-white">19 out of the 20 Grand Prix season races</strong>, while also winning the <strong class="font-bold">Constructors’</strong> and <strong class="font-bold">Teams’ Titles</strong>. In <strong class="font-bold text-slate-900 dark:text-white">WorldSBK</strong> the Company confirmed its status as the <strong class="font-bold">most successful manufacturer</strong>, winning the championship reserved for <strong class="font-bold">production-derived bikes</strong>, winning the <strong class="font-bold text-slate-900 dark:text-white italic underline decoration-primary underline-offset-4">20th Manufacturers’ World Title</strong> in its history, while in <strong class="font-bold text-slate-900 dark:text-white">WorldSSP Ducati</strong> won the <strong class="font-bold">Riders’</strong> and <strong class="font-bold">Manufacturers’ World Titles</strong>.
                    </p>
                    <p>
                        Until <strong class="font-bold text-slate-900 dark:text-white font-display">2026</strong>, the <strong class="font-bold">Italian motorbike manufacturer</strong> is also the <strong class="font-bold text-slate-900 dark:text-white italic border-b-2 border-primary">sole official supplier</strong> of motorbikes for the <strong class="font-bold text-slate-900 dark:text-white">FIM Enel MotoE™ World Cup</strong>, the electric class of the <strong class="font-bold">MotoGP World Championship</strong>, which sees as many as <strong class="font-bold text-slate-900 dark:text-white underline decoration-primary decoration-1 underline-offset-4">18 high-performance electric motorbikes</strong> dikembangkan dan produced by the <strong class="font-bold text-slate-900 dark:text-white">Borgo Panigale-based company</strong> on the track. The <strong class="font-bold">2024 season</strong> also marks the beginning of a <strong class="font-black text-slate-900 dark:text-white text-xl italic font-display">new, historic chapter</strong> for <strong class="font-bold">Ducati</strong>, yang officially enters the world of off-road racing, debuting in the Italian Motocross Championship.
                    </p>
                    <p class="border-l-4 border-primary pl-6 py-2 text-xl italic font-medium text-slate-800 dark:text-slate-200">
                        Moved by <span class="text-primary font-bold uppercase tracking-widest">passion</span> and fueled by <span class="text-primary font-bold uppercase tracking-widest">racing spirit</span>, <strong class="font-bold">Ducati</strong> proudly brings <strong class="font-bold">‘Made in Italy’</strong> to more than <strong class="font-bold">90 countries</strong> worldwide.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-section">
    <div class="mission-bg" style="background-image: url('https://images.ctfassets.net/x7j9qwvpvr5s/2fX9BuSISKM6m75IsAczT3/0583f3bf23a807790b1e55588e963f0a/Ducati-Heritage-la-storia-hero-short-1600x1000.jpg?fm=webp&q=80');"></div>
    
    <div class="mission-content">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-black uppercase tracking-[0.5em] mb-4 font-display italic">Our Mission</h2>
            
            <div class="flex h-[5px] w-24 mx-auto mb-10">
                <div class="h-full w-1/3 bg-[#009246]"></div>
                <div class="h-full w-1/3 bg-[#F1F2F1]"></div>
                <div class="h-full w-1/3 bg-[#CE2B37]"></div>
            </div>
            
            <p class="text-3xl md:text-5xl max-w-5xl mx-auto italic font-black leading-tight tracking-tight text-white/95 font-display uppercase">
                "At Ducati, pure passion and intense dedication travel fast and deep"
            </p>
        </div>
    </div>
</section>

    <section class="py-24 bg-gray-100 dark:bg-black/40">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2 p-4"> 
                    <img alt="Vintage Ducati" 
                    class="legacy-img w-full h-auto object-cover border-[12px] border-white dark:border-slate-800 shadow-2xl" 
                    src="https://images.ctfassets.net/x7j9qwvpvr5s/7oKAnaNYz9F1iKbAY2RsiC/385f42454c3b26abb5fb638cca163c47/2025-11-17_Ducati-Heritage-hero-1600x1000.jpg?fm=webp&q=90"/>
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-4xl font-black text-slate-900 dark:text-white uppercase tracking-tighter mb-4 font-display italic">Our Legacy</h2>
                    <div class="flex h-[6px] w-28 mb-8">
                        <div class="h-full w-1/3 bg-[#009246]"></div>
                        <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                        <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                    </div>
                    <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed mb-6 font-light">Founded in <strong class="text-slate-900 dark:text-white font-bold">1926</strong> by Antonio Cavalieri Ducati and his three sons, Adriano, Marcello, and Bruno, Ducati began as a pioneering company 
                      producing radio components. The aftermath of World War II forced a bold reinvention, leading to the 1946 debut of the <strong class="italic text-primary font-bold text-xl tracking-tight">"Cucciolo"</strong>—a small, innovative engine for bicycles that 
                      laid the foundation for the brand's transformation into a motorcycling legend.</p>
                    <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed font-light italic">Since then, Ducati has become a global symbol of <strong class="text-slate-900 dark:text-white font-bold not-italic underline decoration-primary decoration-2 underline-offset-4">Italian style</strong> and engineering excellence. Renowned for its revolutionary Desmodromic 
                      valve system and avant-garde design, the brand has achieved unparalleled racing success in MotoGP and WorldSBK. Today, every motorcycle crafted in Borgo 
                      Panigale carries this heritage: a perfect fusion of raw performance, refined technology, and an enduring passion for the road.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="bg-[#080808] text-neutral-500 py-24 border-t border-neutral-900">
    <div class="container mx-auto px-6">
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