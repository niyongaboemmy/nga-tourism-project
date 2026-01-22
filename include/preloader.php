<div id="preloader">
<<<<<<< HEAD
    <div class="loader-content">
        <div class="pulse-container">
            <div class="pulse-ring"></div>
            <div class="pulse-ring delay"></div>
            <div class="icon-center">
                <i class="fas fa-map-location-dot"></i>
            </div>
        </div>
        
        <div class="loading-text">
            Visit Rwanda
=======
    <div class="preloader-wrapper">
        <div class="logo-animation">
            <div class="logo-ring"></div>
            <div class="logo-ring delay"></div>
            <div class="logo-center">
                <i class="fas fa-mountain-sun"></i>
            </div>
        </div>
        
        <div class="reveal-text">
            <span class="letter">V</span>
            <span class="letter">I</span>
            <span class="letter">S</span>
            <span class="letter">I</span>
            <span class="letter">T</span>
            <span class="letter">&nbsp;</span>
            <span class="letter">R</span>
            <span class="letter">W</span>
            <span class="letter">A</span>
            <span class="letter">N</span>
            <span class="letter">D</span>
            <span class="letter">A</span>
        </div>
        
        <div class="loading-bar-container">
            <div class="loading-progress"></div>
>>>>>>> main
        </div>
    </div>
</div>

<style>
<<<<<<< HEAD
    /* 1. The Overlay */
=======
>>>>>>> main
    #preloader {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
<<<<<<< HEAD
        background-color: #ffffff;
        z-index: 999999;
        display: flex;
        justify-content: center;
        align-items: center;
        
        /* THE CRITICAL FADE CSS */
        opacity: 1;
        visibility: visible;
        transition: opacity 1s ease-out, visibility 1s ease-out;
    }

    /* Class to add via JS to trigger fade */
    #preloader.fade-out {
        opacity: 0;
        visibility: hidden;
        pointer-events: none; /* Allows user to click through while fading */
    }

    /* 2. Content Styling */
    .loader-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 25px;
    }

    /* 3. Pulse Animation */
    .pulse-container {
        position: relative;
        width: 80px; height: 80px;
        display: flex; justify-content: center; align-items: center;
    }

    .icon-center {
        font-size: 2rem;
        color: #00A859;
        z-index: 2;
        animation: float 2s ease-in-out infinite;
    }

    .pulse-ring {
        position: absolute;
        width: 100%; height: 100%;
        border-radius: 50%;
        border: 2px solid #00A859;
        opacity: 0;
        animation: ripple 2s linear infinite;
    }
    .pulse-ring.delay { animation-delay: 1s; }

    /* 4. Text Styling */
    .loading-text {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        color: #111;
        text-transform: uppercase;
        letter-spacing: 4px;
        font-size: 0.9rem;
        animation: fadeText 2s ease-in-out infinite;
    }

    /* --- Keyframes --- */
    @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-5px); } }
    @keyframes ripple { 0% { transform: scale(0.5); opacity: 0; } 50% { opacity: 0.5; } 100% { transform: scale(1.5); opacity: 0; } }
    @keyframes fadeText { 0%, 100% { opacity: 1; } 50% { opacity: 0.5; } }
</style>

<script>
    window.addEventListener("load", function () {
        const preloader = document.getElementById("preloader");
        
        // 1. Wait a tiny bit (0.5s) so the user actually sees the logo
        setTimeout(() => {
            
            // 2. Add the class that triggers the CSS "transition"
            preloader.classList.add("fade-out");
            
            // 3. Wait for the transition (1000ms) to finish, THEN remove it
            setTimeout(() => {
                preloader.remove();
            }, 1000); // Must match the 1s CSS transition time
            
        }, 500); 
=======
        background: #ffffff;
        z-index: 9999999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.8s cubic-bezier(0.85, 0, 0.15, 1), opacity 0.8s ease;
    }

    /* Transition class for a "shutter" exit */
    #preloader.exit-animation {
        transform: translateY(-100%);
        opacity: 0.9;
    }

    .preloader-wrapper {
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* 1. Logo Pulse Animation */
    .logo-animation {
        position: relative;
        width: 100px;
        height: 100px;
        margin-bottom: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .logo-center {
        font-size: 3rem;
        color: #00A859;
        z-index: 10;
        animation: logoFloating 2s ease-in-out infinite;
    }

    .logo-ring {
        position: absolute;
        width: 100%; height: 100%;
        border: 2px solid #00A859;
        border-radius: 50%;
        opacity: 0;
        animation: rippleCircle 2s infinite cubic-bezier(0.23, 1, 0.32, 1);
    }
    .logo-ring.delay { animation-delay: 1s; }

    /* 2. Letter Reveal Animation */
    .reveal-text {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        font-size: 1.2rem;
        letter-spacing: 5px;
        color: #111;
        overflow: hidden;
    }

    .letter {
        display: inline-block;
        transform: translateY(100%);
        opacity: 0;
        animation: letterRise 0.5s forwards;
    }

    /* Staggered text timing */
    .letter:nth-child(1) { animation-delay: 0.1s; }
    .letter:nth-child(2) { animation-delay: 0.15s; }
    .letter:nth-child(3) { animation-delay: 0.2s; }
    .letter:nth-child(4) { animation-delay: 0.25s; }
    .letter:nth-child(5) { animation-delay: 0.3s; }
    .letter:nth-child(7) { animation-delay: 0.4s; }
    .letter:nth-child(8) { animation-delay: 0.45s; }
    .letter:nth-child(9) { animation-delay: 0.5s; }
    .letter:nth-child(10) { animation-delay: 0.55s; }
    .letter:nth-child(11) { animation-delay: 0.6s; }
    .letter:nth-child(12) { animation-delay: 0.65s; }

    /* 3. Progress Bar */
    .loading-bar-container {
        width: 150px;
        height: 2px;
        background: #eee;
        margin-top: 20px;
        border-radius: 10px;
        overflow: hidden;
    }

    .loading-progress {
        width: 0%;
        height: 100%;
        background: #00A859;
        animation: fillProgress 2.5s cubic-bezier(0.65, 0, 0.35, 1) forwards;
    }

    /* KEYFRAMES */
    @keyframes logoFloating {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    @keyframes rippleCircle {
        0% { transform: scale(0.5); opacity: 0.8; }
        100% { transform: scale(1.8); opacity: 0; }
    }

    @keyframes letterRise {
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes fillProgress {
        to { width: 100%; }
    }
</style>

<script>
    window.addEventListener("load", function() {
        const preloader = document.getElementById("preloader");
        
        // Ensure the progress bar and text animation have time to play (2.5 seconds)
        setTimeout(() => {
            // Trigger the "Shutter" slide-up exit
            preloader.classList.add("exit-animation");
            
            // Delete the element entirely after the transition
            setTimeout(() => {
                preloader.remove();
            }, 800); 
        }, 2800); 
>>>>>>> main
    });
</script>