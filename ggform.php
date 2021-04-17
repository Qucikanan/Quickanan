<!DOCTYPE html>
<html>
<head><title>google_form_liff</title></head>
 
<body>
 
<script src="https://static.line-scdn.net/liff/edge/2.1/liff.js"></script>
<script>
 
  async function getUserProfile() {
   const profile = await liff.getProfile()
   window.location.replace(
    `https://docs.google.com/forms/d/e/1FAIpQLScghnVRh7WOkL_4R_1Q68CfWjGy4VibMNCEHJJhycWLLBfScQ/viewform?
    &entry.42101711=${profile.userId}
    &entry.1118901992=${profile.displayName}
    &entry.1749755748=${profile.pictureUrl}`
     );
   
   }
 
  async function main() {
     await liff.init({ liffId: "1655586880-a1EbXxev" })
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
