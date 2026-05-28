<?php $page = 'about'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About &mdash; CEMS | by Aashish</title>
    <?php require 'utils/styles.php'; ?>
</head>
<body>
<?php require 'utils/header.php'; ?>

<section class="page-strip">
    <div class="container">
        <div class="crumbs"><a href="index.php">Home</a> &nbsp;/&nbsp; About</div>
        <h1>About CEMS</h1>
        <p class="text-white-50" style="max-width:680px;">A modern, professional event platform built to make college fests effortless &mdash; for organisers and students alike.</p>
    </div>
</section>

<section class="section pt-0">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <!-- Owner card -->
            <div class="col-lg-5">
                <div class="owner-card h-100">
                    <div class="owner-avatar">A</div>
                    <h2 class="mb-1">Aashish</h2>
                    <div class="kicker mb-3">Founder, Developer &amp; Maintainer</div>
                    <p>I'm Aashish &mdash; a full-stack developer behind CEMS. I designed and built every line of this platform end-to-end: the database schema, the PHP backend, the responsive UI, and the admin console.</p>
                    <p>The goal of CEMS is simple: make college event management feel as smooth as booking a movie ticket.</p>
                    <hr class="divider">
                    <div class="d-flex flex-wrap gap-2">
                        <a href="https://github.com/aashishbharti04" target="_blank" rel="noopener" class="btn btn-cems-ghost"><i class="bi bi-github"></i> GitHub</a>
                        <a href="https://in.linkedin.com/in/aashana1012" target="_blank" rel="noopener" class="btn btn-cems-ghost"><i class="bi bi-linkedin"></i> LinkedIn</a>
                        <a href="https://www.youtube.com/@CodeWithAsur" target="_blank" rel="noopener" class="btn btn-cems-ghost"><i class="bi bi-youtube"></i> YouTube</a>
                        <a href="https://www.instagram.com/asurwave1012?igsh=ZDBlY2NtczJ5cmMw" target="_blank" rel="noopener" class="btn btn-cems-ghost"><i class="bi bi-instagram"></i> Instagram</a>
                    </div>
                </div>
            </div>

            <!-- Mission / story -->
            <div class="col-lg-7">
                <div class="form-shell h-100">
                    <div class="kicker">Our mission</div>
                    <h2 class="mb-3">Quality technical education + a stage for every student</h2>
                    <p>CEMS exists to celebrate everything a college campus can be &mdash; a launchpad for engineers, a stage for performers, an arena for gamers and a workshop for creators. We bring discovery, registration, coordination and analytics into one beautifully simple system.</p>

                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <div class="form-shell" style="padding:1.2rem;background:var(--surface-2);">
                                <div class="kicker"><i class="bi bi-lightning-charge-fill text-warning"></i> Built for speed</div>
                                <p class="mb-0 small">PHP + MySQL backend that runs on any classic LAMP / WAMP / XAMPP stack &mdash; deploy in minutes.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-shell" style="padding:1.2rem;background:var(--surface-2);">
                                <div class="kicker"><i class="bi bi-shield-check text-success"></i> Role-aware</div>
                                <p class="mb-0 small">Separate flows for students, student / staff coordinators and the admin console.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-shell" style="padding:1.2rem;background:var(--surface-2);">
                                <div class="kicker"><i class="bi bi-palette-fill text-info"></i> Modern UI</div>
                                <p class="mb-0 small">Fully responsive Bootstrap 5 design system, polished cards, tables and forms.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-shell" style="padding:1.2rem;background:var(--surface-2);">
                                <div class="kicker"><i class="bi bi-code-slash text-primary"></i> Open source</div>
                                <p class="mb-0 small">The full source is on GitHub &mdash; fork it, deploy it, make it your college's own.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'utils/footer.php'; ?>
</body>
</html>
