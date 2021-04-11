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
 <button id="btnShare"  class="btn btn-primary" onclick="sendShare()">Share Target Picker</button>
  <button id="btnLogin" class="btn btn-success" onclick="liff.login()">Log In</button>
  <button id="btnLogOut" class="btn btn-warning" onclick="logOut()">Log Out</button>
    </div>
  <script src="https://static.line-scdn.net/liff/edge/versions/2.7.1/sdk.js"></script>
  <script>
    async function sendShare() {
      const result = await liff.shareTargetPicker([
       {
     "type": "flex",
     "altText": "คณะทำงานพิจารณาปัญหาพิกัด",  // แก้ตรงนี้นะครับ
     "contents": 
        
        {
  "type": "bubble",
  "size": "mega",
  "hero": {
    "type": "box",
    "layout": "horizontal",
    "contents": [
      {
        "type": "image",
        "url": "https://dl.dropbox.com/s/5j737c2oky7erbt/%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B8%E0%B8%A5%E0%B8%81%E0%B8%B2%E0%B8%81%E0%B8%A3.jpg",
        "action": {
          "type": "uri",
          "label": "action",
          "uri": "https://liff.line.me/1655653820-LEzAy2pe"
        }
      },
      {
        "type": "image",
        "size": "xxs",
        "position": "absolute",
        "offsetEnd": "5px",
        "url": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpQtK2H5CE4CP7yO_JLRSpgDn5aU3HD_hsPkFqmzrNLD7IZ9pqnrdyNmsbfODD5LQQwjk&usqp=CAU",
        "action": {
          "type": "uri",
          "label": "action",
          "uri": "https://liff.line.me/1655653820-LEzAy2pe"
        }
      }
    ]
  },
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text",
        "text": "เอกสารประกอบการประชุม",
        "weight": "bold",
        "size": "md",
        "align": "center"
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": [
          {
            "type": "text",
            "text": "คณะทำงานพิจารณาปัญหาพิกัดอัตราศุลกากรประจำสำนักงานศุลกากรกรุงเทพ",
            "wrap": true,
            "align": "center"
          }
        ]
      },
      {
        "type": "box",
        "layout": "vertical",
        "contents": []
      }
    ]
  },
  "footer": {
    "type": "box",
    "layout": "horizontal",
    "spacing": "sm",
    "contents": [
      {
        "type": "button",
        "style": "primary",
        "action": {
          "type": "uri",
          "label": "เอกสารแนบ 1",
          "uri": "https://drive.google.com/file/d/1gHcywfH8W_Hhpe0DTgwQiSy9YBQI2ta9/view?usp=sharing"
        },
        "height": "sm"
      },
      {
        "type": "button",
        "style": "secondary",
        "action": {
          "type": "uri",
          "label": "เอกสารแนบ 2",
          "uri": "https://drive.google.com/file/d/1aEUsTMGP82D3k5x3MJ9RMYCQ9AwChYDi/view?usp=sharing"
        },
        "height": "sm"
      }
    ],
    "flex": 0
  }
}}
        
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


