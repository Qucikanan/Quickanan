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
  "type": "carousel",
  "contents": [
    {
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
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip1.jpg",
            "size": "full",
            "aspectMode": "cover",
            "aspectRatio": "2:3",
            "gravity": "top"
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
                    "text": "Brown's T-shirts",
                    "size": "xl",
                    "color": "#ffffff",
                    "weight": "bold"
                  }
                ]
              },
              {
                "type": "box",
                "layout": "baseline",
                "contents": [
                  {
                    "type": "text",
                    "text": "¥35,800",
                    "color": "#ebebeb",
                    "size": "sm",
                    "flex": 0
                  },
                  {
                    "type": "text",
                    "text": "¥75,000",
                    "color": "#ffffffcc",
                    "decoration": "line-through",
                    "gravity": "bottom",
                    "flex": 0,
                    "size": "sm"
                  }
                ],
                "spacing": "lg"
              },
              {
                "type": "box",
                "layout": "vertical",
                "contents": [
                  {
                    "type": "filler"
                  },
                  {
                    "type": "box",
                    "layout": "baseline",
                    "contents": [
                      {
                        "type": "filler"
                      },
                      {
                        "type": "icon",
                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip14.png"
                      },
                      {
                        "type": "text",
                        "text": "Add to cart",
                        "color": "#ffffff",
                        "flex": 0,
                        "offsetTop": "-2px"
                      },
                      {
                        "type": "filler"
                      }
                    ],
                    "spacing": "sm"
                  },
                  {
                    "type": "filler"
                  }
                ],
                "borderWidth": "1px",
                "cornerRadius": "4px",
                "spacing": "sm",
                "borderColor": "#ffffff",
                "margin": "xxl",
                "height": "40px"
              }
            ],
            "position": "absolute",
            "offsetBottom": "0px",
            "offsetStart": "0px",
            "offsetEnd": "0px",
            "backgroundColor": "#03303Acc",
            "paddingAll": "20px",
            "paddingTop": "18px"
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "text",
                "text": "SALE",
                "color": "#ffffff",
                "align": "center",
                "size": "xs",
                "offsetTop": "3px"
              }
            ],
            "position": "absolute",
            "cornerRadius": "20px",
            "offsetTop": "18px",
            "backgroundColor": "#ff334b",
            "offsetStart": "18px",
            "height": "25px",
            "width": "53px"
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
            "type": "image",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip2.jpg",
            "size": "full",
            "aspectMode": "cover",
            "aspectRatio": "2:3",
            "gravity": "top"
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
                    "text": "Cony's T-shirts",
                    "size": "xl",
                    "color": "#ffffff",
                    "weight": "bold"
                  }
                ]
              },
              {
                "type": "box",
                "layout": "baseline",
                "contents": [
                  {
                    "type": "text",
                    "text": "¥35,800",
                    "color": "#ebebeb",
                    "size": "sm",
                    "flex": 0
                  },
                  {
                    "type": "text",
                    "text": "¥75,000",
                    "color": "#ffffffcc",
                    "decoration": "line-through",
                    "gravity": "bottom",
                    "flex": 0,
                    "size": "sm"
                  }
                ],
                "spacing": "lg"
              },
              {
                "type": "box",
                "layout": "vertical",
                "contents": [
                  {
                    "type": "filler"
                  },
                  {
                    "type": "box",
                    "layout": "baseline",
                    "contents": [
                      {
                        "type": "filler"
                      },
                      {
                        "type": "icon",
                        "url": "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip14.png"
                      },
                      {
                        "type": "text",
                        "text": "Add to cart",
                        "color": "#ffffff",
                        "flex": 0,
                        "offsetTop": "-2px"
                      },
                      {
                        "type": "filler"
                      }
                    ],
                    "spacing": "sm"
                  },
                  {
                    "type": "filler"
                  }
                ],
                "borderWidth": "1px",
                "cornerRadius": "4px",
                "spacing": "sm",
                "borderColor": "#ffffff",
                "margin": "xxl",
                "height": "40px"
              }
            ],
            "position": "absolute",
            "offsetBottom": "0px",
            "offsetStart": "0px",
            "offsetEnd": "0px",
            "backgroundColor": "#9C8E7Ecc",
            "paddingAll": "20px",
            "paddingTop": "18px"
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "text",
                "text": "SALE",
                "color": "#ffffff",
                "align": "center",
                "size": "xs",
                "offsetTop": "3px"
              }
            ],
            "position": "absolute",
            "cornerRadius": "20px",
            "offsetTop": "18px",
            "backgroundColor": "#ff334b",
            "offsetStart": "18px",
            "height": "25px",
            "width": "53px"
          }
        ],
        "paddingAll": "0px"
      }
    }
  ]
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
