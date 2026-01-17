<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Ducati Programs List</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <script>
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              colors: {
                primary: "#CC0000",
                "background-light": "#e4e4e4",
                "background-dark": "#1A1A1A",
              },
              fontFamily: {
                display: ["'Roboto Condensed'", "sans-serif"],
              },
            },
          },
        };
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-neutral-900 dark:text-white antialiased">

<div class="relative min-h-screen flex flex-col">
    <header class="absolute top-0 left-0 right-0 z-50 bg-gradient-to-b from-black/80 to-transparent text-white">
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
                <a class="text-primary border-b border-primary pb-1" href="/programs">Programs</a>
                <a class="hover:text-primary transition-colors duration-300" href="/about">About Us</a>
                <a class="hover:text-primary transition-colors duration-300" href="/contact">Contact Us</a>
            </nav>

            <button class="md:hidden text-white"><span class="material-icons">menu</span></button>
            
        </div>
    </div>
</header>

    <main class="flex-grow">
        <section class="group relative h-[70vh] flex items-center justify-center text-center text-white bg-neutral-900 overflow-hidden">
            <img alt="Ducati racetrack" 
                class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 ease-in-out group-hover:scale-105 opacity-60" 
                src="https://images.hdqwalls.com/wallpapers/ducati-panigale-v4-s-2018-racing-li.jpg"/>
            <div class="absolute inset-0 bg-black/10"></div> 
            <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-90"></div> 
            
            <div class="relative z-10 px-4 mt-20">
                <h1 class="text-6xl md:text-8xl font-bold tracking-[-0.04em] uppercase italic leading-none">
                    Ducati <span class="text-primary">Program</span> List
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-lg md:text-xl text-neutral-300 font-light tracking-wide leading-relaxed">
                    Discover unforgettable riding experiences and exclusive events designed for you.
                </p>
                <div class="flex justify-center mt-6 gap-1">
                <div class="w-16 h-1 bg-[#008C45]"></div>
                <div class="w-16 h-1 bg-white dark:bg-neutral-700 shadow-sm"></div>
                <div class="w-16 h-1 bg-[#CC0000]"></div>
            </div>
            </div>
        </section>

        <div class="container mx-auto px-6 py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="group relative overflow-hidden h-[600px] bg-black transition-all duration-500 hover:shadow-2xl">
                    <img alt="DRE Academy" 
                        class="w-full h-full object-cover transition-transform duration-1000 ease-in-out group-hover:scale-110 opacity-70 group-hover:opacity-100" 
                        src="https://images.ctfassets.net/x7j9qwvpvr5s/2xtq4Nl2wVTODb8VurqMQ4/8273a3d7c2db5ac77e75fcc20f96eb74/2025-11-05_DRE-Track-Warm-Up-banner-full-1330x600.jpg"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-12 text-white">
                        <h2 class="text-4xl md:text-5xl font-bold uppercase tracking-tighter leading-tight italic">
                        DRE <span class="font-light text-primary">|</span> Riding Academy
                        </h2>
                        <p class="mt-4 text-neutral-300 max-w-sm font-normal text-lg leading-relaxed opacity-90">Take your riding skills to the next level with our professional instructors.</p>                               
                        <a class="inline-flex items-center mt-8 text-xs font-bold uppercase tracking-[0.3em] text-primary group-hover:text-white transition-all border-b border-transparent hover:border-white pb-1" href="/programs/dre">
                            Learn More <span class="ml-3 transform group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                </div>

                <div class="group relative overflow-hidden h-[600px] bg-black transition-all duration-500 hover:shadow-2xl">
                    <img alt="Ducati Celebration" 
                        class="w-full h-full object-cover transition-transform duration-1000 ease-in-out group-hover:scale-110 opacity-70 group-hover:opacity-100" 
                        src="https://wallpapercave.com/wp/wp8973149.jpg"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-12 text-white">
                        <h2 class="text-4xl md:text-5xl font-bold uppercase tracking-tighter leading-tight italic">
                        MotoGP™ <span class="font-light text-primary">|</span> Campioni in festa
                        </h2>
                        <p class="mt-4 text-neutral-300 max-w-sm font-normal text-lg leading-relaxed opacity-90">The 2025 racing season ends with results worth celebrating on every front.</p>
                        <a class="inline-flex items-center mt-8 text-xs font-bold uppercase tracking-[0.3em] text-primary group-hover:text-white transition-all border-b border-transparent hover:border-white pb-1" href="/programs/motogp">
                            See Programs <span class="ml-3 transform group-hover:translate-x-2 transition-transform">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
</div>

</body>
</html>