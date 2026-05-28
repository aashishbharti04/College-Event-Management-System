<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CEMS &mdash; College Event Management System | by Aashish</title>
    <?php require 'utils/styles.php'; ?>
</head>
<body>
<?php require 'utils/header.php'; ?>

<!-- HERO -->
<section class="hero">
    <div class="container">
        <span class="badge-pill"><span class="dot"></span> Live &middot; Registrations open for 2026 season</span>
        <h1>Discover, register and manage <br class="d-none d-md-inline">your favourite college events.</h1>
        <p class="lead">CEMS is a modern event platform for colleges &mdash; technical hackathons, gaming arenas, on-stage performances and creative off-stage challenges, all in one place.</p>
        <div class="hero-actions">
            <a href="#events" class="btn btn-cems-accent"><i class="bi bi-calendar-event"></i> Browse Events</a>
            <a href="register.php" class="btn btn-cems-ghost"><i class="bi bi-person-plus"></i> Register Now</a>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="stats-strip">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-lg-3">
                <div class="stat-card">
                    <div class="ico"><i class="bi bi-calendar-week-fill"></i></div>
                    <div class="num">14+</div>
                    <div class="label">Active events</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-card">
                    <div class="ico"><i class="bi bi-collection-fill"></i></div>
                    <div class="num">4</div>
                    <div class="label">Event categories</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-card">
                    <div class="ico"><i class="bi bi-people-fill"></i></div>
                    <div class="num">2,500+</div>
                    <div class="label">Student footprint</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="stat-card">
                    <div class="ico"><i class="bi bi-trophy-fill"></i></div>
                    <div class="num">₹50K</div>
                    <div class="label">Prize pool</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CATEGORIES -->
<section class="section" id="events">
    <div class="container">
        <div class="text-center mb-4">
            <div class="section-eyebrow">What we host</div>
            <h2 class="section-title">Pick your category &middot; ignite your spark</h2>
            <p class="section-sub">From late-night code wars to centre-stage performances &mdash; CEMS curates events across four pillars so every student finds their stage.</p>
        </div>

        <div class="cat-grid">
            <!-- Technical -->
            <a href="viewEvent.php?id=1" class="cat-card text-decoration-none">
                <div class="img" style="background-image:url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=900&q=80');">
                    <span class="tag">Technical</span>
                </div>
                <div class="body">
                    <h3>Technical Events</h3>
                    <p>Hackathons, cryptohunts, competitive coding and tech quizzes &mdash; sharpen your engineering edge.</p>
                    <div class="meta">
                        <span class="kicker">4 events</span>
                        <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>
                </div>
            </a>

            <!-- Gaming -->
            <a href="viewEvent.php?id=2" class="cat-card text-decoration-none">
                <div class="img" style="background-image:url('https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&w=900&q=80');">
                    <span class="tag">Gaming</span>
                </div>
                <div class="body">
                    <h3>Gaming Arena</h3>
                    <p>PUBG, Counter-Strike, FIFA leagues and console showdowns &mdash; bring your squad, bring your A-game.</p>
                    <div class="meta">
                        <span class="kicker">2 events</span>
                        <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>
                </div>
            </a>

            <!-- On-stage -->
            <a href="viewEvent.php?id=3" class="cat-card text-decoration-none">
                <div class="img" style="background-image:url('https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?auto=format&fit=crop&w=900&q=80');">
                    <span class="tag">On-Stage</span>
                </div>
                <div class="body">
                    <h3>On-Stage Performances</h3>
                    <p>Dance battles, singing, fashion show, Idol contests &mdash; own the spotlight and steal the night.</p>
                    <div class="meta">
                        <span class="kicker">4 events</span>
                        <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>
                </div>
            </a>

            <!-- Off-stage -->
            <a href="viewEvent.php?id=4" class="cat-card text-decoration-none">
                <div class="img" style="background-image:url('https://images.unsplash.com/photo-1499415479124-43c32433a620?auto=format&fit=crop&w=900&q=80');">
                    <span class="tag">Off-Stage</span>
                </div>
                <div class="body">
                    <h3>Off-Stage Talent</h3>
                    <p>Cooking without fire, mehandi, rangoli, short films &mdash; craft, taste and tell a story.</p>
                    <div class="meta">
                        <span class="kicker">4 events</span>
                        <span class="arrow"><i class="bi bi-arrow-right"></i></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="section bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-eyebrow">How it works</div>
            <h2 class="section-title">Three steps. Zero friction.</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="form-shell h-100 text-center">
                    <div class="owner-avatar mx-auto" style="width:64px;height:64px;font-size:1.4rem;background:linear-gradient(135deg,var(--brand-700),var(--brand-600));">1</div>
                    <h3 class="mt-2">Browse</h3>
                    <p>Explore events across four categories with full schedule, price and coordinator info.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-shell h-100 text-center">
                    <div class="owner-avatar mx-auto" style="width:64px;height:64px;font-size:1.4rem;background:linear-gradient(135deg,var(--accent),#f59e0b);color:#1a1300;">2</div>
                    <h3 class="mt-2">Register</h3>
                    <p>One quick form with your USN, branch and contact &mdash; that's it. We do the rest.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-shell h-100 text-center">
                    <div class="owner-avatar mx-auto" style="width:64px;height:64px;font-size:1.4rem;background:linear-gradient(135deg,var(--accent-2),#10b981);">3</div>
                    <h3 class="mt-2">Show up &amp; win</h3>
                    <p>Track your registered events on the &ldquo;My Events&rdquo; page and walk in ready.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container">
        <div class="form-shell text-center" style="background:linear-gradient(135deg,var(--brand-900),var(--brand-700));color:#fff;border:0;">
            <h2 style="color:#fff;">Ready to claim your spot?</h2>
            <p style="color:#cdd5ec;max-width:560px;margin:0 auto 1.4rem;">Registrations close fast &mdash; lock your seat in your favourite event today.</p>
            <a href="register.php" class="btn btn-cems-accent"><i class="bi bi-rocket-takeoff"></i> Register now</a>
            <a href="contact.php" class="btn btn-cems-ghost ms-2"><i class="bi bi-chat-dots"></i> Contact organisers</a>
        </div>
    </div>
</section>

<?php require 'utils/footer.php'; ?>
</body>
</html>
