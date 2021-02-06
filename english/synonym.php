<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex">
<meta name="mobile-web-app-capable" content="yes" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<style>
      body {
        background: #000000;
        overflow: hidden;
        margin: 0 auto;
        padding: 0;
      }

      #gameContainer {
        position: fixed;
        margin: auto;
        display: block;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
      }
    </style>
<script src="arcade.js"></script>
</head>
<body>
<div id="gameContainer"></div>
<script>
      arcademics.display("gameContainer", "elephant-feed", { endGameEnabled: false });
    </script>
</body>
</html>