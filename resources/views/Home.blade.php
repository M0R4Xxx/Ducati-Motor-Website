<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Ducati Motorcycles</title>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#CC0000",
            italyGreen: "#008C45",
            italyRed: "#CD212A",
            "background-light": "#f0f0f0",
            "background-dark": "#121212",
          },
          fontFamily: {
            // Font display diatur ke Roboto Condensed sesuai kode pertama
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
  <style>
    .diagonal-clip { clip-path: polygon(0 0, 100% 0, 100% 100%, 20% 100%); }
    .diagonal-clip-2 { clip-path: polygon(0 0, 80% 0, 100% 100%, 0 100%); }
    .img-container { overflow: hidden; }
  </style>
</head>

<body class="font-body bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 antialiased">
  <div class="relative min-h-screen">
    
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
            <a class="text-primary border-b border-primary pb-1" href="/">Home</a>
            <a class="hover:text-primary transition-colors duration-300" href="/products">Products</a>
            <a class="hover:text-primary transition-colors duration-300" href="/news">News</a>
            <a class="hover:text-primary transition-colors duration-300" href="/programs">Programs</a>
            <a class="hover:text-primary transition-colors duration-300" href="/about">About Us</a>
            <a class="hover:text-primary transition-colors duration-300" href="/contact">Contact Us</a>
          </nav>

          <button class="md:hidden text-white">
            <span class="material-icons">menu</span>
          </button>         
        </div>
      </div>
    </header>

   <section class="relative h-screen overflow-hidden group">
    <div class="absolute inset-0">
        <img 
            src="https://images.ctfassets.net/x7j9qwvpvr5s/5EkSsdjbHo40fIhzT92wbl/0feff4ca06f39521b0924e28867f2f0a/Panigale-V4-R-overview-hero-1600x1000.jpg" 
            alt="Panigale V4R Hero"
            class="block w-full h-full object-cover object-center transition-transform duration-1000 group-hover:scale-110"
        />
    </div>

    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
    
    <div class="relative z-10 flex flex-col justify-end h-full text-white container mx-auto px-6 sm:px-10 lg:px-20 pb-20 md:pb-32">
        <p class="text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase opacity-90">
            <span class="text-[#009246]">BRAND</span> WORLD <span class="text-[#CE2B37]">PREMIERE</span>
        </p>
        
        <h1 class="text-4xl md:text-7xl lg:text-8xl font-black mt-2 leading-[0.9] tracking-tighter italic uppercase font-body">
            New<br />Ducati <span class="text-[#CC0000]">Panigale</span> V4R
        </h1>

        <div class="w-fit">
            <div class="flex mt-6 h-[5px] md:h-[7px] w-32 md:w-48 gap-1">
                <div class="h-full w-1/3 bg-[#009246]"></div>
                <div class="h-full w-1/3 bg-white"></div>
                <div class="h-full w-1/3 bg-[#CE2B37]"></div>
            </div>
            
            <div class="mt-8 md:mt-10">
                <a class="bg-[#CC0000] text-white font-black tracking-widest text-[10px] md:text-[11px] py-4 px-10 hover:bg-red-700 transition-all transform hover:scale-105 active:scale-95 inline-block whitespace-nowrap" href="/products/panigale">
                    DISCOVER MORE
                </a>
            </div>
        </div>
    </div>
</section>  

    <section class="bg-[#fafafa]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center py-12">
        <h2 class="text-3xl md:text-4xl font-thin text-gray-400 uppercase tracking-widest">
            The <span class="font-black text-gray-900 italic">2026 Range</span>
        </h2>
        <div class="flex h-1 w-24 mx-auto mt-4 gap-0.5">
            <div class="h-full w-1/3 bg-[#009246]"></div>
            <div class="h-full w-1/3 bg-gray-200"></div>
            <div class="h-full w-1/3 bg-[#CE2B37]"></div>
        </div>
    </div>

    <div class="bg-[#fafafa] pb-12">
        <div class="container mx-auto px-4 md:px-10 lg:px-20">
            
            <div class="relative w-full overflow-hidden bg-white rounded-2xl flex items-center">
                
                <div class="relative w-full">
                    <img src="https://images.ctfassets.net/x7j9qwvpvr5s/1yDqkDQVErpP8TrCD3TnAS/2d8d05ee84305b69d01fe96618ba8020/gamma-ducati-banner-full-1330x600-02.jpg" 
                         class="w-full h-auto object-contain block" 
                         alt="Ducati 2026 Range">
                </div>

                <div class="absolute inset-0 flex items-center z-10">
                    <div class="pl-10 md:pl-16 lg:pl-24 max-w-2xl">
                        <h3 class="text-3xl md:text-5xl lg:text-6xl font-black italic tracking-tighter uppercase leading-none text-white">
    Discover all<br>
    <span class="text-primary">Ducati</span> <span class="text-white">models</span>
</h3>

<p class="mt-3 md:mt-4 text-white font-medium leading-relaxed text-xs md:text-base max-w-xs md:max-w-sm hidden sm:block opacity-90">
    A complete range designed to meet every need: from touring to urban use, from off-road to the track. Whatever your riding style, there is a Ducati ready to accompany you. 
</p>

                        <div class="mt-8 md:mt-10">
                            <a class="bg-primary text-white font-black tracking-[0.2em] text-[11px] md:text-[13px] py-3.5 px-10 md:py-4 md:px-14 hover:bg-red-700 transition-colors duration-300 inline-block text-center" 
                               href="/products">
                                DISCOVER MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</section>

    <section class="py-12 bg-background-light dark:bg-background-dark">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h2 class="text-4xl font-thin text-gray-400 dark:text-gray-500 uppercase tracking-[0.3em]">Programs</h2>
          <div class="flex h-1 w-24 mx-auto my-6 gap-0.5">
            <div class="h-full w-1/3 bg-italyGreen"></div>
            <div class="h-full w-1/3 bg-white dark:bg-gray-600"></div>
            <div class="h-full w-1/3 bg-italyRed"></div>
          </div>
        </div>
        <div class="mt-12 space-y-8">
          <div class="grid md:grid-cols-2 gap-0 items-stretch group">
            <div class="relative p-8 flex flex-col justify-center bg-gray-100 dark:bg-gray-800">
              <div class="absolute left-0 top-0 h-full w-1 bg-primary"></div>
              <p class="text-[10px] font-black tracking-[0.2em] text-primary uppercase">DRE | Riding Academy</p>
              <h3 class="text-2xl md:text-3xl font-black mt-2 text-gray-900 dark:text-white uppercase italic tracking-tighter leading-none">Become the best<br>rider you can be</h3>
              <p class="mt-4 text-gray-600 dark:text-gray-300 font-light leading-relaxed">The Ducati DRE Academy courses are designed to help you ride better and more safely on track and road.</p>
              <a class="text-[11px] font-black tracking-widest text-primary mt-6 inline-block border-b-2 border-primary hover:text-gray-900 dark:hover:text-white transition-all uppercase" href="/programs/dre">DISCOVER MORE</a>
            </div>
            <div class="h-64 md:h-auto overflow-hidden">
              <img alt="Racer" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/7B9k7a8ryfpMq6dILOKEIr/8e765533b5308cf47e2a913b732fbf14/2025-11-05_DRE-Racetrack-Academy-banner-full-1330x600.jpg" />
            </div>
          </div>
          <div class="grid md:grid-cols-2 gap-0 items-stretch group">
            <div class="order-1 md:order-2 h-64 md:h-auto overflow-hidden">
              <img alt="Brand Racing" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/qHtr7BMHCttPHzKBBAGU0/71a129983584ba3fe78b121f0316bd2e/mainpage-racing-hero-1600x1000.jpg" />
            </div>
            <div class="relative p-8 flex flex-col justify-center bg-gray-100 dark:bg-gray-800 order-2 md:order-1">
              <div class="absolute left-0 top-0 h-full w-1 bg-primary"></div>
              <p class="text-[10px] font-black tracking-[0.2em] text-primary uppercase">MotoGP™ | CAMPIONI IN FESTA</p>
              <h3 class="text-2xl md:text-3xl font-black mt-2 text-gray-900 dark:text-white uppercase italic tracking-tighter leading-none">A memorable racing<br>season ends</h3>
              <p class="mt-4 text-gray-600 dark:text-gray-300 font-light leading-relaxed">The 2025 racing season ends with results worth celebrating on every front.</p>
              <a class="text-[11px] font-black tracking-widest text-primary mt-6 inline-block border-b-2 border-primary hover:text-gray-900 dark:hover:text-white transition-all uppercase" href="/programs/motogp">DISCOVER MORE</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 text-white mt-8 md:mt-16">
      <div class="relative min-h-[400px] md:min-h-[500px] flex flex-col justify-end items-start text-left p-8 overflow-hidden group">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images6.alphacoders.com/132/1322696.jpeg');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="relative">
          <h3 class="text-4xl font-thin uppercase tracking-[0.2em]">DRE <span class="text-primary font-black italic">| Academy</span></h3>
          <p class="mt-4 tracking-[0.3em] text-[10px] font-black text-gray-400 uppercase">Master your riding skills</p>
        </div>
      </div>
      <div class="relative min-h-[400px] md:min-h-[500px] flex flex-col justify-end items-start text-left p-8 overflow-hidden group">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://images.ctfassets.net/x7j9qwvpvr5s/7IVBbuaMwa1yUUZrbNqkuR/456e7905ca70004fc2849aeccdb45046/ducati100-hero-1600x1000.jpg?fm=webp&q=90');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="relative">
          <h3 class="text-3xl font-black uppercase italic tracking-tighter leading-none text-white">
            A special<br><span class="text-primary">celebration</span>
          </h3>
          <p class="mt-4 tracking-[0.3em] text-[10px] font-black text-primary uppercase">DUCATI 100 YEARS</p>
        </div>
      </div>

      <div class="relative min-h-[400px] md:min-h-[500px] flex flex-col justify-end items-start text-left p-8 overflow-hidden group">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image: url('https://wallpapercave.com/wp/wp4183175.jpg');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
        <div class="relative">
          <p class="tracking-[0.3em] text-[10px] font-black text-gray-400 uppercase">DUCATI RANGE</p>
          <h3 class="text-3xl font-black mt-2 uppercase italic tracking-tighter leading-none text-primary">
            Discover the<br><span class="text-white">complete range</span>
          </h3>
        </div>
      </div>

      <div class="relative min-h-[400px] md:min-h-[500px] flex flex-col justify-end items-start text-left p-8 overflow-hidden group">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" style="background-image:url('https://resources.motogp.pulselive.com/motogp/photo/2025/01/20/484e2797-21f6-4cf9-bd1c-dacc2dc25640/Bagnaia-Marquez-1-.jpg');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
        <div class="relative">
          <img alt="Racing shield" class="h-16 w-16" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa7pFcuJ2Mfw5CLyAJm-fnUz2J694LpvpyvQ&s" />
          <p class="tracking-[0.3em] text-[10px] font-black text-primary uppercase mt-4">RACING</p>
          <h3 class="text-3xl font-black mt-2 uppercase italic tracking-tighter leading-none text-white">
            MotoGP &<br><span class="text-primary">Superbike World</span>
          </h3>
        </div>
      </div>
    </section>

    <section class="py-16 md:py-24 bg-background-light dark:bg-background-dark">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-end">
          <h2 class="text-3xl font-black text-gray-900 dark:text-white italic uppercase tracking-tighter">The <span class="font-black text-italyRed italic tracking-tighter">latest news </span></h2>
          <a class="text-[10px] font-black tracking-widest text-gray-500 dark:text-gray-400 hover:text-primary uppercase" href="/news">DISCOVER ALL →</a>
        </div>
        <div class="flex h-1 w-full my-6 gap-0.5">
          <div class="h-full w-1/3 bg-italyGreen"></div>
          <div class="h-full w-1/3 bg-white dark:bg-gray-600"></div>
          <div class="h-full w-1/3 bg-italyRed"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
          <div class="bg-white dark:bg-gray-800 group transition-all duration-300 hover:shadow-2xl">
            <div class="overflow-hidden"><img alt="News 1" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/2Gqt9Ck4IdQCEKY7l0Uw0h/80ccd50661298ef3cca31bb4bf4462e5/11-27_SOP-Monster-editorial-img-wide-1330x768.jpg" /></div>
            <div class="p-6">
              <p class="text-[10px] font-black tracking-widest text-primary uppercase">PRODUCT, MONSTER</p>
              <h3 class="text-xl font-black mt-2 text-gray-900 dark:text-white italic tracking-tight uppercase">Monster Fifth-generation Begins</h3>
              <p class="text-xs text-gray-400 mt-4 font-bold tracking-widest">09 DEC 2025</p>
            </div>
          </div>
          <div class="bg-white dark:bg-gray-800 group transition-all duration-300 hover:shadow-2xl">
            <div class="overflow-hidden"><img alt="News 2" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/NOnaTblJUvhR4WIPjSvoA/7c492b7b1f402e42a53e9adf4c67c29b/2025-10-14-motore-200k-hero-short-1600x1000.jpg" /></div>
            <div class="p-6">
              <p class="text-[10px] font-black tracking-widest text-primary uppercase">PRODUCT, MULTISTRADA</p>
              <h3 class="text-xl font-black mt-2 text-gray-900 dark:text-white italic tracking-tight uppercase">V4 Granturismo tested</h3>
              <p class="text-xs text-gray-400 mt-4 font-bold tracking-widest">27 NOV 2025</p>
            </div>
          </div>
          <div class="bg-white dark:bg-gray-800 group transition-all duration-300 hover:shadow-2xl">
            <div class="overflow-hidden"><img alt="News 3" class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-110" src="https://images.ctfassets.net/x7j9qwvpvr5s/45nwP2r3YYUrMlew3ow2hG/d6e70c6f300c9d8145bb4b6367d49711/apprel-2026-mainpage-hero-1600x1000.jpg" /></div>
            <div class="p-6">
              <p class="text-[10px] font-black tracking-widest text-primary uppercase">EQUIPMENT, APPAREL</p>
              <h3 class="text-xl font-black mt-2 text-gray-900 dark:text-white italic tracking-tight uppercase">2026 Apparel Collection</h3>
              <p class="text-xs text-gray-400 mt-4 font-bold tracking-widest">6 JAN 2026</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-background-light dark:bg-background-dark pb-16 md:pb-24">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center pt-8">
        <h2 class="text-4xl font-thin text-gray-400 dark:text-gray-500 uppercase tracking-[0.3em]">Enjoy Ducati <span class="font-black text-gray-900 dark:text-white italic tracking-tighter">to the </span><span class="font-black text-italyRed italic tracking-tighter">fullest</span></h2>
        <div class="flex h-1 w-24 mx-auto my-6 gap-0.5">
          <div class="h-full w-1/3 bg-italyGreen"></div>
          <div class="h-full w-1/3 bg-white dark:bg-gray-600"></div>
          <div class="h-full w-1/3 bg-italyRed"></div>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3">
        <a class="relative h-64 group overflow-hidden" href="/about">
          <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://images.ctfassets.net/x7j9qwvpvr5s/U3zq5kln6kbN0fc9VDJtn/25d163b0964958719fdab5e08a68d9e3/Ducati-Multistrada-V2-DWP25-design-hero-1600x1000.jpg');"></div>
          <div class="absolute inset-0 bg-black/50 group-hover:bg-black/70 flex items-center justify-center border-r border-white/10"><h3 class="text-white text-3xl font-black italic tracking-tighter uppercase relative z-10">About Us</h3></div>
        </a>
        <a class="relative h-64 group overflow-hidden" href="/products">
          <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://wallpapercat.com/w/full/8/1/8/1712792-3840x2160-desktop-4k-ducati-panigale-v4-background.jpg');"></div>
          <div class="absolute inset-0 bg-black/50 group-hover:bg-black/70 flex items-center justify-center border-r border-white/10"><h3 class="text-white text-3xl font-black italic tracking-tighter uppercase relative z-10">Prodotto</h3></div>
        </a>
        <a class="relative h-64 group overflow-hidden" href="/contact">
          <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('https://cdni.autocarindia.com/ExtraImages/20250512063706_Ducati%20Diavel%20V4%20Silhouette%20Web.jpg');"></div>
          <div class="absolute inset-0 bg-black/50 group-hover:bg-black/70 flex items-center justify-center"><h3 class="text-white text-3xl font-black italic tracking-tighter uppercase relative z-10">Contact</h3></div>
        </a>
      </div>
    </section>

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
  </div>
</body>

</html>