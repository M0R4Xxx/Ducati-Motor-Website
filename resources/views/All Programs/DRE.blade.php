<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>DRE | Riding Academy - Ducati Riding Experience</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700;1,900&family=Inter:wght@300;400;500;600;700;800;900&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="icon" type="image/png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#cc0000",
                        "background-light": "#ffffff",
                        "content-bg": "#f3f4f6",
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
                    spacing: {
                        '30': '7.5rem',
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
            background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.6) 100%);
        }
        .img-hover-zoom {
            overflow: hidden;
        }
        .img-hover-zoom img {
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .img-hover-zoom:hover img {
            transform: scale(1.05);
        }
        /* Custom text Shadow for better readability on hero */
        .text-shadow-strong {
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased">
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
                    <a class="text-primary border-b-2 border-primary pb-1 transition-all" href="/programs/dre">DRE | Riding Academy</a>
                    <a class="text-white/80 hover:text-white transition-colors duration-300" href="/programs/motogp">MotoGP™ | Campioni in festa</a>
                    <a class="bg-primary text-white px-8 py-3 rounded-full hover:bg-red-700 transition-all duration-300 shadow-lg shadow-primary/20" href="/programs">
                        Back to All Programs
                    </a>
                </nav>
                <button class="laptop-l:hidden text-white"><span class="material-icons">menu</span></button>
            </div>
        </div>
    </header>

    <section class="relative h-[90vh] w-full flex items-end overflow-hidden group">
        <img alt="Motorcycle on Track" class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" src="https://images.ctfassets.net/x7j9qwvpvr5s/wiNToHj6JTfDo7jjGVllW/099eaaadefeeac2975fb8c09971f63e6/Panigale-V4-R-overview-hero-video-1600x1000.jpg"/>
        <div class="absolute inset-0 hero-gradient"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
        
        <div class="relative max-w-none w-full px-8 md:px-16 mb-24 text-left">
            <p class="text-[11px] md:text-xs font-black tracking-[0.5em] uppercase mb-4 font-display text-shadow-strong">
                <span class="text-[#00c85f]">Ducati</span> 
                <span class="text-white">Riding</span> 
                <span class="text-[#ff1a1a]">Experience</span>
            </p>
            
            <h1 class="hero-h1 text-white text-6xl md:text-8xl laptop-l:text-[100px] font-black italic tracking-tighter uppercase mb-6 leading-[0.85] font-display">
                DRE | <span class="text-primary not-italic font-black">Riding Academy</span>
            </h1>

            <div class="flex h-[8px] w-48 md:w-80 mt-6 gap-1.5">
                <div class="h-full w-1/3 bg-[#009246] shadow-sm"></div>
                <div class="h-full w-1/3 bg-[#FFFFFF] shadow-sm"></div>
                <div class="h-full w-1/3 bg-[#CC0000] shadow-sm"></div>
            </div>
        </div>
    </section>

    <div class="w-full">
        <section class="py-20 text-center bg-white">
            <div class="max-w-3xl mx-auto px-6 flex flex-col items-center">
                <h2 class="text-4xl md:text-6xl font-extrabold mb-8 text-slate-950 leading-[1.1] tracking-tight font-display italic">Become <span class="text-primary italic">the best rider</span> <br class="hidden md:block"/> you can be.</h2>
                
                <div class="flex h-[6px] w-24 mb-10 gap-1">
                        <div class="h-full w-1/3 bg-[#009246]"></div>
                        <div class="h-full w-1/3 bg-white"></div>
                        <div class="h-full w-1/3 bg-[#CC0000]"></div>
                    </div>

                <div class="space-y-6 text-slate-600 text-left text-lg leading-relaxed font-normal">
                    <p class="first-letter:text-5xl first-letter:font-bold first-letter:text-primary first-letter:mr-3 first-letter:float-left">The Ducati DRE Academy courses are designed to help you ride better and more safely on track and road. They take place in a <span class="text-slate-900 font-semibold">controlled and protected environment</span>, with full support from the Ducati team.</p>
                    <p>Each element is guaranteed to help you grow: instructors of international renown, prestigious racetracks and <span class="text-slate-900 font-semibold italic">latest-generation Ducati bikes</span>, always in tiptop condition. There’s nothing to worry about, because the service is all inclusive. All you need to do is revel in the pleasure of unforgettable new experiences.</p>
                    <p class="bg-slate-50 p-6 border-l-4 border-primary italic font-medium text-slate-700">And then there’s the fun of sharing this pathway with a community united by the same passion. Just one of the reasons why <span class="text-primary font-bold">more than 34,000 riders</span> have chosen DRE Academy courses over the last 20 years and more.</p>
                </div>
            </div>
        </section>

        <div class="w-full px-6 md:px-16 lg:px-40 pb-20 bg-white">
            <div class="aspect-[21/9] w-full overflow-hidden rounded-md shadow-2xl img-hover-zoom">
                <img alt="Ducati Performance" class="w-full h-full object-cover" src="https://images.ctfassets.net/x7j9qwvpvr5s/6rtob5lGHeYzJXwjDRZj0h/ac0b9767054f041642e804373397e50e/Service-Ducati-contattaci-prodotti-hero-short-1600x1000.jpg" />
            </div>
        </div>

        <section class="bg-slate-50 py-20 border-t border-slate-200">
            <div class="max-w-3xl mx-auto px-6 mb-12">
                <div class="flex items-center gap-6 mb-14">
                    <div class="h-[1px] bg-slate-300 flex-grow"></div>
                    <h3 class="text-slate-500 uppercase tracking-[0.5em] text-[10px] font-black whitespace-nowrap font-display">Explore all courses</h3>
                    <div class="h-[1px] bg-slate-300 flex-grow"></div>
                </div>
                <div class="space-y-6">
                    <h2 class="text-5xl md:text-6xl font-black mb-6 text-slate-950 font-display italic tracking-tighter uppercase">DRE <span class="text-primary not-italic">Racetrack</span> Academy</h2>
                    
                    <div class="flex h-[6px] w-24 mb-10 gap-1">
                        <div class="h-full w-1/3 bg-[#009246]"></div>
                        <div class="h-full w-1/3 bg-white"></div>
                        <div class="h-full w-1/3 bg-[#CC0000]"></div>
                    </div>

                    <p class="text-slate-700 text-xl font-medium leading-snug">DRE Racetrack Academy is the definitive experience, giving you <span class="text-primary">privileged access</span> to the circuit racing world, thanks to prestigious racetracks, international-level instructors and an energy boost that you’ll feel from the very first turn of the wheels.</p>
                    <p class="text-slate-600 text-lg leading-relaxed">The ideal program for experienced riders who are ready to perfect their technique and push towards the limit, but also for those who’ve always dreamed of taking on a world championship circuit and finally feel ready to do so.</p>
                </div>
            </div>
            <div class="w-full px-6 md:px-16 lg:px-40">
                <div class="aspect-[21/9] w-full overflow-hidden rounded-md shadow-xl img-hover-zoom">
                    <img alt="Ducati Panigale on racetrack" class="w-full h-full object-cover" src="https://images.ctfassets.net/x7j9qwvpvr5s/6VR53se50PR3iQymVEh1R9/803420a31d5d4d499ae978bf7520c105/hypermotard-v2-elettronica-gallery-mosaic-1920x1080-05.jpg" />
                </div>
            </div>
        </section>

        <section class="py-20 bg-slate-50 border-t border-slate-200">
            <div class="max-w-3xl mx-auto px-6 mb-12 text-left">
                <h2 class="text-5xl md:text-6xl font-black mb-6 text-slate-950 font-display italic tracking-tighter uppercase">DRE <span class="text-primary not-italic">Road</span> Academy</h2>
                
                <div class="flex h-[6px] w-24 mb-10 gap-1">
                    <div class="h-full w-1/3 bg-[#009246]"></div>
                    <div class="h-full w-1/3 bg-white"></div>
                    <div class="h-full w-1/3 bg-[#CC0000]"></div>
                </div>

                <p class="text-slate-700 text-xl font-medium leading-snug mb-4 italic">Confidence, smoothness, and control to truly enjoy every ride on the road.</p>
                <p class="text-slate-600 text-lg leading-relaxed">Whatever your level, it helps you immediately improve the way you ride, making every route more natural, more enjoyable, and more yours. And if you’re <span class="text-slate-900 font-bold">between 18 and 24 years old</span> and have an A2 license, the <span class="text-primary font-bold">DRE Rookie Academy</span> is for you.</p>
            </div>
            <div class="w-full px-6 md:px-16 lg:px-40">
                <div class="aspect-[21/9] w-full overflow-hidden rounded-md shadow-xl img-hover-zoom">
                    <img alt="Ducati Road Experience" class="w-full h-full object-cover" src="https://images.ctfassets.net/x7j9qwvpvr5s/7blIKndWfeD1YUd0ggRIg3/711db3f0b2d34aa1096ef9563c6cd917/Diavel-V4-RS-overview-gallery-mosaic-1920x1080-01.jpg" />
                </div>
            </div>
        </section>
    </div>

    <section class="bg-white transition-colors duration-300 border-t border-slate-200 px-6 md:px-16 lg:px-24">
        <div class="container mx-auto py-24 flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2 space-y-8">
                <div>
                    <h2 class="text-4xl md:text-5xl font-black text-slate-950 leading-[1.1] mb-6 font-display uppercase italic tracking-tighter">You need only enjoy <br/> <span class="text-primary not-italic">the adventure</span></h2>
                    
                    <div class="flex h-[5px] w-24 mb-8 gap-1 opacity-70">
                        <div class="h-full w-1/3 bg-[#009246]"></div>
                        <div class="h-full w-1/3 bg-slate-200"></div>
                        <div class="h-full w-1/3 bg-[#CC0000]"></div>
                    </div>
                </div>

                <div class="space-y-6 text-slate-600 text-lg font-normal leading-relaxed">
                    <p>All DRE Academy courses include use of one of the <span class="text-slate-900 font-semibold underline decoration-primary decoration-2 underline-offset-4">latest generation Ducati bikes</span> envisaged for the experience, fuel, the support of instructors and the possibility to rent technical clothing.</p>
                    <p class="flex items-center gap-3 text-slate-900">
                        <span class="material-icons text-primary">mail</span>
                        Contact the DRE office at <a class="text-primary font-black hover:underline ml-1" href="mailto:dre@ducati.com">dre@ducati.com</a>
                    </p>
                </div>
            </div>
            <div class="lg:w-1/2">
                <div class="rounded-md overflow-hidden shadow-2xl img-hover-zoom border-8 border-slate-50">
                    <img alt="Professional Rider Detail" class="w-full h-full object-cover aspect-square" src="https://images.ctfassets.net/x7j9qwvpvr5s/3kFqsoUaKal89Pt9rM8lQq/1d9702b7cddec7f48ea2ee44a4121c64/2025-11-05_DRE-Academy-carousel-imgtext-full-1080x740.jpg" />
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