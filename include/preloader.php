<div id="preloader">
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
        </div>
    </div>
</div>

<style>
    /* 1. The Overlay */
    #preloader {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
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
    });
</script>