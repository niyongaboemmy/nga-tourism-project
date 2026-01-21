<div id="preloader">
    <div class="loader-content">
        <div class="spinner"></div>
        <div class="loading-text">Visit Rwanda...</div>
    </div>
</div>

<style>
    /* CRITICAL STYLES: Inline ensures this loads immediately */
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        z-index: 999999;
        /* Higher than everything */
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    .loader-content {
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .spinner {
        width: 50px;
        height: 50px;
        border: 4px solid #f3f3f3;
        border-top: 4px solid #00A859;
        /* Rwanda Green */
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    .loading-text {
        font-family: sans-serif;
        font-weight: 600;
        color: #00A859;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 2px;
        animation: pulse 1.5s infinite ease-in-out;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.5;
        }
    }
</style>

<script>
    // SELF-CONTAINED LOGIC
    window.addEventListener("load", function () {
        const preloader = document.getElementById("preloader");

        // Short delay to ensure branding is seen
        setTimeout(() => {
            preloader.style.opacity = "0";
            preloader.style.visibility = "hidden"; // Ensures clicks pass through

            // Remove from DOM to free up memory
            setTimeout(() => {
                preloader.remove();
            }, 500);
        }, 600); // 0.6s delay
    });
</script>