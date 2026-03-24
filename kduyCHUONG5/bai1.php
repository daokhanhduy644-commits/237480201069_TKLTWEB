<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bài 1</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&family=Exo+2:wght@300;400;600;700&display=swap');
 
        :root {
            --bg: #020c1b;
            --panel: #0a1628;
            --blue1: #00d4ff;
            --blue2: #0080ff;
            --blue3: #003a8c;
            --glow: rgba(0, 212, 255, 0.3);
            --text: #cde8ff;
            --dim: #5a8ab0;
        }
 
        * { margin: 0; padding: 0; box-sizing: border-box; }
 
        body {
            background: var(--bg);
            font-family: 'Exo 2', sans-serif;
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
 
        body::before {
            content: '';
            position: fixed; inset: 0;
            background:
                radial-gradient(ellipse 80% 50% at 20% 20%, rgba(0,128,255,0.08) 0%, transparent 60%),
                radial-gradient(ellipse 60% 40% at 80% 80%, rgba(0,212,255,0.06) 0%, transparent 60%);
            pointer-events: none;
        }
 
        /* Animated grid background */
        body::after {
            content: '';
            position: fixed; inset: 0;
            background-image:
                linear-gradient(rgba(0,80,180,0.07) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,80,180,0.07) 1px, transparent 1px);
            background-size: 48px 48px;
            animation: gridMove 12s linear infinite;
            pointer-events: none;
        }
        @keyframes gridMove {
            0% { transform: translateY(0); }
            100% { transform: translateY(48px); }
        }
 
        .card {
            position: relative;
            background: var(--panel);
            border: 1px solid var(--blue3);
            border-top: 3px solid var(--blue1);
            padding: 56px 64px;
            text-align: center;
            clip-path: polygon(0 0, 100% 0, 100% calc(100% - 20px), calc(100% - 20px) 100%, 0 100%);
            animation: fadeIn 0.8s ease-out both;
            max-width: 680px;
            width: 90%;
        }
 
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
 
        /* Top scanline */
        .card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; height: 3px;
            background: linear-gradient(90deg, transparent, var(--blue1), var(--blue2), transparent);
            animation: scanline 3s linear infinite;
        }
        @keyframes scanline {
            0%   { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
 
        .badge {
            display: inline-block;
            font-family: 'Share Tech Mono', monospace;
            font-size: 0.68rem;
            letter-spacing: 3px;
            color: var(--blue2);
            border: 1px solid var(--blue3);
            padding: 5px 14px;
            margin-bottom: 32px;
            text-transform: uppercase;
            animation: fadeIn 0.6s ease-out 0.2s both;
        }
        .badge::before {
            content: '⬡ ';
            color: var(--blue1);
        }
 
        h2 {
            font-size: clamp(1.1rem, 3vw, 1.55rem);
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #fff;
            line-height: 1.5;
            text-shadow: 0 0 32px rgba(0,180,255,0.4);
            animation: fadeIn 0.6s ease-out 0.4s both;
        }
 
        h2 span {
            color: var(--blue1);
            text-shadow: 0 0 20px var(--blue1);
        }
 
        .divider {
            width: 80px;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--blue1), transparent);
            margin: 28px auto;
            animation: fadeIn 0.6s ease-out 0.6s both;
        }
 
        .info {
            font-family: 'Share Tech Mono', monospace;
            font-size: 0.78rem;
            color: var(--dim);
            letter-spacing: 1.5px;
            animation: fadeIn 0.6s ease-out 0.8s both;
        }
 
        .dot {
            display: inline-block;
            width: 7px; height: 7px;
            background: var(--blue1);
            box-shadow: 0 0 8px var(--blue1);
            margin-right: 8px;
            animation: blink 1.4s ease-in-out infinite;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.15; }
        }
    </style>
</head>
<body>
 
<?php
$title = "LỚP LẬP TRÌNH WEB PHP";
$subject = "PHP";
?>
 
<div class="card">
    <div class="badge">Bài 1 · Lập Trình Web</div>
 
    <?php echo "<h2>CHÀO MỪNG CÁC BẠN ĐẾN VỚI <span>{$title}</span></h2>"; ?>
 
    <div class="divider"></div>
 
    <p class="info">
        <span class="dot"></span>
        <?php echo "Ngôn ngữ: {$subject} · Phiên bản: 8.x · Môi trường: XAMPP"; ?>
    </p>
</div>
 
</body>
</html>