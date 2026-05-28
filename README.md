# CEMS — College Event Management System

> A modern, professional event-management portal for college fests.
> Designed and built end-to-end by **Aashish**.

[![Made with PHP](https://img.shields.io/badge/Made%20with-PHP%208-777BB4?logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap 5](https://img.shields.io/badge/UI-Bootstrap%205-7952B3?logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/DB-MySQL%20%2F%20MariaDB-4479A1?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/license-MIT-22c55e)](#license)

---

## What is CEMS?

CEMS is a full-stack web application that lets a college:

- **Discover** events across four categories — Technical, Gaming, On-Stage, Off-Stage.
- **Register** students with USN, branch, contact and college details.
- **Coordinate** events through a dedicated admin console — staff & student coordinators, schedule, location.
- **Look up** registrations by USN ("My Events" page).
- **Manage** every event end-to-end from a clean admin dashboard.

The UI was rebuilt from the ground up: hero, animated stat cards, image-driven category grid, modern forms, responsive tables, and a polished footer with full owner branding.

---

## Tech stack

| Layer        | Tech                                    |
| ------------ | --------------------------------------- |
| Backend      | PHP 8 (mysqli)                          |
| Database     | MySQL / MariaDB (schema in `cems.sql`)  |
| Frontend     | Bootstrap 5.3 + Bootstrap Icons + custom CSS theme (`css/app.css`) |
| Fonts        | Inter (Google Fonts)                    |
| Imagery      | Unsplash CDN (free, hotlinkable)        |

---

## Folder structure

```
.
├── index.php                 # Home (hero, stats, categories, CTA)
├── aboutus.php               # About + owner card
├── contact.php               # Owner contact + message form
├── register.php              # Student registration
├── usn.php                   # "Find my events" lookup
├── RegisteredEvents.php      # Per-USN event list
├── login_form.php            # Admin login
├── adminPage.php             # Admin dashboard (stats + events table)
├── createEventForm.php       # Create event
├── deleteEvent.php           # Delete event
├── Stu_details.php           # All student registrations
├── Stu_cordinator.php        # Student coordinators table
├── Staff_cordinator.php      # Staff coordinators table
├── updateStudent.php         # Edit student coordinator
├── updateStaff.php           # Edit staff coordinator
├── viewEvent.php             # Browse events of a category
├── events.php                # Legacy event-row partial (kept for compat)
├── 404.php                   # Friendly not-found page
├── cems.sql                  # Database schema + seed data
├── classes/db1.php           # DB connection (non-fatal on failure)
├── utils/
│   ├── styles.php            # Shared <head> (Bootstrap + theme)
│   ├── header.php            # Public navbar + topbar
│   ├── adminHeader.php       # Admin navbar
│   └── footer.php            # Global footer with social links
├── css/
│   ├── app.css               # Custom theme (this is where the look lives)
│   ├── bootstrap.css         # legacy — no longer used
│   └── style.css             # legacy — no longer used
├── images/                   # legacy local images
└── README.md
```

---

## Quick start (local)

### Option A — Full stack (recommended)

1. Install **XAMPP / WAMP / Laragon** (any LAMP-style bundle).
2. Drop this project into your web root (`htdocs/` for XAMPP).
3. Open **phpMyAdmin** → create a database named `cems` → **Import** `cems.sql`.
4. Visit <http://localhost/College-Event-Management-System-master/>

### Option B — PHP only (preview without DB)

```powershell
# from the project root
php -S localhost:8000
```

Open <http://localhost:8000>. Static pages (Home / About / Contact / Login / Register form) render perfectly. Pages that need MySQL show a friendly "Database not connected" banner instead of a fatal error.

---

## Default credentials

| Role  | Username | Password |
| ----- | -------- | -------- |
| Admin | `admin`  | `admin`  |

> Change these for any non-demo deployment.

---

## Screens

- **Home** — hero with live status pill, KPI stat cards, image-rich category grid, 3-step "How it works", CTA section.
- **About** — owner card (avatar, bio, socials) + mission grid.
- **Contact** — owner contact card (email, phone, location) + message form with mailto fallback.
- **Admin dashboard** — 4 KPI tiles, quick-actions, full events table with delete.
- **Events listing** — responsive event cards with image, price pill, schedule, coordinators.

---

## Owner & contact

Built and maintained by **Aashish**.

- 📧 Email: <aashish@marketdoctorsonline.com>
- 📱 Phone / WhatsApp: **+91 95652 63445**
- 🐙 GitHub: <https://github.com/aashishbharti04>
- 💼 LinkedIn: <https://in.linkedin.com/in/aashana1012>
- ▶️ YouTube: <https://www.youtube.com/@CodeWithAsur>
- 📸 Instagram: <https://www.instagram.com/asurwave1012>

---

## License

MIT © Aashish. Free to fork, deploy and adapt for your college.
