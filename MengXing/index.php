<?php
include 'inc/header.php';

// 示例 API 密钥和频道 ID
$youtubeApiKey = 'AIzaSyC2_29swRQ1mJRoItQEtrqmlQ0F0ufIolI';
$youtubeChannelId = 'UC0ynlaQSpgX7iYJJEFqQt4Q';
$bilibiliUserId = '1418214965'; // 示例 ID
$douyinUserId = '用户 ID'; // 请替换为实际 ID
$xiguaUserUrl = 'https://www.ixigua.com/home/351474273237575?list_entrance=homepage';

// 获取 YouTube 订阅者数
function getYouTubeSubscribers($apiKey, $channelId) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/channels?part=statistics&id={$channelId}&key={$apiKey}";
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);
    return isset($data['items'][0]['statistics']['subscriberCount']) ? number_format($data['items'][0]['statistics']['subscriberCount']) : '无法获取数据';
}

// 获取哔哩哔哩粉丝数
function getBilibiliFollowers($userId) {
    $apiUrl = "https://api.bilibili.com/x/space/acc/info?mid={$userId}";
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);
    return isset($data['data']['follower']) ? number_format($data['data']['follower']) : '无法获取数据';
}

// 获取抖音粉丝数
function getDouyinFollowers($userId) {
    // 这里需要处理动态网页抓取，示例仅为占位
    return '无法获取数据';
}

// 获取西瓜视频粉丝数
function getXiguaFollowers($url) {
    $html = file_get_contents($url);
    if ($html === FALSE) {
        return '无法获取数据';
    }

    // 使用 DOMDocument 解析 HTML
    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $xpath = new DOMXPath($dom);

    // 查找包含粉丝数的元素（具体的 XPath 查询需要根据实际页面结构调整）
    $elements = $xpath->query("//div[@class='follower-count']"); // 示例 XPath 查询
    if ($elements->length > 0) {
        return $elements->item(0)->textContent;
    }

    return '无法获取粉丝数';
}

// 调用函数
$youtubeSubscribers = getYouTubeSubscribers($youtubeApiKey, $youtubeChannelId);
$bilibiliFollowers = getBilibiliFollowers($bilibiliUserId);
$douyinFollowers = getDouyinFollowers($douyinUserId);
$xiguaFollowers = getXiguaFollowers($xiguaUserUrl);
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <main class="main-content">
        <section class="hero">
            <h1>欢迎来到梦星自制网</h1>
            <p>探索我最新的视频内容和有趣的动态，了解我为您提供的精彩内容。</p>
            <a href="video.php" class="cta-button">观看最新视频</a>
        </section>

        <section class="features">
            <div class="feature">
                <h2>梦星的精神状态</h2>
                <p>一只爱幻想的咸鱼</p>
            </div>
            <div class="feature">
                <h2>梦星的行为</h2>
                <p>摆烂</p>
            </div>
            <div class="feature">
                <h2>梦星的更新速度</h2>
                <p>一个星期能更一次不错了</p>
            </div>
        </section>

        <section class="video">
            <h2>精彩视频</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fjsbR9yeOaY?si=If3M0lUDv84EWOxz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section class="testimonials">
            <h2>用户评价</h2>
            <div class="testimonial">
                <p>"这是一个绝妙的网站！我爱上了它提供的所有内容和服务。"</p>
                <cite>- 幻想的用户A</cite>
            </div>
            <div class="testimonial">
                <p>"梦星自制网是我浏览视频的首选网站，内容总是那么有趣和高质量。"</p>
                <cite>- 幻想的用户B</cite>
            </div>
        </section>

        <section class="social-stats">
            <h2>社交媒体统计</h2>
            <div class="stats">
                <div class="stat">
                    <h3>YouTube 订阅者</h3>
                    <p><?php echo htmlspecialchars($youtubeSubscribers); ?></p>
                </div>
                <div class="stat">
                    <h3>哔哩哔哩 粉丝数</h3>
                    <p><?php echo htmlspecialchars($bilibiliFollowers); ?></p>
                </div>
                <div class="stat">
                    <h3>抖音 粉丝数</h3>
                    <p><?php echo htmlspecialchars($douyinFollowers); ?></p>
                </div>
                <div class="stat">
                    <h3>西瓜视频 粉丝数</h3>
                    <p><?php echo htmlspecialchars($xiguaFollowers); ?></p>
                </div>
            </div>
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
