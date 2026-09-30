# FreshFood — Project Summary & Architecture Reference

> **Core Brand Statement:**  
> *"Buy Farm-Fresh Groceries: Direct-from-farm produce directly from farmers, producers, and wholesale distributors."*

---

## 1. Project Overview & Business Model

**FreshFood** is a modern Nigerian farm-fresh grocery and agricultural wholesale e-commerce platform. It connects everyday households, caterers, and food businesses directly with farmers, millers, and verified agricultural cooperatives.

### Key Tenets:
- **100% Direct-from-Farm Produce:** No cooked restaurant meals, gourmet burgers, fast food, or pizzas. The catalog consists entirely of raw produce, grains, tubers, farm eggs, pure oils, and natural refreshers.
- **True Farm-Gate Pricing:** Transparent pricing with direct cost savings bypassing open-market middlemen.
- **Authentic Nigerian Marketplace:**
  - Currency: Nigerian Naira (`₦`).
  - Major Wholesale Terminals: Mile 12 Market (Lagos), Dei-Dei Market (Abuja), and Oil Mill Market (Port Harcourt).
  - Authentic goods: Yam Tubers, Brown Honey Beans (Oloyin), Royal Parboiled Rice, Fresh Atarodo (Habanero), White Garri Ijebu, Pure Nsukka Virgin Palm Oil, and Grade-A Farm Eggs.

---

## 2. Design System & Brand Palette

The user interface follows a modern aesthetic built with custom CSS and typography:

| Token | Hex Code | Description & Usage |
| :--- | :--- | :--- |
| **Primary Green** | `#00A651` | Brand identity, primary CTAs, active highlights, success tags |
| **Coral Accent** | `#FF4B5C` | Discount badges, promo tags, flash sale chips, urgency triggers |
| **Brand Black** | `#0A0A0A` | Dark contrast surfaces, footer backgrounds, bold hero banners |
| **Pale Green Tint** | `#E7F8ED` | Soft section backgrounds, active rows, badge backgrounds |
| **Neutral Gray** | `#9CA3AF` | Secondary borders, muted body text, placeholder states |

- **Typography:** Free Fontshare alternatives to Neue Montreal:
  - **General Sans** (Weights: 400, 500, 600, 700) — Primary UI headings & typography.
  - **Switzer** (Weights: 500, 600, 700, 800) — Subheadings, numbers & badge labels.
  - Fallbacks: DM Sans & Poppins via Google Fonts.
- **Icons:** Lucide Icons (`data-lucide` SVG engine).

---

## 3. Architecture & File Structure

The project maintains **100% symmetrical parity** between static HTML prototypes (`public/`) and dynamic Laravel Blade views (`resources/views/`):

```
foodstore/
├── public/
│   ├── index.html                   # Static Landing / Home Page prototype
│   ├── login.html                   # Static Customer Login prototype
│   ├── register.html                # Static Customer Sign Up prototype
│   ├── dashboard.html               # Static Full-Featured Dashboard prototype
│   ├── css/
│   │   ├── freshfood.css            # Stylesheet for Home and Auth pages
│   │   └── dashboard.css            # Stylesheet for Web Dashboard
│   └── images/
│       ├── farm_fresh_basket.jpg    # Direct farm harvest basket asset (generated)
│       ├── wholesale_farm_grains.jpg# Warehouse bulk grains & tubers asset (generated)
│       ├── grocery_grains.jpg       # Rice, beans, and grains
│       ├── grocery_vegetables.jpg   # Fresh greens and peppers
│       ├── grocery_snacks.jpg       # Pantry items and dried snacks
│       ├── grocery_drinks.jpg       # Cold-pressed juices and smoothies
│       └── fresh_salad.jpg          # Salad produce and farm eggs
├── resources/views/
│   ├── welcome.blade.php            # Laravel Home / Landing View
│   ├── dashboard.blade.php          # Laravel Authenticated Dashboard View
│   └── auth/
│       ├── login.blade.php          # Laravel Login View
│       └── register.blade.php       # Laravel Registration View
└── SUMMARY.md                       # This architecture & progress guide
```

---

## 4. Completed Page Details

### A. Home / Landing Page (`public/index.html` & `resources/views/welcome.blade.php`)
- **Top Announcement Bar:** Free direct-farm delivery on bulk orders over `₦20,000` across Lagos and Ogun distribution hubs.
- **Hero Section:**
  - Headline: *"Buy Farm-Fresh Groceries Direct From Farmers & Wholesale Distributors"*.
  - Subhead emphasizing direct farm-gate prices, eliminating middlemen markups.
  - High-res hero imagery featuring [`farm_fresh_basket.jpg`](file:///c:/projects/foodstore/public/images/farm_fresh_basket.jpg).
  - Trust statistics: 12,000+ happy households, 99.4% freshness rate, 250+ certified local farms.
- **Triple Promo Banner Cards:**
  - Card 1: *Organic Greens & Crisp Veggies* (40% OFF).
  - Card 2: *Direct-From-Millers Bulk Grains* (50% OFF).
  - Card 3: *Direct Farm Produce Basket* (35% OFF).
- **Farm Produce & Wholesale Aisles:**
  - Vegetables & Farm Greens, Grains & Staples, Tubers & Roots, Poultry & Farm Eggs, Pure Oils & Condiments.
- **Top Picks Catalog:**
  - 6 core direct-harvest products priced in Naira (`₦2,200` to `₦6,800`).
- **Wholesale Clearance & Flash Harvest Deals:**
  - Interactive timer countdown, quantity steppers, and quick-add actions.
- **Slide-out Cart Drawer:**
  - Preloaded with *Vine-Ripe Farm Tomatoes (5kg)* (`₦4,500`) and *Brown Honey Beans Oloyin (5kg)* (`₦6,800`) totaling `₦11,300`.
- **Footer:**
  - Local sourcing partners, supply terminals (Mile 12, Dei-Dei, Oil Mill), and CTA to *"Partner as a Farmer or Producer"*.

### B. Customer Login (`public/login.html` & `resources/views/auth/login.blade.php`)
- **Left Hero Panel:**
  - Highlight card featuring the **Farm-Fresh Harvest Basket** (`₦4,500`).
  - Key bullets: Direct farm sourcing, wholesale bulk deals, same-day refrigerated dispatch.
- **Right Form Panel:**
  - Clean floating inputs for Email/Phone and Password.
  - Remember me toggle, demo quick-fill helper (`amina@freshfood.ng`), and social OAuth buttons.

### C. Customer Registration (`public/register.html` & `resources/views/auth/register.blade.php`)
- **Left Hero Panel:**
  - Highlight card featuring **Wholesale Harvest Staples** (`₦5,500`).
  - Key bullets: First order 20% discount (`FARM20`), verified cooperative supply, flexible delivery windows.
- **Right Form Panel:**
  - Full Name, Email, Phone Number, Password, and Terms acceptance.
  - Quick link to log in.

### D. App Dashboard (`public/dashboard.html` & `resources/views/dashboard.blade.php`)
- **Navigation & Slide-over Sidebar:**
  - Direct aisles: *Grains & Staples*, *Fresh Vegetables*, *Pantry & Snacks*, *Drinks & Juices*, and *Tubers & Roots* (replacing obsolete chef meal links).
  - Quick filter collections: Flash Deals, Certified Organic, and Top Rated.
- **Interactive Carousel:**
  - Slide 1: Farm Harvest Produce (`HARVEST20` - 20% OFF).
  - Slide 2: Certified Organic Greens (`ORGANIC25` - 25% OFF).
  - Slide 3: Direct-from-Millers & Wholesale Farm Staples (`WHOLESALE25` - 25% OFF) with [`wholesale_farm_grains.jpg`](file:///c:/projects/foodstore/public/images/wholesale_farm_grains.jpg).
- **Category Chips Bar:**
  - All Products, Grains & Staples, Vegetables, Snacks & Bites, Drinks & Juices, and Tubers & Roots.
- **Full Products Dataset (`productsData` in JavaScript):**
  - **Grains:** Royal Parboiled Rice (10kg & 50kg), Brown Honey Beans Oloyin, White Garri Ijebu.
  - **Vegetables:** Farm Spinach & Ugwu, Vine-Ripe Tomatoes (5kg), Crisp Cucumbers, Fresh Habanero Pepper (Atarodo 1kg).
  - **Pantry & Poultry:** Spiced Plantain & Cashew Mix, Salted Almonds, Cold-Pressed Virgin Palm Oil (2L), Farm Fresh Large Eggs (Crate of 30).
  - **Drinks:** Citrus Immunity Booster, Mango Smoothie, Green Detox Elixir, Hibiscus Zobo Cooler.
  - **Tubers & Roots:** Premium Selected Yam Tubers (Pair), Sweet Ripe Farm Plantains (Bunch), Fresh Farm Sweet Potatoes (5kg Sack), White Garri Ijebu (10kg Sack).
- **Client-Side State Engine:**
  - Dynamic filtering by search query, category, and sorting (price low-high, price high-low, rating).
  - Live Cart drawer with quantity controls, subtotal calculation, coupon redemption (`HARVEST20`, `WHOLESALE25`, `ORGANIC25`), and delivery address selector.
  - Quick view modal with full product specifications and farm sourcing info.

---

## 5. Git Status & Remote Setup

- **Local Branch:** `main`
- **Remote URL:** `https://github.com/nduchecp/foodstore`
- **Committed Changes:**
  - Commit `cb75c8f`: *"Align entire website across home, auth, and dashboard with farm-fresh grocery and wholesale produce model"*
  - 11 files modified, 713 insertions, 702 deletions.
  - Working directory clean.

### To push your work to GitHub:
```bash
git push origin main
```
*(If authentication is required, use your GitHub Personal Access Token or standard git credentials).*

---

## 6. How to Run Locally

### 1. Static HTML Preview:
Open any of the static prototypes directly in your browser:
- `public/index.html` (Landing)
- `public/login.html` (Login)
- `public/register.html` (Sign Up)
- `public/dashboard.html` (Dashboard)

### 2. Laravel Dynamic Application:
Ensure PHP and Composer are configured, then run:
```bash
php artisan serve
```
Visit: `http://localhost:8000`
