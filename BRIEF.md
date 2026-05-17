# BRIEF

## 1 · Analysis

### What this business actually is
CECAM (Centre Européen de Calcul Atomique et Moléculaire) is a non-profit European research network, headquartered at EPFL in Lausanne, that promotes fundamental research in computational atomic, molecular and materials simulation. It runs and co-funds workshops, schools, conferences, lecture series and a prize across a federated network of European nodes. It does not sell anything — it is sustained by member-institution dues, EPFL hosting, and grants, and "earns" its mandate by curating a high-quality scientific program that researchers want to attend and propose into. The home page's job is to advertise that program, drive proposals into the annual Flagship call, and announce news from the network.

### Who the audience really is
- **Primary**: working computational scientists — PhDs, postdocs, faculty in physics, chemistry, materials, biophysics — landing on the site to find an upcoming workshop/school to attend or to start a Flagship proposal before a deadline. They are technical, time-poor, and scan for dates, topics and links.
- **Secondary**: funding agencies and member institutions checking institutional credibility, prospective hires reading careers, journalists looking for a press contact, and the broader simulation community arriving from a CECAM mailing-list email.

### What they're trying to convey
- A serious, 50-year European scientific institution — not a startup, not a conference vendor.
- Federated, pan-European reach (multiple nodes, multiple partner labs) anchored at EPFL.
- Modern computational research — the science is forward-looking even if the brand reads "academic."

### What's broken about the current presentation
- The home page is a flat wall of equally-weighted sections (News, Calls, Workshops, Schools, Conferences, Events, Other activities, Mixed-Gen, Webinars, Lectures, Classics, Mansigh, Prize) — no hierarchy, nothing tells the visitor what to do first.
- The primary action — propose into the Flagship call — is buried as "READ MORE" instead of an obvious CTA with a deadline.
- Navigation duplicates every item (the source dump shows each label twice), and "Other activities" is a junk drawer of unrelated programs.
- Footer/contact info is icon-text noise (`email`, `phone`, `location_on`) instead of formatted contact details.
- Copy hedges and labels things by type ("Workshops", "Schools") instead of leading with the actual upcoming title, date and venue — the news that matters is hidden behind generic headers.

### What the rebuild should optimize for
Get researchers to the right event or proposal action in one click from the home page. Secondary: communicate institutional credibility (history, network, EPFL anchor); make news and the Flagship call deadline impossible to miss.

### Hard facts to preserve
- Name: CECAM — Centre Européen de Calcul Atomique et Moléculaire
- HQ: EPFL, Avenue de Forel 3, BCH 3103, 1015 Lausanne, Switzerland
- Email: helpdesk@cecam.org
- Phone: listed but number not in source `[verify]`
- Mission line: "Fostering fundamental research on computational science for societal benefit."
- Open call: CECAM Flagship call, closes **17 July 2026**, shaping the 2027–2028 program
- Confirmed selection: 2027 CECAM-Lorentz workshop — *Fracture of Amorphous Materials Across the Scales* — Maximilian Ries, Sebastian Pfaller, Andrea Giuntoli — CECAM-HQ, EPFL, 12–16 Apr 2027
- Upcoming workshop: *Deep Learning in Materials Science: Interpretation, Generalization, and the Risk of Overfitting*
- Upcoming school: *Picking Flowers: Hands-on FLEU* `[verify spelling — likely "FLEUR"]`
- Upcoming event: 17–28 Feb, CECAM-HQ-EPFL — *Integration of ESL modules into electronic-structure codes*
- Recurring activities: Mixed-Gen, CECAM Webinars, CECAM Lectures (since April 2015), CECAM-MARVEL Classics, Mary Ann Mansigh Conversation Series, Berni J. Alder CECAM Prize
- Existing logos in `source/images/`: full color CECAM lockup (`img-07.png`, `img-08.png`) and small square mark (`img-11.png`)

## 2 · Brand

### Verdict
**Keep-and-polish.** The CECAM wordmark and the four-square mark (red / mid-blue / navy / white) are recognizable institutional assets with 50 years of equity behind them — the user explicitly asked to reuse them. The fix is the system *around* the logo: typography, hierarchy, restraint and modern layout, not a rebrand.

### Palette
- `#0F2A5C` — Deep Navy — primary (ink-leaning brand color, taken from the "cecam" wordmark)
- `#2E7DC1` — Signal Blue — accent (mid blue from the logo mark; used for links, eyebrows, highlights)
- `#C8222C` — Pulse Red — accent (red square in the logo mark; used sparingly for the open-call badge and deadline emphasis)
- `#F6F4EE` — Paper — surface (off-white with a faint warm cast so the page doesn't feel clinical)
- `#1A1A1A` — Ink — body text (near-black for body, leaving pure navy for headings and brand moments)

### Typography
`Heading: Fraunces` + `Body: Inter` — Fraunces gives the serif gravitas a 50-year European research institution deserves while staying contemporary at heavy weights; Inter keeps long programmatic text (titles, abstracts, dates) crisp at small sizes for a scanning audience.

### Voice
Authoritative, plain-spoken, scholarly. Writes like a senior researcher briefing peers: specific, never marketing-y, comfortable with subject-matter vocabulary ("non-adiabatic coupling," "amorphous materials") without explaining itself, but unafraid to use a one-line caption when a date or place matters more than a title.

### Sample copy
- **Hero headline**: A European home for atomistic and molecular simulation.
- **Hero subhead**: CECAM convenes the workshops, schools and conferences that shape computational science across Europe — proposed by researchers, funded by the network, hosted at EPFL and twelve partner nodes.
- **Primary CTA**: Browse program

## 3 · Plan

### Site map
- **Home** (`/`) — orient the visitor, surface the Flagship call deadline, route to the next upcoming events — *click into Program or Submit a proposal*
- **About** (`/about`) — institutional story, network, governance, HQ — *trust-build, then route to Contact or Program*
- **Program** (`/program`) — filterable list of workshops, schools, conferences and events — *find and click into an event*
- **Activities** (`/activities`) — the recurring non-event programs (Mixed-Gen, Lectures, MARVEL Classics, Mansigh series, Webinars, Alder Prize) — *learn about a series, follow to external page*
- **News** (`/news`) — chronological news posts and call announcements — *read an item*
- **Contact** (`/contact`) — EPFL HQ details, helpdesk, mailing list signup, careers, documents — *email or sign up*

### Navigation
- **Header nav**: About, Program, Activities, News, Contact (5 items; Home reached via wordmark)
- **Footer**: Three columns — (1) EPFL HQ address, helpdesk email, phone, (2) Quick links: Program, Activities, News, Careers, Documents, (3) Mailing list signup + small disclaimer / privacy-policy / © line. CECAM mark + "50 years" wordmark at the bottom.

### Page content briefs

**Home (`/`)**
- Job: in one viewport, communicate what CECAM is and where to click next.
- Sections in order: (1) Hero — wordmark, mission line, primary CTA *Browse program* + secondary *Submit a proposal*. (2) Open-call ribbon — red-accented panel with Flagship-call deadline countdown and CTA. (3) Featured news — single hero card (the 2027 Lorentz selection) + 2 smaller items. (4) Upcoming program — three columns: next Workshop, next School, next Conference, each one event with title/dates/venue. (5) Recurring activities — six-tile grid (Mixed-Gen, Lectures, MARVEL Classics, Mansigh, Webinars, Alder Prize). (6) About-tease — short paragraph + "About CECAM" link. (7) Mailing list strip.
- CTAs: hero primary *Browse program*, ribbon *Submit a proposal*, each event card opens its detail.
- Imagery: hero treatment is type-led on Paper surface with the four-square mark scaled large as a graphic device; one editorial photo on the About-tease (existing conference photo `source/images/img-02.jpg`).

**About (`/about`)**
- Job: convince a funding agency or a first-time visitor that CECAM is a serious, decades-old, federated institution.
- Sections: (1) Headline page intro. (2) Long-form mission paragraph (the existing "Over the last twenty years..." text, edited). (3) Network map — list of CECAM nodes across Europe (placeholder list + map visual). (4) Governance — Director, Council, Scientific Advisory Committee (placeholders, `[verify]`). (5) History timeline — founding, 50-years milestone, present. (6) CTA strip: *See the program* / *Contact us*.
- Imagery: one wide editorial photo of the EPFL HQ or a workshop in session (`source/images/img-00.png`). A simple SVG map of Europe with node dots in Signal Blue.

**Program (`/program`)**
- Job: let a researcher filter the entire event catalogue.
- Sections: (1) Page header with filter bar — type (Workshop / School / Conference / Other), year, location. (2) Event list — date-sorted cards, each: date, type tag, title, venue, organizers, link. (3) Sidebar (desktop) / collapsed (mobile): "Propose a workshop" Flagship-call panel pinned.
- Imagery: no hero photo — let typography and date columns carry the page.

**Activities (`/activities`)**
- Job: explain the six recurring programs and route to each one's external page or detail.
- Sections: (1) Page header + 1-sentence intro. (2) One large content row per activity (alternating image side): title, what it is, originator/host, last-edition note, "Learn more" link. Six rows: Mixed-Gen, CECAM Lectures, MARVEL Classics, Mansigh Series, Webinars, Berni J. Alder Prize.
- Imagery: per-row icon or supporting image — the Alder Prize uses the existing trophy photo (`source/images/img-05.png`), others use small SVG glyphs (a chat bubble for Mansigh, a play triangle for Webinars, etc.) rather than stock photos.

**News (`/news`)**
- Job: index every news post, newest first.
- Sections: (1) Page header. (2) Featured post (the 2027 Lorentz item). (3) Chronological list — date, title, 2-line dek. (4) Pagination.
- Detail page: title, date, dek, body markdown, related event link if any.

**Contact (`/contact`)**
- Job: route each kind of inquiry correctly.
- Sections: (1) HQ block — address, phone, helpdesk email, hours. (2) Inquiry routes — three short blocks: scientific program (helpdesk), careers (link to careers listings), press. (3) Mailing-list signup form. (4) Map embed or static map image of EPFL site. (5) Documents / disclaimer / privacy quick links.
- Forms: mailing-list signup (see Forms below). No contact form — direct email is clearer for this audience.
- Imagery: static map image of EPFL campus (existing if available, otherwise fetch).

### Collections
PebbleStack defaults (`pages`, `posts`, `contact`) cover About/Contact pages and News posts. Add two collections because the site's core content is event-shaped, not post-shaped:

- **events** — `name: events`, `label: Events`, `route: /program/{slug}`, `template: event.html`, `list_template: program.html`. Fields:
  - `title` (text, required) — event title
  - `slug` (slug, required) — URL slug
  - `event_type` (select: workshop|school|conference|other, required) — drives filter and badge color
  - `start_date` (datetime, required) — first day
  - `end_date` (datetime, required) — last day
  - `venue` (text, required) — e.g. "CECAM-HQ, EPFL, Lausanne"
  - `organizers` (textarea, required) — line-separated names
  - `summary` (textarea, required) — list-card dek (1–2 sentences)
  - `body` (markdown, required) — full description, program, registration info
  - `external_url` (url) — link to the legacy CECAM event page if applicable
  - `featured` (boolean) — show on the home page upcoming row
  - *Why*: workshops/schools/conferences/events are the central content type and need typed fields (dates, venue, organizers) that don't fit into a generic post.

- **activities** — `name: activities`, `label: Recurring Activities`, `route: /activities/{slug}`, `template: activity.html`, `list_template: activities.html`. Fields:
  - `title` (text, required) — e.g. "CECAM Lectures"
  - `slug` (slug, required)
  - `short_label` (text, required) — for the home-page tile (e.g. "Lectures")
  - `summary` (textarea, required) — 1–2 sentence description
  - `body` (markdown, required) — long description
  - `external_url` (url) — link to the legacy series page
  - `display_order` (number, required) — for the activities grid
  - *Why*: the six recurring programs are not events with dates — they are evergreen series — but they need their own page templates and a consistent grid on home and `/activities`.

The default `posts` collection is used for News. The default `contact` form collection is repurposed for the mailing-list signup (single email field) — or replaced with mailto if Formspree is rejected (see Forms).

### Forms
**Formspree placeholder.** The mailing-list signup is the only form on the site, and a mailto for a list signup feels wrong for this audience. Keep the `<form action="https://formspree.io/f/REPLACE_ME" method="POST">` with an HTML comment next to it (`<!-- TODO: replace REPLACE_ME with the real Formspree endpoint when deploying -->`). The helpdesk contact stays as a plain `mailto:helpdesk@cecam.org` link, no form needed.

## 4 · Design

### Direction
**Confident institutional modernism.** Think Wallpaper*-meets-MIT-Press: a wide white-on-Paper canvas, a single serif display face doing all the editorial work, generous vertical space between sections, and the existing CECAM four-square mark scaled large as a graphic device the way Aesop uses its wordmark or Atlas of Places uses its tiny serial number. Visual touchstones: **MIT Press** (long-form research site — quiet serif, strict grid), **Aesop** (typographic restraint, never noisy), **Wallpaper\*** (editorial pacing of large headlines and tight metadata). The red square from the CECAM mark is the *only* place red appears on the site — exclusively reserved for the open-call deadline and live "now" indicators, so it never loses meaning.

### Type scale
- Display (giant hero h1): `4.5rem / 1.05 / 500` (Fraunces, opsz 144, soft variation)
- H1: `3rem / 1.1 / 500`
- H2: `2rem / 1.2 / 500`
- H3: `1.375rem / 1.3 / 600` (Inter — section subheads and card titles use Inter, not Fraunces, for clarity)
- Body: `1rem / 1.6 / 400` (Inter)
- Small / meta: `0.8125rem / 1.5 / 500` (Inter, letter-spacing 0.04em, UPPERCASE for eyebrows like "WORKSHOP · 12–16 APR 2027")
- Modular scale: ~1.333, Fraunces opsz tuned per size.

### Spacing & rhythm
- Container max-width: 1240px, with content-width of 880px for prose pages.
- Section vertical padding: 4rem mobile / 7rem desktop (large); 2.5rem / 4rem (small).
- Grid gutters: 24px mobile, 32px desktop, on a 12-column grid.
- Baseline grid: not strict — use the type scale's line-heights as the rhythm unit (1.5rem vertical spacing increments). The page should feel measured, not engineered.

### Components

- **Header / nav** — 72px tall, sticky on scroll with a 1px hairline border in Deep Navy at 12% opacity. CECAM wordmark (full color, from `source/images/img-07.png`) at left; nav links right-aligned, Inter medium, Deep Navy, 0.9375rem. Mobile: hamburger collapses into a full-page Paper-surface menu with Fraunces 2rem links stacked.
- **Hero** — type-led, no photograph. Display h1 in Fraunces, ranged left, spanning 8 cols. The four-square CECAM mark sits oversized (~360px) at top-right, partially bleeding off the container edge, acting as the visual anchor instead of a photo. Mission tagline below in 1.25rem Inter. Two CTAs: primary (filled Deep Navy) + secondary (text link with arrow).
- **Open-call ribbon** — full-bleed band in Deep Navy, white text, with a Pulse Red dot indicator pulsing softly. Eyebrow ("Open call · Flagship 2027–2028"), headline, deadline ("Closes 17 July 2026"), CTA button in Paper. The only red on the home page.
- **Standard content section** — title (Fraunces h2) + lede + body. When paired with media, alternate sides per section; on mobile, media always sits above text. 7rem section padding top/bottom.
- **Event card** — Paper background, 1px hairline border in Deep Navy 12%. Top row: type tag (uppercase Inter, 0.75rem) + dates (Inter mono digits). Title (Fraunces 1.5rem). Venue (Inter 0.875rem, muted). Hover: border darkens to Deep Navy 24%, no shadow.
- **Activity tile** — square-ish, Paper with 1px navy hairline. Small SVG glyph in Signal Blue at top-left, activity name in Fraunces 1.25rem, one-line dek in Inter 0.875rem. Hover: tile fills with Signal Blue at 8% opacity.
- **Footer** — Deep Navy background, Paper text. Three columns desktop, stacked mobile. Wordmark (light variant) bottom-left, copyright + disclaimer/privacy links bottom-right. Generous 4rem vertical padding.
- **Buttons** — Primary: filled Deep Navy, Paper text, 12px/24px padding, 2px radius (almost square — clean, not pilly). Hover: shifts to `#15366E`. Focus: 2px Signal-Blue outline at 2px offset. Secondary: text-only with arrow glyph (→), Signal Blue, underline animates in on hover. Tertiary link: Signal Blue, underline-on-hover.
- **Forms** — labels above inputs in Inter 0.8125rem uppercase. Inputs: Paper background, 1px Deep-Navy-at-30% border, 12px padding, 2px radius. Focus: border thickens to 1.5px Signal Blue. Submit button uses Primary style.

### Per-page layout

**Home (`/`)**
1. Header
2. Hero — type + oversized four-square mark, full container width, ~640px tall desktop
3. Open-call ribbon (full-bleed Deep Navy)
4. Featured news — 1 large card + 2 small cards in a 12-col grid (8/4 split, then 4/4)
5. Upcoming program — 3-column row of event cards (Workshop, School, Conference), with the section header "Coming up" in Fraunces h2
6. Recurring activities — 3×2 tile grid of activity tiles
7. About-tease — two-column layout: paragraph on left, single editorial photo on right (`source/images/img-02.jpg`, cropped tall)
8. Mailing list strip — full-bleed Paper-tinted band, single-input form
9. Footer

**About (`/about`)**
1. Header
2. Page heading + 1-line intro
3. Mission long-form prose (max-width 720px, centered)
4. Network map — full-bleed Paper background, SVG map of Europe with node dots, 800px tall
5. Governance — three-column grid of name + role cards (placeholders)
6. History timeline — vertical stepped timeline, Signal Blue connector line
7. CTA strip
8. Footer

**Program (`/program`)**
1. Header
2. Page heading + filter bar (sticky on scroll desktop)
3. Event list — single-column on mobile, two-column on desktop, date-sorted descending, with year dividers in Fraunces h2
4. Flagship-call pinned panel (right sidebar desktop, inline after intro on mobile)
5. Footer

**Activities (`/activities`)**
1. Header
2. Page heading + 1-line intro
3. Six alternating-side content rows, each: image/glyph on one side, title + body + link on the other
4. Footer

**News (`/news`)**
1. Header
2. Page heading
3. Featured post — full-width card with eyebrow, Fraunces h2 title, 3-line dek, date, link
4. Chronological list — date in left margin (Inter mono), title + dek to the right
5. Pagination
6. Footer

**News detail (`/news/{slug}`)**
1. Header
2. Eyebrow (post type / date) + Fraunces display h1 + dek
3. Body markdown, max-width 720px
4. "Related event" footer card if applicable
5. Back-to-news link
6. Footer

**Event detail (`/program/{slug}`)**
1. Header
2. Eyebrow (type · dates) + Fraunces display h1
3. Two-column meta block: dates / venue / organizers
4. Body markdown
5. External link button (if `external_url`)
6. Footer

**Contact (`/contact`)**
1. Header
2. Page heading + 1-line intro
3. HQ block — address, phone, helpdesk email, in a 2-column layout with map image on the right
4. Inquiry routes — 3-column grid
5. Mailing-list signup strip
6. Documents / disclaimer / privacy links row
7. Footer

### Imagery plan

| Page | Slot | Treatment | Source | Search query (if photo) | Aspect |
|------|------|-----------|--------|-------------------------|--------|
| Home | Hero mark | Existing logo, oversized graphic device | Source asset `source/images/img-11.png` (also vectorize from `img-07.png`) | — | square |
| Home | About-tease photo | Editorial conference photo, cool tones, slight grain | Source asset `source/images/img-02.jpg` | — | 4:5 portrait crop |
| Home | News featured photo (Lorentz workshop) | Photograph | Wikimedia | "amorphous metallic glass fracture surface electron microscope" | 3:2 |
| Home | News small #1 photo | Photograph | Wikimedia | "EPFL campus Lausanne architecture exterior" | 3:2 |
| Home | News small #2 photo | Photograph | Wikimedia | "scientific computing cluster server room blue lights" | 3:2 |
| About | Hero photo | Editorial wide shot of conference room | Source asset `source/images/img-00.png` (use as muted background, tinted Deep Navy at 20%) | — | 16:9 |
| About | Network map | SVG illustration | Inline SVG | — | wide |
| About | Mission supporting image | Scientific visualization, calm palette | Source asset `source/images/img-06.png` (protein structure) | — | 3:2 |
| Program | (no hero photo) | — | — | — | — |
| Activities | Alder Prize row | Existing photo | Source asset `source/images/img-05.png` | — | 3:2 |
| Activities | Mixed-Gen glyph | SVG illustration — two overlapping speech bubbles, Signal Blue stroke 1.5px | Inline SVG | — | square |
| Activities | Lectures glyph | SVG illustration — minimalist podium with sound waves | Inline SVG | — | square |
| Activities | MARVEL Classics glyph | SVG illustration — open book with simple chemical bond diagram | Inline SVG | — | square |
| Activities | Mansigh glyph | SVG illustration — pair of speech bubbles overlapping (asymmetric, conversational) | Inline SVG | — | square |
| Activities | Webinars glyph | SVG illustration — play triangle inside a thin square frame | Inline SVG | — | square |
| News list | Per-post thumb | Photograph or scientific visualization | Wikimedia, per topic | per post | 3:2 |
| Contact | EPFL HQ map | Static map / photograph | Wikimedia | "EPFL Lausanne aerial campus Lake Geneva" | 4:3 |
| Footer | CECAM wordmark light | Existing logo, white-on-navy variant | Source asset `source/images/img-07.png` (invert or recolor inline SVG) | — | wide |

### Motion
Very little. Snappy 180ms fades on link/button hover; the open-call red dot pulses with a 2-second `ease-in-out` opacity loop (60% → 100% → 60%) so the deadline draws the eye without being obnoxious. Page transitions are instant. No scroll-jacking, no parallax, no animated section reveals — the audience values fast scanning over choreography. `prefers-reduced-motion` disables the pulse and reduces fades to 0ms.

### What NOT to do
- Don't fetch stock photos of "scientists in lab coats pointing at screens" — they read as 2010 corporate and will undercut institutional credibility. Stick to architecture, scientific visualizations, and the existing event photos.
- Don't use gradients, glassmorphism, glows, or any "AI startup" visual idioms — this is a 50-year European research institution, not a SaaS launch page.
- Don't recolor or restyle the existing CECAM logo lockup (the red/navy/blue four-square mark + wordmark) — it's the brand asset the user explicitly asked to preserve; place it on Paper, never crop it, never apply effects.
- Don't let red leak outside the open-call ribbon and the live "now" indicator — once red shows up in three places it stops meaning "act now."
- Don't flatten the home page into another wall of equally-weighted cards — the rebuild's whole point is hierarchy: Flagship call > upcoming featured event > everything else.
