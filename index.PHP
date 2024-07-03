<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2486</title>
    <link rel="icon" href="images/roger788.png" type="image/png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&family=M+PLUS+Rounded+1c:wght@300;500;700&display=swap');

        :root {
            --main-color: #8a2be2;
            --secondary-color: #e6e6fa;
            --text-color: #4a4a4a;
            --background-color: rgba(255, 255, 255, 0.95);
            --accent-color: #9370db;
            --gradient: linear-gradient(135deg, #c9a0dc 0%, #d8bfd8 100%);
        }

        body {
            font-family: 'Quicksand', 'M PLUS Rounded 1c', sans-serif;
            background: var(--gradient);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: var(--text-color);
            overflow-x: hidden;
        }

        @keyframes gradientBG {
            0% {background-position: 0% 50%;}
            50% {background-position: 100% 50%;}
            100% {background-position: 0% 50%;}
        }

        .container {
            background-color: var(--background-color);
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1), 0 0 20px rgba(255, 133, 162, 0.2);
            padding: 40px;
            width: 90%;
            max-width: 1200px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            transform: rotate(45deg);
            animation: shimmer 10s infinite linear;
        }

        @keyframes shimmer {
            0% {transform: rotate(0deg);}
            100% {transform: rotate(360deg);}
        }

        .nav {
            display: flex;
            justify-content: space-around;
            margin-bottom: 40px;
            background-color: var(--secondary-color);
            border-radius: 50px;
            padding: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .nav::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(45deg);
            animation: navShimmer 6s infinite linear;
        }

        @keyframes navShimmer {
            0% {transform: translateX(-50%) rotate(45deg);}
            100% {transform: translateX(50%) rotate(45deg);}
        }

        .nav a {
            color: var(--main-color);
            text-decoration: none;
            font-weight: 700;
            padding: 12px 24px;
            border-radius: 25px;
            transition: all 0.3s ease;
            font-size: 1.1em;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .nav a::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, transparent, rgba(255, 255, 255, .3), transparent);
            transition: all 0.5s;
        }

        .nav a:hover::before {
            left: 100%;
        }

        .nav a:hover {
            background-color: var(--main-color);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 133, 162, 0.4);
        }

        .content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .section {
            background-color: var(--secondary-color);
            border-radius: 20px;
            padding: 30px;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .section:hover {
            transform: translateY(-10px) rotate(1deg);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1), 0 0 20px rgba(255, 133, 162, 0.3);
        }

        .section::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 60%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .section:hover::before {
            opacity: 1;
            animation: sectionShimmer 2s infinite linear;
        }

        @keyframes sectionShimmer {
            0% {transform: translate(-50%, -50%) rotate(0deg);}
            100% {transform: translate(-50%, -50%) rotate(360deg);}
        }

        .avatar {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 8px solid var(--main-color);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .avatar:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2), 0 0 20px rgba(255, 133, 162, 0.4);
        }

        .avatar::after {
            content: "";
            position: absolute;
            top: 5%;
            left: 10%;
            width: 20%;
            height: 20%;
            background-color: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            filter: blur(5px);
        }

        h2 {
            margin-top: 0;
            color: var(--main-color);
            border-bottom: 3px solid var(--main-color);
            padding-bottom: 15px;
            font-family: 'M PLUS Rounded 1c', sans-serif;
            font-weight: 700;
            font-size: 2.2em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            position: relative;
        }

        h2::after {
            content: "";
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, var(--main-color), var(--accent-color));
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }

        .section:hover h2::after {
            transform: scaleX(1);
            transform-origin: left;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
            font-size: 1.1em;
            transition: all 0.2s ease;
            padding: 5px 10px;
            border-radius: 5px;
        }

        li:hover {
            transform: translateX(5px);
            color: var(--main-color);
            background-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }

        .social-icons img {
            width: 50px;
            height: 50px;
            transition: all 0.3s ease;
            filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.1));
        }

        .social-icons img:hover {
            transform: scale(1.2) rotate(15deg);
            filter: drop-shadow(0 8px 15px rgba(0, 0, 0, 0.2));
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .section:nth-child(1) { animation-delay: 0.2s; }
        .section:nth-child(2) { animation-delay: 0.4s; }
        .section:nth-child(3) { animation-delay: 0.6s; }

        p {
            font-size: 1.2em;
            line-height: 1.8;
        }

        .game-list {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .game-list:hover {
            background-color: rgba(255, 255, 255, 0.9);
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .game-list h3 {
            color: var(--accent-color);
            font-family: 'M PLUS Rounded 1c', sans-serif;
            font-weight: 500;
        }

        .featured-image {
            width: 100%;
            border-radius: 15px;
            margin-bottom: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .featured-image:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            .nav {
                flex-wrap: wrap;
            }
            .nav a {
                margin: 5px;
            }
            .content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <a href="#" data-tab="home">Home</a>
            <a href="#" data-tab="history">History</a>
        </nav>
        <div class="content" id="home-content">
            <div class="section">
                <h2>About</h2>
                <img src="./images/IMG_0073.jpg" alt="Avatar" class="avatar">
                <ul>
                    <li>名字: 羅傑</li>
                    <li>性別: 男</li>
                    <li>稱呼: Roger、阿瘸、狗金生</li>
                    <li>生日: 07/16</li>
                    <li>愛好: 踢破別人骨灰罈</li>
                </ul>
            </div>
            <div class="section">
                <h2>Info</h2>
                <p>實況主專門給狗幹。</p>
                <div class="game-list">
                    <h3>玩過的遊戲</h3>
                    <ul>
                        <li>爐石(競技場12勝不玩了</li>
                        <li>LOL</li>
                        <li>楓之谷(沒輪迴</li>
                        <li>NBA2K24(也不玩了</li>  
                    </ul>
                </div>
            </div>
            <div class="section">
                <h2>More</h2>
                <img src="./images/roger788.png" alt="Featured image" class="featured-image">
                <p>【個人業務合作信箱】qsx9527@gmail.com</p>
                <p>【叉滴娛樂團隊業務合作信箱】xdteam.sales@gmail.com</p>
            </div>
        </div>
        <div class="content" id="history-content" style="display:none">
            <div class="section">
                <h2>羅傑的歷史</h2>
                <p>2019年《爐石戰記》冬季賽冠軍</p>
                <p>2019年《爐石戰記》HCT 世界總決賽 16強</p>
            </div>
        </div>
        <div class="social-icons">
            <a href="https://www.twitch.tv/roger9527"><img src="./images/twitch.jpg" alt="Twitch"></a>
            <a href="https://www.facebook.com/Roger95279527/"><img src="./images/FB.jpg" alt="FB"></a>
            <a href="https://discord.gg/roger9527"><img src="./images/discord.png" alt="Discord"></a>
            <a href="https://www.youtube.com/@roger1446"><img src="./images/youtube.jpg" alt="YouTube"></a>
            <a href="https://www.instagram.com/roger95279527/"><img src="./images/IG.jpg" alt="IG"></a>
        </div>
    </div>
    <script src="roger.js"></script>
</body>
</html>