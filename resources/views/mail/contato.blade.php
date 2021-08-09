<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mensagem Presdents</title>
   <style type="text/css">
      @media screen {
         @font-face {
            font-family: 'Lato';
            font-style: normal;
            src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
         }

         body {
            font-family: "Lato", "Lucida Grande", "Lucida Sans Unicode", Tahoma, Sans-Serif;
         }
      }
      .pres-table tr td:first-child {
         padding: 10px;
         /* border-right: solid 1px red; */
         text-align: right !important;
         font-weight: bold;
      }
      .pres-table tr td:last-child {
         padding: 20px;
         text-align: left !important;
         font-weight: normal;
      }
      .pres-table {
         
         width: auto;
         max-width: 600px;
         margin: 0 auto;
      }
   </style>
</head>
<body>
   <div style="  padding: 40px; width: 100%;">
      <div style=" max-width: 800px; width: auto; margin: 0 auto;">
         <div style=" padding: 20px; text-align: center;">
            <img style="width: 260px" src="https://presidenteclinicadafamilia.com.br/beta/public/images/presdents/logo-v1.png"/>
         </div>
         <hr style="margin: 20px auto; width: 60%; border: none; height: 1px; background-color: #3082C7; color: #3082C7; " />
         <div style="padding: 20px; text-align: center;">
            <h3  style="color">Nova mensagem | Via SITE</h3>
         </div>
        
         <div style="">
            <table class="pres-table">
               <tr>
                  <td>
                     Nome
                  </td>
                  <td>
                     {{ $messageData['nome'] }}
                  </td>
               </tr>
               <tr>
                  <td>
                     E-mail
                  </td>
                  <td>
                     {{ $messageData['email'] }}
                  </td>
               </tr>
               <tr>
                  <td>
                     Telefone
                  </td>
                  <td>
                     {{ $messageData['telefone'] }}
                  </td>
               </tr>
            </table>
            <hr style="margin: 20px auto; width: 60%; border: none; height: 1px; background-color: #418636; color: #418636; " />
            <div style="text-align: center;">
               <h4>Mensagem</h4>
               {{ $messageData['mensagem'] }}
            </div>
         </div>
      </div>
      
   </div>
</body>
</html>
