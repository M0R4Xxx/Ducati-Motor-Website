<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Ducati Contact Support Updated</title>
    
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    
    <style type="text/tailwindcss">
        @layer utilities {
            .icon-button {
                @apply h-8 w-8 inline-flex items-center justify-center rounded-full text-gray-400 hover:text-white transition-colors duration-200;
            }
        }
        :root {
            --primary-color: #CC0000;
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
    @apply relative z-10 bg-black/70 pt-20 pb-20 text-white transition-colors duration-500;
    
}

/* Mengurangi kegelapan overlay saat hover agar warna lebih terlihat */
.mission-section:hover .mission-content {
    @apply bg-black/50;
}
    </style>
    
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#CC0000",
                        "background-light": "#FFFFFF",
                    },
                    fontFamily: {
                        display: ["'Roboto Condensed'", "sans-serif"],
                        sans: ["Roboto", "sans-serif"],
                    },
                },
            },
        };
    </script>
</head>
<body class="bg-background-light text-gray-800 font-sans antialiased">

<div id="root">
    <div class="relative min-h-screen flex flex-col">
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
                        <a class="hover:text-primary transition-colors duration-300" href="/about">About Us</a>
                        <a class="text-primary border-b border-primary pb-1" href="/contact">Contact Us</a>
                    </nav>

                    <button class="md:hidden text-white"><span class="material-icons">menu</span></button>
                </div>
            </div>
        </header>

        <main>
            <section class="relative h-[95vh] overflow-hidden group">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-[2000ms] ease-out group-hover:scale-110" 
                     style="background-image: url('https://images.ctfassets.net/x7j9qwvpvr5s/4GCcrEioMe7K7twmJPRYo3/c1bf46eebc76603f732da69bc1e37886/Service-Ducati-contattaci-hero-short-1600x1000.jpg')">
                </div>
                
                <div class="absolute inset-0 bg-black/25"></div>
                
                <div class="relative container mx-auto px-10 md:px-20 h-full flex flex-col justify-center items-start text-left">
                    <div class="inline-flex flex-col items-start">
                        <p class="text-white text-sm uppercase tracking-[0.4em] font-black mb-4 opacity-90 font-display">CUSTOMER SERVICE</p>
                        <h1 class="text-white text-5xl md:text-8xl font-black tracking-tighter uppercase italic mb-6 leading-none font-display">
                            Contact Us
                        </h1>
                        
                        <div class="flex h-[7px] w-full gap-1">
                            <div class="h-full w-1/3 bg-[#009246]"></div>
                            <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                            <div class="h-full w-1/3 bg-[#CC0000]"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pt-16 pb-8 bg-white">
                <div class="container mx-auto px-4 max-w-4xl text-center flex flex-col items-center">
                    <h2 class="text-4xl md:text-6xl font-black text-gray-900 mb-6 uppercase tracking-tighter italic font-display">
                        Welcome <span class="text-primary">to Ducati</span> Support
                    </h2>
                    
                    <div class="flex h-[4px] w-48 mb-8">
                        <div class="h-full w-1/3 bg-[#009246]"></div>
                        <div class="h-full w-1/3 bg-[#f0f0f0]"></div>
                        <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                    </div>

                    <p class="text-xl text-gray-600 leading-relaxed font-light italic mb-12">
                        This section is entirely dedicated to your needs and any kind of query you may have about Ducati.
                        To make it easier for you to find your way around, we have created a list of the most frequently asked questions.
                    </p>
                </div>
            </section>

            <section class="mission-section mt-0 mb-20 md:mb-32">
                <div class="mission-bg" style="background-image: url('https://images.ctfassets.net/x7j9qwvpvr5s/7h8DD38bugOJJMKMSqxqyI/c43c58d9015d5035c3e7fe0673be6915/2025-07-02_Account-Museo-IG-hero-1600x1000.jpg');"></div>
    
                <div class="mission-content ">
                    <div class="container mx-auto px-6 text-center">
                    <h2 class="text-3xl font-black uppercase tracking-[0.5em] mb-4 font-display italic">Our Vision </h2>
            
                    <div class="flex h-[5px] w-24 mx-auto mb-10">
                    <div class="h-full w-1/3 bg-[#009246]"></div>
                    <div class="h-full w-1/3 bg-[#F1F2F1]"></div>
                    <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                </div>
            
                    <p class="text-3xl md:text-5xl max-w-5xl mx-auto italic font-black leading-tight tracking-tight text-white/95 font-display uppercase">
                        "Born To Be The Hero"
                    </p>
                </div>
                </div>
            </section>
            
            <section class="pb-24 bg-background-light">
    <div class="container mx-auto px-4 max-w-screen-2xl">
        <div class="grid lg:grid-cols-2 gap-10 items-stretch">
            
            <div class="flex flex-col md:flex-row bg-white border border-gray-100 shadow-xl rounded-sm overflow-hidden transition-all duration-500 hover:shadow-2xl group min-h-[600px]">
                <div class="md:w-[45%] relative overflow-hidden">
                    <img src="https://images.ctfassets.net/x7j9qwvpvr5s/42b18cvJFbHWHLzmrKCHj1/1d9ec9e8cf3d286742902f44c6a49b27/Panigale-V4-R-overview-gallery-mosaic-1080x1350-3.jpg" 
                         alt="Ducati Store" 
                         class="h-full w-full object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                    
                    <a href="https://www.google.com/maps/place/Ducati+Roma/@41.9990137,12.5139926,17z/data=!3m1!4b1!4m6!3m5!1s0x132f61318b1158f9:0xb78f02886312006f!8m2!3d41.9990138!4d12.5188581!16s%2Fg%2F12mkz5sq4?entry=ttu&g_ep=EgoyMDI2MDExMy4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D" target="_blank" class="absolute bottom-6 right-6 bg-white p-4 rounded-full shadow-lg hover:bg-primary hover:text-white transition-all duration-300 group/map">
                        <span class="material-symbols-outlined text-2xl">map</span>
                    </a>
                </div>

                <div class="md:w-[55%] p-10 flex flex-col justify-center bg-white">
                    <div class="inline-block mb-8 text-left">
                        <h3 class="text-3xl font-black font-display uppercase tracking-tight mb-2 italic text-gray-900">Store Info</h3>
                        <div class="flex h-[5px] w-24">
                            <div class="h-full w-1/3 bg-[#009246]"></div>
                            <div class="h-full w-1/3 bg-[#e5e5e5]"></div>
                            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                        </div>
                    </div>
                    
                    <div class="space-y-8 text-left">
                        <a href="https://www.google.com/maps/place/Ducati+Roma/@41.9990137,12.5139926,17z/data=!3m1!4b1!4m6!3m5!1s0x132f61318b1158f9:0xb78f02886312006f!8m2!3d41.9990138!4d12.5188581!16s%2Fg%2F12mkz5sq4?entry=ttu&g_ep=EgoyMDI2MDExMy4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D" target="_blank" class="flex items-start group/loc transition-all duration-300 hover:translate-x-2">
                            <span class="material-symbols-outlined text-primary text-4xl">location_on</span>
                            <div class="ml-6">
                                <h4 class="font-black text-[11px] uppercase tracking-[0.25em] text-gray-400 font-display mb-1">Location</h4>
                                <p class="text-gray-900 text-lg font-black italic uppercase font-display leading-tight group-hover:text-primary transition-colors">
                                    Via Salaria, 1350, <br>00138 Roma, Italy
                                </p>
                                <span class="text-[10px] font-bold text-primary uppercase tracking-widest flex items-center mt-2">
                                    Click to view on maps <span class="material-symbols-outlined text-xs ml-1">open_in_new</span>
                                </span>
                            </div>
                        </a>

                        <div class="flex items-start">
                            <span class="material-symbols-outlined text-primary text-4xl">phone_iphone</span>
                            <div class="ml-6">
                                <h4 class="font-black text-[11px] uppercase tracking-[0.25em] text-gray-400 font-display mb-1">Contact</h4>
                                <p class="text-gray-900 text-2xl font-black italic uppercase font-display tracking-wider">
                                    021 1234 5678
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <span class="material-symbols-outlined text-primary text-4xl">schedule</span>
                            <div class="ml-6">
                                <h4 class="font-black text-[11px] uppercase tracking-[0.25em] text-gray-400 font-display mb-1">Opening Hours</h4>
                                <p class="text-gray-900 text-xl font-black italic uppercase font-display">Mon - Sat: 09:00 - 19:00</p>
                                <p class="text-primary text-sm font-bold uppercase italic mt-1">Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-12 border-t-[14px] border-primary shadow-xl rounded-sm flex flex-col justify-center transition-all duration-500 hover:shadow-[0_40px_80px_-15px_rgba(0,0,0,0.6)] group relative">
    
    <div class="mb-8 text-left">
        <span class="material-symbols-outlined text-6xl text-gray-100 group-hover:text-primary transition-colors duration-500">mail</span>
    </div>
    
    <div class="inline-block mb-6 text-left">
        <h3 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-4 text-gray-900 font-display italic leading-none">
            Digital <br><span class="text-primary">Inquiry</span>
        </h3>
        <div class="flex h-[6px] w-32">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-[#e5e5e5] border-y border-gray-100"></div>
            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-50 border-l-4 border-green-500 text-green-700 text-[10px] font-bold uppercase tracking-widest italic">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.send') }}" method="POST" class="space-y-3 text-left">
        @csrf
        <div>
            <label class="block text-[10px] font-bold uppercase tracking-[0.25em] text-gray-400 mb-1">Email Address</label>
            <input type="email" name="email" required
                class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-primary focus:ring-0 transition-colors duration-300 py-2 italic font-medium text-sm" 
                placeholder="Ducati@gmail.com">
        </div>

        <div>
            <label class="block text-[10px] font-bold uppercase tracking-[0.25em] text-gray-400 mb-1">Your Message</label>
            <textarea name="message" rows="3" required
                class="w-full bg-gray-50 border-0 border-b-2 border-gray-200 focus:border-primary focus:ring-0 transition-colors duration-300 py-2 italic font-medium text-sm" 
                placeholder="How can we help you?"></textarea>
        </div>

        <button type="submit" class="inline-flex items-center justify-between w-full px-10 py-5 bg-primary text-white font-black uppercase tracking-[0.3em] text-xs hover:bg-black transition-all duration-300 shadow-lg group/btn mt-4">
            <span>Send Message</span>
            <span class="material-symbols-outlined text-sm group-hover/btn:translate-x-3 transition-transform duration-300">send</span>
        </button>
    </form>
    
    <div class="mt-10 flex items-center gap-4 opacity-30 justify-start">
        <span class="material-symbols-outlined text-lg">verified_user</span>
        <p class="text-[10px] font-bold uppercase tracking-[0.25em]">
            Official Ducati Channel
        </p>
    </div>
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
                                    <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
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
                            <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
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
                            <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                        </div>
                        <ul class="space-y-4 text-base font-bold tracking-[0.1em] uppercase">
                            <li><a class="hover:text-primary transition-all duration-300" href="https://www.ducati.com/us/en/home/privacy">Privacy Policy</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="https://www.ducati.com/us/en/home/cookie-policy">Cookie Settings</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="https://my.ducati.com/us/en/footer/terms-of-use">Terms of Use</a></li>
                        </ul>
                    </div>

                    <div class="flex flex-col items-center">
                        <h3 class="text-2xl font-bold text-white uppercase tracking-tighter italic mb-2">Models</h3>
                        <div class="flex h-[3px] w-12 mb-8">
                            <div class="h-full w-1/3 bg-[#009246]"></div>
                            <div class="h-full w-1/3 bg-[#FFFFFF]"></div>
                            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
                        </div>
                        <ul class="space-y-4 text-base font-bold tracking-[0.1em] uppercase">
                            <li><a class="hover:text-primary transition-all duration-300" href="/products/panigale">Panigale</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/products/streetfighter">Streetfighter</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/products/monster">Monster</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/products/multistrada">Multistrada</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/products/diavel">Diavel</a></li>
                            <li><a class="hover:text-primary transition-all duration-300" href="/products/desmo450mx">desmo450 mx</a></li>
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
</div>

</body>
</html>