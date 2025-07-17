<style>
    .marquee-wrapper {
        position: relative;
        width: 90%; /* Tidak full layar */
        margin: 0 auto;
        overflow: hidden;
        padding-left: 20px;
        padding-right: 20px;
    }

    .marquee-track {
        display: flex;
        width: fit-content;
        animation: marquee 30s linear infinite;
    }

    .marquee-track img {
        height: 100px;
        margin: 0 20px;
        flex-shrink: 0;
    }

    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    /* Optional: Efek gradasi kiri-kanan */
    .fade-left,
    .fade-right {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 60px;
        pointer-events: none;
        z-index: 1;
    }

    .fade-left {
        left: 0;
        background: linear-gradient(to right, white, transparent);
    }

    .fade-right {
        right: 0;
        background: linear-gradient(to left, white, transparent);
    }
</style>

<div class="mt-10 marquee-wrapper">
    <div class="fade-left"></div>
    <div class="fade-right"></div>

    <div class="marquee-track">
        @for ($i = 0; $i < 2; $i++)
            <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Image">
            <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Image">
            <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Image">
            <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Image">
            <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Image">
            <img src="{{ asset('images/logo/Mainlogo.png') }}" alt="Image">
        @endfor
    </div>
</div>
