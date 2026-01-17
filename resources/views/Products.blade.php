<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Ducati Products | Experience Performance</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Barlow+Condensed:ital,wght@0,600;0,700;0,800;1,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    
    <style>
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Inter', sans-serif;
        }

        /* Font Display untuk Navbar sesuai Kode Pertama */
        .font-display-ducati {
            font-family: 'Roboto Condensed', sans-serif;
        }

        h1, h2, h3, .font-heading {
            font-family: 'Barlow Condensed', sans-serif !important;
            text-transform: uppercase;
            letter-spacing: -0.01em;
        }

        .material-icons {
            font-size: inherit;
        }

        .group:hover .group-hover\:translate-y-0 {
            transform: translateY(0);
        }

        .group:hover .group-hover\:opacity-100 {
            opacity: 1;
        }

        .hero-zoom-container {
            overflow: hidden;
        }
        .hero-bg-image {
            transition: transform 0.5s ease-out;
        }
        .hero-zoom-container:hover .hero-bg-image {
            transform: scale(1.08);
        }
    </style>

    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        pepe : "#e50000f0",
                        primary: "#CC0000",
                        "background-light": "#ffffff",
                        "background-dark": "#121212",
                    },
                    fontFamily: {
                        // Menambahkan font-display sesuai kode pertama
                        display: ["'Roboto Condensed'", "sans-serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0px",
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-background-light dark:bg-background-dark text-neutral-900 dark:text-white antialiased font-display-ducati">
    
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
                <a class="text-primary border-b border-primary pb-1" href="/products">Products</a>
                <a class="hover:text-primary transition-colors duration-300" href="/news">News</a>
                <a class="hover:text-primary transition-colors duration-300" href="/programs">Programs</a>
                <a class="hover:text-primary transition-colors duration-300" href="/about">About Us</a>
                <a class="hover:text-primary transition-colors duration-300" href="/contact">Contact Us</a>
            </nav>

            <button class="md:hidden text-white"><span class="material-icons">menu</span></button>         
        </div>
    </div>
    </header>

    <main>
    <section class="relative h-[50vh] md:h-[70vh] hero-zoom-container overflow-hidden">
    <div class="absolute inset-0">
        <img 
            src="https://images.ctfassets.net/x7j9qwvpvr5s/5uwfwKcTTcoNxxo5LMX59q/665b4c6fe5faf97242e8ec3133cf30d1/V4-MM93-WC-Replica-hero-short-1600x1000.jpg" 
            alt="Hero Background"
            class="block w-full h-full object-cover object-[center_43%] hero-bg-image"
        />
    </div>
    
    <div class="absolute inset-0 bg-black/15"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/35 to-transparent"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
        <h1 class="text-5xl md:text-8xl font-extrabold italic tracking-tighter">Our <span class="text-pepe">Range</span></h1>
        <p class="mt-2 text-[10px] md:text-lg font-light tracking-[0.2em] md:tracking-[0.3em] uppercase opacity-90">
            <span class="text-[#00C853]">Discover the full</span> 
            <span class="text-white">lineup of</span> 
            <span class="text-[#FF0000]">Ducati Motorcycles</span>
        </p>
        <div class="flex justify-center mt-6 gap-1">
            <div class="w-12 md:w-16 h-1 bg-[#008C45]"></div>
            <div class="w-12 md:w-16 h-1 bg-white"></div>
            <div class="w-12 md:w-16 h-1 bg-[#CC0000]"></div>
        </div>
    </div>
</section>
</main>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-24 relative z-0 -mt-19">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="group relative overflow-hidden bg-white dark:bg-neutral-900 aspect-[4/3]">
                    <img alt="Ducati Panigale V4R" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/4U3Llz0mpPgtF6sqOpOqwd/b97eea6af6327b011aebcb6e457c454c/2025-09-19_Panigale-V4-R-MY26-Model-Blocks-3-4-630x390.png" />
                    <div class="absolute inset-0 flex items-end">
                        <div class="p-8 w-full transform transition-transform duration-500 ease-in-out translate-y-full group-hover:translate-y-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent pt-24">
                            <h3 class="text-3xl font-bold text-white italic">Panigale <span class="text-primary">V4R</span></h3>
                            <p class="text-neutral-300 text-xs tracking-widest uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-500 mt-2">Racing is just the beginning.</p>
                            <a class="inline-block mt-4 text-[10px] font-bold text-white uppercase tracking-[0.2em] border-b border-primary hover:text-primary transition-colors" href="/products/panigale">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden bg-white dark:bg-neutral-900 aspect-[4/3] ">
                    <img alt="Ducati Streetfighter V4" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/6Wg5oGAAjzKyUPESp91lqm/32dfc143e010f4f2cff17497df32bb3e/2025-10-10_Streetfighter-V4-MY25-Model-Blocks-3-4-630x390.png" />
                    <div class="absolute inset-0 flex items-end">
                        <div class="p-8 w-full transform transition-transform duration-500 ease-in-out translate-y-full group-hover:translate-y-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent pt-24">
                            <h3 class="text-3xl font-bold text-white italic">Streetfighter <span class="text-primary">V4</span></h3>
                            <p class="text-neutral-300 text-xs tracking-widest uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-500 mt-2">The Next Level Formula.</p>
                            <a class="inline-block mt-4 text-[10px] font-bold text-white uppercase tracking-[0.2em] border-b border-primary hover:text-primary transition-colors" href="/products/streetfighter">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden bg-white dark:bg-neutral-900 aspect-[4/3] ">
                    <img alt="Ducati Monster" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/20IIe2RoVCkFE48bCxQRxX/031d02d9f3390f1f2123cc7f79e8a06e/2025-10-20_Monster-Rd-MY26-Model-Blocks-3-4-630x390.png" />
                    <div class="absolute inset-0 flex items-end">
                        <div class="p-8 w-full transform transition-transform duration-500 ease-in-out translate-y-full group-hover:translate-y-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent pt-24">
                            <h3 class="text-3xl font-bold italic text-white">Mon<span class="text-primary">ster</span></h3>
                            <p class="text-neutral-300 text-xs tracking-widest uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-500 mt-2">I M legend</p>
                            <a class="inline-block mt-4 text-[10px] font-bold text-white uppercase tracking-[0.2em] border-b border-primary hover:text-primary transition-colors" href="/products/monster">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden bg-white dark:bg-neutral-900 aspect-[4/3]">
                    <img alt="Ducati Multistrada V4" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/2gj13CAObwYQXqh80BUCid/2541d3040ef8e65bb15ad98bd25e7f2f/2025-10-06_Multistrada-V4-Rally-Radar-JG-MY26-Model-Blocks-3-4-630x390.png" />
                    <div class="absolute inset-0 flex items-end">
                        <div class="p-8 w-full transform transition-transform duration-500 ease-in-out translate-y-full group-hover:translate-y-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent pt-24">
                            <h3 class="text-3xl font-bold italic text-white">Multistrada <span class="text-primary">V4 Rally</span></h3>
                            <p class="text-neutral-300 text-xs tracking-widest uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-500 mt-2">Stretch your limits.</p>
                            <a class="inline-block mt-4 text-[10px] font-bold text-white uppercase tracking-[0.2em] border-b border-primary hover:text-primary transition-colors" href="/products/multistrada">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden bg-white dark:bg-neutral-900 aspect-[4/3]">
                    <img alt="Ducati Diavel V4" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/5X6MUCO2s7d6VgjsOj8Ype/a9de5e6951e5f9917e773b2dee5a57cb/2025-10-10_Diavel-V4-Rd-MY25-Model-Blocks-3-4-630x390.png" />
                    <div class="absolute inset-0 flex items-end">
                        <div class="p-8 w-full transform transition-transform duration-500 ease-in-out translate-y-full group-hover:translate-y-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent pt-24">
                            <h3 class="text-3xl font-bold italic text-white">Diavel <span class="text-primary">V4</span></h3>
                            <p class="text-neutral-300 text-xs tracking-widest uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-500 mt-2">Dare to be Bold.</p>
                            <a class="inline-block mt-4 text-[10px] font-bold text-white uppercase tracking-[0.2em] border-b border-primary hover:text-primary transition-colors" href="/products/diavel">Discover More</a>
                        </div>
                    </div>
                </div>
                <div class="group relative overflow-hidden bg-white dark:bg-neutral-900 aspect-[4/3]">
                    <img alt="Ducati Desmo450 MX" class="w-full h-full object-contain p-4 transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/33BqzoAONq69v0JoxViRgO/096dc87b8ac28c6f3c56abab22607d7a/2025-04-01_Desmo-450MX-MY26-Model-Blocks-3-4-630x390.png" />
                    <div class="absolute inset-0 flex items-end">
                        <div class="p-8 w-full transform transition-transform duration-500 ease-in-out translate-y-full group-hover:translate-y-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent pt-24">
                            <h3 class="text-3xl font-bold italic text-white">Desmo450 <span class="text-primary">MX</span></h3>
                            <p class="text-neutral-300 text-xs tracking-widest uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-500 mt-2">Made to Compete.</p>
                            <a class="inline-block mt-4 text-[10px] font-bold text-white uppercase tracking-[0.2em] border-b border-primary hover:text-primary transition-colors" href="/products/desmo450mx">Discover More</a>
                        </div>
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