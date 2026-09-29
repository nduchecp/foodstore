<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FreshFood - Grocery &amp; Food Delivery Dashboard</title>
    <meta name="description" content="Shop fresh organic grains, vegetables, healthy snacks, cold-pressed juices and chef meals with 30-min express delivery on FreshFood.">

    <!-- Typography: Neue Montreal alternatives (General Sans & Switzer via Fontshare) -->
    <link rel="preconnect" href="https://api.fontshare.com">
    <link href="https://api.fontshare.com/v2/css?f[]=general-sans@200,300,400,500,600,700&f[]=switzer@300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- FreshFood & Responsive Dashboard Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body class="dashboard-body">

    <!-- 1. SLIDE-OVER NAVIGATION SIDEBAR -->
    <div class="dash-sidebar-overlay" id="sidebarOverlay" onclick="closeSidebar(event)">
        <aside class="dash-sidebar" onclick="event.stopPropagation()">
            <div class="sidebar-header">
                <div style="display:flex; align-items:center; gap: 10px;">
                    <div class="dash-brand-icon" style="width:34px; height:34px;">
                        <i data-lucide="leaf" class="lucide-sm"></i>
                    </div>
                    <div>
                        <span style="font-weight:800; font-size:1.15rem; font-family:var(--font-heading); display:block; line-height:1.2;">FreshFood</span>
                        <span style="font-size:0.7rem; color:#a7f3d0; font-weight:600; text-transform:uppercase; letter-spacing:0.5px;">Navigation Menu</span>
                    </div>
                </div>
                <button class="sidebar-close-btn" onclick="closeSidebar()" title="Close menu">
                    <i data-lucide="x" class="lucide-sm"></i>
                </button>
            </div>

            <div class="sidebar-user-box">
                <img src="{{ asset('images/customer_girl.jpg') }}" alt="Amina Bello" class="sidebar-avatar">
                <div style="flex:1;">
                    <h4 style="font-size:0.92rem; font-weight:700; color:#1e293b; margin:0;">Amina Bello</h4>
                    <p style="font-size:0.75rem; color:#10b981; font-weight:600; margin:0;">Gold Member • Victoria Island</p>
                </div>
                <span class="sidebar-quick-badge">Online</span>
            </div>

            <!-- Sidebar Search Filter for Aisles -->
            <div class="sidebar-search-box">
                <i data-lucide="search" style="width:15px; height:15px; color:#94a3b8; flex-shrink:0;"></i>
                <input type="text" 
                       id="sidebarSearchInput" 
                       placeholder="Filter aisles &amp; sections..." 
                       oninput="filterSidebarAisles(event)"
                       autocomplete="off">
            </div>

            <nav class="sidebar-nav-list" id="sidebarNavList">
                <div class="sidebar-section-label">
                    <span>Store Aisles</span>
                    <span style="font-size:0.65rem; color:#10b981; font-weight:700;">6 AISLES</span>
                </div>

                <div class="sidebar-nav-item active" onclick="sidebarFilter('all')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="store" class="lucide-sm"></i>
                        <span>All Products</span>
                    </div>
                    <span class="sidebar-badge">16</span>
                </div>

                <div class="sidebar-nav-item" onclick="sidebarFilter('grains')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="wheat" class="lucide-sm"></i>
                        <span>Grains &amp; Staples</span>
                    </div>
                    <span class="sidebar-badge">4</span>
                </div>

                <div class="sidebar-nav-item" onclick="sidebarFilter('vegetables')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="carrot" class="lucide-sm"></i>
                        <span>Fresh Vegetables</span>
                    </div>
                    <span class="sidebar-badge">4</span>
                </div>

                <div class="sidebar-nav-item" onclick="sidebarFilter('snacks')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="cookie" class="lucide-sm"></i>
                        <span>Snacks &amp; Bites</span>
                    </div>
                    <span class="sidebar-badge">4</span>
                </div>

                <div class="sidebar-nav-item" onclick="sidebarFilter('drinks')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="cup-soda" class="lucide-sm"></i>
                        <span>Drinks &amp; Juices</span>
                    </div>
                    <span class="sidebar-badge">4</span>
                </div>

                <div class="sidebar-nav-item" onclick="sidebarFilter('meals')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="utensils" class="lucide-sm"></i>
                        <span>Chef Prepared Meals</span>
                    </div>
                    <span class="sidebar-badge">4</span>
                </div>

                <div class="sidebar-section-label" style="margin-top:10px;">
                    <span>Curated Collections</span>
                </div>

                <div class="sidebar-nav-item" onclick="sidebarFilterQuick('deals')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="flame" class="lucide-sm" style="color:#ef4444;"></i>
                        <span>Flash Deals &amp; Discounts</span>
                    </div>
                    <span class="sidebar-badge" style="background:#fee2e2; color:#ef4444; font-weight:800;">-30%</span>
                </div>

                <div class="sidebar-nav-item" onclick="sidebarFilterQuick('organic')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="sprout" class="lucide-sm" style="color:#10b981;"></i>
                        <span>100% Certified Organic</span>
                    </div>
                    <span class="sidebar-badge" style="background:#ecfdf5; color:#059669; font-weight:800;">Fresh</span>
                </div>

                <div class="sidebar-nav-item" onclick="sidebarFilterQuick('top')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="star" class="lucide-sm" style="color:#f59e0b;"></i>
                        <span>Top Rated Items</span>
                    </div>
                    <span class="sidebar-badge" style="background:#fef3c7; color:#d97706; font-weight:800;">★ 4.8+</span>
                </div>

                <div class="sidebar-section-label" style="margin-top:10px;">
                    <span>My Account &amp; Delivery</span>
                </div>

                <div class="sidebar-nav-item" onclick="openLocationModal(); closeSidebar();">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="map-pin" class="lucide-sm"></i>
                        <span>Delivery Addresses</span>
                    </div>
                    <span style="font-size:0.75rem; color:#64748b; font-weight:600;">Victoria Island</span>
                </div>

                <div class="sidebar-nav-item" onclick="openNotificationsModal(); closeSidebar();">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="bell" class="lucide-sm"></i>
                        <span>Notifications</span>
                    </div>
                    <span class="sidebar-badge" style="background:#fee2e2; color:#ef4444;">3 new</span>
                </div>

                <div class="sidebar-nav-item" onclick="showToast('Customer Support: +234 800-FRESHFOOD')">
                    <div class="sidebar-nav-item-left">
                        <i data-lucide="headphones" class="lucide-sm"></i>
                        <span>Help &amp; Support</span>
                    </div>
                </div>
            </nav>

            <div class="sidebar-footer">
                <a href="/login" style="display:flex; align-items:center; gap:8px; color:#ef4444; font-size:0.85rem; font-weight:700; text-decoration:none;">
                    <i data-lucide="log-out" class="lucide-sm"></i>
                    <span>Log Out</span>
                </a>
                <span style="font-size:0.72rem; color:#94a3b8; font-weight:600;">FreshFood v2.4</span>
            </div>
        </aside>
    </div>

    <!-- 2. TOP RESPONSIVE DESKTOP NAVBAR -->
    <nav class="dash-navbar">
        <div class="dash-navbar-container">
            <!-- Nav Left: Menu Toggle, Brand & Breadcrumbs with Sidebar Access -->
            <div class="dash-nav-left">
                <button class="dash-menu-toggle-btn" onclick="openSidebar()" aria-label="Toggle Navigation Menu" title="Open Navigation Menu">
                    <i data-lucide="menu" class="lucide-md"></i>
                </button>

                <a href="/" class="dash-brand">
                    <div class="dash-brand-icon">
                        <i data-lucide="leaf" class="lucide-md"></i>
                    </div>
                    <span>FreshFood</span>
                </a>

                <!-- Left Breadcrumbs with Interactive Sidebar Navigation Trigger -->
                <nav class="dash-breadcrumbs" aria-label="Breadcrumb navigation">
                    <a href="/" class="breadcrumb-link home-link" title="Go to Home">
                        <i data-lucide="home" style="width:13px; height:13px;"></i>
                        <span>Home</span>
                    </a>
                    <span class="breadcrumb-sep"><i data-lucide="chevron-right"></i></span>
                    <a href="/dashboard" class="breadcrumb-link" title="Store Dashboard">
                        <span>Store</span>
                    </a>
                    <span class="breadcrumb-sep"><i data-lucide="chevron-right"></i></span>
                    <button type="button" class="breadcrumb-sidebar-trigger" onclick="openSidebar()" title="Click to browse aisles in sidebar navigation">
                        <i data-lucide="store" class="breadcrumb-category-icon" id="breadcrumbIcon"></i>
                        <span id="breadcrumbCategory">All Products</span>
                        <i data-lucide="chevron-down" class="breadcrumb-caret"></i>
                        <span class="breadcrumb-pill-tag">
                            <i data-lucide="panel-left" style="width:10px; height:10px;"></i>
                            <span>Aisles</span>
                        </span>
                    </button>
                </nav>
            </div>

            <!-- Location Selector -->
            <button class="dash-location-btn" onclick="openLocationModal()" title="Change delivery location">
                <div class="dash-location-icon">
                    <i data-lucide="map-pin" style="width:16px; height:16px;"></i>
                </div>
                <div class="dash-location-texts">
                    <span class="dash-location-label">Deliver to</span>
                    <span class="dash-location-value">
                        <span id="currentAddressText">Victoria Island, Lagos</span>
                        <i data-lucide="chevron-down" style="width:14px; height:14px;"></i>
                    </span>
                </div>
            </button>

            <!-- Search Bar -->
            <div class="dash-nav-search">
                <div class="dash-search-box">
                    <i data-lucide="search" class="dash-search-icon lucide-md"></i>
                    <input type="text" 
                           id="productSearchInput" 
                           class="dash-search-input" 
                           placeholder="Search fresh grains, vegetables, snacks, drinks..." 
                           oninput="handleSearchInput(event)"
                           autocomplete="off">
                    <div class="dash-search-actions">
                        <button class="search-clear-btn" id="searchClearBtn" onclick="clearSearch()" title="Clear search">
                            <i data-lucide="x" class="lucide-sm"></i>
                        </button>
                        <button class="search-mic-btn" onclick="simulateVoiceSearch()" title="Voice search">
                            <i data-lucide="mic" class="lucide-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Nav Actions: Notifications, Cart Pill, Profile -->
            <div class="dash-nav-actions">
                <button class="dash-nav-btn" onclick="openNotificationsModal()" aria-label="Notifications" title="Notifications">
                    <i data-lucide="bell" class="lucide-md"></i>
                    <span class="badge-counter" id="unreadNotifBadge" style="position:absolute; top:-4px; right:-4px;">3</span>
                </button>

                <button class="dash-cart-pill-btn" onclick="openCartDrawer()" title="View Basket">
                    <i data-lucide="shopping-bag" class="lucide-sm"></i>
                    <span>Basket</span>
                    <span class="badge-counter" id="cartBadgeCount">0</span>
                </button>

                <div class="user-profile-btn" onclick="openProfileModal()" title="View Profile">
                    <img src="{{ asset('images/customer_girl.jpg') }}" alt="Amina Bello" class="user-profile-avatar">
                    <span class="user-profile-name">Amina B.</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- 3. MAIN DASHBOARD WRAPPER -->
    <main class="dash-main-container">

        <!-- HERO SECTION: 3-SLIDE PERIODIC ROTATING CAROUSEL -->
        <section class="dash-hero-section" id="heroBannerCarousel" onmouseenter="pauseBannerAutoplay()" onmouseleave="startBannerAutoplay()">
            <div class="banner-carousel-wrapper">
                <div class="banner-slides-container">
                    
                    <!-- Slide 1: Express Grocery & 40% OFF -->
                    <div class="banner-slide active" data-slide="0">
                        <img src="{{ asset('images/delivery_banner.jpg') }}" alt="Express Grocery Delivery" class="banner-slide-image">
                        <div class="banner-slide-overlay">
                            <div class="promo-tag-row">
                                <span class="promo-badge-tag">Flash Promo</span>
                                <span class="promo-countdown">
                                    <i data-lucide="clock" class="lucide-sm"></i>
                                    <span id="countdownTimer">Ends in 02:45:18</span>
                                </span>
                            </div>
                            <h2 class="promo-heading">Get 40% OFF your fresh weekly groceries!</h2>
                            <p class="promo-subtext">Express 30-min doorstep delivery across Lagos &amp; Abuja with insulated cold packs.</p>
                            <div class="promo-code-box">
                                <span class="coupon-code-chip">FRESH40</span>
                                <button class="apply-coupon-btn" onclick="copyAndApplyPromo('FRESH40')">
                                    <i data-lucide="check" class="lucide-sm" style="display:none;" id="couponCheckIcon"></i>
                                    <span>Copy &amp; Apply</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: 100% Organic Farm Harvest -->
                    <div class="banner-slide" data-slide="1">
                        <img src="{{ asset('images/organic_banner.jpg') }}" alt="Organic Farm Produce" class="banner-slide-image">
                        <div class="banner-slide-overlay">
                            <div class="promo-tag-row">
                                <span class="promo-badge-tag tag-green">100% Organic</span>
                                <span class="promo-countdown" style="color: #a7f3d0;">
                                    <i data-lucide="sprout" class="lucide-sm"></i>
                                    <span>Farm-to-Doorstep Harvest</span>
                                </span>
                            </div>
                            <h2 class="promo-heading">Fresh Farm Greens, Crisp Veggies &amp; Fruits!</h2>
                            <p class="promo-subtext">Hand-picked daily from certified organic farms with zero chemical pesticides.</p>
                            <div class="promo-code-box">
                                <span class="coupon-code-chip">ORGANIC25</span>
                                <button class="apply-coupon-btn" onclick="copyAndApplyPromo('ORGANIC25')">
                                    <i data-lucide="check" class="lucide-sm" style="display:none;"></i>
                                    <span>Get 25% OFF</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Gourmet Artisanal Feast -->
                    <div class="banner-slide" data-slide="2">
                        <img src="{{ asset('images/gourmet_banner.jpg') }}" alt="Artisan Chef Meals" class="banner-slide-image">
                        <div class="banner-slide-overlay">
                            <div class="promo-tag-row">
                                <span class="promo-badge-tag tag-orange">Chef Specials</span>
                                <span class="promo-countdown" style="color: #fed7aa;">
                                    <i data-lucide="flame" class="lucide-sm"></i>
                                    <span>Hot &amp; Sizzling Feast</span>
                                </span>
                            </div>
                            <h2 class="promo-heading">Artisanal Wood-Fired Pizzas &amp; Gourmet Burgers!</h2>
                            <p class="promo-subtext">Mouth-watering meals crafted by master chefs, delivered piping hot in record time.</p>
                            <div class="promo-code-box">
                                <span class="coupon-code-chip">FEAST30</span>
                                <button class="apply-coupon-btn" onclick="copyAndApplyPromo('FEAST30')">
                                    <i data-lucide="check" class="lucide-sm" style="display:none;"></i>
                                    <span>Get 30% OFF</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Carousel Arrows -->
                <button class="banner-arrow-btn banner-arrow-prev" onclick="prevBannerSlide()" aria-label="Previous Banner" title="Previous Banner">
                    <i data-lucide="chevron-left" class="lucide-md"></i>
                </button>
                <button class="banner-arrow-btn banner-arrow-next" onclick="nextBannerSlide()" aria-label="Next Banner" title="Next Banner">
                    <i data-lucide="chevron-right" class="lucide-md"></i>
                </button>

                <!-- Indicator Dots -->
                <div class="banner-dots-container" id="bannerDotsContainer">
                    <span class="banner-dot active" onclick="goToBannerSlide(0)"></span>
                    <span class="banner-dot" onclick="goToBannerSlide(1)"></span>
                    <span class="banner-dot" onclick="goToBannerSlide(2)"></span>
                </div>
            </div>
        </section>

        <!-- CATEGORY CHIPS BAR -->
        <section class="category-section">
            <div class="section-header-flex">
                <div>
                    <h3 class="section-title">Shop by Category</h3>
                    <p style="font-size: 0.82rem; color: #64748b; margin-top: 2px;">Fresh farm harvests, pantry staples, and chef-curated goods</p>
                </div>
                <span class="section-action-link" style="cursor:pointer; font-weight:700; color:#118150; font-size:0.85rem;" onclick="filterCategory('all')">View All</span>
            </div>

            <div class="category-chips-track" id="categoryChipsTrack">
                <!-- All -->
                <div class="category-chip active" data-category="all" onclick="filterCategory('all')">
                    <div class="chip-icon-box">
                        <i data-lucide="layout-grid" class="lucide-sm"></i>
                    </div>
                    <div class="chip-info">
                        <span class="chip-name">All Products</span>
                        <span class="chip-count" id="countAll">16 items</span>
                    </div>
                </div>

                <!-- Grains -->
                <div class="category-chip" data-category="grains" onclick="filterCategory('grains')">
                    <img src="{{ asset('images/grocery_grains.jpg') }}" alt="Grains & Staples" class="chip-thumb">
                    <div class="chip-info">
                        <span class="chip-name">Grains &amp; Staples</span>
                        <span class="chip-count">4 items</span>
                    </div>
                </div>

                <!-- Vegetables -->
                <div class="category-chip" data-category="vegetables" onclick="filterCategory('vegetables')">
                    <img src="{{ asset('images/grocery_vegetables.jpg') }}" alt="Fresh Vegetables" class="chip-thumb">
                    <div class="chip-info">
                        <span class="chip-name">Vegetables</span>
                        <span class="chip-count">4 items</span>
                    </div>
                </div>

                <!-- Snacks -->
                <div class="category-chip" data-category="snacks" onclick="filterCategory('snacks')">
                    <img src="{{ asset('images/grocery_snacks.jpg') }}" alt="Snacks & Bites" class="chip-thumb">
                    <div class="chip-info">
                        <span class="chip-name">Snacks &amp; Bites</span>
                        <span class="chip-count">4 items</span>
                    </div>
                </div>

                <!-- Drinks -->
                <div class="category-chip" data-category="drinks" onclick="filterCategory('drinks')">
                    <img src="{{ asset('images/grocery_drinks.jpg') }}" alt="Drinks & Juices" class="chip-thumb">
                    <div class="chip-info">
                        <span class="chip-name">Drinks &amp; Juices</span>
                        <span class="chip-count">4 items</span>
                    </div>
                </div>

                <!-- Gourmet Prepared Meals -->
                <div class="category-chip" data-category="meals" onclick="filterCategory('meals')">
                    <img src="{{ asset('images/delicious_pizza_slice.jpg') }}" alt="Chef Prepared Meals" class="chip-thumb">
                    <div class="chip-info">
                        <span class="chip-name">Chef Meals</span>
                        <span class="chip-count">4 items</span>
                    </div>
                </div>
            </div>

        </section>

        <!-- PRODUCT GRID SECTION -->
        <section class="products-section">
            <div class="section-header-flex">
                <div>
                    <h3 class="section-title" id="productSectionTitle">All Food Products</h3>
                    <p style="font-size: 0.82rem; color: #64748b;" id="resultsSummaryText">Showing 16 fresh grocery picks</p>
                </div>
                <div style="display:flex; align-items:center; gap: 8px;">
                    <span style="font-size: 0.84rem; color: #64748b; font-weight: 500;">Sort By:</span>
                    <select id="sortSelect" onchange="handleSortChange(event)" style="padding: 6px 12px; border-radius: 10px; border: 1px solid #cbd5e1; font-size: 0.85rem; background: #fff; color: #1e293b; font-weight: 600;">
                        <option value="featured">Featured Picks</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="rating">Top Rated</option>
                    </select>
                </div>
            </div>

            <!-- Grid of Food Cards -->
            <div class="product-grid" id="productGrid">
                <!-- Dynamically populated via JS -->
            </div>
        </section>

    </main>

    <!-- 4. SLIDE-OVER CART DRAWER -->
    <div class="cart-drawer-overlay" id="cartDrawerOverlay" onclick="closeCartDrawer(event)">
        <div class="cart-drawer" onclick="event.stopPropagation()">
            <div class="cart-drawer-header">
                <div class="cart-drawer-title">
                    <i data-lucide="shopping-bag" class="lucide-md"></i>
                    <span>Your Basket (<span id="cartDrawerItemCount">0</span> items)</span>
                </div>
                <button class="cart-close-btn" onclick="closeCartDrawer()" title="Close Cart">
                    <i data-lucide="x" class="lucide-sm"></i>
                </button>
            </div>

            <!-- Cart Items List -->
            <div class="cart-items-list" id="cartItemsList">
                <!-- Populated dynamically -->
            </div>

            <!-- Cart Drawer Footer -->
            <div class="cart-drawer-footer">
                <div style="display:flex; gap: 8px; margin-bottom: 14px;">
                    <input type="text" id="cartPromoInput" placeholder="Promo code (try FRESH40)" style="flex:1; padding: 8px 12px; border-radius: 10px; border: 1px solid #cbd5e1; font-size: 0.82rem; text-transform: uppercase;">
                    <button onclick="applyCartPromo()" style="background: #065f46; color: #fff; border:none; padding: 8px 16px; border-radius: 10px; font-weight:700; font-size:0.82rem; cursor:pointer;">Apply</button>
                </div>

                <div class="cart-summary-line">
                    <span>Subtotal</span>
                    <span id="cartSubtotalText">₦0</span>
                </div>
                <div class="cart-summary-line" id="cartDiscountRow" style="display:none; color: #10b981; font-weight: 700;">
                    <span>Promo Discount (FRESH40)</span>
                    <span id="cartDiscountText">-₦0</span>
                </div>
                <div class="cart-summary-line">
                    <span>Express 30-min Delivery</span>
                    <span id="cartDeliveryText">₦1,500</span>
                </div>
                <div class="cart-summary-line total">
                    <span>Total Amount</span>
                    <span id="cartTotalText">₦0</span>
                </div>

                <button class="checkout-btn" onclick="proceedToCheckout()">
                    <span>Proceed to Express Checkout</span>
                    <i data-lucide="arrow-right" class="lucide-sm"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- 5. MODAL: LOCATION SELECTOR -->
    <div class="modal-overlay" id="locationModalOverlay" onclick="closeLocationModal(event)">
        <div class="modal-card" onclick="event.stopPropagation()">
            <div class="modal-header">
                <h3>Select Delivery Location</h3>
                <button class="modal-close-btn" onclick="closeLocationModal()">
                    <i data-lucide="x" class="lucide-sm"></i>
                </button>
            </div>
            <div class="modal-body">
                <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 14px;">
                    Select an address for 30-minute rapid dispatch from our nearest local FreshFood micro-hub:
                </p>

                <div class="location-option selected" onclick="selectAddress('Victoria Island, Lagos', 'Ahmadu Bello Way, Lagos State')">
                    <i data-lucide="map-pin" style="color: #10b981;"></i>
                    <div>
                        <div style="font-weight:700; font-size:0.92rem; color:#111827;">Victoria Island, Lagos (Default)</div>
                        <div style="font-size:0.78rem; color:#64748b;">Ahmadu Bello Way, Lagos • Hub: VI Express</div>
                    </div>
                </div>

                <div class="location-option" onclick="selectAddress('Lekki Phase 1, Lagos', '14 Admiralty Way, Lekki')">
                    <i data-lucide="home" style="color: #3b82f6;"></i>
                    <div>
                        <div style="font-weight:700; font-size:0.92rem; color:#111827;">Lekki Phase 1, Lagos</div>
                        <div style="font-size:0.78rem; color:#64748b;">14 Admiralty Way, Lekki • Hub: Lekki Hub 2</div>
                    </div>
                </div>

                <div class="location-option" onclick="selectAddress('Ikeja GRA, Lagos', 'Isaac John Street, Ikeja')">
                    <i data-lucide="briefcase" style="color: #f59e0b;"></i>
                    <div>
                        <div style="font-weight:700; font-size:0.92rem; color:#111827;">Ikeja GRA, Lagos</div>
                        <div style="font-size:0.78rem; color:#64748b;">Isaac John Street, Ikeja Mainland Hub</div>
                    </div>
                </div>

                <div class="location-option" onclick="selectAddress('Maitama, Abuja', 'Gana Street, Abuja FCT')">
                    <i data-lucide="map-pin" style="color: #8b5cf6;"></i>
                    <div>
                        <div style="font-weight:700; font-size:0.92rem; color:#111827;">Maitama, Abuja</div>
                        <div style="font-size:0.78rem; color:#64748b;">Gana Street, Abuja Capital Center Hub</div>
                    </div>
                </div>

                <div style="margin-top: 16px;">
                    <label style="font-size: 0.8rem; font-weight: 700; color: #374151;">Custom Delivery Address</label>
                    <div style="display:flex; gap: 8px; margin-top: 6px;">
                        <input type="text" id="customAddressInput" placeholder="Enter street and area..." style="flex:1; padding: 10px; border-radius: 10px; border: 1px solid #d1d5db; font-size: 0.85rem;">
                        <button onclick="saveCustomAddress()" style="background: #118150; color:#fff; border:none; padding: 10px 18px; border-radius: 10px; font-weight:700; font-size: 0.85rem; cursor:pointer;">Set</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 6. MODAL: NOTIFICATIONS DRAWER -->
    <div class="modal-overlay" id="notifModalOverlay" onclick="closeNotifModal(event)">
        <div class="modal-card" onclick="event.stopPropagation()">
            <div class="modal-header">
                <h3>Notifications &amp; Alerts</h3>
                <button class="modal-close-btn" onclick="closeNotifModal()">
                    <i data-lucide="x" class="lucide-sm"></i>
                </button>
            </div>
            <div class="modal-body">
                <div style="display:flex; flex-direction:column; gap: 12px;">
                    <div style="padding: 12px; border-radius: 14px; background: #ecfdf5; border-left: 4px solid #10b981;">
                        <div style="font-weight: 700; font-size: 0.88rem; color: #065f46;">🚚 Order #FF-9042 is on the way</div>
                        <div style="font-size: 0.78rem; color: #047857; margin-top: 2px;">Rider Tunde is approaching Victoria Island. ETA 12 mins.</div>
                        <div style="font-size: 0.7rem; color: #6b7280; margin-top: 4px;">5 mins ago</div>
                    </div>
                    <div style="padding: 12px; border-radius: 14px; background: #fffbeb; border-left: 4px solid #f59e0b;">
                        <div style="font-weight: 700; font-size: 0.88rem; color: #92400e;">🎉 Exclusive Promo: 40% OFF</div>
                        <div style="font-size: 0.78rem; color: #78350f; margin-top: 2px;">Use coupon code <strong>FRESH40</strong> on your grocery order.</div>
                        <div style="font-size: 0.7rem; color: #6b7280; margin-top: 4px;">1 hour ago</div>
                    </div>
                    <div style="padding: 12px; border-radius: 14px; background: #f8fafc; border-left: 4px solid #94a3b8;">
                        <div style="font-weight: 700; font-size: 0.88rem; color: #1e293b;">🌾 Fresh Harvest Alert: Royal Basmati &amp; Veggies</div>
                        <div style="font-size: 0.78rem; color: #475569; margin-top: 2px;">New organic farm batch just arrived in our cold storage hub.</div>
                        <div style="font-size: 0.7rem; color: #6b7280; margin-top: 4px;">Yesterday</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 7. CHECKOUT SUCCESS CONFIRMATION MODAL -->
    <div class="modal-overlay" id="checkoutSuccessModalOverlay" onclick="closeCheckoutModal(event)">
        <div class="modal-card" style="text-align: center; padding: 10px;" onclick="event.stopPropagation()">
            <div class="modal-body">
                <div style="width: 74px; height: 74px; border-radius: 50%; background: #d1fae5; color: #059669; display: inline-flex; align-items: center; justify-content: center; margin: 10px auto 16px;">
                    <i data-lucide="check-circle" style="width: 44px; height: 44px;"></i>
                </div>
                <h3 style="font-size: 1.35rem; font-weight: 800; color: #111827; margin-bottom: 6px;">Order Placed Successfully!</h3>
                <p style="font-size: 0.88rem; color: #4b5563; margin-bottom: 18px;">
                    Your FreshFood order <strong>#FF-9284</strong> has been sent to our micro-hub. Our express rider will arrive at <span id="successAddress" style="font-weight: 700;">Victoria Island</span> within 30 minutes.
                </p>

                <div style="background: #f8fafc; border-radius: 16px; padding: 14px; margin-bottom: 20px; text-align: left; font-size: 0.82rem;">
                    <div style="display:flex; justify-content:space-between; margin-bottom: 4px;">
                        <span style="color:#6b7280;">Estimated Delivery:</span>
                        <strong style="color:#111827;">In 28 minutes</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between; margin-bottom: 4px;">
                        <span style="color:#6b7280;">Payment Method:</span>
                        <strong style="color:#111827;">Card on Delivery / USSD</strong>
                    </div>
                    <div style="display:flex; justify-content:space-between;">
                        <span style="color:#6b7280;">Total Paid:</span>
                        <strong style="color:#118150;" id="successTotalPaid">₦0</strong>
                    </div>
                </div>

                <button onclick="closeCheckoutModal()" style="width: 100%; background: #118150; color: #fff; border:none; padding: 14px; border-radius: 14px; font-weight:700; cursor:pointer; font-size: 0.95rem;">
                    Back to Food Store
                </button>
            </div>
        </div>
    </div>

    <!-- TOAST NOTIFICATION -->
    <div class="dash-toast" id="dashToast">
        <i data-lucide="check" class="lucide-sm" id="toastIcon"></i>
        <span id="toastText">Item added to cart!</span>
    </div>

    <!-- APPLICATION LOGIC SCRIPT -->
    <script>
        const PRODUCTS = [
            /* Grains */
            {
                id: 'gr-1',
                title: 'Royal Basmati Rice (5kg Bag)',
                category: 'grains',
                categoryLabel: 'Grains & Staples',
                weight: '5kg Bag • Premium Long Grain',
                price: 18500,
                oldPrice: 21000,
                rating: 4.9,
                reviews: 420,
                time: '25-30m',
                image: "{{ asset('images/grocery_grains.jpg') }}",
                badge: 'Best Seller',
                organic: true,
                tags: ['rice', 'basmati', 'grain', 'staples', 'carbs']
            },
            {
                id: 'gr-2',
                title: 'Organic Rolled Oats & Quinoa Pack',
                category: 'grains',
                categoryLabel: 'Grains & Staples',
                weight: '1kg • 100% Whole Grain',
                price: 5200,
                oldPrice: 6500,
                rating: 4.8,
                reviews: 190,
                time: '20-25m',
                image: "{{ asset('images/grocery_grains.jpg') }}",
                badge: 'Organic',
                organic: true,
                tags: ['oats', 'quinoa', 'breakfast', 'grain']
            },
            {
                id: 'gr-3',
                title: 'Honey Brown Beans (Oloyin 4kg)',
                category: 'grains',
                categoryLabel: 'Grains & Staples',
                weight: '4kg Bag • Stone-Free Cleaned',
                price: 12800,
                oldPrice: null,
                rating: 4.9,
                reviews: 310,
                time: '25-30m',
                image: "{{ asset('images/grocery_grains.jpg') }}",
                badge: 'Farm Fresh',
                organic: true,
                tags: ['beans', 'oloyin', 'staples', 'protein']
            },
            {
                id: 'gr-4',
                title: 'Golden Premium Garri Ijebu (5kg)',
                category: 'grains',
                categoryLabel: 'Grains & Staples',
                weight: '5kg • Extra Sour & Crispy',
                price: 7500,
                oldPrice: 8500,
                rating: 5.0,
                reviews: 540,
                time: '20-25m',
                image: "{{ asset('images/grocery_grains.jpg') }}",
                badge: 'Popular',
                organic: false,
                tags: ['garri', 'ijebu', 'cassava', 'staples']
            },

            /* Vegetables */
            {
                id: 'vg-1',
                title: 'Crisp Organic Broccoli & Bell Peppers',
                category: 'vegetables',
                categoryLabel: 'Vegetables',
                weight: '750g • Crisp Farm Plucked',
                price: 3800,
                oldPrice: 4500,
                rating: 4.9,
                reviews: 215,
                time: '20-25m',
                image: "{{ asset('images/grocery_vegetables.jpg') }}",
                badge: '100% Organic',
                organic: true,
                tags: ['broccoli', 'pepper', 'veggies', 'vegetables', 'salad']
            },
            {
                id: 'vg-2',
                title: 'Fresh Farm Spinach & Kale Bunch',
                category: 'vegetables',
                categoryLabel: 'Vegetables',
                weight: '500g Fresh Cut Herbs',
                price: 2200,
                oldPrice: null,
                rating: 4.7,
                reviews: 180,
                time: '20-25m',
                image: "{{ asset('images/grocery_vegetables.jpg') }}",
                badge: 'Hydroponic',
                organic: true,
                tags: ['spinach', 'kale', 'greens', 'vegetables']
            },
            {
                id: 'vg-3',
                title: 'Vine Ripe Cherry Tomatoes & Cucumbers',
                category: 'vegetables',
                categoryLabel: 'Vegetables',
                weight: '1kg Sweet Greenhouse',
                price: 2900,
                oldPrice: 3400,
                rating: 4.8,
                reviews: 320,
                time: '20-25m',
                image: "{{ asset('images/grocery_vegetables.jpg') }}",
                badge: 'Sweet & Crisp',
                organic: true,
                tags: ['tomatoes', 'cucumbers', 'veggies', 'salad']
            },
            {
                id: 'vg-4',
                title: 'Gourmet Mediterranean Salad Bowl',
                category: 'vegetables',
                categoryLabel: 'Vegetables',
                weight: '400g Ready to Eat with Dressing',
                price: 4500,
                oldPrice: 5200,
                rating: 4.9,
                reviews: 410,
                time: '15-20m',
                image: "{{ asset('images/fresh_salad.jpg') }}",
                badge: 'Chef Special',
                organic: true,
                tags: ['salad', 'dressing', 'bowl', 'vegetables']
            },

            /* Snacks */
            {
                id: 'sn-1',
                title: 'Spiced Plantain & Roasted Cashew Mix',
                category: 'snacks',
                categoryLabel: 'Snacks & Bites',
                weight: '350g Tub • Crunchy Chili-Ginger',
                price: 3400,
                oldPrice: 4200,
                rating: 4.9,
                reviews: 610,
                time: '15-20m',
                image: "{{ asset('images/grocery_snacks.jpg') }}",
                badge: 'Crowd Fav',
                organic: false,
                tags: ['plantain', 'cashew', 'chips', 'snacks', 'nuts']
            },
            {
                id: 'sn-2',
                title: 'Premium Salted Almonds & Macadamia',
                category: 'snacks',
                categoryLabel: 'Snacks & Bites',
                weight: '250g Jar • Sea Salt Roasted',
                price: 5800,
                oldPrice: null,
                rating: 4.8,
                reviews: 145,
                time: '15-20m',
                image: "{{ asset('images/grocery_snacks.jpg') }}",
                badge: 'Keto Friendly',
                organic: true,
                tags: ['almonds', 'nuts', 'snacks', 'keto']
            },
            {
                id: 'sn-3',
                title: 'Triple Belgian Chocolate Brownie Bites',
                category: 'snacks',
                categoryLabel: 'Snacks & Bites',
                weight: '300g Box • Dark & Milk Cocoa',
                price: 4800,
                oldPrice: 5600,
                rating: 5.0,
                reviews: 720,
                time: '15-20m',
                image: "{{ asset('images/triple_chocolate.jpg') }}",
                badge: 'Decadent',
                organic: false,
                tags: ['chocolate', 'brownie', 'dessert', 'snacks', 'sweet']
            },
            {
                id: 'sn-4',
                title: 'Crispy Gourmet Potato Chips (Smoky Paprika)',
                category: 'snacks',
                categoryLabel: 'Snacks & Bites',
                weight: '200g Artisanal Kettle Cooked',
                price: 1800,
                oldPrice: null,
                rating: 4.7,
                reviews: 280,
                time: '15-20m',
                image: "{{ asset('images/grocery_snacks.jpg') }}",
                badge: 'Crispy',
                organic: false,
                tags: ['chips', 'potato', 'paprika', 'snacks']
            },

            /* Drinks */
            {
                id: 'dr-1',
                title: 'Cold-Pressed Citrus Immunity Booster',
                category: 'drinks',
                categoryLabel: 'Drinks & Juices',
                weight: '500ml Bottle • Pure Orange & Ginger',
                price: 2800,
                oldPrice: 3500,
                rating: 4.9,
                reviews: 380,
                time: '15-20m',
                image: "{{ asset('images/grocery_drinks.jpg') }}",
                badge: 'Cold Pressed',
                organic: true,
                tags: ['juice', 'citrus', 'orange', 'drinks', 'immunity']
            },
            {
                id: 'dr-2',
                title: 'Fresh Mango & Passionfruit Smoothie',
                category: 'drinks',
                categoryLabel: 'Drinks & Juices',
                weight: '500ml • 100% Natural Fruit Blend',
                price: 3200,
                oldPrice: null,
                rating: 4.9,
                reviews: 420,
                time: '15-20m',
                image: "{{ asset('images/grocery_drinks.jpg') }}",
                badge: 'No Added Sugar',
                organic: true,
                tags: ['smoothie', 'mango', 'drinks', 'fruit']
            },
            {
                id: 'dr-3',
                title: 'Green Detox Apple & Mint Elixir',
                category: 'drinks',
                categoryLabel: 'Drinks & Juices',
                weight: '500ml • Celery, Cucumber & Green Apple',
                price: 3000,
                oldPrice: 3800,
                rating: 4.8,
                reviews: 190,
                time: '15-20m',
                image: "{{ asset('images/grocery_drinks.jpg') }}",
                badge: 'Detox',
                organic: true,
                tags: ['detox', 'green juice', 'apple', 'drinks']
            },
            {
                id: 'dr-4',
                title: 'Hibiscus Zobo & Spiced Cloves Cooler',
                category: 'drinks',
                categoryLabel: 'Drinks & Juices',
                weight: '500ml • Chilled Local Heritage',
                price: 2000,
                oldPrice: 2500,
                rating: 5.0,
                reviews: 890,
                time: '15-20m',
                image: "{{ asset('images/grocery_drinks.jpg') }}",
                badge: 'Heritage',
                organic: true,
                tags: ['zobo', 'hibiscus', 'drinks', 'cooler']
            },

            /* Chef Prepared Meals */
            {
                id: 'ml-1',
                title: 'Artisan Wood-Fired Margherita Pizza',
                category: 'meals',
                categoryLabel: 'Chef Meals',
                weight: 'Large 12-inch • Buffalo Mozzarella',
                price: 9500,
                oldPrice: 11000,
                rating: 4.9,
                reviews: 650,
                time: '25-30m',
                image: "{{ asset('images/delicious_pizza_slice.jpg') }}",
                badge: 'Wood Fired',
                organic: false,
                tags: ['pizza', 'margherita', 'cheese', 'italian', 'meals']
            },
            {
                id: 'ml-2',
                title: 'Ultimate Double Truffle Cheeseburger',
                category: 'meals',
                categoryLabel: 'Chef Meals',
                weight: 'Prime Angus Beef + Brioche Bun',
                price: 8200,
                oldPrice: 9500,
                rating: 4.9,
                reviews: 980,
                time: '20-25m',
                image: "{{ asset('images/hero_burger.jpg') }}",
                badge: 'Top Pick',
                organic: false,
                tags: ['burger', 'beef', 'cheeseburger', 'meals']
            },
            {
                id: 'ml-3',
                title: 'Creamy Wild Mushroom Truffle Pasta',
                category: 'meals',
                categoryLabel: 'Chef Meals',
                weight: '450g Tagliatelle in Truffle Cream',
                price: 7800,
                oldPrice: null,
                rating: 4.8,
                reviews: 430,
                time: '25-30m',
                image: "{{ asset('images/mushroom_pasta.jpg') }}",
                badge: 'Gourmet',
                organic: false,
                tags: ['pasta', 'mushroom', 'italian', 'meals']
            },
            {
                id: 'ml-4',
                title: 'Smokey Jollof Rice & Herb Chicken Bowl',
                category: 'meals',
                categoryLabel: 'Chef Meals',
                weight: '1 Combo Bowl + Sweet Plantains',
                price: 6500,
                oldPrice: 7500,
                rating: 5.0,
                reviews: 1240,
                time: '20-25m',
                image: "{{ asset('images/tasty_meal_bowl.jpg') }}",
                badge: 'Legendary',
                organic: false,
                tags: ['jollof', 'rice', 'chicken', 'plantain', 'meals']
            }
        ];

        let state = {
            selectedCategory: 'all',
            searchQuery: '',
            sortBy: 'featured',
            cart: {},
            wishlist: new Set(),
            appliedDiscountRate: 0,
            activeCouponCode: '',
            selectedAddress: 'Victoria Island, Lagos'
        };

        function formatNaira(amount) {
            return '₦' + Number(amount).toLocaleString('en-NG');
        }

        function showToast(text) {
            const toast = document.getElementById('dashToast');
            const toastText = document.getElementById('toastText');
            toastText.textContent = text;
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        let secondsRemaining = 9918;
        function updateCountdown() {
            secondsRemaining--;
            if (secondsRemaining < 0) secondsRemaining = 10000;
            const h = Math.floor(secondsRemaining / 3600);
            const m = Math.floor((secondsRemaining % 3600) / 60);
            const s = secondsRemaining % 60;
            const str = `Ends in 0${h}:${m < 10 ? '0' : ''}${m}:${s < 10 ? '0' : ''}${s}`;
            const el = document.getElementById('countdownTimer');
            if (el) el.textContent = str;
        }
        setInterval(updateCountdown, 1000);

        /* Sidebar Navigation Controls */

        /* Sidebar Navigation Controls */
        function openSidebar() {
            document.getElementById('sidebarOverlay').classList.add('active');
            const searchInput = document.getElementById('sidebarSearchInput');
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 200);
            }
        }

        function closeSidebar() {
            document.getElementById('sidebarOverlay').classList.remove('active');
        }

        function filterSidebarAisles(e) {
            const q = e.target.value.toLowerCase().trim();
            document.querySelectorAll('.sidebar-nav-item').forEach(item => {
                const text = item.textContent.toLowerCase();
                if (!q || text.includes(q)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function sidebarFilter(cat) {
            filterCategory(cat);
            document.querySelectorAll('.sidebar-nav-item').forEach(item => {
                if (item.getAttribute('onclick') && item.getAttribute('onclick').includes(`'${cat}'`)) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
            closeSidebar();
        }

        function sidebarFilterQuick(type) {
            if (type === 'deals') {
                state.selectedCategory = 'all';
                state.searchQuery = '';
                document.querySelectorAll('.category-chip').forEach(c => c.classList.remove('active'));
                document.querySelector('.category-chip[data-category="all"]').classList.add('active');
                document.getElementById('productSectionTitle').textContent = '🔥 Hot Flash Deals & Discounts';
                const breadcrumbEl = document.getElementById('breadcrumbCategory');
                if (breadcrumbEl) breadcrumbEl.textContent = 'Flash Deals';
                const breadcrumbIcon = document.getElementById('breadcrumbIcon');
                if (breadcrumbIcon) {
                    breadcrumbIcon.setAttribute('data-lucide', 'flame');
                    lucide.createIcons();
                }
                const discounted = PRODUCTS.filter(p => p.oldPrice !== null);
                renderCustomList(discounted, 'Showing 4 flash discount deals (up to 30% off)');
            } else if (type === 'organic') {
                state.selectedCategory = 'all';
                state.searchQuery = '';
                document.querySelectorAll('.category-chip').forEach(c => c.classList.remove('active'));
                document.querySelector('.category-chip[data-category="all"]').classList.add('active');
                document.getElementById('productSectionTitle').textContent = '🌿 100% Certified Organic Freshness';
                const breadcrumbEl = document.getElementById('breadcrumbCategory');
                if (breadcrumbEl) breadcrumbEl.textContent = 'Organic Picks';
                const breadcrumbIcon = document.getElementById('breadcrumbIcon');
                if (breadcrumbIcon) {
                    breadcrumbIcon.setAttribute('data-lucide', 'sprout');
                    lucide.createIcons();
                }
                const organicList = PRODUCTS.filter(p => p.organic === true);
                renderCustomList(organicList, 'Showing 6 certified organic products');
            } else if (type === 'top') {
                filterCategory('all');
                document.getElementById('sortSelect').value = 'rating';
                handleSortChange({ target: { value: 'rating' } });
                const breadcrumbEl = document.getElementById('breadcrumbCategory');
                if (breadcrumbEl) breadcrumbEl.textContent = 'Top Rated';
                const breadcrumbIcon = document.getElementById('breadcrumbIcon');
                if (breadcrumbIcon) {
                    breadcrumbIcon.setAttribute('data-lucide', 'star');
                    lucide.createIcons();
                }
            }
            closeSidebar();
        }

        function renderCustomList(list, summaryText) {
            const grid = document.getElementById('productsGrid');
            const summary = document.getElementById('resultsSummaryText');
            if (summary && summaryText) summary.textContent = summaryText;
            
            if (list.length === 0) {
                grid.innerHTML = `
                    <div class="empty-state">
                        <i data-lucide="package-search" class="empty-icon"></i>
                        <h4 style="margin: 12px 0 6px; font-size:1.15rem; color:#1e293b;">No products found</h4>
                        <p style="color:#64748b; font-size:0.88rem; margin-bottom:16px;">Try adjusting your filters or browse all aisles.</p>
                        <button class="cart-checkout-btn" style="width:auto; padding:8px 20px; margin:0 auto;" onclick="filterCategory('all')">
                            Show All Products
                        </button>
                    </div>
                `;
                lucide.createIcons();
                return;
            }

            grid.innerHTML = list.map(product => createProductCardHtml(product)).join('');
            lucide.createIcons();
        }

        // Close overlay on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeSidebar();
                closeCartDrawer();
                closeLocationModal();
                closeNotificationsModal();
                closeProfileModal();
            }
        });

        /* Periodic Rotating Banner Carousel */
        let currentBannerSlide = 0;
        const totalBannerSlides = 3;
        let bannerAutoplayTimer = null;

        function showBannerSlide(index) {
            if (index >= totalBannerSlides) index = 0;
            if (index < 0) index = totalBannerSlides - 1;
            currentBannerSlide = index;

            document.querySelectorAll('.banner-slide').forEach((slide, idx) => {
                if (idx === index) {
                    slide.classList.add('active');
                } else {
                    slide.classList.remove('active');
                }
            });

            document.querySelectorAll('.banner-dot').forEach((dot, idx) => {
                if (idx === index) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        function nextBannerSlide() {
            showBannerSlide(currentBannerSlide + 1);
        }

        function prevBannerSlide() {
            showBannerSlide(currentBannerSlide - 1);
        }

        function goToBannerSlide(idx) {
            showBannerSlide(idx);
            resetBannerAutoplay();
        }

        function startBannerAutoplay() {
            if (bannerAutoplayTimer) clearInterval(bannerAutoplayTimer);
            bannerAutoplayTimer = setInterval(() => {
                nextBannerSlide();
            }, 4500);
        }

        function pauseBannerAutoplay() {
            if (bannerAutoplayTimer) {
                clearInterval(bannerAutoplayTimer);
                bannerAutoplayTimer = null;
            }
        }

        function resetBannerAutoplay() {
            pauseBannerAutoplay();
            startBannerAutoplay();
        }

        function filterCategory(cat) {
            state.selectedCategory = cat;
            document.querySelectorAll('.category-chip').forEach(el => {
                if (el.getAttribute('data-category') === cat) {
                    el.classList.add('active');
                } else {
                    el.classList.remove('active');
                }
            });

            const titleMap = {
                all: 'All Food Products',
                grains: '🌾 Farm Fresh Grains & Staples',
                vegetables: '🥦 Organic Greens & Vegetables',
                snacks: '🥨 Healthy Crunch & Artisanal Snacks',
                drinks: '🧃 Cold Juices, Smoothies & Refreshers',
                meals: '🍕 Chef Prepared Gourmet Dishes'
            };
            document.getElementById('productSectionTitle').textContent = titleMap[cat] || 'Fresh Items';

            // Update Breadcrumb Text & Icon
            const breadcrumbMap = {
                all: 'All Products',
                grains: 'Grains & Staples',
                vegetables: 'Fresh Vegetables',
                snacks: 'Snacks & Bites',
                drinks: 'Drinks & Juices',
                meals: 'Chef Meals'
            };
            const iconMap = {
                all: 'store',
                grains: 'wheat',
                vegetables: 'carrot',
                snacks: 'cookie',
                drinks: 'cup-soda',
                meals: 'utensils'
            };
            const breadcrumbEl = document.getElementById('breadcrumbCategory');
            if (breadcrumbEl) breadcrumbEl.textContent = breadcrumbMap[cat] || 'Products';
            const breadcrumbIcon = document.getElementById('breadcrumbIcon');
            if (breadcrumbIcon) {
                breadcrumbIcon.setAttribute('data-lucide', iconMap[cat] || 'store');
                lucide.createIcons();
            }

            renderProducts();
        }

        function getFilteredProducts() {
            let list = [...PRODUCTS];

            if (state.selectedCategory !== 'all') {
                list = list.filter(p => p.category === state.selectedCategory);
            }

            if (state.searchQuery.trim()) {
                const q = state.searchQuery.toLowerCase().trim();
                list = list.filter(p => 
                    p.title.toLowerCase().includes(q) ||
                    p.categoryLabel.toLowerCase().includes(q) ||
                    p.tags.some(t => t.toLowerCase().includes(q))
                );
            }

            if (state.sortBy === 'price-low') {
                list.sort((a, b) => a.price - b.price);
            } else if (state.sortBy === 'price-high') {
                list.sort((a, b) => b.price - a.price);
            } else if (state.sortBy === 'rating') {
                list.sort((a, b) => b.rating - a.rating);
            }

            return list;
        }

        function renderProducts() {
            const grid = document.getElementById('productGrid');
            const products = getFilteredProducts();
            const summary = document.getElementById('resultsSummaryText');
            summary.textContent = `Showing ${products.length} fresh item${products.length === 1 ? '' : 's'}`;

            if (products.length === 0) {
                grid.innerHTML = `
                    <div style="grid-column: 1 / -1; text-align: center; padding: 48px 20px; background: #fff; border-radius: 20px; border: 1px dashed #cbd5e1;">
                        <i data-lucide="search-x" style="width: 48px; height: 48px; color: #94a3b8; margin-bottom: 12px;"></i>
                        <h4 style="font-size: 1.15rem; font-weight:700; color: #1e293b;">No products match your search</h4>
                        <p style="font-size: 0.85rem; color: #64748b; margin-top: 4px;">Try searching for "Rice", "Vegetables", "Plantain", or reset your filters.</p>
                        <button onclick="clearSearch()" style="margin-top: 14px; background: #118150; color: #fff; border:none; padding: 10px 22px; border-radius: 12px; font-weight:700; cursor:pointer;">Show All Items</button>
                    </div>
                `;
                if (window.lucide) lucide.createIcons();
                return;
            }

            grid.innerHTML = products.map(p => {
                const qty = state.cart[p.id] || 0;
                const isWished = state.wishlist.has(p.id);

                return `
                    <div class="product-card" id="card-${p.id}">
                        <div class="product-card-media" onclick="quickViewProduct('${p.id}')">
                            <img src="${p.image}" alt="${p.title}" class="product-img" loading="lazy">
                            <span class="${p.badge === 'Best Seller' ? 'badge-bestseller' : 'badge-fresh'}">${p.badge}</span>
                            <button class="wishlist-btn ${isWished ? 'active' : ''}" onclick="toggleWishlist('${p.id}', event)" title="Save to wishlist">
                                <i data-lucide="heart" class="lucide-sm"></i>
                            </button>
                        </div>
                        <div class="product-info-wrap">
                            <div class="product-meta-row">
                                <span class="rating-pill">
                                    <i data-lucide="star" style="width:12px; height:12px; fill:#f59e0b; stroke:#f59e0b;"></i>
                                    <span>${p.rating}</span>
                                    <span style="color:#94a3b8; font-weight:400;">(${p.reviews})</span>
                                </span>
                                <span class="delivery-time-pill">
                                    <i data-lucide="clock" style="width:12px; height:12px; color:#10b981;"></i>
                                    <span>${p.time}</span>
                                </span>
                            </div>

                            <h4 class="product-title" onclick="quickViewProduct('${p.id}')">${p.title}</h4>
                            <div class="product-weight">${p.weight}</div>

                            <div class="product-pricing-row">
                                <div class="price-group">
                                    <span class="current-price">${formatNaira(p.price)}</span>
                                    ${p.oldPrice ? `<span class="old-price">${formatNaira(p.oldPrice)}</span>` : ''}
                                </div>

                                <div class="cart-action-container">
                                    ${qty === 0 ? `
                                        <button class="add-btn-round" onclick="addToCart('${p.id}')" title="Add to basket">
                                            <i data-lucide="plus" class="lucide-sm"></i>
                                        </button>
                                    ` : `
                                        <div class="quantity-stepper active">
                                            <button class="stepper-btn" onclick="decreaseCart('${p.id}')">−</button>
                                            <span class="stepper-val">${qty}</span>
                                            <button class="stepper-btn" onclick="addToCart('${p.id}')">+</button>
                                        </div>
                                    `}
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');

            if (window.lucide) lucide.createIcons();
        }

        function handleSearchInput(e) {
            state.searchQuery = e.target.value;
            const clearBtn = document.getElementById('searchClearBtn');
            if (state.searchQuery.trim().length > 0) {
                clearBtn.classList.add('visible');
            } else {
                clearBtn.classList.remove('visible');
            }
            renderProducts();
        }

        function clearSearch() {
            const input = document.getElementById('productSearchInput');
            input.value = '';
            state.searchQuery = '';
            document.getElementById('searchClearBtn').classList.remove('visible');
            renderProducts();
        }

        function quickSearch(query) {
            const input = document.getElementById('productSearchInput');
            input.value = query;
            state.searchQuery = query;
            document.getElementById('searchClearBtn').classList.add('visible');
            renderProducts();
            showToast(`Filtered by "${query}"`);
        }

        function simulateVoiceSearch() {
            showToast("🎤 Listening... Speak search term...");
            setTimeout(() => {
                quickSearch("Vegetables");
            }, 1200);
        }

        function handleSortChange(e) {
            state.sortBy = e.target.value;
            renderProducts();
        }

        function toggleWishlist(id, e) {
            e.stopPropagation();
            if (state.wishlist.has(id)) {
                state.wishlist.delete(id);
                showToast("Removed from Wishlist");
            } else {
                state.wishlist.add(id);
                showToast("Saved to Wishlist ❤️");
            }
            renderProducts();
        }

        function addToCart(id) {
            state.cart[id] = (state.cart[id] || 0) + 1;
            updateCartBadges();
            renderProducts();
            renderCartDrawer();
            const prod = PRODUCTS.find(p => p.id === id);
            showToast(`Added ${prod ? prod.title : 'item'} to basket!`);
        }

        function decreaseCart(id) {
            if (state.cart[id] > 1) {
                state.cart[id]--;
            } else {
                delete state.cart[id];
            }
            updateCartBadges();
            renderProducts();
            renderCartDrawer();
        }

        function removeFromCart(id) {
            delete state.cart[id];
            updateCartBadges();
            renderProducts();
            renderCartDrawer();
            showToast("Item removed from basket");
        }

        function updateCartBadges() {
            const totalCount = Object.values(state.cart).reduce((a, b) => a + b, 0);
            document.getElementById('cartBadgeCount').textContent = totalCount;
            document.getElementById('cartDrawerItemCount').textContent = totalCount;
        }

        function openCartDrawer() {
            renderCartDrawer();
            document.getElementById('cartDrawerOverlay').classList.add('active');
        }

        function closeCartDrawer(e) {
            document.getElementById('cartDrawerOverlay').classList.remove('active');
        }

        function renderCartDrawer() {
            const listEl = document.getElementById('cartItemsList');
            const itemIds = Object.keys(state.cart);

            if (itemIds.length === 0) {
                listEl.innerHTML = `
                    <div class="cart-empty-state">
                        <i data-lucide="shopping-basket" style="width: 54px; height: 54px; color: #cbd5e1;"></i>
                        <h4 style="font-size: 1.05rem; font-weight: 700; color: #374151; margin-top: 12px;">Your basket is empty</h4>
                        <p style="font-size: 0.82rem; color: #94a3b8; margin-top: 4px; max-width: 240px;">
                            Add some farm fresh grains, veggies or cold juices to get started!
                        </p>
                    </div>
                `;
                calculateTotals(0);
                if (window.lucide) lucide.createIcons();
                return;
            }

            let subtotal = 0;
            listEl.innerHTML = itemIds.map(id => {
                const item = PRODUCTS.find(p => p.id === id);
                if (!item) return '';
                const qty = state.cart[id];
                const itemTotal = item.price * qty;
                subtotal += itemTotal;

                return `
                    <div class="cart-item-row">
                        <img src="${item.image}" alt="${item.title}" class="cart-item-thumb">
                        <div class="cart-item-info">
                            <h5 class="cart-item-title">${item.title}</h5>
                            <div class="cart-item-price">${formatNaira(item.price)} × ${qty} = <strong>${formatNaira(itemTotal)}</strong></div>
                            <div style="display:flex; align-items:center; gap: 8px; margin-top: 6px;">
                                <div class="quantity-stepper active">
                                    <button class="stepper-btn" onclick="decreaseCart('${item.id}')">−</button>
                                    <span class="stepper-val">${qty}</span>
                                    <button class="stepper-btn" onclick="addToCart('${item.id}')">+</button>
                                </div>
                                <button class="cart-item-remove-btn" onclick="removeFromCart('${item.id}')" title="Delete">
                                    <i data-lucide="trash-2" class="lucide-sm"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');

            calculateTotals(subtotal);
            if (window.lucide) lucide.createIcons();
        }

        function calculateTotals(subtotal) {
            const deliveryFee = subtotal >= 15000 || subtotal === 0 ? 0 : 1500;
            const discountAmount = Math.round(subtotal * state.appliedDiscountRate);
            const grandTotal = Math.max(0, subtotal - discountAmount + deliveryFee);

            document.getElementById('cartSubtotalText').textContent = formatNaira(subtotal);
            document.getElementById('cartDeliveryText').textContent = deliveryFee === 0 ? 'FREE (Orders over ₦15,000)' : formatNaira(deliveryFee);
            
            const discountRow = document.getElementById('cartDiscountRow');
            if (discountAmount > 0) {
                discountRow.style.display = 'flex';
                document.getElementById('cartDiscountText').textContent = `-${formatNaira(discountAmount)} (${Math.round(state.appliedDiscountRate * 100)}% OFF)`;
            } else {
                discountRow.style.display = 'none';
            }

            document.getElementById('cartTotalText').textContent = formatNaira(grandTotal);
        }

        function copyAndApplyPromo(code) {
            let rate = 0.40;
            if (code === 'ORGANIC25') rate = 0.25;
            if (code === 'FEAST30') rate = 0.30;
            state.appliedDiscountRate = rate;
            state.activeCouponCode = code;
            const input = document.getElementById('cartPromoInput');
            if (input) input.value = code;
            
            const checkIcon = document.getElementById('couponCheckIcon');
            if (checkIcon) checkIcon.style.display = 'inline-block';
            
            showToast(`Coupon ${code} applied! ${Math.round(rate * 100)}% OFF your basket 🎉`);
            renderCartDrawer();
        }

        function applyCartPromo() {
            const input = document.getElementById('cartPromoInput');
            const val = input.value.trim().toUpperCase();
            if (val === 'FRESH40' || val === 'FRESH50' || val === 'ORGANIC25' || val === 'FEAST30') {
                copyAndApplyPromo(val);
            } else if (val) {
                showToast("Invalid code. Try FRESH40, ORGANIC25, or FEAST30");
            }
        }

        function openLocationModal() {
            document.getElementById('locationModalOverlay').classList.add('active');
        }

        function closeLocationModal() {
            document.getElementById('locationModalOverlay').classList.remove('active');
        }

        function selectAddress(title, desc) {
            state.selectedAddress = title;
            document.getElementById('currentAddressText').textContent = title;
            closeLocationModal();
            showToast(`Delivery location set to ${title}`);
        }

        function saveCustomAddress() {
            const input = document.getElementById('customAddressInput');
            const val = input.value.trim();
            if (val) {
                selectAddress(val, val);
            }
        }

        function openNotificationsModal() {
            document.getElementById('notifModalOverlay').classList.add('active');
            document.getElementById('unreadNotifBadge').style.display = 'none';
        }

        function closeNotifModal() {
            document.getElementById('notifModalOverlay').classList.remove('active');
        }

        function openProfileModal() {
            showToast("Amina Bello • FreshFood VIP Gold Member");
        }

        function quickViewProduct(id) {
            const p = PRODUCTS.find(prod => prod.id === id);
            if (!p) return;
            showToast(`${p.title} • ${formatNaira(p.price)}`);
        }

        function proceedToCheckout() {
            const totalCount = Object.values(state.cart).reduce((a, b) => a + b, 0);
            if (totalCount === 0) {
                showToast("Please add items to your basket first!");
                return;
            }
            closeCartDrawer();
            
            const totalText = document.getElementById('cartTotalText').textContent;
            document.getElementById('successTotalPaid').textContent = totalText;
            document.getElementById('successAddress').textContent = state.selectedAddress;
            document.getElementById('checkoutSuccessModalOverlay').classList.add('active');
            
            state.cart = {};
            updateCartBadges();
            renderProducts();
            if (window.lucide) lucide.createIcons();
        }

        function closeCheckoutModal() {
            document.getElementById('checkoutSuccessModalOverlay').classList.remove('active');
        }

        document.addEventListener('DOMContentLoaded', () => {
            renderProducts();
            updateCartBadges();
            startBannerAutoplay();
            if (window.lucide) lucide.createIcons();
        });
    </script>
</body>
</html>
