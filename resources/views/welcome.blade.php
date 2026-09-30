<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreshFood - Farm-Fresh Groceries Direct From Farmers &amp; Producers</title>
    <meta name="description" content="Buy farm-fresh groceries directly from local farmers, agricultural producers, and wholesale distributors at transparent farm-gate prices with FreshFood.">

    <!-- Typography: Neue Montreal alternatives (General Sans & Switzer via Fontshare) -->
    <link rel="preconnect" href="https://api.fontshare.com">
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@200,300,400,500,600,700&f[]=switzer@300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- FreshFood Design System CSS -->
    <link rel="stylesheet" href="/css/freshfood.css">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="icon" href="/favicon.ico">
</head>
<body>

    <!-- TOP ANNOUNCEMENT BAR -->
    <div class="announcement-bar">
        <span class="badge">DIRECT FROM FARMERS</span>
        <span>🌱 Free Delivery on farm grocery orders over <span class="naira">₦</span>20,000! Direct farm dispatch across Lagos, Abuja &amp; Port Harcourt.</span>
    </div>

    <!-- HEADER & HERO SECTION (COLUMN 1 PART 1) -->
    <div class="header-hero-wrapper" id="home">
        <div class="container">
            <!-- Navigation Bar -->
            <nav class="navbar">
                <a href="#home" class="brand-logo">
                    <div class="brand-logo-icon">
                        <i data-lucide="leaf" class="lucide-md"></i>
                    </div>
                    <span>FreshFood</span>
                </a>

                <ul class="nav-links">
                    <li><a href="#home" class="nav-link active">Home</a></li>
                    <li><a href="#about" class="nav-link">Our Farmers</a></li>
                    <li><a href="#menu" class="nav-link">Farm Harvest</a></li>
                    <li><a href="#deals" class="nav-link">Wholesale Deals</a></li>
                    <li><a href="#categories" class="nav-link">Aisles</a></li>
                </ul>

                <div class="nav-actions">
                    <a href="/dashboard" class="nav-link" style="font-weight: 700; color: #00A651; background: rgba(0, 166, 81, 0.15); border: 1px solid rgba(0, 166, 81, 0.4); padding: 6px 14px; border-radius: 999px; display: flex; align-items: center; gap: 6px;" title="Foodstore App Dashboard">
                        <i data-lucide="layout-dashboard" class="lucide-sm"></i>
                        <span>Dashboard</span>
                    </a>
                    <button class="cart-btn" id="openCartBtn" aria-label="Open Cart">
                        <i data-lucide="shopping-cart" class="lucide-sm"></i>
                        <span>Cart (<span id="cartCountBadge">2</span>)</span>
                    </button>
                    <a href="/login" class="login-btn">
                        <i data-lucide="log-in" class="lucide-sm" style="margin-right: 6px;"></i>
                        <span>Login</span>
                    </a>
                </div>

                <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Toggle Navigation">
                    <i data-lucide="menu" class="lucide-lg"></i>
                </button>
            </nav>

            <!-- Hero Main -->
            <section class="hero-section">
                <div class="hero-grid">
                    <!-- Left Hero Content -->
                    <div class="hero-content">
                        <div style="display:inline-flex; align-items:center; gap:8px; background: rgba(0,166,81,0.15); color: #00A651; border: 1px solid rgba(0,166,81,0.3); padding: 6px 14px; border-radius: 999px; font-size: 0.84rem; font-weight: 700; margin-bottom: 14px;">
                            <i data-lucide="sprout" class="lucide-sm"></i>
                            <span>Buy Farm-Fresh Groceries</span>
                        </div>
                        <h1 class="hero-title">Direct-from-farm produce at farm-gate prices</h1>
                        <p class="hero-subtitle">
                            Connect directly with local farmers, agricultural producers, and wholesale distributors. Order fresh vegetables, tubers, grains, eggs, and pantry staples with same-day express delivery.
                        </p>
                        <div class="hero-cta-group">
                            <a href="#menu" class="btn-primary">
                                <span>Shop Farm Harvest</span>
                                <i data-lucide="arrow-right" class="lucide-md"></i>
                            </a>
                            <a href="#deals" class="btn-secondary">
                                <span>Wholesale Hub</span>
                                <i data-lucide="package" class="lucide-sm"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right Hero Visuals -->
                    <div class="hero-visual">
                        <!-- Left Floating Testimonial Quote -->
                        <div class="quote-card">
                            <div class="quote-stars">
                                <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                            </div>
                            <div class="quote-text">
                                "Direct from the farm to our kitchen! Crisp greens, pure honey &amp; sweet plantains at real farm-gate prices."
                            </div>
                        </div>

                        <!-- Right Floating Customer Card -->
                        <div class="girl-eating-card">
                            <img src="/images/customer_girl.jpg" alt="Happy Customer Eating Fresh Food" loading="lazy">
                        </div>

                        <!-- Big Center Farm Produce Basket -->
                        <img src="/images/farm_fresh_basket.jpg" alt="Farm-Fresh Harvest Basket" class="hero-main-visual" style="max-height: 420px;">

                        <!-- Customer Avatar Counter Stack -->
                        <div class="customers-bubble">
                            <div class="avatar-stack">
                                <img src="/images/customer_girl.jpg" alt="Customer 1">
                                <div class="avatar-circle">FA</div>
                                <div class="avatar-circle">TO</div>
                                <div class="avatar-circle">+1k</div>
                            </div>
                            <div class="customers-info">
                                <span class="customers-count">1,500+ Verified Buyers</span>
                                <span class="customers-rating">
                                    <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                    <strong>4.9</strong>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Star decor -->
                <div class="star-decor">
                    <i data-lucide="sparkle" class="lucide-lg"></i>
                </div>

                <!-- Scroll down arrow -->
                <a href="#promos" class="scroll-indicator" aria-label="Scroll Down">
                    <i data-lucide="arrow-down" class="lucide-md"></i>
                </a>
            </section>
        </div>
    </div>

    <!-- PROMOTIONAL BANNERS SECTION (COLUMN 1 PART 2) -->
    <section class="promo-banners-section" id="promos">
        <div class="container">
            <div class="promo-grid">
                <!-- Left Column (Yellow Card & Green Card) -->
                <div class="promo-left-col">
                    <!-- Top Yellow Card -->
                    <div class="promo-card-yellow">
                        <div class="promo-card-text">
                            <span class="promo-tag-badge">Direct Farm Harvest</span>
                            <h3 class="promo-card-title-dark">ORGANIC GREENS •<br>CRISP VEGGIES</h3>
                            <button class="promo-btn-white" onclick="quickAddToCart('Organic Spinach &amp; Ugwu Bundle', 1200, '/images/grocery_vegetables.jpg')">
                                <span>Shop Harvest</span>
                                <i data-lucide="leaf" class="lucide-sm"></i>
                            </button>
                        </div>
                        <div class="discount-circle-yellow">
                            <span class="discount-small">Up to</span>
                            <span class="discount-big">40%</span>
                        </div>
                        <img src="/images/grocery_vegetables.jpg" alt="Farm Fresh Vegetables" class="promo-img-round">
                    </div>

                    <!-- Bottom Dark Green Card -->
                    <div class="promo-card-green">
                        <div class="promo-card-text">
                            <span class="promo-badge-super">
                                <i data-lucide="package" class="lucide-sm"></i> WHOLESALE
                            </span>
                            <h3 class="promo-card-title-light">BULK GRAINS &amp;<br>MILLER STAPLES</h3>
                            <button class="promo-btn-white" onclick="quickAddToCart('Royal Parboiled Rice 10kg', 14500, '/images/wholesale_farm_grains.jpg')">
                                <span>Shop Wholesale</span>
                                <i data-lucide="shopping-bag" class="lucide-sm"></i>
                            </button>
                        </div>
                        <div class="discount-circle-green">
                            <span class="discount-small">Up to</span>
                            <span class="discount-big">50%</span>
                        </div>
                        <img src="/images/wholesale_farm_grains.jpg" alt="Wholesale Farm Grains &amp; Staples" class="promo-img-round">
                    </div>
                </div>

                <!-- Right Column (Taller Vibrant Earthy Farm Card) -->
                <div class="promo-card-orange">
                    <div>
                        <h3 class="promo-card-title-orange">FARM TUBERS &amp;<br>PRODUCE BASKET</h3>
                        <p class="orange-card-sub">Straight from growers &amp; agricultural cooperatives</p>
                    </div>

                    <div class="discount-circle-orange">
                        <span class="discount-small">Save</span>
                        <span class="discount-big">35%</span>
                    </div>

                    <div class="exploding-burger-box">
                        <img src="/images/farm_fresh_basket.jpg" alt="Farm Fresh Harvest Basket" style="border-radius: 20px; object-fit: cover;">
                    </div>

                    <div class="orange-card-footer">
                        <div>
                            <span class="special-discount-tag">HARVEST SPECIAL • DIRECT FARM SAVINGS</span>
                        </div>
                        <button class="promo-btn-white" onclick="quickAddToCart('Farm-Fresh Harvest Basket', 4500, '/images/farm_fresh_basket.jpg')">
                            <span>Order Basket</span>
                            <i data-lucide="arrow-right" class="lucide-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR TOP PICKS SECTION -->
    <section class="top-picks-section" id="menu">
        <div class="container">
            <div class="section-header-centered">
                <h2 class="section-title">Farm-Fresh Groceries &amp; Harvest Picks</h2>
                <p class="section-subtitle">
                    Handpicked direct from farm growers and wholesale distributors. Guaranteed fresh, nutrient-rich, and priced transparently in Naira (<span class="naira">₦</span>).
                </p>
            </div>

            <!-- Filter tabs -->
            <div class="filter-pills">
                <button class="filter-pill active" onclick="filterMenu('all', this)">All Produce</button>
                <button class="filter-pill" onclick="filterMenu('veg', this)">Fresh Vegetables</button>
                <button class="filter-pill" onclick="filterMenu('staples', this)">Grains &amp; Staples</button>
                <button class="filter-pill" onclick="filterMenu('roots', this)">Tubers &amp; Roots</button>
                <button class="filter-pill" onclick="filterMenu('dairy', this)">Farm Dairy &amp; Eggs</button>
                <button class="filter-pill" onclick="filterMenu('wholesale', this)">Wholesale Bundles</button>
            </div>

            <!-- Top Picks Cards Grid with NAIRA currency -->
            <div class="top-picks-grid" id="topPicksContainer">
                <!-- Card 1: Organic Spinach & Ugwu Bundle -->
                <div class="food-card" data-category="veg">
                    <div class="food-card-header">
                        <span class="card-rating-badge">
                            <i data-lucide="star" class="lucide-sm lucide-star-fill"></i> 4.9
                        </span>
                    </div>
                    <div class="card-img-box">
                        <img src="/images/grocery_vegetables.jpg" alt="Organic Spinach &amp; Ugwu Bundle">
                    </div>
                    <h3 class="food-card-title">Organic Spinach &amp; Ugwu Bundle</h3>
                    <span class="food-card-category">Fresh Vegetables</span>
                    <div class="food-meta-row">
                        <div class="food-meta-item">
                            <i data-lucide="sprout" class="lucide-sm"></i>
                            <span>Morning Harvest</span>
                        </div>
                        <span>|</span>
                        <div class="food-meta-item">
                            <i data-lucide="shield-check" class="lucide-sm"></i>
                            <span>100% Organic</span>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <div class="food-card-price">
                            <span class="naira">₦</span>1,200
                        </div>
                        <button class="btn-add-circle" onclick="quickAddToCart('Organic Spinach &amp; Ugwu Bundle', 1200, '/images/grocery_vegetables.jpg')" title="Add to cart">
                            <i data-lucide="plus" class="lucide-md"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 2: Royal Long-Grain Parboiled Rice (10kg Bag) -->
                <div class="food-card" data-category="staples">
                    <div class="food-card-header">
                        <span class="card-rating-badge">
                            <i data-lucide="star" class="lucide-sm lucide-star-fill"></i> 4.9
                        </span>
                    </div>
                    <div class="card-img-box">
                        <img src="/images/wholesale_farm_grains.jpg" alt="Royal Long-Grain Parboiled Rice (10kg)">
                    </div>
                    <h3 class="food-card-title">Royal Parboiled Rice (10kg Bag)</h3>
                    <span class="food-card-category">Grains &amp; Staples</span>
                    <div class="food-meta-row">
                        <div class="food-meta-item">
                            <i data-lucide="package" class="lucide-sm"></i>
                            <span>Stone-Free 10kg</span>
                        </div>
                        <span>|</span>
                        <div class="food-meta-item">
                            <i data-lucide="tag" class="lucide-sm"></i>
                            <span>Wholesale Rate</span>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <div class="food-card-price">
                            <span class="naira">₦</span>14,500
                        </div>
                        <button class="btn-add-circle" onclick="quickAddToCart('Royal Parboiled Rice (10kg)', 14500, '/images/wholesale_farm_grains.jpg')" title="Add to cart">
                            <i data-lucide="plus" class="lucide-md"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 3: Fresh Farm Eggs (Crate of 30) -->
                <div class="food-card" data-category="dairy">
                    <div class="food-card-header">
                        <span class="card-rating-badge">
                            <i data-lucide="star" class="lucide-sm lucide-star-fill"></i> 4.8
                        </span>
                    </div>
                    <div class="card-img-box">
                        <img src="/images/fresh_salad.jpg" alt="Farm Fresh Eggs (Crate of 30)">
                    </div>
                    <h3 class="food-card-title">Farm Fresh Eggs (Crate of 30)</h3>
                    <span class="food-card-category">Poultry &amp; Eggs</span>
                    <div class="food-meta-row">
                        <div class="food-meta-item">
                            <i data-lucide="check-circle" class="lucide-sm"></i>
                            <span>Grade A Large</span>
                        </div>
                        <span>|</span>
                        <div class="food-meta-item">
                            <i data-lucide="truck" class="lucide-sm"></i>
                            <span>Same-Day Sourced</span>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <div class="food-card-price">
                            <span class="naira">₦</span>4,800
                        </div>
                        <button class="btn-add-circle" onclick="quickAddToCart('Farm Fresh Eggs (Crate of 30)', 4800, '/images/fresh_salad.jpg')" title="Add to cart">
                            <i data-lucide="plus" class="lucide-md"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 4: Farm-Fresh Vine Tomatoes Basket -->
                <div class="food-card" data-category="veg">
                    <div class="food-card-header">
                        <span class="card-rating-badge">
                            <i data-lucide="star" class="lucide-sm lucide-star-fill"></i> 4.9
                        </span>
                    </div>
                    <div class="card-img-box">
                        <img src="/images/farm_fresh_basket.jpg" alt="Farm-Fresh Vine Tomatoes Basket">
                    </div>
                    <h3 class="food-card-title">Fresh Vine Tomatoes Basket</h3>
                    <span class="food-card-category">Fresh Vegetables</span>
                    <div class="food-meta-row">
                        <div class="food-meta-item">
                            <i data-lucide="leaf" class="lucide-sm"></i>
                            <span>Plump &amp; Firm</span>
                        </div>
                        <span>|</span>
                        <div class="food-meta-item">
                            <i data-lucide="sparkles" class="lucide-sm"></i>
                            <span>Direct Farm Gate</span>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <div class="food-card-price">
                            <span class="naira">₦</span>4,500
                        </div>
                        <button class="btn-add-circle" onclick="quickAddToCart('Fresh Vine Tomatoes Basket', 4500, '/images/farm_fresh_basket.jpg')" title="Add to cart">
                            <i data-lucide="plus" class="lucide-md"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 5: Select Farm Yam Tubers (Pair) -->
                <div class="food-card" data-category="roots">
                    <div class="food-card-header">
                        <span class="card-rating-badge">
                            <i data-lucide="star" class="lucide-sm lucide-star-fill"></i> 4.8
                        </span>
                    </div>
                    <div class="card-img-box">
                        <img src="/images/wholesale_farm_grains.jpg" alt="Select Farm Yam Tubers (Pair)">
                    </div>
                    <h3 class="food-card-title">Select Farm Yam Tubers (Pair)</h3>
                    <span class="food-card-category">Tubers &amp; Roots</span>
                    <div class="food-meta-row">
                        <div class="food-meta-item">
                            <i data-lucide="layers" class="lucide-sm"></i>
                            <span>Large Tubers</span>
                        </div>
                        <span>|</span>
                        <div class="food-meta-item">
                            <i data-lucide="shield-check" class="lucide-sm"></i>
                            <span>Sweet White Yam</span>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <div class="food-card-price">
                            <span class="naira">₦</span>6,500
                        </div>
                        <button class="btn-add-circle" onclick="quickAddToCart('Select Farm Yam Tubers (Pair)', 6500, '/images/wholesale_farm_grains.jpg')" title="Add to cart">
                            <i data-lucide="plus" class="lucide-md"></i>
                        </button>
                    </div>
                </div>

                <!-- Card 6: Crisp Sweet Bell Peppers (Basket) -->
                <div class="food-card" data-category="veg">
                    <div class="food-card-header">
                        <span class="card-rating-badge">
                            <i data-lucide="star" class="lucide-sm lucide-star-fill"></i> 4.8
                        </span>
                    </div>
                    <div class="card-img-box">
                        <img src="/images/grocery_vegetables.jpg" alt="Crisp Sweet Bell Peppers">
                    </div>
                    <h3 class="food-card-title">Crisp Sweet Bell Peppers (Basket)</h3>
                    <span class="food-card-category">Fresh Vegetables</span>
                    <div class="food-meta-row">
                        <div class="food-meta-item">
                            <i data-lucide="sun" class="lucide-sm"></i>
                            <span>Rich in Vitamin C</span>
                        </div>
                        <span>|</span>
                        <div class="food-meta-item">
                            <i data-lucide="clock" class="lucide-sm"></i>
                            <span>Farm Crisp</span>
                        </div>
                    </div>
                    <div class="food-card-footer">
                        <div class="food-card-price">
                            <span class="naira">₦</span>3,800
                        </div>
                        <button class="btn-add-circle" onclick="quickAddToCart('Crisp Sweet Bell Peppers (Basket)', 3800, '/images/grocery_vegetables.jpg')" title="Add to cart">
                            <i data-lucide="plus" class="lucide-md"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPLORE FARM PRODUCE BY CATEGORY AISLES -->
    <section class="cuisine-category-section" id="categories">
        <div class="container">
            <div class="cuisine-category-container">
                <div class="category-header-row">
                    <h2 class="category-title">Explore Farm Produce &amp; Wholesale Aisles</h2>
                    <p class="category-subtitle">
                        Connecting households, caterers, and food businesses directly with local farmers, producers, and wholesale distributors.
                    </p>
                </div>

                <!-- Interactive Produce Platter with Floating Category Pills -->
                <div class="category-showcase-box">
                    <!-- Central Platter -->
                    <img src="/images/wholesale_farm_grains.jpg" alt="Wholesale Farm Produce Hub" class="center-platter-img" style="border-radius: 28px; object-fit: cover;">

                    <!-- Floating Pill 1: Fresh Vegetables (Top) -->
                    <div class="floating-category-card cat-pos-top" onclick="selectCategory('Fresh Vegetables')">
                        <div class="cat-icon" style="color: #00A651;">
                            <i data-lucide="leaf" class="lucide-lg"></i>
                        </div>
                        <span class="cat-name">Fresh Vegetables</span>
                        <span class="cat-count">320+ Varieties</span>
                    </div>

                    <!-- Floating Pill 2: Grains & Staples (Left Top) -->
                    <div class="floating-category-card cat-pos-left-top" onclick="selectCategory('Grains &amp; Staples')">
                        <div class="cat-icon" style="color: #f5a623;">
                            <i data-lucide="package" class="lucide-lg"></i>
                        </div>
                        <span class="cat-name">Grains &amp; Staples</span>
                        <span class="cat-count">180+ Items</span>
                    </div>

                    <!-- Floating Pill 3: Tubers & Roots (Left Bottom) -->
                    <div class="floating-category-card cat-pos-left-bottom" onclick="selectCategory('Tubers &amp; Roots')">
                        <div class="cat-icon" style="color: #10b981;">
                            <i data-lucide="layers" class="lucide-lg"></i>
                        </div>
                        <span class="cat-name">Tubers &amp; Roots</span>
                        <span class="cat-count">95+ Items</span>
                    </div>

                    <!-- Floating Pill 4: Farm Poultry & Eggs (Right Top) -->
                    <div class="floating-category-card cat-pos-right-top" onclick="selectCategory('Poultry &amp; Eggs')">
                        <div class="cat-icon" style="color: #FF4B5C;">
                            <i data-lucide="egg" class="lucide-lg"></i>
                        </div>
                        <span class="cat-name">Poultry &amp; Eggs</span>
                        <span class="cat-count">140+ Items</span>
                    </div>

                    <!-- Floating Pill 5: Cold-Pressed Oils (Right Bottom) -->
                    <div class="floating-category-card cat-pos-right-bottom" onclick="selectCategory('Pure Oils &amp; Spices')">
                        <div class="cat-icon" style="color: #eb4d2e;">
                            <i data-lucide="droplet" class="lucide-lg"></i>
                        </div>
                        <span class="cat-name">Pure Oils &amp; Spices</span>
                        <span class="cat-count">110+ Items</span>
                    </div>
                </div>

                <div class="category-footer-row">
                    <a href="/dashboard" class="btn-view-all">
                        <span>Open Grocery Dashboard</span>
                        <i data-lucide="arrow-right" class="lucide-md"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FLASH DEALS: ENDING SOON! SECTION -->
    <section class="flash-deals-section" id="deals">
        <div class="container">
            <div class="section-header-centered">
                <h2 class="section-title">Wholesale &amp; Farm Deals: Ending Soon!</h2>
                <p class="section-subtitle">
                    Direct-from-farm clearance and wholesale distributor discounts. Stock up before stock runs out!
                </p>
            </div>

            <div class="flash-deals-layout">
                <!-- Left Deals Column -->
                <div class="deals-side-col">
                    <!-- Deal 1: Fresh Vine Tomatoes Basket -->
                    <div class="deal-item-card" id="dealCard1">
                        <div class="deal-card-top">
                            <span class="discount-pill-yellow">40% OFF</span>
                            <button class="deal-heart-btn" onclick="toggleFavorite(this)" title="Save Deal">
                                <i data-lucide="heart" class="lucide-md"></i>
                            </button>
                        </div>
                        <div class="deal-item-content">
                            <img src="/images/farm_fresh_basket.jpg" alt="Fresh Vine Tomatoes Basket" class="deal-item-thumb">
                            <div class="deal-item-info">
                                <h4 class="deal-item-title">Vine Tomatoes Basket</h4>
                                <div class="deal-item-rating">
                                    <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                    <strong>4.9</strong>
                                </div>
                                <div class="deal-item-price-row">
                                    <span class="deal-current-price"><span class="naira">₦</span>4,500</span>
                                    <span class="deal-old-price"><span class="naira">₦</span>7,500</span>
                                </div>
                            </div>
                        </div>
                        <div class="deal-item-bottom">
                            <div class="deal-timer-text timer-target" data-seconds="6332">01 : 45 : 32</div>
                            <div class="deal-actions-group">
                                <div class="qty-stepper">
                                    <button class="qty-btn" onclick="adjustQty(this, -1)">
                                        <i data-lucide="minus" class="lucide-sm"></i>
                                    </button>
                                    <span class="qty-val">1</span>
                                    <button class="qty-btn" onclick="adjustQty(this, 1)">
                                        <i data-lucide="plus" class="lucide-sm"></i>
                                    </button>
                                </div>
                                <button class="btn-deal-add" onclick="addDealToCart(this, 'Vine Tomatoes Basket', 4500, '/images/farm_fresh_basket.jpg')">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Deal 2: Brown Honey Beans (Oloyin 5kg) -->
                    <div class="deal-item-card" id="dealCard2">
                        <div class="deal-card-top">
                            <span class="discount-pill-yellow">38% OFF</span>
                            <button class="deal-heart-btn" onclick="toggleFavorite(this)" title="Save Deal">
                                <i data-lucide="heart" class="lucide-md"></i>
                            </button>
                        </div>
                        <div class="deal-item-content">
                            <img src="/images/wholesale_farm_grains.jpg" alt="Brown Honey Beans (5kg)" class="deal-item-thumb">
                            <div class="deal-item-info">
                                <h4 class="deal-item-title">Brown Honey Beans (5kg)</h4>
                                <div class="deal-item-rating">
                                    <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                    <strong>4.8</strong>
                                </div>
                                <div class="deal-item-price-row">
                                    <span class="deal-current-price"><span class="naira">₦</span>5,200</span>
                                    <span class="deal-old-price"><span class="naira">₦</span>8,500</span>
                                </div>
                            </div>
                        </div>
                        <div class="deal-item-bottom">
                            <div class="deal-timer-text timer-target" data-seconds="6332">01 : 45 : 32</div>
                            <div class="deal-actions-group">
                                <div class="qty-stepper">
                                    <button class="qty-btn" onclick="adjustQty(this, -1)">
                                        <i data-lucide="minus" class="lucide-sm"></i>
                                    </button>
                                    <span class="qty-val">1</span>
                                    <button class="qty-btn" onclick="adjustQty(this, 1)">
                                        <i data-lucide="plus" class="lucide-sm"></i>
                                    </button>
                                </div>
                                <button class="btn-deal-add" onclick="addDealToCart(this, 'Brown Honey Beans (5kg)', 5200, '/images/wholesale_farm_grains.jpg')">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Center Featured Deal Showcase (Royal Long-Grain Rice Wholesale) -->
                <div class="featured-deal-center" id="featuredDeal">
                    <span class="center-deal-badge">35% OFF</span>
                    <button class="center-heart-btn" onclick="toggleFavorite(this)" title="Save Deal">
                        <i data-lucide="heart" class="lucide-md"></i>
                    </button>

                    <img src="/images/wholesale_farm_grains.jpg" alt="Royal Long Grain Rice (10kg Bag)" class="featured-center-img">

                    <div class="center-timer-box">
                        <i data-lucide="clock" class="lucide-sm"></i>
                        <span class="timer-target" data-seconds="1965">00 : 32 : 45</span>
                    </div>

                    <div class="center-stars">
                        <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                        <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                        <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                        <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                        <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                        <strong style="color:#718096; font-size:0.85rem; margin-left: 4px;">4.9</strong>
                    </div>
                    <h3 class="center-deal-title">Royal Parboiled Rice (10kg Bag)</h3>

                    <div class="center-deal-price-row">
                        <span class="center-current-price"><span class="naira">₦</span>14,500</span>
                        <span class="center-old-price"><span class="naira">₦</span>22,000</span>
                    </div>

                    <p class="center-deal-desc">
                        Direct from registered millers! Stone-free, long-grain parboiled rice at wholesale agricultural distributor pricing.
                    </p>

                    <div class="center-deal-actions">
                        <div class="qty-stepper" style="padding: 6px 12px;">
                            <button class="qty-btn" onclick="adjustQty(this, -1)">
                                <i data-lucide="minus" class="lucide-sm"></i>
                            </button>
                            <span class="qty-val">1</span>
                            <button class="qty-btn" onclick="adjustQty(this, 1)">
                                <i data-lucide="plus" class="lucide-sm"></i>
                            </button>
                        </div>
                        <button class="btn-center-add" onclick="addDealToCart(this, 'Royal Parboiled Rice (10kg)', 14500, '/images/wholesale_farm_grains.jpg')">
                            <span>Add to cart</span>
                        </button>
                    </div>
                </div>

                <!-- Right Deals Column -->
                <div class="deals-side-col">
                    <!-- Deal 3: Sweet Ripe Plantains -->
                    <div class="deal-item-card" id="dealCard3">
                        <div class="deal-card-top">
                            <span class="discount-pill-yellow">42% OFF</span>
                            <button class="deal-heart-btn" onclick="toggleFavorite(this)" title="Save Deal">
                                <i data-lucide="heart" class="lucide-md"></i>
                            </button>
                        </div>
                        <div class="deal-item-content">
                            <img src="/images/farm_fresh_basket.jpg" alt="Sweet Ripe Plantains Bunch" class="deal-item-thumb">
                            <div class="deal-item-info">
                                <h4 class="deal-item-title">Sweet Plantains (Bunch)</h4>
                                <div class="deal-item-rating">
                                    <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                    <strong>4.8</strong>
                                </div>
                                <div class="deal-item-price-row">
                                    <span class="deal-current-price"><span class="naira">₦</span>3,500</span>
                                    <span class="deal-old-price"><span class="naira">₦</span>6,000</span>
                                </div>
                            </div>
                        </div>
                        <div class="deal-item-bottom">
                            <div class="deal-timer-text timer-target" data-seconds="17713">04 : 55 : 13</div>
                            <div class="deal-actions-group">
                                <div class="qty-stepper">
                                    <button class="qty-btn" onclick="adjustQty(this, -1)">
                                        <i data-lucide="minus" class="lucide-sm"></i>
                                    </button>
                                    <span class="qty-val">1</span>
                                    <button class="qty-btn" onclick="adjustQty(this, 1)">
                                        <i data-lucide="plus" class="lucide-sm"></i>
                                    </button>
                                </div>
                                <button class="btn-deal-add" onclick="addDealToCart(this, 'Sweet Plantains (Bunch)', 3500, '/images/farm_fresh_basket.jpg')">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Deal 4: Fresh Habanero Pepper (Atarodo) -->
                    <div class="deal-item-card" id="dealCard4">
                        <div class="deal-card-top">
                            <span class="discount-pill-yellow">50% OFF</span>
                            <button class="deal-heart-btn" onclick="toggleFavorite(this)" title="Save Deal">
                                <i data-lucide="heart" class="lucide-md"></i>
                            </button>
                        </div>
                        <div class="deal-item-content">
                            <img src="/images/grocery_vegetables.jpg" alt="Fresh Habanero Peppers Atarodo" class="deal-item-thumb">
                            <div class="deal-item-info">
                                <h4 class="deal-item-title">Fresh Peppers (Atarodo 1kg)</h4>
                                <div class="deal-item-rating">
                                    <i data-lucide="star" class="lucide-sm lucide-star-fill"></i>
                                    <strong>4.9</strong>
                                </div>
                                <div class="deal-item-price-row">
                                    <span class="deal-current-price"><span class="naira">₦</span>2,200</span>
                                    <span class="deal-old-price"><span class="naira">₦</span>4,500</span>
                                </div>
                            </div>
                        </div>
                        <div class="deal-item-bottom">
                            <div class="deal-timer-text timer-target" data-seconds="8936">02 : 28 : 56</div>
                            <div class="deal-actions-group">
                                <div class="qty-stepper">
                                    <button class="qty-btn" onclick="adjustQty(this, -1)">
                                        <i data-lucide="minus" class="lucide-sm"></i>
                                    </button>
                                    <span class="qty-val">1</span>
                                    <button class="qty-btn" onclick="adjustQty(this, 1)">
                                        <i data-lucide="plus" class="lucide-sm"></i>
                                    </button>
                                </div>
                                <button class="btn-deal-add" onclick="addDealToCart(this, 'Fresh Peppers (Atarodo 1kg)', 2200, '/images/grocery_vegetables.jpg')">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MOBILE APP DOWNLOAD BANNER -->
    <section class="app-banner-section" id="reviews">
        <div class="container">
            <div class="app-banner-card">
                <div>
                    <h2 class="app-banner-title">Buy Farm-Fresh Groceries with FreshFood App</h2>
                    <p class="app-banner-sub">
                        Order farm-fresh produce in bulk or retail, track farm harvest dispatch in real time, and save up to 40% with direct farm-gate deals.
                    </p>
                    <div class="app-download-badges">
                        <a href="#download-ios" class="download-badge">
                            <div class="download-badge-icon">
                                <i data-lucide="smartphone" class="lucide-lg"></i>
                            </div>
                            <div class="download-badge-text">
                                <small>Download on</small>
                                <strong>App Store</strong>
                            </div>
                        </a>
                        <a href="#download-android" class="download-badge">
                            <div class="download-badge-icon">
                                <i data-lucide="play" class="lucide-lg"></i>
                            </div>
                            <div class="download-badge-text">
                                <small>GET IT ON</small>
                                <strong>Google Play</strong>
                            </div>
                        </a>
                    </div>
                </div>
                <div style="text-align: center;">
                    <img src="/images/farm_fresh_basket.jpg" alt="Farm Fresh Groceries" style="width: 280px; height: 280px; border-radius: 28px; object-fit: cover; margin: 0 auto; box-shadow: 0 20px 40px rgba(0,0,0,0.3);">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#home" class="brand-logo" style="margin-bottom: 8px;">
                        <div class="brand-logo-icon">
                            <i data-lucide="leaf" class="lucide-md"></i>
                        </div>
                        <span>FreshFood</span>
                    </a>
                    <p class="footer-brand-desc">
                        Your trusted agricultural foodstore platform connecting you directly with local farmers, producers, and wholesale distributors for farm-fresh groceries delivered at peak freshness.
                    </p>
                    <div style="display:flex; gap: 14px; font-size: 1.2rem; margin-top: 10px;">
                        <a href="#fb" style="color:white; text-decoration:none;"><i data-lucide="facebook" class="lucide-md"></i></a>
                        <a href="#ig" style="color:white; text-decoration:none;"><i data-lucide="instagram" class="lucide-md"></i></a>
                        <a href="#tw" style="color:white; text-decoration:none;"><i data-lucide="twitter" class="lucide-md"></i></a>
                        <a href="#yt" style="color:white; text-decoration:none;"><i data-lucide="youtube" class="lucide-md"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="footer-heading">Quick Links</h4>
                    <ul class="footer-links-list">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Our Local Farmers</a></li>
                        <li><a href="#menu">Farm Harvest Catalog</a></li>
                        <li><a href="#deals">Wholesale Deals</a></li>
                        <li><a href="#categories">Agricultural Aisles</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="footer-heading">Distribution Hubs</h4>
                    <ul class="footer-links-list">
                        <li><a href="#lagos"><i data-lucide="map-pin" class="lucide-sm" style="margin-right: 6px;"></i>Mile 12 &amp; Ketu Wholesale Hub, Lagos</a></li>
                        <li><a href="#ikeja"><i data-lucide="map-pin" class="lucide-sm" style="margin-right: 6px;"></i>Lekki &amp; Victoria Island Express Hub</a></li>
                        <li><a href="#abuja"><i data-lucide="map-pin" class="lucide-sm" style="margin-right: 6px;"></i>Dei-Dei Agricultural Market, Abuja</a></li>
                        <li><a href="#ph"><i data-lucide="map-pin" class="lucide-sm" style="margin-right: 6px;"></i>Oil Mill Wholesale Market, Port Harcourt</a></li>
                        <li><a href="#partner"><i data-lucide="store" class="lucide-sm" style="margin-right: 6px;"></i>Partner as a Farmer or Producer</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="footer-heading">Harvest Updates</h4>
                    <p style="font-size: 0.85rem; color: rgba(255,255,255,0.65);">
                        Subscribe for seasonal harvest alerts, farm gate discount rates, and wholesale drops.
                    </p>
                    <form class="footer-newsletter-form" onsubmit="event.preventDefault(); showToast('Subscribed! Welcome to the FreshFood farm network.');">
                        <input type="email" placeholder="Enter your email" class="newsletter-input" required>
                        <button type="submit" class="newsletter-btn">
                            <i data-lucide="send" class="lucide-sm"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom-bar">
                <span>&copy; 2026 FreshFood Technologies Inc. All rights reserved.</span>
                <div style="display:flex; gap: 20px;">
                    <a href="#privacy" style="color: inherit; text-decoration: none;">Privacy Policy</a>
                    <a href="#terms" style="color: inherit; text-decoration: none;">Terms of Service</a>
                    <a href="#cookies" style="color: inherit; text-decoration: none;">Farmer Standards</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE SLIDE-OUT CART DRAWER -->
    <div class="cart-drawer-overlay" id="cartOverlay"></div>
    <div class="cart-drawer" id="cartDrawer">
        <div class="cart-header">
            <h3>Your Order (<span id="cartDrawerCount">2</span> items)</h3>
            <button class="cart-close-btn" id="closeCartBtn" aria-label="Close Cart">
                <i data-lucide="x" class="lucide-md"></i>
            </button>
        </div>

        <div class="cart-items-list" id="cartItemsContainer">
            <!-- Initial item 1 -->
            <div class="cart-item" data-id="item-1">
                <img src="/images/fresh_salad.jpg" alt="Vine-Ripe Farm Tomatoes" class="cart-item-img">
                <div class="cart-item-details">
                    <h4 class="cart-item-title">Vine-Ripe Farm Tomatoes (5kg Basket)</h4>
                    <div class="cart-item-price"><span class="naira">₦</span>4,500</div>
                    <small style="color: #718096;">Qty: 1</small>
                </div>
                <button onclick="removeCartItem('item-1', 4500)" style="background:none; border:none; color:#e53e3e; cursor:pointer;" title="Remove">
                    <i data-lucide="trash-2" class="lucide-sm"></i>
                </button>
            </div>

            <!-- Initial item 2 -->
            <div class="cart-item" data-id="item-2">
                <img src="/images/wholesale_farm_grains.jpg" alt="Brown Honey Beans Oloyin" class="cart-item-img">
                <div class="cart-item-details">
                    <h4 class="cart-item-title">Brown Honey Beans Oloyin (5kg Bag)</h4>
                    <div class="cart-item-price"><span class="naira">₦</span>6,800</div>
                    <small style="color: #718096;">Qty: 1</small>
                </div>
                <button onclick="removeCartItem('item-2', 6800)" style="background:none; border:none; color:#e53e3e; cursor:pointer;" title="Remove">
                    <i data-lucide="trash-2" class="lucide-sm"></i>
                </button>
            </div>
        </div>

        <div class="cart-footer">
            <div class="cart-subtotal-row">
                <span>Subtotal:</span>
                <span id="cartSubtotalAmount"><span class="naira">₦</span>11,300</span>
            </div>
            <p style="font-size: 0.8rem; color: #718096; margin-bottom: 14px;">Direct farm logistics &amp; express delivery calculated at checkout.</p>
            <button class="btn-checkout" onclick="checkoutNow()">
                <i data-lucide="check" class="lucide-sm" style="margin-right: 6px;"></i> Proceed to Checkout
            </button>
        </div>
    </div>

    <!-- TOAST NOTIFICATION -->
    <div class="toast-notice" id="toastNotice">
        <i data-lucide="check-circle" class="lucide-md" style="color: #10b981;"></i>
        <span id="toastMessage">Item added to your cart!</span>
    </div>

    <!-- JAVASCRIPT LOGIC -->
    <script>
        // State
        let cartItems = [
            { id: 'item-1', title: 'Vine-Ripe Farm Tomatoes (5kg Basket)', price: 4500, img: '/images/fresh_salad.jpg', qty: 1 },
            { id: 'item-2', title: 'Brown Honey Beans Oloyin (5kg Bag)', price: 6800, img: '/images/wholesale_farm_grains.jpg', qty: 1 }
        ];

        // Quantity Adjuster
        function adjustQty(btn, change) {
            const stepper = btn.closest('.qty-stepper');
            const valSpan = stepper.querySelector('.qty-val');
            let current = parseInt(valSpan.textContent) || 1;
            current += change;
            if (current < 1) current = 1;
            valSpan.textContent = current;
        }

        // Add deal to cart with quantity
        function addDealToCart(btn, title, price, img) {
            const card = btn.closest('.deal-item-card, .featured-deal-center');
            let qty = 1;
            if (card) {
                const qtyVal = card.querySelector('.qty-val');
                if (qtyVal) qty = parseInt(qtyVal.textContent) || 1;
            }
            addItemToCart(title, price, img, qty);
        }

        // Quick add to cart
        function quickAddToCart(title, price, img) {
            addItemToCart(title, price, img, 1);
        }

        function addItemToCart(title, price, img, qty) {
            const existing = cartItems.find(item => item.title === title);
            if (existing) {
                existing.qty += qty;
            } else {
                cartItems.push({
                    id: 'item-' + Date.now(),
                    title: title,
                    price: price,
                    img: img,
                    qty: qty
                });
            }
            updateCartUI();
            showToast(`Added ${qty}x ${title} to cart!`);
        }

        function removeCartItem(id, price) {
            cartItems = cartItems.filter(item => item.id !== id);
            updateCartUI();
            showToast('Item removed from cart');
        }

        function updateCartUI() {
            const totalCount = cartItems.reduce((acc, item) => acc + item.qty, 0);
            const subtotal = cartItems.reduce((acc, item) => acc + (item.price * item.qty), 0);

            document.getElementById('cartCountBadge').textContent = totalCount;
            document.getElementById('cartDrawerCount').textContent = totalCount;
            document.getElementById('cartSubtotalAmount').innerHTML = `<span class="naira">₦</span>${subtotal.toFixed(2)}`;

            const container = document.getElementById('cartItemsContainer');
            if (cartItems.length === 0) {
                container.innerHTML = `<div style="text-align:center; padding: 40px 10px; color:#718096;">Your cart is empty.<br>Start adding delicious dishes!</div>`;
                return;
            }

            container.innerHTML = cartItems.map(item => `
                <div class="cart-item" data-id="${item.id}">
                    <img src="${item.img}" alt="${item.title}" class="cart-item-img">
                    <div class="cart-item-details">
                        <h4 class="cart-item-title">${item.title}</h4>
                        <div class="cart-item-price"><span class="naira">₦</span>${(item.price * item.qty).toFixed(2)}</div>
                        <small style="color: #718096;">Qty: ${item.qty} (${item.price.toFixed(2)} each)</small>
                    </div>
                    <button onclick="removeCartItem('${item.id}', ${item.price})" style="background:none; border:none; color:#e53e3e; cursor:pointer;" title="Remove">
                        <i data-lucide="trash-2" class="lucide-sm"></i>
                    </button>
                </div>
            `).join('');

            // Re-render Lucide icons for dynamically added cart items
            if (window.lucide) {
                lucide.createIcons();
            }
        }

        // Cart Drawer Opening/Closing
        const cartDrawer = document.getElementById('cartDrawer');
        const cartOverlay = document.getElementById('cartOverlay');
        const openCartBtn = document.getElementById('openCartBtn');
        const closeCartBtn = document.getElementById('closeCartBtn');

        openCartBtn.addEventListener('click', () => {
            cartDrawer.classList.add('active');
            cartOverlay.classList.add('active');
        });

        closeCartBtn.addEventListener('click', () => {
            cartDrawer.classList.remove('active');
            cartOverlay.classList.remove('active');
        });

        cartOverlay.addEventListener('click', () => {
            cartDrawer.classList.remove('active');
            cartOverlay.classList.remove('active');
        });

        // Toast feedback
        function showToast(msg) {
            const toast = document.getElementById('toastNotice');
            document.getElementById('toastMessage').textContent = msg;
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Filter Top Picks
        function filterMenu(cat, btn) {
            document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const cards = document.querySelectorAll('#topPicksContainer .food-card');
            cards.forEach(card => {
                if (cat === 'all' || card.getAttribute('data-category') === cat) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Category selection
        function selectCategory(name) {
            showToast(`Browsing ${name}...`);
            const menuSection = document.getElementById('menu');
            if (menuSection) menuSection.scrollIntoView({ behavior: 'smooth' });
        }

        // Heart favorite toggle
        function toggleFavorite(btn) {
            const icon = btn.querySelector('svg, i');
            if (btn.classList.contains('active-fav')) {
                btn.classList.remove('active-fav');
                btn.style.color = '#cbd5e0';
            } else {
                btn.classList.add('active-fav');
                btn.style.color = '#e53e3e';
                showToast('Saved to your favorites!');
            }
        }

        // Countdown Timer Logic
        function startTimers() {
            const timerElements = document.querySelectorAll('.timer-target');
            setInterval(() => {
                timerElements.forEach(el => {
                    let totalSecs = parseInt(el.getAttribute('data-seconds')) || 0;
                    if (totalSecs > 0) {
                        totalSecs--;
                        el.setAttribute('data-seconds', totalSecs);

                        const hours = Math.floor(totalSecs / 3600);
                        const mins = Math.floor((totalSecs % 3600) / 60);
                        const secs = totalSecs % 60;

                        const format = (n) => String(n).padStart(2, '0');
                        el.textContent = `${format(hours)} : ${format(mins)} : ${format(secs)}`;
                    }
                });
            }, 1000);
        }

        function checkoutNow() {
            showToast('Redirecting to secure FreshFood Checkout...');
        }

        // Initialize Lucide icons & Timers
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) {
                lucide.createIcons();
            }
            startTimers();
        });
    </script>
</body>
</html>
