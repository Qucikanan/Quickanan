<!DOCTYPE html>
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
    <div class="card" style="width: 18rem;">
  <img src="https://cdn.pixabay.com/photo/2014/05/03/00/56/summerfield-336672__340.jpg" class="card-img-top" alt="test">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="https://liff.line.me/1655665982-YBkX5rWN" class="btn btn-primary" id="send2">Go somewhere</a>
  </div>
  </div>
    <button type="button" class="btn btn-primary" id="send">Primary</button>
    <button type="button" class="btn btn-info" id="send3">Info</button>
    <p>
      https://cdn.pixabay.com/photo/2014/05/03/00/56/summerfield-336672__340.jpg
    </p>
    <center>
    <iframe src="https://www.appsheet.com/start/d7cd28ee-e939-4dc1-ad79-4dcc4e860a4d" style="border:none;" width="320" height="620"/>
        </center>
    
    <script>
      <!-- โหลดเสร็จก่อนค่อยทำงานใน Function(e) -->
      window.onload = function(e) {
      <!-- เปิด liff ถ้าไม่ log in  -->
        liff.init({liffId: "1655665982-YBkX5rWN"}, function() {
         if (liff.isLoggedIn()) {
         testclick();
         sharelink();
          } else {
        liff.login();
      }

  

  });
    
}
      <!-- ต่อลิงค์ parameter-->
    function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}     
      
      
      function sharelink(){
        var iton5 = getParameterByName("refer");
        //link1
        if(iton5 == "tests"){
          var x = prompt("โปรดพิมพ์ข้อความ")
             liff.shareTargetPicker([ {
      "type": "flex",
      "altText": "This is a Flex Message",
      "contents": {
  "type": "bubble",
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "image",
        "url": "https://stickershop.line-scdn.net/stickershop/v1/product/16669/iPhone/main@2x.png",
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
                "layout": "horizontal",
                "contents": [
                  {
                    "type": "text",
                    "text": "Brown Grand Hotel",
                    "size": "xl",
                    "color": "#ffffff"
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
                    "type": "icon",
                    "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                  },
                  {
                    "type": "icon",
                    "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                  },
                  {
                    "type": "text",
                    "text": "4.0",
                    "color": "#a9a9a9"
                  }
                ],
                "spacing": "xs"
              },
              {
                "type": "box",
                "layout": "horizontal",
                "contents": [
                  {
                    "type": "box",
                    "layout": "baseline",
                    "contents": [
                      {
                        "type": "text",
                        "text": ""+x,
                        "color": "#ffffff",
                        "size": "md",
                        "flex": 0,
                        "align": "end"
                      },
                      {
                        "type": "text",
                        "text": "¥82,000",
                        "color": "#a9a9a9",
                        "decoration": "line-through",
                        "size": "sm",
                        "align": "end"
                      }
                    ],
                    "flex": 0,
                    "spacing": "lg"
                  }
                ]
              }
            ],
            "spacing": "xs"
          }
        ],
        "position": "absolute",
        "offsetBottom": "0px",
        "offsetStart": "0px",
        "offsetEnd": "0px",
        "paddingAll": "20px"
      }
    ],
    "paddingAll": "0px"
  }
}
                                }]).then(function () {
            liff.closeWindow();
        })
          
        }
        //link2
         if(iton5 == "ball"){
             liff.sendMessages([{
  "type": "template",
  "altText": "this is a buttons template",
  "template": {
    "type": "buttons",
    "thumbnailImageUrl": "https://media.giphy.com/media/AgVHpjirmtEDkR02AJ/giphy.gif",
    "imageAspectRatio": "square",
    "imageSize": "cover",
    "title": "fdsafs",
    "text": "fdsafadsf",
    "actions": [
      {
        "type": "uri",
        "label": "Action 1",
        "uri": "https://facebook.com"
      }
    ]
  }
} ]).then(function () {
            liff.closeWindow();
        })
          
        }
        //link3
         if(iton5 == "test"){
            var x = getParameterByName("online");
           var y = getParameterByName("keyw");
           var z = getParameterByName("linkw");
             liff.sendMessages([{
         "type": "template",
  "altText": "this is a buttons template",
  "template": {
    "type": "buttons",
    "thumbnailImageUrl": "https://stickershop.line-scdn.net/stickershop/v1/product/"+x+"/iPhone/main@2x.png",
    "imageAspectRatio": "square",
    "imageSize": "cover",
    "title": "fdsafs",
    "text": ""+y,
    "actions": [
      {
        "type": "uri",
        "label": "Action 1",
        "uri": ""+z
      }
    ]
  }
} ]).then(function () {
            liff.closeWindow();
        })
          
        }
      }
      
      
      
      
      
      function testclick(){
        //button1
        document.getElementById('send').addEventListener('click', function() {
     liff.shareTargetPicker([{
  "type": "template",
  "altText": "this is a buttons template",
  "template": {
    "type": "buttons",
    "thumbnailImageUrl": "https://media.giphy.com/media/AgVHpjirmtEDkR02AJ/giphy.gif",
    "imageAspectRatio": "square",
    "imageSize": "cover",
    "title": "fdsafs",
    "text": "fdsafadsf",
    "actions": [
      {
        "type": "uri",
        "label": "Action 1",
        "uri": "https://google.com"
      }
    ]
  }
} ]).then(function () {
            liff.closeWindow();
        })
     
   });
              //button2
              document.getElementById('send2').addEventListener('click', function() {
                 var x = prompt("โปรดพิมพ์ข้อความ")
                 var y = prompt("โปรดลิ้งค์รูปภาพ")
     liff.sendMessages([{

                "type": "text",

                "text": ""+x,
      "sentBy": {

                    "label": "BOTSTICKERLTH",

                    "iconUrl": ""+y,

                    "linkUrl": "https://line.me/ti/p/~@botstickerlth"

            }
  } ]).then(function () {
            liff.closeWindow();
        })
     
   }); 
          document.getElementById('send3').addEventListener('click', function() {
          liff.getProfile().then(profile => {
  var name = profile.displayName
  var picURL = profile.pictureUrl
   liff.sendMessages([ {
      "type": "flex",
      "altText": "This is a Flex Message",
      "contents": {
  "type": "bubble",
  "hero": {
    "type": "image",
    "url": ""+picURL,
    "size": "full",
    "aspectRatio": "1:1",
    "aspectMode": "fit",
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
        "type": "text",
        "text": ""+name,
        "weight": "bold",
        "size": "xl"
      }
    ]
  }
}

}]).then(function () {
            liff.closeWindow();
        });
})
    
     
   });
      }
    </script>
    <!-- include the Glitch button to show what the webpage is about and
          to make it easier for folks to view source and remix -->
    <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div>
    
  </body>
</html>
