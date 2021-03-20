<!DOCTYPE html>
<html>
<head><title>google_form_liff</title></head>
 
<body>
 
<script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
<script>
 
  async function getUserProfile() {
   const profile = await liff.getProfile()
   window.location.replace(
    `https://docs.google.com/forms/d/e/1GzwDK4bPlfIYhoo15N0OnP9Ot8l6I-s0rm7-8vgYMIM/viewform?
    &entry.42101711=${profile.userId}
    &entry.1118901992=${profile.displayName}`
     );
   
   }
 
  async function main() {
     await liff.init({ liffId: "1655741207-RQOmNO5B" })
       if (liff.isLoggedIn()) {
         getUserProfile()
       } else {
         liff.login()
       }
   }
   main()
 </script>
 
 </body>
</html>
