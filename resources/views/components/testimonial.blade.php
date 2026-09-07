<style>
    .marquee-wrap {
        overflow: hidden;
        border-top: 1px solid rgba(255, 255, 255, 0.15);
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }
    .marquee-track {
        width: max-content;
        display: flex;
        animation: nirva-marquee 26s linear infinite;
    }
    .marquee-wrap:hover .marquee-track {
        animation-play-state: paused;
    }
    @keyframes nirva-marquee {
        from { transform: translateX(0); }
        to { transform: translateX(-50%); }
    }
    .marquee-item {
        display: flex;
        align-items: center;
        gap: 0.9rem;
        white-space: nowrap;
        padding: 0.9rem 2.2rem;
        border-right: 1px solid rgba(255, 255, 255, 0.15);
    }
    .marquee-icon {
        flex: 0 0 auto;
        width: 46px;
        height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.14);
        color: #fff;
        font-size: 1.1rem;
    }
    .commit-card {
        position: relative;
        border-radius: 0.65rem;
        border-top: 4px solid var(--bs-primary);
        transition: 0.3s ease;
    }
    .commit-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 0.75rem 1.75rem rgba(51, 104, 198, 0.16) !important;
    }
    .commit-tag {
        letter-spacing: 0.06em;
    }
</style>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-4">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Commitments</h5>
            <h1 class="mb-0">Delivering Precision. Ensuring Quality. Building Trust.</h1>
        </div>
        <div class="row g-4">
            @php
                $commitCards = [
                    [
                        'icon' => 'fa fa-bullseye',
                        'tag' => 'Delivering Precision',
                        'title' => 'Precision Engineering',
                        'text' => 'Advanced moulding technology delivers superior precision and consistency at scale.',
                    ],
                    [
                        'icon' => 'fa fa-award',
                        'tag' => 'Ensuring Quality',
                        'title' => 'Rigorous Quality',
                        'text' => 'Strict quality checks ensure safe, consistent and reliable products for every customer.',
                    ],
                    [
                        'icon' => 'fa fa-handshake',
                        'tag' => 'Building Trust',
                        'title' => 'Trusted Partnership',
                        'text' => 'Dedicated support and solutions tailored to OEM, hospital and private-label needs.',
                    ],
                ];
            @endphp
            @foreach ($commitCards as $card)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="{{ 0.1 + ($loop->index * 0.15) }}s">
                    <div class="commit-card bg-light p-4 h-100 shadow-sm">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="{{ $card['icon'] }} text-white"></i>
                        </div>
                        <h5 class="text-primary text-uppercase small fw-bold commit-tag mb-2">{{ $card['tag'] }}</h5>
                        <h4 class="mb-2">{{ $card['title'] }}</h4>
                        <p class="text-muted mb-0">{{ $card['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="marquee-wrap bg-primary py-3">
        <div class="marquee-track">
            @php
                $commitTicker = [
                    ['icon' => 'fa fa-award', 'label' => 'Quality', 'desc' => 'You Can Trust'],
                    ['icon' => 'fa fa-bullseye', 'label' => 'Precision', 'desc' => 'You Can Rely On'],
                    ['icon' => 'fa fa-handshake', 'label' => 'Partnership', 'desc' => 'You Can Grow With'],
                    ['icon' => 'fa fa-truck', 'label' => 'On-Time Delivery', 'desc' => 'You Can Count On'],
                    ['icon' => 'fa fa-industry', 'label' => 'Medical-Grade Products', 'desc' => 'Safe & Reliable'],
                    ['icon' => 'fa fa-arrows-alt', 'label' => 'Adult & Pediatric', 'desc' => 'Every Need Covered'],
                ];
            @endphp
            @foreach (array_merge($commitTicker, $commitTicker) as $item)
                <div class="marquee-item">
                    <div class="marquee-icon">
                        <i class="{{ $item['icon'] }}"></i>
                    </div>
                    <div>
                        <h6 class="text-white mb-0 fw-semibold">{{ $item['label'] }}</h6>
                        <small class="text-white-50">{{ $item['desc'] }}</small>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>