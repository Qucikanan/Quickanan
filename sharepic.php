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
 <button id="btnShare"  class="btn btn-primary" onclick="sendShare()"> คลิกเพื่อแชร์ให้เพื่อน </button>
 <!-- <button id="btnLogin" class="btn btn-success" onclick="liff.login()">Log In</button>-->
 <!-- <button id="btnLogOut" class="btn btn-warning" onclick="logOut()">Log Out</button>-->
    </div>
  <script src="https://static.line-scdn.net/liff/edge/versions/2.7.1/sdk.js"></script>
  <script>
    async function sendShare() {
      const result = await liff.shareTargetPicker([
       {
     "type": "flex",
     "altText": "HUN HIN IDPA 2022",  // แก้ตรงนี้นะครับ
     "contents": 
        
     {
  "type": "bubble",
  "hero": {
    "type": "image",
    "url": "https://dl.dropbox.com/s/3dshmt1mrx16ijw/%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%99%E0%B8%B1%E0%B8%81%E0%B8%81%E0%B8%B5%E0%B8%AC%E0%B8%B2.png",
    "size": "full",
    "aspectMode": "cover",
    "action": {
      "type": "uri",
      "uri": "https://datastudio.google.com/reporting/63559ab3-0c6c-468e-bf76-189a19cc3373"
    }
  },
  "footer": {
    "type": "box",
    "layout": "vertical",
    "spacing": "none",
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
                "type": "button",
                "action": {
                  "type": "uri",
                  "label": "COF 1-11",
                  "uri": "https://linevoom.line.me/post/_dQFUVM9_DYZHIB43bQBeyTR2hM56T_9_vFm61Ag/1163998127903074564"
                },
                "style": "primary",
                "height": "sm"
              }
            ]
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "button",
                "style": "secondary",
                "height": "sm",
                "action": {
                  "type": "uri",
                  "label": "รายชื่อนักกีฬา Update 20-01-2565",
                  "uri": "https://datastudio.google.com/reporting/63559ab3-0c6c-468e-bf76-189a19cc3373"
                }
              }
            ],
            "margin": "sm",
            "spacing": "sm"
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "button",
                "style": "secondary",
                "height": "sm",
                "action": {
                  "type": "uri",
                  "label": "แจ้งแก้ไขข้อมูล K.เก๋",
                  "uri": "http://line.me/ti/p/0CJB3-AoAu"
                }
              }
            ],
            "spacing": "sm",
            "margin": "sm"
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "button",
                "action": {
                  "type": "uri",
                  "label": "Add line งาน HUA HIN",
                  "uri": "https://lin.ee/3PZvTwW"
                },
                "style": "primary",
                "margin": "none",
                "height": "sm",
                "adjustMode": "shrink-to-fit"
              }
            ],
            "spacing": "sm",
            "margin": "sm"
          },
          {
            "type": "box",
            "layout": "vertical",
            "contents": [
              {
                "type": "button",
                "action": {
                  "type": "uri",
                  "label": "แชร์ให้เพื่อน",
                  "uri": "https://liff.line.me/1656755519-ROMobGGP"
                },
                "adjustMode": "shrink-to-fit"
              }
            ],
            "spacing": "none",
            "margin": "sm"
          }
        ]
      }
    ]
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
      await liff.init({ liffId: "1656755519-ROMobGGP" })
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


