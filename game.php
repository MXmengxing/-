<?php
    include 'inc/header.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>游戏</title>
    <link rel="stylesheet" href="style/game.css">
</head>
<body>
    <div id="server">
        <h1>MC伺服器</h1>
        <div id="server-status">
            <h2>服务器状态：<span id="status">加载中...</span></h2>
            <h2>在线玩家:<span id="player-count">加载中...</span></h2>
            <h2>服务器IP:</h2>
                <ul id="server-ip">
                    <li>基岩版:IP:XXXXXX 端口:XXXXXXXX</li>
                    <li>JAVA版:IP:XXXXXXXXX</li>
                </ul>
        </div>
        <div id="map-list">
            <h1>游戏地图</h1>
            <ul id="maps">

            </ul>
        </div>
    </div>

</body>
</html>
