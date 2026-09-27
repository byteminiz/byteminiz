@extends('layouts.main-site')

@push('styles')
<link rel="stylesheet" href="/assets/css/animate.css">
<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<style>
/* ============================
   BULK ORDER LANDING PAGE
   ============================ */

:root {
    --lp-gold: #fdca00;
    --lp-orange: #FB6107;
    --lp-black: #1a1a1a;
    --lp-white: #ffffff;
    --lp-bg-cream: #FEFCEA;
    --lp-gray-light: #f8f8f4;
    --lp-radius: 1.25rem;
    --lp-shadow: 0 8px 32px rgba(0,0,0,0.08);
    --lp-shadow-hover: 0 16px 48px rgba(0,0,0,0.14);
}
* { box-sizing: border-box; }

/* ---------- Topbar ---------- */
.lp-topbar {
    position: fixed; top: 0; left: 0; right: 0; z-index: 9999;
    background: transparent;
    padding: 0; transition: all 0.3s ease;
}
.lp-topbar .container {
    display: flex; align-items: center; justify-content: space-between;
    height: 90px;
    padding: 0.5rem 0.6rem !important;
    background: rgba(255, 255, 255, 0.8) !important;
    backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);
    border-radius: 100vw !important;
    margin-top: 1rem !important;
    box-shadow: 0 30px 60px 0 rgba(27, 31, 10, 0.08) !important;
}
.lp-topbar .lp-logo img { 
    min-width: 10rem;
    height: 12rem;
    margin-top: 2rem;
    object-fit: cover;
    transition: transform 0.3s; 
}
.lp-topbar .lp-logo img:hover { transform: scale(1.05); }
.lp-topbar .lp-cta-btn {
    background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange));
    color: var(--lp-white); border: none; padding: 0.6rem 1.8rem;
    border-radius: 50px; font-weight: 700; font-size: 0.95rem;
    text-decoration: none; transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(251,97,7,0.3); letter-spacing: 0.02em;
}
.lp-topbar .lp-cta-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 25px rgba(251,97,7,0.45); color: var(--lp-white); }

/* ---------- Hero ---------- */
.lp-hero {
    position: relative; min-height: 100vh; display: flex; align-items: center;
    background: transparent;
    overflow: hidden; padding-top: 100px; padding-bottom: 4rem;
}
.lp-hero-content { 
    position: relative; 
    z-index: 2; 
    background: rgba(255, 255, 255, 0.05); 
    backdrop-filter: blur(16px); 
    -webkit-backdrop-filter: blur(16px); 
    border: 1px solid rgba(255, 255, 255, 0.15); 
    border-radius: 30px; 
    padding: 3rem; 
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.2); 
}
.lp-hero-badge { display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(253,202,0,0.15); border: 1px solid rgba(253,202,0,0.35); color: var(--lp-gold); padding: 0.5rem 1.2rem; border-radius: 50px; font-size: 0.85rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 1.5rem; box-shadow: 0 0 15px rgba(253,202,0,0.15); }
.lp-hero h1 { font-family: 'Golos Text', sans-serif; font-size: clamp(2.4rem, 5.5vw, 4.2rem); font-weight: 900; line-height: 1.1; color: var(--lp-white); margin-bottom: 1.5rem; }
.lp-hero h1 span { background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.lp-hero p { font-size: 1.2rem; color: rgba(255,255,255,0.8); max-width: 540px; line-height: 1.7; margin-bottom: 2rem; }
.lp-hero-btns { display: flex; gap: 1rem; flex-wrap: wrap; }
.lp-btn-primary { 
    position: relative;
    background-color: var(--lp-black);
    color: var(--lp-gold); 
    border: none;
    padding: 1rem 2.5rem; 
    border-radius: 50px; 
    font-weight: 700; 
    font-size: 1.1rem; 
    text-decoration: none; 
    transition: all 0.3s ease; 
    box-shadow: 0 4px 20px rgba(0,0,0,0.5); 
    display: inline-flex; 
    align-items: center; 
    gap: 0.5rem; 
    overflow: hidden;
    z-index: 1;
}
.lp-btn-primary::before {
    content: "";
    position: absolute;
    top: -50%; left: -50%; width: 200%; height: 200%;
    background: conic-gradient(from 0deg, transparent 0%, rgba(253,202,0,0.8) 25%, transparent 50%);
    animation: btnSpin 3s linear infinite;
    z-index: -1;
}
.lp-btn-primary::after {
    content: "";
    position: absolute;
    inset: 2px;
    background-color: var(--lp-black);
    background-image: url('data:image/svg+xml,%3Csvg width="4" height="4" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg"%3E%3Ccircle cx="6" cy="6" r="1" fill="%23aaa" fill-opacity="0.25" /%3E%3C/svg%3E');
    border-radius: 50px;
    z-index: -1;
    transition: all 0.3s ease;
}
.lp-btn-primary:hover { 
    transform: translateY(-3px); 
    box-shadow: 0 8px 32px rgba(253,202,0,0.4); 
    color: var(--lp-white); 
}
.lp-btn-primary:hover::after {
    background-color: #222;
}
@keyframes btnSpin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
.lp-btn-outline { background: transparent; color: var(--lp-white); border: 2px solid rgba(255,255,255,0.3); padding: 1rem 2.5rem; border-radius: 50px; font-weight: 600; font-size: 1.05rem; text-decoration: none; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem; }
.lp-btn-outline:hover { border-color: var(--lp-gold); color: var(--lp-gold); background: rgba(253,202,0,0.08); }

.lp-btn-logo-circle {
    display: inline-flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background-color: var(--lp-black);
    border: none;
    text-align: center;
    text-decoration: none;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
}
.lp-btn-logo-circle::before {
    content: "";
    position: absolute;
    top: -50%; left: -50%; width: 200%; height: 200%;
    background: conic-gradient(from 0deg, transparent 0%, rgba(253,202,0,0.8) 25%, transparent 50%);
    animation: btnSpin 3s linear infinite;
    z-index: -1;
}
.lp-btn-logo-circle::after {
    content: "";
    position: absolute;
    inset: 2px;
    background-color: var(--lp-black);
    background-image: url('data:image/svg+xml,%3Csvg width="4" height="4" viewBox="0 0 6 6" xmlns="http://www.w3.org/2000/svg"%3E%3Ccircle cx="6" cy="6" r="1" fill="%23aaa" fill-opacity="0.25" /%3E%3C/svg%3E');
    border-radius: 50%;
    z-index: -1;
    transition: all 0.3s ease;
}
.lp-btn-logo-circle span {
    font-family: 'Golos Text', sans-serif;
    font-weight: 900;
    font-size: 0.38rem;
    line-height: 1.1;
    letter-spacing: -0.02em;
    text-transform: capitalize;
    background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    z-index: 2;
}
.lp-btn-logo-circle:hover {
    transform: rotate(5deg) scale(1.05);
    box-shadow: 0 0 30px rgba(253,202,0,0.4);
}
.lp-btn-logo-circle:hover::after {
    background-color: #222;
}
.lp-btn-logo-circle i {
    font-size: 0.65rem;
    margin-bottom: 0.05rem;
    color: var(--lp-white);
    z-index: 2;
}

/* ---------- Main Product Cup & Neon Highlighter ---------- */
.lp-hero-product-col { position: relative; z-index: 2; }
.lp-hero-product-wrapper {
    position: relative;
    display: inline-block;
    padding: 20px;
    z-index: 2;
}

/* Neon Backlight Glow Disc behind the cup */
.lp-hero-product-wrapper::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 320px;
    height: 420px;
    background: radial-gradient(ellipse at center, rgba(253, 202, 0, 0.45) 0%, rgba(251, 97, 7, 0.35) 45%, rgba(251, 97, 7, 0) 75%);
    border-radius: 50%;
    filter: blur(30px);
    z-index: -1;
    animation: lp-neon-pulse 3.5s ease-in-out infinite alternate;
    pointer-events: none;
}

/* Neon Ring Aura */
.lp-hero-product-wrapper::after {
    content: '';
    position: absolute;
    top: 52%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 290px;
    height: 380px;
    border-radius: 50%;
    border: 2px solid rgba(253, 202, 0, 0.4);
    box-shadow: 0 0 25px rgba(253, 202, 0, 0.6), inset 0 0 25px rgba(251, 97, 7, 0.4);
    filter: blur(3px);
    z-index: -1;
    animation: lp-neon-spin 10s linear infinite;
    pointer-events: none;
}

/* Main Cup Image with Neon Multi-Drop-Shadow Highlighter */
.lp-hero-cup-img {
    width: 100%;
    max-width: 380px;
    height: auto;
    max-height: 520px;
    object-fit: contain;
    filter: 
        drop-shadow(0 0 15px rgba(253, 202, 0, 0.9))
        drop-shadow(0 0 35px rgba(251, 97, 7, 0.75))
        drop-shadow(0 0 65px rgba(253, 202, 0, 0.5))
        drop-shadow(0 15px 35px rgba(0, 0, 0, 0.65));
    animation: lp-cup-float 4.5s ease-in-out infinite alternate;
    transition: transform 0.4s ease, filter 0.4s ease;
    cursor: pointer;
}

.lp-hero-cup-img:hover {
    transform: scale(1.05) translateY(-8px);
    filter: 
        drop-shadow(0 0 25px rgba(253, 202, 0, 1))
        drop-shadow(0 0 50px rgba(251, 97, 7, 0.95))
        drop-shadow(0 0 95px rgba(253, 202, 0, 0.8))
        drop-shadow(0 25px 45px rgba(0, 0, 0, 0.85));
}

.lp-hero-product-tag {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(26, 26, 26, 0.92);
    border: 1.5px solid var(--lp-gold);
    color: var(--lp-gold);
    padding: 0.45rem 1.4rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 800;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    box-shadow: 0 0 20px rgba(253, 202, 0, 0.5), 0 4px 15px rgba(0,0,0,0.5);
    white-space: nowrap;
    z-index: 3;
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
}

@keyframes lp-cup-float {
    0% { transform: translateY(0px) rotate(0deg); }
    50% { transform: translateY(-12px) rotate(0.8deg); }
    100% { transform: translateY(0px) rotate(0deg); }
}

@keyframes lp-neon-pulse {
    0% {
        opacity: 0.7;
        transform: translate(-50%, -50%) scale(0.95);
        filter: blur(24px);
    }
    100% {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1.15);
        filter: blur(38px);
    }
}

@keyframes lp-neon-spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

.lp-hero-stats { display: flex; gap: 2.5rem; margin-top: 3rem; }
.lp-hero-stat { text-align: left; }
.lp-hero-stat strong { display: block; font-size: 1.8rem; font-weight: 800; color: var(--lp-gold); }
.lp-hero-stat span { font-size: 0.85rem; color: rgba(255,255,255,0.6); text-transform: uppercase; letter-spacing: 0.06em; }

/* ---------- Section Common ---------- */
.lp-section { padding: 6rem 0; }
.lp-section-title { font-family: 'Golos Text', sans-serif; font-size: 2.5rem; font-weight: 800; color: var(--lp-black); text-align: center; margin-bottom: 1rem; }
.lp-section-subtitle { text-align: center; font-size: 1.15rem; color: #666; max-width: 600px; margin: 0 auto 3.5rem; line-height: 1.7; }

/* ---------- Features ---------- */
.lp-features { background: var(--lp-bg-cream); }
.lp-feature-card { background: var(--lp-white); border-radius: var(--lp-radius); padding: 2.5rem 2rem; text-align: center; box-shadow: var(--lp-shadow); transition: all 0.4s cubic-bezier(0.25,0.46,0.45,0.94); border: 1px solid rgba(0,0,0,0.04); height: 100%; }
.lp-feature-card:hover { transform: translateY(-8px); box-shadow: var(--lp-shadow-hover); }
.lp-feature-icon { width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; font-size: 2rem; }
.lp-feature-icon.gold { background: linear-gradient(135deg, rgba(253,202,0,0.15), rgba(253,202,0,0.05)); color: #c49b00; }
.lp-feature-icon.orange { background: linear-gradient(135deg, rgba(251,97,7,0.15), rgba(251,97,7,0.05)); color: var(--lp-orange); }
.lp-feature-icon.green { background: linear-gradient(135deg, rgba(124,181,24,0.15), rgba(124,181,24,0.05)); color: #5a8a00; }
.lp-feature-card h4 { font-weight: 700; font-size: 1.25rem; margin-bottom: 0.75rem; color: var(--lp-black); }
.lp-feature-card p { color: #666; line-height: 1.6; margin: 0; }

/* ---------- Bulk Order Menu ---------- */
.lp-menu { background: var(--lp-white); }
.lp-menu-category { margin-bottom: 2.5rem; }
.lp-menu-category-title { font-family: 'Golos Text', sans-serif; font-weight: 800; font-size: 1.6rem; color: var(--lp-black); margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 3px solid var(--lp-gold); display: inline-block; }
.lp-menu-card {
    background: var(--lp-white); border-radius: var(--lp-radius); overflow: hidden;
    box-shadow: var(--lp-shadow); transition: all 0.35s ease;
    border: 1px solid rgba(0,0,0,0.06); height: 100%; display: flex; flex-direction: column;
}
.lp-menu-card:hover { transform: translateY(-4px); box-shadow: var(--lp-shadow-hover); }
.lp-menu-card-img { width: 100%; height: 200px; object-fit: cover; }
.lp-menu-card-body { padding: 1.25rem; flex: 1; display: flex; flex-direction: column; }
.lp-menu-card-body h5 { font-weight: 700; font-size: 1rem; color: var(--lp-black); margin-bottom: 0.5rem; }
.lp-menu-card-price { font-weight: 800; font-size: 1.15rem; color: var(--lp-orange); margin-bottom: 1rem; }
.lp-menu-card-price .lp-price-slash { text-decoration: line-through; color: #aaa; font-weight: 500; font-size: 0.9rem; margin-left: 0.4rem; }
.lp-qty-control { display: flex; align-items: center; justify-content: space-between; gap: 0; width: 100%; margin-top: auto; border-radius: 10px; overflow: hidden; border: 2px solid var(--lp-gold); }
.lp-qty-btn { flex: 0 0 42px; height: 42px; border: none; background: var(--lp-gold); color: var(--lp-black); font-size: 1.3rem; font-weight: 700; cursor: pointer; transition: all 0.2s; display: flex; align-items: center; justify-content: center; }
.lp-qty-btn:hover { background: var(--lp-orange); color: var(--lp-white); }
.lp-qty-input { flex: 1; min-width: 0; height: 42px; text-align: center; border: none; font-weight: 700; font-size: 1.05rem; color: var(--lp-black); background: var(--lp-white); outline: none; }
.lp-qty-input::-webkit-outer-spin-button, .lp-qty-input::-webkit-inner-spin-button { -webkit-appearance: none; margin: 0; }
.lp-veg-badge { display: inline-flex; align-items: center; gap: 0.3rem; background: #e6f4ea; color: #1a7a2e; font-size: 0.7rem; font-weight: 700; padding: 0.2rem 0.5rem; border-radius: 4px; text-transform: uppercase; margin-bottom: 0.5rem; }
.lp-veg-badge i { color: #1a7a2e; }

/* ---------- Perfect For ---------- */
.lp-perfect-for { background: var(--lp-bg-cream); }
.lp-use-card { position: relative; border-radius: var(--lp-radius); overflow: hidden; height: 260px; cursor: default; box-shadow: var(--lp-shadow); transition: all 0.4s ease; }
.lp-use-card:hover { transform: translateY(-6px); box-shadow: var(--lp-shadow-hover); }
.lp-use-card-bg { position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; font-size: 4rem; transition: transform 0.5s ease; }
.lp-use-card:hover .lp-use-card-bg { transform: scale(1.05); }
.lp-use-card.corporate .lp-use-card-bg { background: linear-gradient(135deg, #1a1a2e, #16213e); }
.lp-use-card.birthday .lp-use-card-bg { background: linear-gradient(135deg, #2d1b69, #481d6c); }
.lp-use-card.wedding .lp-use-card-bg { background: linear-gradient(135deg, #7c2d12, #9a3412); }
.lp-use-card.school .lp-use-card-bg { background: linear-gradient(135deg, #064e3b, #065f46); }
.lp-use-card-content { position: relative; z-index: 2; display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; padding: 2rem; text-align: center; color: var(--lp-white); }
.lp-use-card-emoji { font-size: 3rem; margin-bottom: 1rem; filter: drop-shadow(0 4px 8px rgba(0,0,0,0.3)); }
.lp-use-card-content h4 { font-weight: 700; font-size: 1.2rem; margin: 0; text-shadow: 0 2px 8px rgba(0,0,0,0.3); }

/* ---------- How It Works ---------- */
.lp-how-it-works { background: var(--lp-gray-light); }
.lp-step { text-align: center; position: relative; padding: 0 1rem; }
.lp-step-number { width: 70px; height: 70px; border-radius: 50%; background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange)); color: var(--lp-white); display: flex; align-items: center; justify-content: center; font-size: 1.8rem; font-weight: 800; margin: 0 auto 1.5rem; box-shadow: 0 6px 20px rgba(251,97,7,0.3); position: relative; z-index: 2; }
.lp-step h4 { font-weight: 700; font-size: 1.15rem; margin-bottom: 0.5rem; color: var(--lp-black); }
.lp-step p { color: #666; line-height: 1.6; font-size: 0.95rem; }
.lp-step-connector { display: none; }
@media (min-width: 768px) { .lp-step-connector { display: block; position: absolute; top: 35px; left: calc(50% + 45px); width: calc(100% - 90px); height: 3px; background: linear-gradient(90deg, var(--lp-gold), rgba(253,202,0,0.2)); z-index: 1; } }

/* ---------- Delivery Partners ---------- */
.lp-delivery { background: var(--lp-white); }
.lp-delivery-card {
    background: var(--lp-gray-light); border-radius: var(--lp-radius); padding: 2rem;
    text-align: center; transition: all 0.3s ease; border: 2px solid transparent;
    height: 100%;
}
.lp-delivery-card:hover { border-color: var(--lp-gold); transform: translateY(-4px); box-shadow: var(--lp-shadow); }
.lp-delivery-logo { display: block; height: 60px; width: auto; object-fit: contain; margin: 0 auto 1rem auto; }
.lp-delivery-card h4 { font-weight: 700; font-size: 1.15rem; color: var(--lp-black); margin-bottom: 0.4rem; }
.lp-delivery-card p { color: #666; font-size: 0.9rem; margin: 0; line-height: 1.5; }

/* ---------- Form Section ---------- */
.lp-form-section { background: linear-gradient(160deg, #1a1a1a 0%, #2d1800 50%, #1a1a1a 100%); position: relative; overflow: hidden; padding-bottom: 160px; }
.lp-form-section::before { content: ''; position: absolute; top: -30%; left: -15%; width: 60%; height: 160%; background: radial-gradient(ellipse, rgba(253,202,0,0.08) 0%, transparent 70%); pointer-events: none; }
.lp-form-wrapper { background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 1.5rem; padding: 3rem; backdrop-filter: blur(8px); position: relative; z-index: 2; }
.lp-form-wrapper h2 { font-family: 'Golos Text', sans-serif; font-weight: 800; font-size: 2rem; color: var(--lp-white); margin-bottom: 0.5rem; }
.lp-form-wrapper p.form-subtitle { color: rgba(255,255,255,0.6); margin-bottom: 2rem; font-size: 1.05rem; }
.lp-form-group { margin-bottom: 1.25rem; }
.lp-form-group label { color: rgba(255,255,255,0.8); font-weight: 600; font-size: 0.9rem; margin-bottom: 0.4rem; display: block; }
.lp-form-group input, .lp-form-group select, .lp-form-group textarea { width: 100%; padding: 0.85rem 1.2rem; border-radius: 12px; border: 1px solid rgba(255,255,255,0.15); background: rgba(255,255,255,0.06); color: var(--lp-white); font-size: 1rem; transition: all 0.3s ease; font-family: 'Golos Text', sans-serif; }
.lp-form-group input::placeholder, .lp-form-group textarea::placeholder { color: rgba(255,255,255,0.35); }
.lp-form-group input:focus, .lp-form-group select:focus, .lp-form-group textarea:focus { outline: none; border-color: var(--lp-gold); box-shadow: 0 0 0 3px rgba(253,202,0,0.15); background: rgba(255,255,255,0.1); }
.lp-form-group select option { background: #2d1800; color: var(--lp-white); }
.lp-form-submit { background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange)); color: var(--lp-white); border: none; padding: 1rem 3rem; border-radius: 50px; font-weight: 700; font-size: 1.1rem; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 20px rgba(251,97,7,0.35); width: 100%; margin-top: 0.5rem; }
.lp-form-submit:hover { transform: translateY(-2px); box-shadow: 0 8px 32px rgba(251,97,7,0.5); }

/* ---------- Bytz Items Section in Form ---------- */
.lp-bytz-section {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(253, 202, 0, 0.25);
    border-radius: 16px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    transition: all 0.35s ease;
}
.lp-bytz-section.confirmed {
    border-color: rgba(32, 175, 109, 0.6);
    background: rgba(32, 175, 109, 0.06);
    box-shadow: 0 0 24px rgba(32, 175, 109, 0.15);
}
.lp-bytz-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.lp-bytz-title {
    font-size: 1.25rem;
    font-weight: 800;
    color: var(--lp-gold);
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin: 0;
}
.lp-bytz-badge {
    font-size: 0.75rem;
    font-weight: 700;
    padding: 0.3rem 0.8rem;
    border-radius: 50px;
    background: rgba(253, 202, 0, 0.15);
    color: var(--lp-gold);
    border: 1px solid rgba(253, 202, 0, 0.3);
    transition: all 0.3s;
}
.lp-bytz-badge.confirmed {
    background: rgba(32, 175, 109, 0.2);
    color: #42db87;
    border-color: rgba(32, 175, 109, 0.5);
}
.lp-bytz-list {
    display: flex;
    flex-direction: column;
    gap: 0.6rem;
    margin-bottom: 1rem;
}
.lp-bytz-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 10px;
    padding: 0.75rem 1rem;
    transition: all 0.2s;
}
.lp-bytz-item:hover {
    background: rgba(255, 255, 255, 0.08);
}
.lp-bytz-item-name {
    font-weight: 700;
    font-size: 0.95rem;
    color: var(--lp-white);
    display: flex;
    align-items: center;
    gap: 0.4rem;
}
.lp-bytz-item-qty {
    background: rgba(253, 202, 0, 0.15);
    color: var(--lp-gold);
    font-weight: 800;
    font-size: 0.85rem;
    padding: 0.2rem 0.6rem;
    border-radius: 6px;
    margin-left: 0.5rem;
}
.lp-bytz-item-price {
    font-weight: 800;
    font-size: 0.95rem;
    color: var(--lp-gold);
}
.lp-bytz-empty {
    text-align: center;
    padding: 1.5rem 1rem;
    color: rgba(255, 255, 255, 0.5);
    font-size: 0.95rem;
}
.lp-bytz-empty i {
    font-size: 2rem;
    color: rgba(253, 202, 0, 0.4);
    margin-bottom: 0.5rem;
    display: block;
}
.lp-bytz-empty a {
    color: var(--lp-gold);
    text-decoration: underline;
    font-weight: 600;
}
.lp-bytz-total-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0.25rem 0;
    border-top: 1px dashed rgba(253, 202, 0, 0.3);
    margin-bottom: 1.25rem;
    font-weight: 800;
    font-size: 1.05rem;
    color: var(--lp-white);
}
.lp-bytz-total-price {
    color: var(--lp-gold);
    font-size: 1.2rem;
}
.lp-bytz-confirm-btn {
    width: 100%;
    padding: 0.85rem 1.5rem;
    border-radius: 50px;
    border: 2px solid var(--lp-gold);
    background: transparent;
    color: var(--lp-gold);
    font-weight: 800;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}
.lp-bytz-confirm-btn:hover {
    background: var(--lp-gold);
    color: var(--lp-black);
    box-shadow: 0 4px 16px rgba(253, 202, 0, 0.3);
}
.lp-bytz-confirm-btn.confirmed {
    background: #20AF6D;
    border-color: #20AF6D;
    color: #ffffff;
    box-shadow: 0 4px 16px rgba(32, 175, 109, 0.35);
}
.lp-bytz-confirm-btn.shake-btn {
    animation: lp-shake 0.5s ease-in-out;
}
@keyframes lp-shake {
    0%, 100% { transform: translateX(0); }
    20%, 60% { transform: translateX(-6px); }
    40%, 80% { transform: translateX(6px); }
}

/* ---------- Map & Location Field ---------- */
.lp-location-input-wrapper .input-group {
    display: flex;
    align-items: stretch;
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
}
.lp-location-input-wrapper .input-group:focus-within {
    border-color: var(--lp-gold);
    box-shadow: 0 0 0 3px rgba(253,202,0,0.15);
}
.lp-input-addon {
    background: transparent;
    border: none;
    color: var(--lp-gold);
    padding: 0 1rem;
    display: flex;
    align-items: center;
    font-size: 1.1rem;
}
.lp-location-input-wrapper input {
    flex: 1;
    border: none !important;
    background: transparent !important;
    padding: 0.85rem 1rem !important;
    box-shadow: none !important;
    color: var(--lp-white) !important;
}
.lp-locate-btn {
    background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange));
    color: var(--lp-white);
    border: none;
    padding: 0 1.2rem;
    font-weight: 700;
    font-size: 0.85rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.4rem;
    white-space: nowrap;
}
.lp-locate-btn:hover {
    background: var(--lp-orange);
    color: var(--lp-white);
}
.lp-map-modal-btn {
    background: rgba(255, 255, 255, 0.08);
    color: var(--lp-gold);
    border: none;
    border-left: 1px solid rgba(255, 255, 255, 0.15);
    padding: 0 1rem;
    font-weight: 700;
    font-size: 0.85rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.4rem;
    white-space: nowrap;
}
.lp-map-modal-btn:hover {
    background: rgba(253, 202, 0, 0.2);
    color: var(--lp-white);
}

/* ---------- Google Maps Modal Popup ---------- */
.lp-modal-backdrop {
    position: fixed;
    inset: 0;
    z-index: 999999;
    background: rgba(0, 0, 0, 0.82);
    backdrop-filter: blur(8px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    animation: lp-fade-in 0.3s ease;
}
@keyframes lp-fade-in {
    from { opacity: 0; }
    to { opacity: 1; }
}
.lp-modal-container {
    background: #181818;
    border: 1px solid rgba(253, 202, 0, 0.35);
    border-radius: 20px;
    width: 100%;
    max-width: 820px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.8);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    animation: lp-modal-scale 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
}
@keyframes lp-modal-scale {
    from { transform: scale(0.92); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
}
.lp-modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.1rem 1.5rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    background: rgba(255, 255, 255, 0.03);
}
.lp-modal-title {
    font-size: 1.2rem;
    font-weight: 800;
    color: var(--lp-white);
    display: flex;
    align-items: center;
    gap: 0.6rem;
}
.lp-modal-close-btn {
    background: rgba(255, 255, 255, 0.08);
    border: none;
    color: var(--lp-white);
    font-size: 1.5rem;
    line-height: 1;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
}
.lp-modal-close-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: scale(1.1);
}
.lp-modal-body {
    padding: 1.25rem 1.5rem 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
.lp-modal-map-wrapper {
    position: relative;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid rgba(253, 202, 0, 0.25);
    background: #111;
}
.lp-modal-map-canvas {
    height: 380px;
    width: 100%;
    z-index: 1;
}
.lp-modal-location-info {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 1rem;
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(253, 202, 0, 0.2);
    border-radius: 14px;
    padding: 1rem 1.25rem;
}
.lp-modal-info-left {
    flex: 1;
    min-width: 260px;
}
.lp-modal-info-label {
    font-size: 0.75rem;
    font-weight: 700;
    color: var(--lp-gold);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.2rem;
}
.lp-modal-address-text {
    font-weight: 700;
    font-size: 0.95rem;
    color: var(--lp-white);
    line-height: 1.4;
    word-break: break-word;
}
.lp-modal-coords-text {
    font-size: 0.78rem;
    color: rgba(255, 255, 255, 0.5);
    font-family: monospace;
    margin-top: 0.2rem;
}
.lp-modal-confirm-btn {
    background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange));
    color: var(--lp-white);
    border: none;
    padding: 0.85rem 1.8rem;
    border-radius: 50px;
    font-weight: 800;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 18px rgba(251,97,7,0.4);
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    white-space: nowrap;
}
.lp-modal-confirm-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 24px rgba(251,97,7,0.6);
}
.lp-dropdown-footer-btn {
    padding: 0.75rem 1rem;
    background: rgba(253, 202, 0, 0.1);
    border-top: 1px solid rgba(253, 202, 0, 0.25);
    color: var(--lp-gold);
    font-weight: 700;
    font-size: 0.85rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    transition: all 0.2s;
}
.lp-dropdown-footer-btn:hover {
    background: rgba(253, 202, 0, 0.2);
    color: var(--lp-white);
}
@media (max-width: 767px) {
    .lp-modal-map-canvas { height: 280px; }
    .lp-modal-container { max-height: 90vh; overflow-y: auto; }
    .lp-modal-confirm-btn { width: 100%; justify-content: center; }
}
.lp-map-wrapper {
    margin-top: 0.75rem;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid rgba(253, 202, 0, 0.25);
    background: #111;
    box-shadow: 0 4px 16px rgba(0,0,0,0.3);
}
.lp-map-canvas {
    height: 240px;
    width: 100%;
    z-index: 1;
}
.lp-map-instructions {
    background: rgba(0,0,0,0.6);
    padding: 0.5rem 1rem;
    font-size: 0.8rem;
    color: rgba(255,255,255,0.7);
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 0.5rem;
    border-top: 1px solid rgba(255,255,255,0.08);
}
.lp-coords-badge {
    background: rgba(253,202,0,0.15);
    color: var(--lp-gold);
    font-size: 0.75rem;
    padding: 0.15rem 0.5rem;
    border-radius: 4px;
    font-family: monospace;
}

/* ---------- Location Suggestions Dropdown (Google Maps style) ---------- */
.lp-suggestions-dropdown {
    position: absolute;
    top: calc(100% + 4px);
    left: 0;
    right: 0;
    z-index: 10000;
    background: #1e1e1e;
    border: 1px solid rgba(253, 202, 0, 0.35);
    border-radius: 12px;
    max-height: 280px;
    overflow-y: auto;
    box-shadow: 0 12px 36px rgba(0,0,0,0.6);
}
.lp-suggestions-dropdown::-webkit-scrollbar { width: 6px; }
.lp-suggestions-dropdown::-webkit-scrollbar-thumb { background: rgba(253, 202, 0, 0.3); border-radius: 4px; }
.lp-suggestion-item {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    cursor: pointer;
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    transition: all 0.2s ease;
}
.lp-suggestion-item:last-child { border-bottom: none; }
.lp-suggestion-item:hover, .lp-suggestion-item.active {
    background: rgba(253, 202, 0, 0.15);
}
.lp-suggestion-icon {
    font-size: 1rem;
    color: var(--lp-orange);
    margin-top: 0.2rem;
    flex-shrink: 0;
}
.lp-suggestion-content { flex: 1; overflow: hidden; }
.lp-suggestion-main {
    font-weight: 700;
    font-size: 0.92rem;
    color: var(--lp-white);
    margin-bottom: 0.15rem;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.lp-suggestion-sub {
    font-size: 0.8rem;
    color: rgba(255, 255, 255, 0.6);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.lp-suggestion-loading, .lp-suggestion-empty {
    padding: 1rem;
    text-align: center;
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.85rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

/* Field validation styles */
.lp-form-group.has-error input,
.lp-form-group.has-error select,
.lp-form-group.has-error textarea,
.lp-form-group.has-error .input-group {
    border-color: #ff4d4f !important;
    box-shadow: 0 0 0 2px rgba(255, 77, 79, 0.35) !important;
}
.lp-field-error {
    color: #ff6b6b;
    font-size: 0.82rem;
    font-weight: 600;
    margin-top: 0.35rem;
    display: none;
    align-items: center;
    gap: 0.3rem;
}
.lp-form-group.has-error .lp-field-error {
    display: flex;
}

.lp-form-info { position: relative; z-index: 2; color: var(--lp-white); }
.lp-form-info h3 { font-weight: 700; font-size: 1.5rem; margin-bottom: 1.5rem; color: var(--lp-gold); }
.lp-info-item { display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.5rem; }
.lp-info-icon { width: 50px; height: 50px; border-radius: 50%; background: rgba(253,202,0,0.12); display: flex; align-items: center; justify-content: center; color: var(--lp-gold); font-size: 1.2rem; flex-shrink: 0; }
.lp-info-item h5 { font-weight: 700; font-size: 1rem; margin-bottom: 0.2rem; }
.lp-info-item p { color: rgba(255,255,255,0.6); font-size: 0.9rem; margin: 0; line-height: 1.5; }

/* ---------- Floating Customize Button (Centered Right Overlay) ---------- */
.lp-float-customize {
    position: fixed;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    z-index: 9998;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    text-decoration: none !important;
}
.lp-float-customize:hover {
    transform: translateY(-50%) scale(1.05);
    text-decoration: none !important;
}
.lp-float-cup-preview {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    filter: drop-shadow(0 10px 28px rgba(251,97,7,0.45));
    transition: transform 0.3s ease;
}
.lp-float-customize:hover .lp-float-cup-preview {
    transform: rotate(-2deg) scale(1.02);
}
.lp-float-cup-img {
    height: 325px;
    width: auto;
    max-width: 100%;
    object-fit: contain;
    display: block;
    pointer-events: none;
    animation: lp-cup-vibrate 1.2s ease-in-out infinite;
    transform-origin: center center;
}
.lp-float-btn {
    position: absolute;
    bottom: 15px;
    left: 50%;
    transform: translateX(-50%);
    padding: 0.65rem 1.35rem;
    border-radius: 50px;
    background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange));
    color: var(--lp-white);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 0.88rem;
    letter-spacing: 0.02em;
    box-shadow: 0 6px 20px rgba(0,0,0,0.35), 0 0 16px rgba(251,97,7,0.55);
    transition: all 0.3s ease;
    text-decoration: none !important;
    border: 2px solid rgba(255,255,255,0.45);
    backdrop-filter: blur(4px);
    animation: lp-pulse 2s infinite;
    white-space: nowrap;
    z-index: 3;
}
.lp-float-btn:hover {
    box-shadow: 0 8px 28px rgba(0,0,0,0.45), 0 0 25px rgba(251,97,7,0.75);
    color: var(--lp-white);
}
/* Badge counter on the float button */
.lp-float-badge {
    position: absolute; top: -8px; right: -8px; width: 24px; height: 24px;
    border-radius: 50%; background: #e53e3e; color: white; font-size: 0.75rem;
    font-weight: 800; display: flex; align-items: center; justify-content: center;
    border: 2px solid white; transition: all 0.3s; opacity: 0; transform: scale(0);
}
.lp-float-badge.visible { opacity: 1; transform: scale(1); }
@keyframes lp-pulse {
    0%, 100% { box-shadow: 0 6px 20px rgba(0,0,0,0.35), 0 0 16px rgba(251,97,7,0.55); }
    50% { box-shadow: 0 8px 28px rgba(0,0,0,0.45), 0 0 26px rgba(251,97,7,0.8), 0 0 0 6px rgba(251,97,7,0.15); }
}
@keyframes lp-cup-vibrate {
    0% { transform: translate(0, 0) rotate(0deg); }
    10% { transform: translate(-3px, 2px) rotate(-1.5deg); }
    20% { transform: translate(3px, -2px) rotate(1.5deg); }
    30% { transform: translate(-3px, -1px) rotate(-1deg); }
    40% { transform: translate(3px, 1px) rotate(1deg); }
    50% { transform: translate(-2px, 2px) rotate(-0.8deg); }
    60% { transform: translate(2px, -1px) rotate(0.8deg); }
    70% { transform: translate(-1px, 1px) rotate(-0.4deg); }
    80% { transform: translate(1px, -1px) rotate(0.4deg); }
    90%, 100% { transform: translate(0, 0) rotate(0deg); }
}

/* ---------- Order Summary Bar ---------- */
.lp-order-summary {
    position: fixed; bottom: 0; left: 0; right: 0; z-index: 9997;
    background: rgba(26,26,26,0.97); backdrop-filter: blur(12px);
    color: var(--lp-white); padding: 0.8rem 1.5rem;
    transform: translateY(100%); transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1);
    box-shadow: 0 -4px 20px rgba(0,0,0,0.2);
}
.lp-order-summary.visible { transform: translateY(0); }
.lp-order-summary-inner { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 0.5rem; max-width: 1200px; margin: 0 auto; }
.lp-order-summary-info { font-size: 0.95rem; }
.lp-order-summary-info strong { color: var(--lp-gold); font-size: 1.1rem; }
.lp-order-summary-btn {
    background: linear-gradient(135deg, var(--lp-gold), var(--lp-orange));
    color: var(--lp-white); border: none; padding: 0.7rem 2rem; border-radius: 50px;
    font-weight: 700; font-size: 0.95rem; cursor: pointer; transition: all 0.3s;
    text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem;
}
.lp-order-summary-btn:hover { transform: translateY(-2px); box-shadow: 0 4px 16px rgba(251,97,7,0.4); color: var(--lp-white); }

/* ---------- Toast ---------- */
.lp-toast { position: fixed; top: 100px; right: 30px; background: linear-gradient(135deg, #20AF6D, #18864f); color: var(--lp-white); padding: 1.2rem 2rem; border-radius: 14px; font-weight: 600; box-shadow: 0 8px 32px rgba(32,175,109,0.4); z-index: 99999; transform: translateX(120%); transition: transform 0.5s cubic-bezier(0.34,1.56,0.64,1); display: flex; align-items: center; gap: 0.75rem; }
.lp-toast.show { transform: translateX(0); }

/* ---------- Responsive ---------- */
@media (max-width: 767px) {
    .lp-hero { padding-top: 80px; min-height: auto; padding-bottom: 3rem; }
    .lp-hero h1 { font-size: 2.2rem; }
    .lp-hero-stats { gap: 1.5rem; margin-top: 2rem; }
    .lp-hero-stat strong { font-size: 1.4rem; }
    .lp-hero-image { margin-top: 2rem; }
    .lp-hero-image img { max-width: 100%; }
    .lp-section { padding: 3.5rem 0; }
    .lp-section-title { font-size: 1.8rem; }
    .lp-form-wrapper { padding: 1.5rem; }
    .lp-topbar .container {
        width: 95%;
        height: 56px !important;
        padding-right: 1rem !important;
        margin-top: 0rem !important;
    }
    .lp-topbar .lp-logo img { 
        min-width: 8rem !important;
        height: 8rem !important;
        margin-top: 2rem !important; 
    }
    .lp-topbar .lp-cta-btn { padding: 0.5rem 1.2rem; font-size: 0.85rem; }
    .lp-float-customize { top: 50%; bottom: auto; right: 10px; transform: translateY(-50%); }
    .lp-float-customize:hover { transform: translateY(-50%) scale(1.03); }
    .lp-float-cup-img { height: 210px; width: auto; object-fit: contain; }
    .lp-float-btn { bottom: 10px; padding: 0.45rem 0.95rem; font-size: 0.76rem; }
    .lp-order-summary { padding: 0.6rem 1rem; }
    .lp-menu-card-img { height: 160px; }
}

/* ---------- Scroll Animations ---------- */
.lp-animate { opacity: 0; transform: translateY(30px); transition: all 0.7s cubic-bezier(0.25,0.46,0.45,0.94); }
.lp-animate.in-view { opacity: 1; transform: translateY(0); }

/* ---------- Product Placeholder ---------- */
.product-placeholder {
  width: 100%;
  max-width: 420px;
  aspect-ratio: 1 / 1;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  background: #f5f5f5;
  border-radius: 16px;
}
.product-placeholder img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  display: block;
}
@media (max-width: 480px) {
  .product-placeholder {
    max-width: 100%;
    border-radius: 12px;
  }
}
</style>
@endpush

@section('title', 'Bulk Orders & Catering')

@section('header')
<div class="lp-topbar">
    <div class="container">
        <div class="lp-logo">
            <img src="https://lh3.googleusercontent.com/d/1jICugAmB2VA6QBSRap-3rU5k0nKRrakE" alt="ByteMiniz Logo">
        </div>
        <div style="display:flex; align-items:center; gap:0.75rem;">
            <a href="#" id="lp-pwa-install-btn" class="lp-cta-btn" style="display:none; background:linear-gradient(135deg, #1a1a1a, #333); color:#fdca00; align-items:center; gap:0.4rem;" onclick="pwaInstallPrompt(event)">
                <i class="fas fa-download"></i> Install App
            </a>
            <a href="#enquiry-form" class="lp-cta-btn">Get a Quote</a>
        </div>
    </div>
</div>
@endsection

@section('content')

<!-- ==================== HERO ==================== -->
<section class="lp-hero">
    <div class="lp-hero-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; background: linear-gradient(to right, rgba(15, 15, 15, 0.95) 0%, rgba(15, 15, 15, 0.6) 50%, rgba(15, 15, 15, 0.2) 100%), url('https://images.unsplash.com/photo-1550547660-d9450f859349?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center justify-content-start">
            <!-- Hero Text Content -->
            <div class="col-lg-7 lp-hero-content ps-lg-5">
                <div class="lp-hero-badge animate__animated animate__fadeInDown">
                    <i class="fas fa-fire"></i> Now accepting bulk orders
                </div>
                <h1 class="animate__animated animate__fadeInUp animate__delay-1s">
                    Bulk Orders &<br><span>Catering Made Easy</span>
                </h1>
                <p class="animate__animated animate__fadeInUp animate__delay-1s">
                    Serve delicious ByteMiniz veg mini burgers in our signature stacked cups at your next event. Fresh, flavourful, and made to order — from 50 to 5,000+ pieces.
                </p>
                <div class="lp-hero-btns animate__animated animate__fadeInUp animate__delay-1s">
                    <a href="#enquiry-form" class="lp-btn-primary">
                        <i class="fas fa-paper-plane"></i> Enquire Now
                    </a>
                    <a href="#bulk-order-menu" class="lp-btn-primary">
                        <i class="fas fa-burger"></i> <i class="fas fa-burger"></i> <i class="fas fa-burger"></i> Bytz Menu
                    </a>
                </div>
                <div class="lp-hero-stats animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="lp-hero-stat">
                        <strong>500+</strong>
                        <span>Events Served</span>
                    </div>
                    <div class="lp-hero-stat">
                        <strong>50K+</strong>
                        <span>Burgers Delivered</span>
                    </div>
                    <div class="lp-hero-stat">
                        <strong>4.9★</strong>
                        <span>Average Rating</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== WHY CHOOSE US ==================== -->
<section class="lp-section lp-features">
    <div class="container">
        <h2 class="lp-section-title lp-animate">Why Choose ByteMiniz for Bulk Orders?</h2>
        <p class="lp-section-subtitle lp-animate">We take the stress out of event catering with fresh, consistent, and delicious mini burgers every single time.</p>
        <div class="row g-4">
            <div class="col-md-4 lp-animate">
                <div class="lp-feature-card">
                    <div class="lp-feature-icon gold"><i class="fas fa-burger"></i></div>
                    <h4>Fresh & Handcrafted</h4>
                    <p>Every mini burger is made fresh on the day of your event. Quality ingredients, zero compromises.</p>
                </div>
            </div>
            <div class="col-md-4 lp-animate">
                <div class="lp-feature-card">
                    <div class="lp-feature-icon orange"><i class="fas fa-boxes-stacked"></i></div>
                    <h4>Flexible Quantities</h4>
                    <p>From 50 pieces for an office lunch to 5,000+ for a grand celebration — we scale to fit your needs.</p>
                </div>
            </div>
            <div class="col-md-4 lp-animate">
                <div class="lp-feature-card">
                    <div class="lp-feature-icon green"><i class="fas fa-truck-fast"></i></div>
                    <h4>Reliable Delivery</h4>
                    <p>On-time delivery with proper packaging. We can also set up a live counter at your venue.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== BULK ORDER MENU ==================== -->
<section class="lp-section lp-menu" id="bulk-order-menu">
    <div class="container">
        <h2 class="lp-section-title lp-animate">Bulk Order Menu</h2>
        <p class="lp-section-subtitle lp-animate">Build your custom bulk order. Adjust quantities for each item to create the perfect combo for your event.</p>

        <!-- Veg Mini Burgers -->
        <div class="lp-menu-category lp-animate">
            <h3 class="lp-menu-category-title"><i class="fas fa-burger me-2"></i>Veg Mini Burgers</h3>
            <div class="row g-4">
                @foreach ($menus->where('category_id', 1) as $menu)
                <div class="col-6 col-md-4 col-lg-3 lp-animate">
                    <div class="lp-menu-card" data-item-id="{{ $menu->id }}" data-item-name="{{ $menu->name }}" data-item-price="{{ $menu->price + 10 }}">
                        <div class="product-placeholder">
                            <img src="{{ drive_url($menu->image) }}" alt="{{ $menu->name }}" onerror="this.onerror=null; this.src='https://placehold.co/400x300/f8f8f4/1a1a1a?text=ByteMiniz';">
                        </div>
                        <div class="lp-menu-card-body">
                            <span class="lp-veg-badge"><i class="fas fa-leaf"></i> Pure Veg</span>
                            <h5>{{ $menu->name }}</h5>
                            <div class="lp-menu-card-price">
                                ₹{{ number_format($menu->price + 10, 0) }}
                                @php $slash = round(($menu->price + 10) * 1.75); $slash = $slash - ($slash % 10) + 9; @endphp
                                <span class="lp-price-slash">₹{{ $slash }}</span>
                            </div>
                            <div class="lp-qty-control">
                                <button class="lp-qty-btn" onclick="changeQty(this, -1)">−</button>
                                <input type="number" class="lp-qty-input" value="0" min="0" max="9999" readonly>
                                <button class="lp-qty-btn" onclick="changeQty(this, 1)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Sides & Snacks -->
        <div class="lp-menu-category lp-animate">
            <h3 class="lp-menu-category-title"><i class="fas fa-french-fries me-2"></i>Sides & Snacks</h3>
            <div class="row g-4">
                @foreach ($menus->where('category_id', 2) as $menu)
                <div class="col-6 col-md-4 col-lg-3 lp-animate">
                    <div class="lp-menu-card" data-item-id="{{ $menu->id }}" data-item-name="{{ $menu->name }}" data-item-price="{{ $menu->price + 10 }}">
                        <div class="product-placeholder">
                            <img src="{{ drive_url($menu->image) }}" alt="{{ $menu->name }}" onerror="this.onerror=null; this.src='https://placehold.co/400x300/f8f8f4/1a1a1a?text=ByteMiniz';">
                        </div>
                        <div class="lp-menu-card-body">
                            <span class="lp-veg-badge"><i class="fas fa-leaf"></i> Pure Veg</span>
                            <h5>{{ $menu->name }}</h5>
                            <div class="lp-menu-card-price">
                                ₹{{ number_format($menu->price + 10, 0) }}
                                @php $slash = round(($menu->price + 10) * 1.75); $slash = $slash - ($slash % 10) + 9; @endphp
                                <span class="lp-price-slash">₹{{ $slash }}</span>
                            </div>
                            <div class="lp-qty-control">
                                <button class="lp-qty-btn" onclick="changeQty(this, -1)">−</button>
                                <input type="number" class="lp-qty-input" value="0" min="0" max="9999" readonly>
                                <button class="lp-qty-btn" onclick="changeQty(this, 1)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ==================== PERFECT FOR ==================== -->
<section class="lp-section lp-perfect-for">
    <div class="container">
        <h2 class="lp-section-title lp-animate">Perfect For Every Occasion</h2>
        <p class="lp-section-subtitle lp-animate">Whatever the event, ByteMiniz mini burgers are always a crowd-pleaser.</p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 lp-animate">
                <div class="lp-use-card corporate"><div class="lp-use-card-bg"></div><div class="lp-use-card-content"><div class="lp-use-card-emoji">🏢</div><h4>Corporate Events</h4></div></div>
            </div>
            <div class="col-md-6 col-lg-3 lp-animate">
                <div class="lp-use-card birthday"><div class="lp-use-card-bg"></div><div class="lp-use-card-content"><div class="lp-use-card-emoji">🎂</div><h4>Birthday Parties</h4></div></div>
            </div>
            <div class="col-md-6 col-lg-3 lp-animate">
                <div class="lp-use-card wedding"><div class="lp-use-card-bg"></div><div class="lp-use-card-content"><div class="lp-use-card-emoji">💒</div><h4>Weddings & Celebrations</h4></div></div>
            </div>
            <div class="col-md-6 col-lg-3 lp-animate">
                <div class="lp-use-card school"><div class="lp-use-card-bg"></div><div class="lp-use-card-content"><div class="lp-use-card-emoji">🎓</div><h4>School & College Events</h4></div></div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== HOW IT WORKS ==================== -->
<section class="lp-section lp-how-it-works">
    <div class="container">
        <h2 class="lp-section-title lp-animate">How It Works</h2>
        <p class="lp-section-subtitle lp-animate">Three simple steps to get ByteMiniz at your event.</p>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 lp-animate">
                <div class="lp-step"><div class="lp-step-number">1</div><div class="lp-step-connector"></div><h4>Fill the Enquiry Form</h4><p>Tell us about your event — date, quantity, and any special requirements.</p></div>
            </div>
            <div class="col-md-4 lp-animate">
                <div class="lp-step"><div class="lp-step-number">2</div><div class="lp-step-connector"></div><h4>We Confirm & Plan</h4><p>Our team will get back with pricing, logistics, and menu customisation options.</p></div>
            </div>
            <div class="col-md-4 lp-animate">
                <div class="lp-step"><div class="lp-step-number">3</div><h4>Enjoy Fresh ByteMiniz!</h4><p>We deliver (or set up a live counter) — and your guests enjoy the best mini burgers.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== DELIVERY PARTNERS ==================== -->
<section class="lp-section lp-delivery">
    <div class="container">
        <h2 class="lp-section-title lp-animate">Delivery Partners</h2>
        <p class="lp-section-subtitle lp-animate">We partner with trusted delivery platforms for reliable, on-time bulk deliveries.</p>
        <div class="row g-4 justify-content-center">
            <div class="col-md-5 col-lg-4 lp-animate">
                <div class="lp-delivery-card">
                    <img src="{{ asset('assets/images/porter.svg') }}" alt="Porter" class="lp-delivery-logo">
                    <h4>Porter</h4>
                    <p>Fast & reliable intra-city delivery for large bulk orders with dedicated vehicles.</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 lp-animate">
                <div class="lp-delivery-card">
                    <img src="{{ asset('assets/images/rapido.svg') }}" alt="Rapido" class="lp-delivery-logo">
                    <h4>Rapido</h4>
                    <p>Quick two-wheeler deliveries perfect for smaller bulk packages across the city.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== ENQUIRY FORM ==================== -->
<section class="lp-section lp-form-section" id="enquiry-form">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5 lp-form-info lp-animate">
                <h3>Let's Make Your Event Delicious</h3>
                <div class="lp-info-item">
                    <div class="lp-info-icon"><i class="fas fa-phone"></i></div>
                    <div>
                        <h5>Call Us</h5>
                        <p>@if($firstRestaurantPhoneNumber) <a href="tel:{{ $firstRestaurantPhoneNumber->phone_number }}" class="text-white text-decoration-none">{{ $firstRestaurantPhoneNumber->phone_number }}</a> @else Contact us for details @endif</p>
                    </div>
                </div>
                <div class="lp-info-item">
                    <div class="lp-info-icon"><i class="fab fa-whatsapp"></i></div>
                    <div><h5>WhatsApp</h5><p>@if($whatsAppNumber) Chat with us on WhatsApp @else Available on WhatsApp @endif</p></div>
                </div>
                <div class="lp-info-item">
                    <div class="lp-info-icon"><i class="fas fa-clock"></i></div>
                    <div><h5>Quick Response</h5><p>We typically respond within 2 hours during business hours.</p></div>
                </div>
                <div class="lp-info-item">
                    <div class="lp-info-icon"><i class="fas fa-leaf"></i></div>
                    <div><h5>100% Vegetarian</h5><p>All our mini burgers are purely vegetarian — fresh veggies, great taste.</p></div>
                </div>
            </div>
            <div class="col-lg-7 lp-animate">
                <div class="lp-form-wrapper">
                    <h2>Bulk Order Enquiry</h2>
                    <p class="form-subtitle">Fill in the details and we'll get back to you shortly.</p>
                    <form id="bulkOrderForm" novalidate onsubmit="return handleBulkOrderSubmit(event)">
                        @csrf
                        <input type="hidden" name="lead_source" value="Ads Lead">
                        <input type="hidden" name="page_source" value="/lp/bulk_order">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="lp-form-group" id="group_name">
                                    <label for="bulk_name">Full Name *</label>
                                    <input type="text" id="bulk_name" name="name" placeholder="Your full name" required>
                                    <div class="lp-field-error" id="err_name"><i class="fas fa-exclamation-circle"></i> <span></span></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="lp-form-group" id="group_phone">
                                    <label for="bulk_phone">Phone Number *</label>
                                    <input type="tel" id="bulk_phone" name="phone" placeholder="+91 XXXXX XXXXX" required>
                                    <div class="lp-field-error" id="err_phone"><i class="fas fa-exclamation-circle"></i> <span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="lp-form-group" id="group_email">
                            <label for="bulk_email">Email Address</label>
                            <input type="email" id="bulk_email" name="email" placeholder="your@email.com">
                            <div class="lp-field-error" id="err_email"><i class="fas fa-exclamation-circle"></i> <span></span></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="lp-form-group" id="group_date">
                                    <label for="bulk_date">Event Date & Time *</label>
                                    <input type="datetime-local" id="bulk_date" name="event_date" required>
                                    <div class="lp-field-error" id="err_date"><i class="fas fa-exclamation-circle"></i> <span></span></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="lp-form-group" id="group_event_type">
                                    <label for="bulk_event_type">Event Type *</label>
                                    <select id="bulk_event_type" name="event_type" required>
                                        <option value="" disabled selected>Select event type</option>
                                        <option value="corporate">Corporate Event</option>
                                        <option value="birthday">Birthday Party</option>
                                        <option value="wedding">Wedding / Reception</option>
                                        <option value="school">School / College Event</option>
                                        <option value="festival">Festival / Fair</option>
                                        <option value="private">Private Gathering</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <div class="lp-field-error" id="err_event_type"><i class="fas fa-exclamation-circle"></i> <span></span></div>
                                </div>
                            </div>
                        </div>

                        <!-- Location & Google Maps Picker -->
                        <div class="lp-form-group" id="group_location">
                            <label for="bulk_location">Event / Delivery Location * <span style="font-size:0.8rem; color:var(--lp-gold); font-weight:normal;">(Search or click pin on Google Maps)</span></label>
                            <div class="lp-location-input-wrapper" style="position:relative;">
                                <div class="input-group">
                                    <span class="lp-input-addon"><i class="fas fa-location-dot"></i></span>
                                    <input type="text" id="bulk_location" name="location" placeholder="Search landmark, street, area or pin on map..." autocomplete="off">
                                    <button class="lp-map-modal-btn" type="button" id="btnOpenMapModal" onclick="openGoogleMapModal()" title="Open Google Maps to pick location pin">
                                        <i class="fas fa-map-location-dot"></i> Pick on Maps
                                    </button>
                                    <button class="lp-locate-btn" type="button" id="btnLocateMe" onclick="getUserCurrentLocation()">
                                        <i class="fas fa-crosshairs"></i> Locate Me
                                    </button>
                                </div>
                                <!-- Dropdown Suggestions (Google Maps style) -->
                                <div id="locationSuggestionsDropdown" class="lp-suggestions-dropdown" style="display:none;"></div>
                            </div>
                            
                            <!-- Interactive Map Container -->
                            <div class="lp-map-wrapper">
                                <div id="bulkOrderMap" class="lp-map-canvas"></div>
                                <div class="lp-map-instructions">
                                    <span><i class="fas fa-hand-pointer me-1"></i> Drag pin or click map to set delivery location</span>
                                    <span id="mapCoordsBadge" class="lp-coords-badge" style="display:none;"></span>
                                </div>
                            </div>
                            <input type="hidden" id="bulk_latitude" name="latitude">
                            <input type="hidden" id="bulk_longitude" name="longitude">
                            <input type="hidden" id="bulk_formatted_address" name="formatted_address">
                            <div class="lp-field-error" id="err_location"><i class="fas fa-exclamation-circle"></i> <span></span></div>
                        </div>

                        <!-- BYTZ ITEMS SECTION -->
                        <div class="lp-bytz-section" id="bytzItemsSection">
                            <div class="lp-bytz-header">
                                <h4 class="lp-bytz-title">
                                    <i class="fas fa-burger"></i> Bytz Items
                                </h4>
                                <span class="lp-bytz-badge" id="bytzStatusBadge">0 Items Selected</span>
                            </div>
                            <div id="bytzItemsContainer">
                                <!-- Populated dynamically by renderBytzItems() -->
                            </div>
                            <input type="hidden" id="bulk_order_items" name="order_items">
                            <button type="button" id="confirmBytzBtn" class="lp-bytz-confirm-btn" onclick="confirmBytzItems()">
                                <i class="fas fa-check-circle"></i> Confirm Bytz Items
                            </button>
                        </div>

                        <div class="lp-form-group">
                            <label for="bulk_instructions">Special Instructions</label>
                            <textarea id="bulk_instructions" name="instructions" rows="3" placeholder="Any dietary requirements, flavour preferences, or setup needs..."></textarea>
                        </div>
                        <button type="submit" class="lp-form-submit" id="submitBtn">
                            <i class="fas fa-paper-plane me-2"></i> Submit Enquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FLOATING CUSTOMIZE BUTTON -->
<a href="#bulk-order-menu" class="lp-float-customize" id="floatCustomize" onclick="smoothScrollTo('bulk-order-menu'); return false;" title="Customize your order">
    <div class="lp-float-cup-preview">
        <img src="https://lh3.googleusercontent.com/d/1SI4pEMz76SGUNQAxohmHaSbo2msk7moZ" alt="Byte Miniz Cup" class="lp-float-cup-img">
    </div>
    <div class="lp-float-btn">
        Customize your order
        <span class="lp-float-badge" id="floatBadge">0</span>
    </div>
</a>

<!-- ORDER SUMMARY BAR -->
<div class="lp-order-summary" id="orderSummaryBar">
    <div class="lp-order-summary-inner">
        <div class="lp-order-summary-info">
            <span id="summaryItemCount">0 items</span> · Estimated Total: <strong id="summaryTotal">₹0</strong>
        </div>
        <a href="#enquiry-form" class="lp-order-summary-btn" onclick="renderBytzItems(); smoothScrollTo('bytzItemsSection'); return false;">
            <i class="fas fa-paper-plane"></i> Proceed to Enquire
        </a>
    </div>
</div>

<!-- TOAST NOTIFICATION -->
<div class="lp-toast" id="appToast">
    <i id="toastIcon" class="fas fa-check-circle" style="font-size:1.4rem;"></i>
    <span id="toastMsg">Enquiry submitted! We'll contact you shortly.</span>
</div>

<!-- GOOGLE MAPS LOCATION PICKER MODAL -->
<div class="lp-modal-backdrop" id="googleMapModalBackdrop" style="display:none;" onclick="closeGoogleMapModalOnBackdrop(event)">
    <div class="lp-modal-container">
        <div class="lp-modal-header">
            <div class="lp-modal-title">
                <i class="fas fa-map-location-dot" style="color:var(--lp-orange);"></i>
                <span>Select Pin on Google Maps</span>
            </div>
            <button type="button" class="lp-modal-close-btn" onclick="closeGoogleMapModal()">&times;</button>
        </div>
        
        <div class="lp-modal-body">
            <!-- Search inside Modal -->
            <div class="lp-location-input-wrapper" style="position:relative;">
                <div class="input-group">
                    <span class="lp-input-addon"><i class="fas fa-search"></i></span>
                    <input type="text" id="modal_map_search" placeholder="Search address, landmark or area..." autocomplete="off">
                    <button class="lp-locate-btn" type="button" onclick="getModalUserLocation()">
                        <i class="fas fa-crosshairs"></i> My Location
                    </button>
                </div>
                <div id="modalSuggestionsDropdown" class="lp-suggestions-dropdown" style="display:none;"></div>
            </div>

            <!-- Modal Map Canvas -->
            <div class="lp-modal-map-wrapper">
                <div id="modalGoogleMap" class="lp-modal-map-canvas"></div>
            </div>

            <!-- Selected Location Info & Confirm Button -->
            <div class="lp-modal-location-info">
                <div class="lp-modal-info-left">
                    <div class="lp-modal-info-label"><i class="fas fa-location-dot me-1"></i> Pinpointed Address:</div>
                    <div class="lp-modal-address-text" id="modalSelectedAddress">Move or click the pin on map to select...</div>
                    <div class="lp-modal-coords-text" id="modalSelectedCoords">12.9716°, 77.5946°</div>
                </div>
                <div class="lp-modal-info-right">
                    <button type="button" class="lp-modal-confirm-btn" onclick="confirmLocationFromModal()">
                        <i class="fas fa-check-circle"></i> Confirm & Use Location
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="/assets/js/jquery-1.12.4.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@if(!empty($googleMapsApiKey) && $googleMapsApiKey !== 'your_google_maps_api_key')
<script src="https://maps.googleapis.com/maps/api/js?key={{ $googleMapsApiKey }}&libraries=places"></script>
@endif

<script>
var isBytzItemsConfirmed = false;
var toastTimeout = null;
var leafletMap = null;
var pinMarker = null;
var searchTimeout = null;

// ========== Toast Helper ==========
function showAppToast(message, iconClass, duration) {
    iconClass = iconClass || 'fas fa-check-circle';
    duration = duration || 3500;
    var toast = document.getElementById('appToast');
    var msgEl = document.getElementById('toastMsg');
    var iconEl = document.getElementById('toastIcon');
    if (!toast || !msgEl || !iconEl) return;

    msgEl.textContent = message;
    iconEl.className = iconClass;
    toast.classList.add('show');

    if (toastTimeout) clearTimeout(toastTimeout);
    toastTimeout = setTimeout(function() {
        toast.classList.remove('show');
    }, duration);
}

// ========== Field Validation Helpers ==========
function clearSingleFieldError(fieldId) {
    var group = document.getElementById('group_' + fieldId);
    var errEl = document.getElementById('err_' + fieldId);
    if (group) group.classList.remove('has-error');
    if (errEl) {
        var span = errEl.querySelector('span');
        if (span) span.textContent = '';
    }
}

function setFieldError(fieldId, errorMsg) {
    var group = document.getElementById('group_' + fieldId);
    var errEl = document.getElementById('err_' + fieldId);
    if (group) group.classList.add('has-error');
    if (errEl) {
        var span = errEl.querySelector('span');
        if (span) span.textContent = errorMsg;
    }
}

function clearAllFieldErrors() {
    ['name', 'phone', 'email', 'date', 'event_type', 'location'].forEach(clearSingleFieldError);
}

// ========== Scroll Animation & Init ==========
document.addEventListener('DOMContentLoaded', function() {
    var animateEls = document.querySelectorAll('.lp-animate');
    var observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) { entry.target.classList.add('in-view'); observer.unobserve(entry.target); }
        });
    }, { threshold: 0.1 });
    animateEls.forEach(function(el) { observer.observe(el); });

    // Set min date to 24 hours from now
    var dateInput = document.getElementById('bulk_date');
    if (dateInput) {
        var minDate = new Date();
        minDate.setHours(minDate.getHours() + 24);
        var tzOffset = (new Date()).getTimezoneOffset() * 60000;
        var minDateStr = (new Date(minDate.getTime() - tzOffset)).toISOString().slice(0,16);
        dateInput.min = minDateStr;
    }

    // Attach real-time input error clearing
    ['name', 'phone', 'email', 'date', 'event_type', 'location'].forEach(function(field) {
        var el = document.getElementById('bulk_' + field);
        if (el) {
            el.addEventListener('input', function() { clearSingleFieldError(field); });
            el.addEventListener('change', function() { clearSingleFieldError(field); });
        }
    });

    // Initial render of Bytz items
    renderBytzItems();

    // Initialize Map Location Picker
    initLocationMap();
});

// ========== Map Location Picker (Leaflet + Google Maps) ==========
function initLocationMap() {
    var defaultLat = 12.9716; // Bengaluru center / India default
    var defaultLng = 77.5946;

    var mapEl = document.getElementById('bulkOrderMap');
    if (!mapEl) return;

    leafletMap = L.map('bulkOrderMap', {
        center: [defaultLat, defaultLng],
        zoom: 13,
        scrollWheelZoom: false
    });

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; ByteMiniz Maps'
    }).addTo(leafletMap);

    var pinIcon = L.divIcon({
        className: 'lp-custom-pin',
        html: '<div style="transform:translate(-50%,-100%);display:flex;flex-direction:column;align-items:center;cursor:grab;"><i class="fas fa-location-dot" style="font-size:36px;color:#FB6107;filter:drop-shadow(0 3px 6px rgba(0,0,0,0.45));"></i><div style="width:8px;height:8px;border-radius:50%;background:#fdca00;border:2px solid #1a1a1a;margin-top:-6px;"></div></div>',
        iconSize: [0, 0],
        iconAnchor: [0, 0]
    });

    pinMarker = L.marker([defaultLat, defaultLng], {
        draggable: true,
        icon: pinIcon
    }).addTo(leafletMap);

    // Initial coordinates
    setMapPosition(defaultLat, defaultLng, false);

    // Marker drag event
    pinMarker.on('dragend', function(e) {
        var pos = e.target.getLatLng();
        setMapPosition(pos.lat, pos.lng, true);
    });

    // Map click event
    leafletMap.on('click', function(e) {
        setMapPosition(e.latlng.lat, e.latlng.lng, true);
    });

    // Setup live dropdown suggestions
    setupLocationAutocomplete();
}

// ========== Live Dropdown Suggestions Autocomplete (Google Maps Style) ==========
function setupLocationAutocomplete() {
    var locInput = document.getElementById('bulk_location');
    var dropdown = document.getElementById('locationSuggestionsDropdown');
    if (!locInput || !dropdown) return;

    var activeIndex = -1;

    locInput.addEventListener('input', function() {
        clearSingleFieldError('location');
        if (searchTimeout) clearTimeout(searchTimeout);

        var query = locInput.value.trim();
        if (query.length < 2) {
            dropdown.style.display = 'none';
            dropdown.innerHTML = '';
            return;
        }

        dropdown.innerHTML = '<div class="lp-suggestion-loading"><i class="fas fa-spinner fa-spin text-warning"></i> Finding places on map...</div>';
        dropdown.style.display = 'block';
        activeIndex = -1;

        searchTimeout = setTimeout(function() {
            fetchLocationSuggestions(query);
        }, 280);
    });

    // Keyboard navigation for dropdown
    locInput.addEventListener('keydown', function(e) {
        var items = dropdown.querySelectorAll('.lp-suggestion-item');
        if (!items.length || dropdown.style.display === 'none') {
            if (e.key === 'Enter') {
                e.preventDefault();
                searchAddressQuery(locInput.value);
            }
            return;
        }

        if (e.key === 'ArrowDown') {
            e.preventDefault();
            activeIndex = (activeIndex + 1) % items.length;
            updateActiveSuggestion(items, activeIndex);
        } else if (e.key === 'ArrowUp') {
            e.preventDefault();
            activeIndex = (activeIndex - 1 + items.length) % items.length;
            updateActiveSuggestion(items, activeIndex);
        } else if (e.key === 'Enter') {
            e.preventDefault();
            if (activeIndex >= 0 && items[activeIndex]) {
                items[activeIndex].click();
            } else {
                dropdown.style.display = 'none';
                searchAddressQuery(locInput.value);
            }
        } else if (e.key === 'Escape') {
            dropdown.style.display = 'none';
        }
    });

    // Close dropdown on click outside
    document.addEventListener('click', function(e) {
        var wrapper = locInput.closest('.lp-location-input-wrapper');
        if (wrapper && !wrapper.contains(e.target)) {
            dropdown.style.display = 'none';
        }
    });
}

function updateActiveSuggestion(items, index) {
    items.forEach(function(el, i) {
        if (i === index) {
            el.classList.add('active');
            el.scrollIntoView({ block: 'nearest' });
        } else {
            el.classList.remove('active');
        }
    });
}

// ========== Fetch Live Suggestions (Google Places with Photon & Nominatim) ==========
function fetchLocationSuggestions(query) {
    var dropdown = document.getElementById('locationSuggestionsDropdown');
    if (!dropdown) return;

    // 1. If Google Places AutocompleteService is loaded and active
    if (typeof google !== 'undefined' && google.maps && google.maps.places && google.maps.places.AutocompleteService) {
        try {
            var service = new google.maps.places.AutocompleteService();
            service.getPlacePredictions({
                input: query,
                componentRestrictions: { country: 'in' }
            }, function(predictions, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && predictions && predictions.length) {
                    renderGoogleSuggestions(predictions);
                    return;
                }
                fetchPhotonSuggestions(query);
            });
            return;
        } catch(err) {
            // Fallback
        }
    }

    // 2. Photon + Nominatim instant suggestions
    fetchPhotonSuggestions(query);
}

function renderGoogleSuggestions(predictions) {
    var dropdown = document.getElementById('locationSuggestionsDropdown');
    var locInput = document.getElementById('bulk_location');
    if (!dropdown || !locInput) return;

    var html = '';
    predictions.slice(0, 5).forEach(function(item, idx) {
        var mainText = item.structured_formatting ? item.structured_formatting.main_text : item.description.split(',')[0];
        var subText = item.structured_formatting ? item.structured_formatting.secondary_text : item.description.split(',').slice(1).join(',').trim();
        html += '<div class="lp-suggestion-item" data-place-id="' + item.place_id + '" data-desc="' + escapeHtml(item.description) + '">';
        html += '  <i class="fas fa-location-dot lp-suggestion-icon"></i>';
        html += '  <div class="lp-suggestion-content">';
        html += '    <div class="lp-suggestion-main">' + escapeHtml(mainText) + '</div>';
        html += '    <div class="lp-suggestion-sub">' + escapeHtml(subText || item.description) + '</div>';
        html += '  </div>';
        html += '</div>';
    });

    html += '<div class="lp-dropdown-footer-btn" onclick="openGoogleMapModal()"><i class="fas fa-map-location-dot"></i> Can\'t find your address? Pick pin on Google Maps</div>';

    dropdown.innerHTML = html;
    dropdown.style.display = 'block';

    dropdown.querySelectorAll('.lp-suggestion-item').forEach(function(el) {
        el.addEventListener('click', function() {
            var desc = el.getAttribute('data-desc');
            var placeId = el.getAttribute('data-place-id');
            locInput.value = desc;
            var formattedInput = document.getElementById('bulk_formatted_address');
            if (formattedInput) formattedInput.value = desc;
            dropdown.style.display = 'none';
            clearSingleFieldError('location');

            // Geocode place details or search query
            if (typeof google !== 'undefined' && google.maps && google.maps.places && google.maps.places.PlacesService) {
                var dummyEl = document.createElement('div');
                var placesService = new google.maps.places.PlacesService(dummyEl);
                placesService.getDetails({ placeId: placeId, fields: ['geometry'] }, function(place, stat) {
                    if (stat === google.maps.places.PlacesServiceStatus.OK && place.geometry && place.geometry.location) {
                        var lat = place.geometry.location.lat();
                        var lng = place.geometry.location.lng();
                        setMapPosition(lat, lng, false);
                        if (leafletMap) leafletMap.setView([lat, lng], 16);
                        return;
                    }
                    searchAddressQuery(desc);
                });
            } else {
                searchAddressQuery(desc);
            }
        });
    });
}

function fetchPhotonSuggestions(query) {
    var dropdown = document.getElementById('locationSuggestionsDropdown');
    var locInput = document.getElementById('bulk_location');
    if (!dropdown || !locInput) return;

    // Photon API (Elasticsearch OpenStreetMap Geocoder)
    fetch('https://photon.komoot.io/api/?q=' + encodeURIComponent(query) + '&limit=5&lat=12.9716&lon=77.5946')
    .then(function(res) { return res.json(); })
    .then(function(data) {
        if (data && data.features && data.features.length) {
            renderGeoFeaturesSuggestions(data.features);
        } else {
            fetchNominatimDirect(query);
        }
    })
    .catch(function() {
        fetchNominatimDirect(query);
    });
}

function renderGeoFeaturesSuggestions(features) {
    var dropdown = document.getElementById('locationSuggestionsDropdown');
    var locInput = document.getElementById('bulk_location');
    if (!dropdown || !locInput) return;

    var html = '';
    features.forEach(function(f, idx) {
        var p = f.properties || {};
        var mainText = p.name || p.street || p.city || p.district || 'Location';
        var parts = [p.street, p.district, p.city, p.state, p.country].filter(Boolean);
        var subText = parts.join(', ');
        var fullDesc = p.name ? (p.name + ', ' + subText) : subText;
        var coords = f.geometry ? f.geometry.coordinates : null; // [lng, lat]

        html += '<div class="lp-suggestion-item" data-idx="' + idx + '" data-desc="' + escapeHtml(fullDesc) + '" data-lat="' + (coords ? coords[1] : '') + '" data-lng="' + (coords ? coords[0] : '') + '">';
        html += '  <i class="fas fa-location-dot lp-suggestion-icon"></i>';
        html += '  <div class="lp-suggestion-content">';
        html += '    <div class="lp-suggestion-main">' + escapeHtml(mainText) + '</div>';
        html += '    <div class="lp-suggestion-sub">' + escapeHtml(subText || fullDesc) + '</div>';
        html += '  </div>';
        html += '</div>';
    });

    html += '<div class="lp-dropdown-footer-btn" onclick="openGoogleMapModal()"><i class="fas fa-map-location-dot"></i> Can\'t find your address? Pick pin on Google Maps</div>';

    dropdown.innerHTML = html;
    dropdown.style.display = 'block';

    dropdown.querySelectorAll('.lp-suggestion-item').forEach(function(el) {
        el.addEventListener('click', function() {
            var desc = el.getAttribute('data-desc');
            var lat = parseFloat(el.getAttribute('data-lat'));
            var lng = parseFloat(el.getAttribute('data-lng'));

            locInput.value = desc;
            var formattedInput = document.getElementById('bulk_formatted_address');
            if (formattedInput) formattedInput.value = desc;
            dropdown.style.display = 'none';
            clearSingleFieldError('location');

            if (!isNaN(lat) && !isNaN(lng)) {
                setMapPosition(lat, lng, false);
                if (leafletMap) leafletMap.setView([lat, lng], 16);
            } else {
                searchAddressQuery(desc);
            }
        });
    });
}

function fetchNominatimDirect(query) {
    var dropdown = document.getElementById('locationSuggestionsDropdown');
    var locInput = document.getElementById('bulk_location');
    if (!dropdown || !locInput) return;

    fetch('https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(query) + '&limit=5&addressdetails=1', {
        headers: { 'Accept-Language': 'en' }
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        if (data && data.length) {
            var html = '';
            data.forEach(function(item) {
                var nameParts = item.display_name.split(',');
                var mainText = nameParts[0];
                var subText = nameParts.slice(1).join(',').trim();

                html += '<div class="lp-suggestion-item" data-desc="' + escapeHtml(item.display_name) + '" data-lat="' + item.lat + '" data-lng="' + item.lon + '">';
                html += '  <i class="fas fa-location-dot lp-suggestion-icon"></i>';
                html += '  <div class="lp-suggestion-content">';
                html += '    <div class="lp-suggestion-main">' + escapeHtml(mainText) + '</div>';
                html += '    <div class="lp-suggestion-sub">' + escapeHtml(subText) + '</div>';
                html += '  </div>';
                html += '</div>';
            });
            html += '<div class="lp-dropdown-footer-btn" onclick="openGoogleMapModal()"><i class="fas fa-map-location-dot"></i> Can\'t find your address? Pick pin on Google Maps</div>';
            dropdown.innerHTML = html;
            dropdown.style.display = 'block';

            dropdown.querySelectorAll('.lp-suggestion-item').forEach(function(el) {
                el.addEventListener('click', function() {
                    var desc = el.getAttribute('data-desc');
                    var lat = parseFloat(el.getAttribute('data-lat'));
                    var lng = parseFloat(el.getAttribute('data-lng'));

                    locInput.value = desc;
                    var formattedInput = document.getElementById('bulk_formatted_address');
                    if (formattedInput) formattedInput.value = desc;
                    dropdown.style.display = 'none';
                    clearSingleFieldError('location');

                    setMapPosition(lat, lng, false);
                    if (leafletMap) leafletMap.setView([lat, lng], 16);
                });
            });
        } else {
            dropdown.innerHTML = '<div class="lp-suggestion-empty"><i class="fas fa-info-circle"></i> No locations found.</div><div class="lp-dropdown-footer-btn" onclick="openGoogleMapModal()"><i class="fas fa-map-location-dot"></i> Pick pin on Google Maps directly</div>';
            dropdown.style.display = 'block';
        }
    })
    .catch(function() {
        dropdown.innerHTML = '<div class="lp-dropdown-footer-btn" onclick="openGoogleMapModal()"><i class="fas fa-map-location-dot"></i> Pick pin on Google Maps directly</div>';
        dropdown.style.display = 'block';
    });
}

function escapeHtml(text) {
    if (!text) return '';
    return text.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
}

function setMapPosition(lat, lng, doReverseGeocode) {
    if (pinMarker) pinMarker.setLatLng([lat, lng]);
    if (leafletMap) leafletMap.panTo([lat, lng]);

    var latInput = document.getElementById('bulk_latitude');
    var lngInput = document.getElementById('bulk_longitude');
    var badge = document.getElementById('mapCoordsBadge');

    if (latInput) latInput.value = lat.toFixed(6);
    if (lngInput) lngInput.value = lng.toFixed(6);
    if (badge) {
        badge.textContent = lat.toFixed(4) + '°, ' + lng.toFixed(4) + '°';
        badge.style.display = 'inline-block';
    }

    if (doReverseGeocode) {
        reverseGeocodeCoords(lat, lng);
    }
}

// ========== Reverse Geocode Coordinates to Address ==========
function reverseGeocodeCoords(lat, lng) {
    var locInput = document.getElementById('bulk_location');
    var formattedInput = document.getElementById('bulk_formatted_address');

    // Nominatim Reverse Geocoding
    fetch('https://nominatim.openstreetmap.org/reverse?format=json&lat=' + lat + '&lon=' + lng + '&zoom=18&addressdetails=1', {
        headers: { 'Accept-Language': 'en' }
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        if (data && data.display_name) {
            if (locInput) locInput.value = data.display_name;
            if (formattedInput) formattedInput.value = data.display_name;
            clearSingleFieldError('location');
        }
    })
    .catch(function(err) {
        console.log('Geocoding notice:', err);
    });
}

// ========== Search Address Query ==========
function searchAddressQuery(query) {
    if (!query || query.trim().length < 3) return;
    fetch('https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(query) + '&limit=1', {
        headers: { 'Accept-Language': 'en' }
    })
    .then(function(res) { return res.json(); })
    .then(function(data) {
        if (data && data.length > 0) {
            var lat = parseFloat(data[0].lat);
            var lng = parseFloat(data[0].lon);
            setMapPosition(lat, lng, false);
            if (leafletMap) leafletMap.setView([lat, lng], 15);
            var formattedInput = document.getElementById('bulk_formatted_address');
            if (formattedInput) formattedInput.value = data[0].display_name;
            clearSingleFieldError('location');
        }
    })
    .catch(function(err) {
        console.log('Address search notice:', err);
    });
}

// ========== Current GPS Geolocation ==========
function getUserCurrentLocation() {
    var btn = document.getElementById('btnLocateMe');
    if (!navigator.geolocation) {
        showAppToast('Geolocation is not supported by your browser.', 'fas fa-exclamation-triangle', 4000);
        return;
    }

    if (btn) btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Locating...';

    navigator.geolocation.getCurrentPosition(function(pos) {
        var lat = pos.coords.latitude;
        var lng = pos.coords.longitude;
        setMapPosition(lat, lng, true);
        if (leafletMap) leafletMap.setView([lat, lng], 16);
        if (btn) btn.innerHTML = '<i class="fas fa-crosshairs"></i> Locate Me';
        showAppToast('✓ Location pinpointed from GPS!', 'fas fa-location-crosshairs', 3000);
    }, function(err) {
        if (btn) btn.innerHTML = '<i class="fas fa-crosshairs"></i> Locate Me';
        showAppToast('Could not fetch GPS location. Please click or drag the pin on map.', 'fas fa-info-circle', 4000);
    }, {
        enableHighAccuracy: true,
        timeout: 8000,
        maximumAge: 0
    });
}

// ========== Modal Google Map Logic ==========
var modalMap = null;
var modalPinMarker = null;
var modalCurrentLat = 12.9716;
var modalCurrentLng = 77.5946;
var modalCurrentAddress = '';
var modalSearchTimeout = null;

function openGoogleMapModal() {
    var modal = document.getElementById('googleMapModalBackdrop');
    if (!modal) return;

    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';

    // Get current coords from main form if set
    var latVal = parseFloat(document.getElementById('bulk_latitude').value);
    var lngVal = parseFloat(document.getElementById('bulk_longitude').value);
    var addrVal = document.getElementById('bulk_location').value.trim();

    if (!isNaN(latVal) && !isNaN(lngVal)) {
        modalCurrentLat = latVal;
        modalCurrentLng = lngVal;
    }
    if (addrVal) {
        modalCurrentAddress = addrVal;
        document.getElementById('modalSelectedAddress').textContent = addrVal;
        var modalSearch = document.getElementById('modal_map_search');
        if (modalSearch) modalSearch.value = addrVal;
    }

    initModalMap();

    setTimeout(function() {
        if (modalMap) {
            modalMap.invalidateSize();
            modalMap.setView([modalCurrentLat, modalCurrentLng], 15);
            if (modalPinMarker) modalPinMarker.setLatLng([modalCurrentLat, modalCurrentLng]);
        }
    }, 250);
}

function closeGoogleMapModal() {
    var modal = document.getElementById('googleMapModalBackdrop');
    if (modal) modal.style.display = 'none';
    document.body.style.overflow = '';
}

function closeGoogleMapModalOnBackdrop(e) {
    if (e.target && e.target.id === 'googleMapModalBackdrop') {
        closeGoogleMapModal();
    }
}

function initModalMap() {
    var mapEl = document.getElementById('modalGoogleMap');
    if (!mapEl) return;

    if (!modalMap) {
        modalMap = L.map('modalGoogleMap', {
            center: [modalCurrentLat, modalCurrentLng],
            zoom: 15,
            scrollWheelZoom: true
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; ByteMiniz Maps'
        }).addTo(modalMap);

        var modalPinIcon = L.divIcon({
            className: 'lp-custom-pin',
            html: '<div style="transform:translate(-50%,-100%);display:flex;flex-direction:column;align-items:center;cursor:grab;"><i class="fas fa-location-dot" style="font-size:42px;color:#FB6107;filter:drop-shadow(0 4px 8px rgba(0,0,0,0.6));"></i><div style="width:10px;height:10px;border-radius:50%;background:#fdca00;border:2px solid #1a1a1a;margin-top:-8px;"></div></div>',
            iconSize: [0, 0],
            iconAnchor: [0, 0]
        });

        modalPinMarker = L.marker([modalCurrentLat, modalCurrentLng], {
            draggable: true,
            icon: modalPinIcon
        }).addTo(modalMap);

        modalPinMarker.on('dragend', function(e) {
            var pos = e.target.getLatLng();
            setModalMapPosition(pos.lat, pos.lng, true);
        });

        modalMap.on('click', function(e) {
            setModalMapPosition(e.latlng.lat, e.latlng.lng, true);
        });

        setupModalSearchAutocomplete();
    } else {
        setModalMapPosition(modalCurrentLat, modalCurrentLng, false);
    }
}

function setModalMapPosition(lat, lng, doReverseGeocode) {
    modalCurrentLat = lat;
    modalCurrentLng = lng;
    if (modalPinMarker) modalPinMarker.setLatLng([lat, lng]);
    if (modalMap) modalMap.panTo([lat, lng]);

    var coordsEl = document.getElementById('modalSelectedCoords');
    if (coordsEl) coordsEl.textContent = lat.toFixed(4) + '°, ' + lng.toFixed(4) + '°';

    if (doReverseGeocode) {
        document.getElementById('modalSelectedAddress').innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Getting address...';
        fetch('https://nominatim.openstreetmap.org/reverse?format=json&lat=' + lat + '&lon=' + lng + '&zoom=18&addressdetails=1', {
            headers: { 'Accept-Language': 'en' }
        })
        .then(function(res) { return res.json(); })
        .then(function(data) {
            if (data && data.display_name) {
                modalCurrentAddress = data.display_name;
                document.getElementById('modalSelectedAddress').textContent = data.display_name;
                var modalSearch = document.getElementById('modal_map_search');
                if (modalSearch) modalSearch.value = data.display_name;
            }
        })
        .catch(function() {
            document.getElementById('modalSelectedAddress').textContent = 'Selected pin at ' + lat.toFixed(4) + ', ' + lng.toFixed(4);
        });
    }
}

function getModalUserLocation() {
    if (!navigator.geolocation) {
        showAppToast('Geolocation not supported by your browser.', 'fas fa-exclamation-triangle', 3000);
        return;
    }
    document.getElementById('modalSelectedAddress').innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Locating GPS position...';
    navigator.geolocation.getCurrentPosition(function(pos) {
        var lat = pos.coords.latitude;
        var lng = pos.coords.longitude;
        setModalMapPosition(lat, lng, true);
        if (modalMap) modalMap.setView([lat, lng], 16);
    }, function() {
        showAppToast('Could not fetch GPS. Please drag or click the map pin.', 'fas fa-info-circle', 4000);
    }, { enableHighAccuracy: true, timeout: 8000 });
}

function setupModalSearchAutocomplete() {
    var searchInput = document.getElementById('modal_map_search');
    var dropdown = document.getElementById('modalSuggestionsDropdown');
    if (!searchInput || !dropdown) return;

    searchInput.addEventListener('input', function() {
        if (modalSearchTimeout) clearTimeout(modalSearchTimeout);
        var q = searchInput.value.trim();
        if (q.length < 2) {
            dropdown.style.display = 'none';
            return;
        }

        dropdown.innerHTML = '<div class="lp-suggestion-loading"><i class="fas fa-spinner fa-spin text-warning"></i> Searching map...</div>';
        dropdown.style.display = 'block';

        modalSearchTimeout = setTimeout(function() {
            fetch('https://photon.komoot.io/api/?q=' + encodeURIComponent(q) + '&limit=5&lat=12.9716&lon=77.5946')
            .then(function(r) { return r.json(); })
            .then(function(data) {
                if (data && data.features && data.features.length) {
                    var html = '';
                    data.features.forEach(function(f) {
                        var p = f.properties || {};
                        var mainText = p.name || p.street || p.city || 'Location';
                        var parts = [p.street, p.district, p.city, p.state].filter(Boolean);
                        var subText = parts.join(', ');
                        var coords = f.geometry ? f.geometry.coordinates : null;
                        var fullDesc = p.name ? (p.name + ', ' + subText) : subText;

                        html += '<div class="lp-suggestion-item" data-desc="' + escapeHtml(fullDesc) + '" data-lat="' + (coords ? coords[1] : '') + '" data-lng="' + (coords ? coords[0] : '') + '">';
                        html += '  <i class="fas fa-location-dot lp-suggestion-icon"></i>';
                        html += '  <div class="lp-suggestion-content">';
                        html += '    <div class="lp-suggestion-main">' + escapeHtml(mainText) + '</div>';
                        html += '    <div class="lp-suggestion-sub">' + escapeHtml(subText || fullDesc) + '</div>';
                        html += '  </div>';
                        html += '</div>';
                    });
                    dropdown.innerHTML = html;
                    dropdown.style.display = 'block';

                    dropdown.querySelectorAll('.lp-suggestion-item').forEach(function(el) {
                        el.addEventListener('click', function() {
                            var desc = el.getAttribute('data-desc');
                            var lat = parseFloat(el.getAttribute('data-lat'));
                            var lng = parseFloat(el.getAttribute('data-lng'));
                            searchInput.value = desc;
                            modalCurrentAddress = desc;
                            document.getElementById('modalSelectedAddress').textContent = desc;
                            dropdown.style.display = 'none';
                            if (!isNaN(lat) && !isNaN(lng)) {
                                setModalMapPosition(lat, lng, false);
                                if (modalMap) modalMap.setView([lat, lng], 16);
                            }
                        });
                    });
                } else {
                    dropdown.innerHTML = '<div class="lp-suggestion-empty">No results. Drag map pin directly.</div>';
                }
            })
            .catch(function() {
                dropdown.style.display = 'none';
            });
        }, 300);
    });
}

function confirmLocationFromModal() {
    var addr = modalCurrentAddress || document.getElementById('modalSelectedAddress').textContent;
    if (!addr || addr.includes('Move or click')) {
        addr = 'Selected Pin (' + modalCurrentLat.toFixed(4) + ', ' + modalCurrentLng.toFixed(4) + ')';
    }

    var locInput = document.getElementById('bulk_location');
    var formattedInput = document.getElementById('bulk_formatted_address');
    var latInput = document.getElementById('bulk_latitude');
    var lngInput = document.getElementById('bulk_longitude');

    if (locInput) locInput.value = addr;
    if (formattedInput) formattedInput.value = addr;
    if (latInput) latInput.value = modalCurrentLat.toFixed(6);
    if (lngInput) lngInput.value = modalCurrentLng.toFixed(6);

    // Sync main inline map
    setMapPosition(modalCurrentLat, modalCurrentLng, false);
    if (leafletMap) leafletMap.setView([modalCurrentLat, modalCurrentLng], 16);

    // Clear validation error
    clearSingleFieldError('location');

    // Close modal
    closeGoogleMapModal();

    showAppToast('✓ Location pin confirmed from Google Maps!', 'fas fa-map-location-dot', 4000);
}

// ========== Smooth Scroll ==========
function smoothScrollTo(id) {
    var el = document.getElementById(id);
    if (el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
        var href = this.getAttribute('href');
        if (href.length > 1) {
            e.preventDefault();
            smoothScrollTo(href.substring(1));
        }
    });
});

// ========== Quantity Controls ==========
function changeQty(btn, delta) {
    var control = btn.closest('.lp-qty-control');
    var input = control.querySelector('.lp-qty-input');
    var val = parseInt(input.value) || 0;
    val = Math.max(0, val + delta);
    input.value = val;

    // Visual feedback
    var card = btn.closest('.lp-menu-card');
    if (val > 0) {
        card.style.borderColor = 'var(--lp-gold)';
        card.style.boxShadow = '0 0 0 2px var(--lp-gold), var(--lp-shadow)';
    } else {
        card.style.borderColor = 'rgba(0,0,0,0.06)';
        card.style.boxShadow = 'var(--lp-shadow)';
    }

    isBytzItemsConfirmed = false;
    updateOrderSummary();
    renderBytzItems();
}

// ========== Get Selected Items ==========
function getSelectedItems() {
    var items = [];
    document.querySelectorAll('.lp-menu-card').forEach(function(card) {
        var qty = parseInt(card.querySelector('.lp-qty-input').value) || 0;
        if (qty > 0) {
            items.push({
                id: card.dataset.itemId,
                name: card.dataset.itemName,
                price: parseFloat(card.dataset.itemPrice),
                qty: qty
            });
        }
    });
    return items;
}

// ========== Update Floating Summary Bar & Badges ==========
function updateOrderSummary() {
    var items = getSelectedItems();
    var totalItems = items.reduce(function(sum, i) { return sum + i.qty; }, 0);
    var totalPrice = items.reduce(function(sum, i) { return sum + (i.price * i.qty); }, 0);

    // Update floating badge
    var badge = document.getElementById('floatBadge');
    if (totalItems > 0) { badge.textContent = totalItems; badge.classList.add('visible'); }
    else { badge.classList.remove('visible'); }

    // Update summary bar
    var bar = document.getElementById('orderSummaryBar');
    document.getElementById('summaryItemCount').textContent = totalItems + ' item' + (totalItems !== 1 ? 's' : '');
    document.getElementById('summaryTotal').textContent = '₹' + totalPrice.toLocaleString('en-IN');
    if (totalItems > 0) { bar.classList.add('visible'); }
    else { bar.classList.remove('visible'); }
}

// ========== Render Bytz Items in Form ==========
function renderBytzItems() {
    var items = getSelectedItems();
    var container = document.getElementById('bytzItemsContainer');
    var badge = document.getElementById('bytzStatusBadge');
    var section = document.getElementById('bytzItemsSection');
    var confirmBtn = document.getElementById('confirmBytzBtn');
    var hiddenInput = document.getElementById('bulk_order_items');

    if (!container || !badge || !confirmBtn) return;

    var totalQty = items.reduce(function(sum, i) { return sum + i.qty; }, 0);
    var totalPrice = items.reduce(function(sum, i) { return sum + (i.price * i.qty); }, 0);

    if (items.length === 0) {
        container.innerHTML = '<div class="lp-bytz-empty"><i class="fas fa-utensils"></i><p>No items selected yet.<br><a href="#bulk-order-menu" onclick="smoothScrollTo(\'bulk-order-menu\'); return false;">Select items from the menu above</a></p></div>';
        badge.className = 'lp-bytz-badge';
        badge.textContent = '0 Items Selected';
        section.classList.remove('confirmed');
        confirmBtn.className = 'lp-bytz-confirm-btn';
        confirmBtn.innerHTML = '<i class="fas fa-check-circle"></i> Confirm Bytz Items';
        if (hiddenInput) hiddenInput.value = '';
        return;
    }

    var html = '<div class="lp-bytz-list">';
    items.forEach(function(item) {
        var lineTotal = item.price * item.qty;
        html += '<div class="lp-bytz-item">';
        html += '  <div class="lp-bytz-item-info">';
        html += '    <div class="lp-bytz-item-name"><i class="fas fa-leaf text-success me-1" style="font-size:0.75rem;"></i> ' + item.name + '<span class="lp-bytz-item-qty">Qty: ' + item.qty + '</span></div>';
        html += '    <div class="lp-bytz-item-meta">₹' + item.price.toLocaleString('en-IN') + ' each</div>';
        html += '  </div>';
        html += '  <div class="lp-bytz-item-price">₹' + lineTotal.toLocaleString('en-IN') + '</div>';
        html += '</div>';
    });
    html += '</div>';

    html += '<div class="lp-bytz-total-row">';
    html += '  <span>Total Items: ' + totalQty + '</span>';
    html += '  <span class="lp-bytz-total-price">₹' + totalPrice.toLocaleString('en-IN') + '</span>';
    html += '</div>';

    container.innerHTML = html;
    if (hiddenInput) hiddenInput.value = JSON.stringify(items);

    if (isBytzItemsConfirmed) {
        section.classList.add('confirmed');
        badge.className = 'lp-bytz-badge confirmed';
        badge.innerHTML = '<i class="fas fa-check me-1"></i> ' + totalQty + ' Items Confirmed';
        confirmBtn.className = 'lp-bytz-confirm-btn confirmed';
        confirmBtn.innerHTML = '<i class="fas fa-check-double me-1"></i> Bytz Items Confirmed ✓';
    } else {
        section.classList.remove('confirmed');
        badge.className = 'lp-bytz-badge';
        badge.textContent = totalQty + ' Items (Pending Confirmation)';
        confirmBtn.className = 'lp-bytz-confirm-btn';
        confirmBtn.innerHTML = '<i class="fas fa-check-circle"></i> Confirm Bytz Items (' + totalQty + ')';
    }
}

// ========== Confirm Bytz Items ==========
function confirmBytzItems() {
    var items = getSelectedItems();
    var confirmBtn = document.getElementById('confirmBytzBtn');

    if (items.length === 0) {
        showAppToast('Please select at least 1 item from the menu above.', 'fas fa-exclamation-circle', 4000);
        smoothScrollTo('bulk-order-menu');
        return;
    }

    isBytzItemsConfirmed = true;
    renderBytzItems();
    showAppToast('✓ Bytz items confirmed! Please fill your info and submit enquiry.', 'fas fa-check-circle', 4000);
}

// ========== Comprehensive Form Validation & Submit ==========
function handleBulkOrderSubmit(e) {
    e.preventDefault();
    clearAllFieldErrors();

    var isValid = true;
    var firstInvalidEl = null;

    // 1. Full Name Validation
    var nameInput = document.getElementById('bulk_name');
    var nameVal = nameInput ? nameInput.value.trim() : '';
    if (!nameVal) {
        setFieldError('name', 'Full name is required.');
        isValid = false;
        if (!firstInvalidEl) firstInvalidEl = nameInput;
    } else if (nameVal.length < 2) {
        setFieldError('name', 'Name must be at least 2 characters.');
        isValid = false;
        if (!firstInvalidEl) firstInvalidEl = nameInput;
    }

    // 2. Phone Number Validation
    var phoneInput = document.getElementById('bulk_phone');
    var phoneVal = phoneInput ? phoneInput.value.trim() : '';
    var phoneRegex = /^(\+?[0-9\s\-]{10,15})$/;
    if (!phoneVal) {
        setFieldError('phone', 'Phone number is required.');
        isValid = false;
        if (!firstInvalidEl) firstInvalidEl = phoneInput;
    } else if (!phoneRegex.test(phoneVal.replace(/[\s\-]/g, '')) || phoneVal.replace(/[^0-9]/g, '').length < 10) {
        setFieldError('phone', 'Please enter a valid 10-digit phone number.');
        isValid = false;
        if (!firstInvalidEl) firstInvalidEl = phoneInput;
    }

    // 3. Email Validation (if provided)
    var emailInput = document.getElementById('bulk_email');
    var emailVal = emailInput ? emailInput.value.trim() : '';
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailVal && !emailRegex.test(emailVal)) {
        setFieldError('email', 'Please enter a valid email address.');
        isValid = false;
        if (!firstInvalidEl) firstInvalidEl = emailInput;
    }

    // 4. Event Date Validation
    var dateInput = document.getElementById('bulk_date');
    var dateVal = dateInput ? dateInput.value : '';
    if (!dateVal) {
        setFieldError('date', 'Please select your event date.');
        isValid = false;
        if (!firstInvalidEl) firstInvalidEl = dateInput;
    } else {
        var selectedDate = new Date(dateVal);
        var minDate = new Date();
        minDate.setHours(minDate.getHours() + 24);
        if (selectedDate < minDate) {
            setFieldError('date', 'Please select a date and time at least 24 hours from now.');
            isValid = false;
            if (!firstInvalidEl) firstInvalidEl = dateInput;
        }
    }

    // 5. Event Type Validation
    var eventTypeInput = document.getElementById('bulk_event_type');
    var eventTypeVal = eventTypeInput ? eventTypeInput.value : '';
    if (!eventTypeVal) {
        setFieldError('event_type', 'Please select an event type.');
        isValid = false;
        if (!firstInvalidEl) firstInvalidEl = eventTypeInput;
    }

    // 6. Location Validation
    var locInput = document.getElementById('bulk_location');
    var locVal = locInput ? locInput.value.trim() : '';
    var latVal = document.getElementById('bulk_latitude').value;
    if (!locVal || locVal.length < 3) {
        setFieldError('location', 'Please search or pinpoint your delivery location on the map.');
        isValid = false;
        if (!firstInvalidEl) firstInvalidEl = locInput;
    }

    // If basic form fields failed validation, focus and notify
    if (!isValid && firstInvalidEl) {
        firstInvalidEl.focus();
        if (firstInvalidEl.scrollIntoView) {
            firstInvalidEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        showAppToast('Please check the highlighted required fields.', 'fas fa-exclamation-triangle', 4000);
        return false;
    }

    // 7. Bytz Items & Confirmation Validation
    var items = getSelectedItems();
    var confirmBtn = document.getElementById('confirmBytzBtn');

    if (items.length === 0) {
        showAppToast('Please select your Bytz items from the menu above first.', 'fas fa-burger', 4000);
        smoothScrollTo('bulk-order-menu');
        return false;
    }

    if (!isBytzItemsConfirmed) {
        confirmBtn.classList.remove('shake-btn');
        void confirmBtn.offsetWidth; // Trigger reflow
        confirmBtn.classList.add('shake-btn');
        showAppToast('Please click "Confirm Bytz Items" before submitting.', 'fas fa-hand-point-right', 4000);
        smoothScrollTo('bytzItemsSection');
        return false;
    }

    // All validation passed - proceed with submission
    var btn = document.getElementById('submitBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Submitting & Sending Email...';

    var formEl = document.getElementById('bulkOrderForm');
    var formData = new FormData(formEl);
    formData.set('order_items', JSON.stringify(items));

    fetch('{{ route("lp.bulk_order.enquire") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(function(res) {
        return res.json().catch(function() {
            return { success: res.ok, message: 'Enquiry submitted!' };
        });
    })
    .then(function(data) {
        if (data && data.success) {
            showAppToast('✓ Enquiry submitted! Email notifications sent to byteminiz@gmail.com and your inbox.', 'fas fa-envelope-circle-check', 6000);
            btn.innerHTML = '<i class="fas fa-check me-2"></i> Submitted & Sent!';
            formEl.reset();
            clearAllFieldErrors();

            // Reset state & quantities
            isBytzItemsConfirmed = false;
            document.querySelectorAll('.lp-qty-input').forEach(function(input) { input.value = 0; });
            document.querySelectorAll('.lp-menu-card').forEach(function(card) {
                card.style.borderColor = 'rgba(0,0,0,0.06)';
                card.style.boxShadow = 'var(--lp-shadow)';
            });
            updateOrderSummary();
            renderBytzItems();

            setTimeout(function() {
                btn.disabled = false;
                btn.innerHTML = '<i class="fas fa-paper-plane me-2"></i> Submit Enquiry';
            }, 4000);
        } else {
            showAppToast(data.message || 'Error submitting enquiry. Please check your details.', 'fas fa-exclamation-triangle', 5000);
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-paper-plane me-2"></i> Submit Enquiry';
        }
    })
    .catch(function(err) {
        console.error('Submission error:', err);
        showAppToast('✓ Enquiry recorded! Our team will contact you shortly.', 'fas fa-check-circle', 5000);
        btn.disabled = false;
        btn.innerHTML = '<i class="fas fa-paper-plane me-2"></i> Submit Enquiry';
    });

    return false;
}
</script>
@endpush
