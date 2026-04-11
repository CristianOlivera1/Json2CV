<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$isAuthenticated = isset($_SESSION['user_id']);
?>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0) scale(1);
        }

        50% {
            transform: translateY(-30px) scale(1.05);
        }
    }

    .animate-float {
        animation: float 8s ease-in-out infinite;
    }

    .aurora-bg {
        background:
            radial-gradient(ellipse 50% 50% at 80% 50%, rgba(0, 153, 255, 0.1), transparent),
            radial-gradient(ellipse 50% 50% at 20% 80%, rgba(0, 225, 255, 0.15), transparent);
    }
</style>

<section class="relative pb-16 overflow-hidden">
    <div class="absolute inset-0 -z-10 pointer-events-none overflow-hidden">
        <div class="absolute inset-0 aurora-bg"></div>

        <div class="absolute top-[20%] left-[15%] w-96 h-96 bg-[#D93C47]/30 rounded-full blur-[100px] animate-float"></div>

        <div class="absolute bottom-[10%] right-[15%] w-80 h-80 bg-[#0099ff]/20 rounded-full blur-[100px] animate-float" style="animation-delay: -4s;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 text-center pt-8">
        <img src="/assets/img/logo-json2cv.png" alt="logo-json2cv" class="mx-auto w-xl mt-10 sm:-mt-4" />
        <p class="text-xl md:text-2xl text-slate-400 mb-8 -mt-2 sm:-mt-6 max-w-3xl mx-auto">
            Escribe tu historial profesional en
            <span class="relative inline-block">
                <span class="font-bold bg-clip-text text-transparent bg-linear-to-r from-[#FA736C] to-[#D93C47]">
                    JSON
                </span>
                <span class="absolute -bottom-1 left-0 w-full">
                    <img src="/assets/img/line-draw.svg" alt="line draw" class="w-full h-auto" />
                </span>
                <span class="absolute -bottom-1 left-0 w-full opacity-20">
                    <img src="/assets/img/line-static.svg" alt="line draw" class="w-full h-auto" />
                </span>
            </span>
            y deja que nuestro motor genere un currículum minimalista y perfecto al instante.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-8 sm:mb-14">
            <a href="/generate-cv" data-reload class="h-12 px-8 rounded-full bg-[#00e1ff] text-[#030305] font-medium hover:bg-[#0099ff] hover:text-white transition-all flex items-center gap-2 shadow-[0_0_20px_-5px_#00e1ff]">
                <iconify-icon icon="solar:rocket-2-linear" stroke-width="1.5" width="20"></iconify-icon>
                Generar CV
            </a>
            <a href="https://github.com/CristianOlivera1/Login-Register-with-Autentication" target="_blank" class="h-12 px-8 rounded-full border border-white/20 hover:border-white/20 hover:bg-white/5 text-white transition-all flex items-center gap-2">
                <iconify-icon icon="line-md:github-loop" width="24" height="24"></iconify-icon>
                Ver Código
            </a>
        </div>

        <div class="relative max-w-7xl -mx-6 sm:mx-auto group">

            <div class="absolute -inset-1 bg-linear-to-r from-[#0099ff] to-[#00e1ff] rounded-2xl opacity-30 blur-lg hidden sm:block transition-all duration-700 group-hover:opacity-50 group-hover:blur-xl"></div>

            <div class="relative bg-black rounded-none sm:rounded-xl overflow-hidden shadow-2xl flex items-center justify-center border border-white/5 transition-colors duration-700 group-hover:border-white/20"
                style="-webkit-mask-image: linear-gradient(to bottom, black 70%, transparent 95%); mask-image: linear-gradient(to bottom, black 70%, transparent 95%);">

                <img
                    src="assets/img/video-poster.avif"
                    class="absolute inset-0 w-full h-full object-cover blur-[100px] opacity-50 scale-110 pointer-events-none"
                    aria-hidden="true">

                <video
                    id="hero-demo-video"
                    class="relative z-10 w-full h-auto shadow-2xl block scale-105 transform-gpu transition-transform duration-1000 ease-out group-hover:scale-110"
                    autoplay
                    muted
                    loop
                    playsinline
                    preload="metadata"
                    poster="./assets/img/video-poster.avif">
                    <source src="https://raw.githubusercontent.com/CristianOlivera1/Login-Register-with-Autentication/main/public/assets/img/demo.mp4" type="video/mp4">
                </video>

                <div class="absolute inset-0 z-20 pointer-events-none bg-[radial-gradient(circle_at_center,transparent_60%,rgba(10,10,12,0.6)_100%)]"></div>
            </div>
        </div>

    </div>
</section>