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
        <div class="col-md-3 mt-3">
            <label for="name" class="form-label">ชื่อ-สกุล</label>
            <input
              type="text"
              class="form-control"
              name="name"
              id="name"
              placeholder="ชื่อ-สกุล"
            />
          </div>
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
  "hero": {
    "type": "image",
    "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
    "size": "full",
    "aspectRatio": "20:13",
    "aspectMode": "cover",
    "action": {
      "type": "uri",
      "uri": "http://linecorp.com/"
    }
  },
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text" ,
        "text": "Brown Cafe" +name,
        "weight": "bold",
        "size": "xl"
      }
    ]
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
