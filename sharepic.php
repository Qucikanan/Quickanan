<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
  <title>My LIFF App</title>
  <style>
    body { padding: 256px }
    button { display: none; width: 50%; padding: 16px 0; margin: 16px auto }
  </style>
</head>
<body>
  <button id="btnShare" onclick="sendShare()">Share Target Picker</button>
  <button id="btnLogin" onclick="liff.login()">Log In</button>
  <button id="btnLogOut" onclick="logOut()">Log Out</button>
  <script src="https://static.line-scdn.net/liff/edge/versions/2.7.1/sdk.js"></script>
  <script>
    async function sendShare() {
      const result = await liff.shareTargetPicker([
       {
          "type": "flex",
          "altText": "Flex Message",
          "contents":{
  "type": "bubble",
  "size": "giga",
  "body": {
    "type": "box",
    "layout": "horizontal",
    "contents": [
      {
        "type": "image",
        "url": "https://www.img.in.th/images/d6b123c0add023c77e52cf1385baf03e.th.png",
        "size": "full",
        "align": "center",
        "flex": 5
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "333 IDPA 2021",
            "color": "#ffffff",
            "size": "xl",
            "weight": "bold",
            "style": "normal",
            "align": "center",
            "offsetTop": "10%"
          },
          {
            "type": "text",
            "text": "21 March 2021",
            "color": "#ffffff",
            "align": "center",
            "weight": "bold",
            "style": "normal",
            "offsetTop": "10%"
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "button",
                "action": {
                  "type": "uri",
                  "label": "<<รายละเอียด>>",
                  "uri": "https://quickanan.herokuapp.com/event1.php"
                },
                "color": "#ffffff"
              }
            ],
            "backgroundColor": "#404040",
            "cornerRadius": "10px",
            "height": "20%",
            "justifyContent": "center",
            "margin": "lg",
            "alignItems": "center",
            "offsetTop": "10%"
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "button",
                "action": {
                  "type": "uri",
                  "label": "ลงทะเบียน",
                  "uri": "https://line.me/ti/p/0CJB3-AoAu"
                },
                "color": "#404040"
              }
            ],
            "backgroundColor": "#ffffff",
            "cornerRadius": "10px",
            "height": "20%",
            "justifyContent": "center",
            "margin": "lg",
            "alignItems": "center",
            "offsetTop": "10%"
          }
        ],
        "flex": 5
      }
    ],
    "backgroundColor": "#404040"
  },
  "footer": {
    "type": "box",
    "layout": "baseline",
    "contents": [
      {
        "type": "icon",
        "url": "https://www.img.in.th/images/8d7a71c4f18561cf7c36b1c16a971fd4.png",
        "size": "xl",
        "margin": "none",
        "offsetBottom": "50%",
        "offsetStart": "8%"
      },
      {
        "type": "text",
        "text": "333 Shooting Range Rangsit, Pathumthani",
        "margin": "xl",
        "size": "xs",
        "align": "start",
        "style": "normal",
        "offsetBottom": "xl",
        "offsetStart": "7%"
      }
    ],
    "height": "40px"
  }
}



        }
      ])
       
      
      if (result) {
        alert(`[${result.status}] Message sent!`)
      } else {
        const [majorVer, minorVer, patchVer] = (liff.getLineVersion() || "").split('.');

        if (minorVer === undefined) {
          alert('ShareTargetPicker was canceled in external browser')
          return
        }

        if (parseInt(majorVer) >= 10 && parseInt(minorVer) >= 10 && parseInt(patchVer) > 0) {
          alert('ShareTargetPicker was canceled in LINE app')
        }
      }
    }
    function logOut() {
      liff.logout()
      window.location.reload()
    }
    async function main() {
      await liff.init({ liffId: "1655653820-LEzAy2pe" })
      if (liff.isLoggedIn()) {
        document.getElementById("btnShare").style.display = "block"
      if (!liff.isInClient()) {
          document.getElementById("btnLogOut").style.display = "block"
        }
      } else {
        document.getElementById("btnLogin").style.display = "block"
      }
    }
    main()
  </script>
</body>
</html>


