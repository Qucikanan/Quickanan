  
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
   <script src="https://static.line-scdn.net/liff/edge/versions/2.7.0/sdk.js"></script> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Hello!</title>
    
    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css">
    
    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>
  </head>  
  <body>
    <div class="container">
 <button id="btnShare"  class="btn btn-primary" onclick="sendShare()">send msg</button>
  <button id="btnLogin" class="btn btn-success" onclick="liff.login()">Log In</button>
  <button id="btnLogOut" class="btn btn-warning" onclick="logOut()">Log Out</button>
    </div>
  <script src="https://static.line-scdn.net/liff/edge/versions/2.7.1/sdk.js"></script>
  <script>
    async function sendShare() {
      const result = await liff.sendMessages([
           {
          "type": "flex",
          "altText": "Flex Message",
          "contents":
             
             {
  "type": "bubble",
  "size": "giga",
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "image",
        "url": "https://dl.dropbox.com/s/7fhw5dhe6o9hmss/2222.jpg",
        "size": "full",
        "aspectMode": "cover",
        "aspectRatio": "1:1",
        "gravity": "center",
        "animated": true
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": [],
        "position": "absolute",
        "background": {
          "type": "linearGradient",
          "angle": "0deg",
          "endColor": "#00000000",
          "startColor": "#00000099"
        },
        "width": "100%",
        "height": "40%",
        "offsetBottom": "0px",
        "offsetStart": "0px",
        "offsetEnd": "0px"
      },
      {
        "type": "box",
        "layout": "horizontal",
        "contents": [
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "box",
                "layout": "vertical",
                "contents": [
                  {
                    "type": "text",
                    "text": "333 IDPA 1/2021 #The Killer",
                    "color": "#ffffff",
                    "size": "lg",
                    "weight": "bold",
                    "gravity": "center",
                    "wrap": true,
                    "align": "center"
                  },
                  {
                    "type": "text",
                    "text": "ลงทะเบียนและชำระเงิน",
                    "size": "lg",
                    "color": "#ffffff",
                    "wrap": true,
                    "align": "center",
                    "gravity": "center"
                  },
                  {
                    "type": "text",
                    "text": "วันนี้วันสุดท้าย",
                    "size": "lg",
                    "color": "#ffffff",
                    "wrap": true,
                    "align": "center",
                    "gravity": "center"
                  }
                ]
              },
              {
                "type": "box",
                "layout": "vertical",
                "contents": [
                  {
                    "type": "box",
                    "layout": "vertical",
                    "contents": [
                      {
                        "type": "text",
                        "text": "ลงทะเบียนหน้างาน 3,500 บาท",
                        "color": "#ffffff",
                        "gravity": "center",
                        "align": "center",
                        "wrap": true
                      }
                    ]
                  },
                  {
                    "type": "box",
                    "layout": "baseline",
                    "contents": [
                      {
                        "type": "icon",
                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                      },
                      {
                        "type": "icon",
                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                      },
                      {
                        "type": "icon",
                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                      },
                      {
                        "type": "text",
                        "text": "ติดขัดอะไรแจ้งได้ที่ คุณเก๋",
                        "gravity": "center",
                        "color": "#ffffff",
                        "action": {
                          "type": "uri",
                          "label": "action",
                          "uri": "https://line.me/ti/p/0CJB3-AoAu"
                        },
                        "wrap": true
                      },
                      {
                        "type": "icon",
                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                      },
                      {
                        "type": "icon",
                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                      },
                      {
                        "type": "icon",
                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                      }
                    ]
                  }
                ],
                "justifyContent": "center",
                "alignItems": "center"
              }
            ],
            "spacing": "xs",
            "backgroundColor": "#03303Acc"
          }
        ],
        "position": "absolute",
        "offsetBottom": "0px",
        "offsetStart": "0px",
        "offsetEnd": "0px",
        "paddingAll": "20px"
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "วันสุดท้าย",
            "offsetTop": "3px",
            "align": "center",
            "color": "#ffffff",
            "size": "xs"
          }
        ],
        "position": "absolute",
        "width": "80px",
        "height": "25px",
        "backgroundColor": "#ff334b",
        "cornerRadius": "20px",
        "offsetTop": "18px",
        "offsetStart": "18px"
      }
    ],
    "paddingAll": "0px"
  }
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
