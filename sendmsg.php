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
      const result = await liff.sendMessages([
           {
          "type": "flex",
          "altText": "Flex Message",
          "contents":{
  "type": "carousel",
  "contents": [
    {
      "type": "bubble",
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "image",
            "url": "https://www.img.in.th/images/116605ddc17a0b47fab66bd9a02ae0eb.png",
            "gravity": "top",
            "size": "full",
            "aspectMode": "cover"
          }
        ],
        "paddingAll": "0px"
      }
    },
    {
      "type": "bubble",
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "333 IDPA 1/2021",
            "size": "xl",
            "align": "center",
            "margin": "md",
            "color": "#ffffff",
            "offsetTop": "5%"
          },
          {
            "type": "text",
            "text": " #The Killer",
            "size": "4xl",
            "align": "center",
            "margin": "lg",
            "color": "#ffffff",
            "offsetTop": "6%"
          },
          {
            "type": "text",
            "text": "21 March 2021",
            "margin": "xxl",
            "size": "lg",
            "align": "center",
            "color": "#ffffff"
          },
          {
            "type": "box",
            "layout": "baseline",
            "contents": [
              {
                "type": "icon",
                "url": "https://cdn.icon-icons.com/icons2/1559/PNG/512/3440906-direction-location-map-marker-navigation-pin_107531.png",
                "size": "3xl",
                "offsetTop": "30%",
                "margin": "xs"
              },
              {
                "type": "text",
                "text": "333 Shooting rang Rangsit, Pathumthani",
                "wrap": true,
                "margin": "md",
                "size": "md",
                "align": "start",
                "color": "#ffffff"
              }
            ],
            "margin": "xs"
          }
        ],
        "backgroundColor": "#404040"
      }
    },
    {
      "type": "bubble",
      "body": {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "image",
            "url": "https://www.img.in.th/images/116605ddc17a0b47fab66bd9a02ae0eb.png",
            "align": "center",
            "size": "3xl"
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "text",
                "text": "<<รายละเอียด>>",
                "color": "#ffffff",
                "align": "center",
                "size": "lg"
              }
            ]
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "text",
                "text": "ลงทะเบียน",
                "color": "#404040",
                "align": "center",
                "size": "xl",
                "margin": "sm",
                "weight": "bold"
              }
            ],
            "backgroundColor": "#ffffff",
            "cornerRadius": "55px",
            "height": "40px",
            "alignItems": "center",
            "margin": "xl"
          }
        ],
        "backgroundColor": "#404040"
      }
    }
  ]
}


        }
      ])
       .then(() => {
    console.log('message sent');
  })
  .catch((err) => {
    console.log('error', err);
  });
      
      
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
      await liff.init({ liffId: "1655647861-oWn4v2RN" })
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
