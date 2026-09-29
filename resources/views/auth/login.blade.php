<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In - FreshFood</title>
    <meta name="description" content="Sign in to your FreshFood account to access your orders, saved dishes, and exclusive discount coupons.">

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
    <div class="auth-page-wrapper">
        <!-- Left Visual Sidebar -->
        <div class="auth-sidebar">
            <!-- Brand Logo -->
            <a href="/" class="brand-logo">
                <div class="brand-logo-icon">
                    <i data-lucide="leaf" class="lucide-md"></i>
                </div>
                <span>FreshFood</span>
            </a>

            <!-- Hero Message -->
            <div class="auth-sidebar-hero">
                <div class="auth-sidebar-tag">
                    <i data-lucide="sparkles" class="lucide-sm"></i>
                    <span>Welcome Back</span>
                </div>
                <h2 class="auth-sidebar-title">Craving something delicious?</h2>
                <p class="auth-sidebar-desc">
                    Log in to order your favorite meals from top chefs across Lagos, Abuja, and Port Harcourt with lightning-fast delivery.
                </p>

                <!-- Floating Order Preview Card -->
                <div class="auth-preview-card">
                    <img src="/images/hero_burger.jpg" alt="Deluxe Burger" class="auth-preview-img">
                    <div>
                        <h4 class="auth-preview-title">Loaded Beef Burger</h4>
                        <div class="auth-preview-badge">
                            <span><span class="naira">₦</span>4,500</span> • <span style="color:#9CA3AF;">⏱ 20 min delivery</span>
                        </div>
                        <div style="font-size: 0.75rem; color: #9CA3AF; margin-top: 4px;">
                            Over 1,500+ happy reviews this week
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Note -->
            <div style="font-size: 0.825rem; color: rgba(255,255,255,0.6);">
                &copy; 2026 FreshFood Technologies Inc. All rights reserved.
            </div>
        </div>

        <!-- Right Main Auth Form -->
        <div class="auth-main">
            <div class="auth-box">
                <!-- Back Link -->
                <a href="/" class="auth-back-link">
                    <i data-lucide="arrow-left" class="lucide-sm"></i>
                    <span>Back to Homepage</span>
                </a>

                <div class="auth-header">
                    <h1 class="auth-title">Sign In</h1>
                    <p class="auth-subtitle">Enter your credentials to access your account</p>
                </div>

                <!-- One-click Social Logins -->
                <div class="auth-social-row">
                    <button type="button" class="btn-social" onclick="simulateSocialAuth('Google')">
                        <svg width="18" height="18" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                        </svg>
                        <span>Google</span>
                    </button>
                    <button type="button" class="btn-social" onclick="simulateSocialAuth('Apple')">
                        <i data-lucide="smartphone" class="lucide-sm"></i>
                        <span>Apple</span>
                    </button>
                </div>

                <div class="auth-divider">
                    <span>or continue with email</span>
                </div>

                <!-- Sign In Form -->
                <form id="loginForm" onsubmit="handleLoginSubmit(event)">
                    <div class="auth-form-group">
                        <label class="auth-label" for="loginEmail">Email Address</label>
                        <div class="auth-input-wrapper">
                            <i data-lucide="mail" class="lucide-sm auth-input-icon"></i>
                            <input 
                                type="email" 
                                id="loginEmail" 
                                class="auth-input" 
                                placeholder="name@example.com" 
                                required
                                value="customer@freshfood.ng"
                            >
                        </div>
                    </div>

                    <div class="auth-form-group">
                        <label class="auth-label" for="loginPassword">Password</label>
                        <div class="auth-input-wrapper">
                            <i data-lucide="lock" class="lucide-sm auth-input-icon"></i>
                            <input 
                                type="password" 
                                id="loginPassword" 
                                class="auth-input" 
                                placeholder="Enter your password" 
                                required
                                value="••••••••"
                            >
                            <button type="button" class="auth-toggle-pwd" onclick="togglePasswordVisibility('loginPassword', this)" aria-label="Toggle password">
                                <i data-lucide="eye" class="lucide-sm"></i>
                            </button>
                        </div>
                    </div>

                    <div class="auth-row-options">
                        <label class="auth-checkbox-label">
                            <input type="checkbox" checked style="accent-color: var(--color-primary);">
                            <span>Remember me</span>
                        </label>
                        <a href="javascript:void(0)" onclick="showToast('Password reset link sent to your email!')" class="auth-forgot-link">
                            Forgot password?
                        </a>
                    </div>

                    <button type="submit" class="btn-auth-submit" id="submitBtn">
                        <span>Sign In</span>
                        <i data-lucide="arrow-right" class="lucide-sm"></i>
                    </button>
                </form>

                <p class="auth-switch-text">
                    Don't have an account? 
                    <a href="/register" class="auth-switch-link">Sign up</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Toast Notice -->
    <div class="toast-notice" id="toastNotice">
        <i data-lucide="check-circle" class="lucide-md" style="color: #10b981;"></i>
        <span id="toastMessage">Logged in successfully!</span>
    </div>

    <script>
        function togglePasswordVisibility(inputId, btn) {
            const input = document.getElementById(inputId);
            if (input.type === 'password') {
                input.type = 'text';
                btn.innerHTML = '<i data-lucide="eye-off" class="lucide-sm"></i>';
            } else {
                input.type = 'password';
                btn.innerHTML = '<i data-lucide="eye" class="lucide-sm"></i>';
            }
            if (window.lucide) lucide.createIcons();
        }

        function showToast(msg) {
            const toast = document.getElementById('toastNotice');
            document.getElementById('toastMessage').textContent = msg;
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 3500);
        }

        function handleLoginSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            btn.innerHTML = '<span>Signing in...</span>';
            btn.style.opacity = '0.7';

            setTimeout(() => {
                showToast('Welcome back! Redirecting to FreshFood store dashboard...');
                setTimeout(() => {
                    window.location.href = '/dashboard';
                }, 1200);
            }, 800);
        }

        function simulateSocialAuth(provider) {
            showToast(`Connecting with ${provider}...`);
            setTimeout(() => {
                showToast(`Authenticated with ${provider}! Redirecting...`);
                setTimeout(() => {
                    window.location.href = '/dashboard';
                }, 1000);
            }, 700);
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide) lucide.createIcons();
        });
    </script>
</body>
</html>
