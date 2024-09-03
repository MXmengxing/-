<?php
    include 'inc/header.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>视频</title>
    <link rel="stylesheet" href="style/video.css">
</head>
<body>
    <main class="video-page">
        <section class="video-nav">
            <ul>
                <li>
                    <a href="https://www.youtube.com/@Meng_Xing" target="_blank">
                        <img src="images/YouTube.png" alt="YouTube">
                        <span>YouTube</span>
                    </a>
                </li>
                <li class="bilibili">
                    <a href="https://space.bilibili.com/1418214965" target="_blank">
                        <img src="images/bilibili.png" alt="哔哩哔哩">
                        <span>哔哩哔哩</span>
                    </a>
                </li>
                <li>
                    <a href="https://v.douyin.com/ihLcQ2mn/" target="_blank">
                        <img src="images/抖音.png" alt="抖音">
                        <span>抖音</span>
                    </a>
                </li>
                <li class="xigua">
                    <a href="https://www.ixigua.com/home/351474273237575?list_entrance=homepage" target="_blank">
                        <img src="images/西瓜视频.png" alt="西瓜视频">
                        <span>西瓜视频</span>
                    </a>
                </li>
            </ul>
        </section>

        <section class="featured-video">
            <h2>精彩推荐视频</h2>
            <div class="video-player">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/fjsbR9yeOaY?si=If3M0lUDv84EWOxz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <section class="related-videos">
            <h2>相关视频</h2>
            <div class="video-gallery">
                <div class="video-item">
                    <img src="images/video-thumbnail1.jpg" alt="视频 1">
                    <h3>视频标题 1</h3>
                    <p>简短描述或介绍视频的内容。</p>
                </div>
                <div class="video-item">
                    <img src="images/video-thumbnail2.jpg" alt="视频 2">
                    <h3>视频标题 2</h3>
                    <p>简短描述或介绍视频的内容。</p>
                </div>
                <div class="video-item">
                    <img src="images/video-thumbnail3.jpg" alt="视频 3">
                    <h3>视频标题 3</h3>
                    <p>简短描述或介绍视频的内容。</p>
                </div>
            </div>
        </section>

        <section class="subscribe">
            <h2>订阅我们的频道</h2>
            <p>获取最新视频更新，第一时间观看我们发布的精彩内容！</p>
            <a href="https://www.youtube.com/@Meng_Xing" class="cta-button" target="_blank">立即订阅</a>
        </section>
    </main>

    <footer class="footer">
        <p>&copy; 2024 梦星自制网. All rights reserved.</p>
        <div class="social-media">
            <a href="https://facebook.com" target="_blank">Facebook</a>
            <a href="https://twitter.com" target="_blank">Twitter</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
        </div>
    </footer>
</body>
</html>
