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
    "template": {
      "columns": [
        {
          "imageUrl": "https://media.giphy.com/media/KbvZsN07K9Hy9ZoyR7/giphy.gif",
          "action": {
            "type": "uri",
            "label": "Open App",
            "uri": "https://liff.line.me/1655659522-8DD3AL3n"
          }
        }
      ],
      "type": "image_carousel"
    },
    "altText": "this is an image carousel template",
    "type": "template"
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


