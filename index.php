<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<br />        
        <meta name="Nishikant" content="Nishikant Bhavesh Parmar - ( nishikantparmar )">
        <title>Chats - NiksChat</title>
        <link rel="icon" href="../data/media/nikschatlogo.jpg" type="image/jpg">
        <link rel="stylesheet" href="font-awesome.min.css">
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
        <script src="data/engine/jquery.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            function go () {
                alert("window");
            }
         function processmessage(mcg) {
            if (mcg=='') {
                alert('Please type something...');
            } else 
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("div_of_chat").innerHTML =
              this.responseText;
            }
          };
          xhttp.open("GET", "load_result.php?message="+mcg, true);
          xhttp.send();
          document.getElementById("message").value='';
          if(mcg!='') {document.getElementById("press_enter").innerHTML='<div id="clr_g" style="margin-bottom:-3px;"> <b> &#10003 Sent</b></div>';
            }
        } ;  
        function remove_sent(e) {
            document.getElementById("press_enter").innerHTML='Press enter to send';
            

        };
        var timeout = setTimeout(reloadChat, 500    );

        function reloadChat () {
        $('#div_of_chat').load('load_result.php',function () {                
                timeout = setTimeout(reloadChat, 500);                
        });
        }
            
       /* $("#message").keypress(function(event) {
            if (event.keyCode == 13) {
                $("#button").click();
            }
        });    */
                        

         /*$(document).ready(function()
            {
               $('#div_of_chat').load('load_result.php?message=bydefault');
                //your other click event code goes here
            });   */
         /* function processmessage(mcg) 
        {
        //var mcg= document.getElementById("message").innerHTML;        
        
        if (mcg=='') 
        { 
            document.getElementById("div_of_new_chat").innerHTML="<div id='alert'>Please type something</div>";
        } 
        else 
        {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET", "load_result.php?message="+mcg, true);
            xmlhttp.send();

            //alert(mcg);
                 //$(function() {
                //$('#div_of_chat').load('load_result.php?message='+mcg);
                
                document.getElementById('message').value = ''; 
                document.getElementById("div_of_new_chat").innerHTML="<div id='alert_success'></div>";
                //document.getElementById("div_of_chat").innerHTML=xmlhttp.responseText;
                //alert(mcg);                
                //document.getElementById("div_of_chat").innerHTML='<object data="load_result.php?message="'+mcg+'"" type="text/html"></object>';

            //});
        }
}  */

/*function processname(name) 
    {
        
    if (name.length == 0) 
    { 
        document.getElementById("div_of_chat").innerHTML = "Typing..";
        return;
    } 
    else 
    {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
        {
            if (this.readyState ==4 && this.status ==200)
             {
                document.getElementById("div_of_chat").innerHTML = this.responseText;
            } 
   };


        xmlhttp.open("GET", "processname.php?name="+name, true);
        xmlhttp.send();
    }
} */
</script>
        <style type="text/css">
            body 
            {
                background-color:#b3d9ff;
                /*background-image: linear-gradient(bottom, #4baad3 85%, #b3d9ff 100%);
                background-image: -o-linear-gradient(bottom, #FFFFFF 85%, #b3d9ff 100%);
                background-image: -moz-linear-gradient(bottom, #FFFFFF 85%, #b3d9ff 100%);
                background-image: -webkit-linear-gradient(bottom, #FFFFFF 85%, #b3d9ff 100%);
                background-image: -ms-linear-gradient(bottom, #FFFFFF 85%, #b3d9ff 100%); */
                padding-left:0px; 
                margin:0px;
                text-align:center;

                align-self:center;
            }
            #centerDiv 
            {
                margin-left:33.333%; 
                width:33.33%; 
                
                /*width:400px;*/
                text-align:left; 
                background-color:#ffffff;            
                padding-left:10px;
                border-style:none;
                border-color:#66b3ff;
                /*box-shadow:0px 0px 3px #0080ff; */
                border-width:1px;
                border-radius:4px;
                padding:0px;  
                color:#666666;
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                font-size:14px; 
            }
            #headderDiv 
            {
                color:#fff;
                font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
                font-size: 30px; 
                width: 100%;
                text-align:center;
                padding-top:30px; 
                padding-bottom:25px;                
                text-shadow:0px 0px 2px #0080ff;
            }
            #div_of_chat 
            {
                border-style:solid;
                border-width:1px;
                border-color:#000000; 
                border-radius:0px;
                overflow-y: auto;
                overflow-x:hidden;
                height: 380px;
                padding:10px;                
                /*border-bottom-color:#e1e1e1; */
                border-top-width:0px; 
                border-left-color:#66b3ff;  
                border-right-color:#66b3ff;
                border-bottom-width:0px; 
                padding-bottom:3px; 
                background-color:#efefef; 
                

            } 
            #textDiv 
            {
                width:100%;
                padding-top:10px; 
                margin:0px;
            }
            #start_chat 
            {
                color:#aaaaaa;
            }
            #start_chat > div
            {
                color: #555555;
            }
            #buttonDiv 
            {
                width:100%;
                margin:0px;
            }
            #message 
            {
                /*width:100%;*/
                border-style:solid;
                width:97%;               
                border-color:#bfbfbf;                            
                border-width:1px;
                border-radius:2px;
                height:26px; 
                padding:1px;
                padding-left:5px;

                padding-right:5px;                  
                margin-right:10px;
                background-image: linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                background-image: -o-linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                background-image: -moz-linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                background-image: -webkit-linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                background-image: -ms-linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                font-size:14px;

            }
            #message_div 
            {
                display:inline-block;  
                
                /*padding:2px;*/                
                margin-bottom:-5px; 
                margin-right:0px;
                padding-left:5px;
                padding-right:5px; 
                padding-top:8px;
                padding-bottom:8px;
                border-radius:5px;                  
                /*position:fixed;    */                                
                /*border-style:solid;*/
                color:#444; 
                font-size:14px;                                 
                background-color:#fff;
                overflow: hidden;
                text-align:justify !important;
                max-width:80% !important;                  
                border:1px solid #ddd;
                
            }
            #below_message_div 
            {
                font-size:10px;
                margin-top:2px; 
                text-align:left;
                color:#aaa;  
            }
            #clr_g 
            {
                color:#00802b;
            }
            #name
            {
                width:96.2%;
                border-style:solid;
                border-color:#afafaf;                            
                border-width:1px;
                border-radius:2px;
                font-size:14px;
                height:26px; 
                padding:1px;
                padding-left:8px;
                padding-right:8px;  
                margin:0px;
                margin-top:10px; 
                background-image: linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                background-image: -o-linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                background-image: -moz-linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                background-image: -webkit-linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);
                background-image: -ms-linear-gradient(bottom, #FFFFFF 85%, #f1f1f1 100%);

            }
            #message:hover,  #name:hover
            {
                border-color:#4baad3; 
                transition:1s;
                outline:0;
                /*box-shadow:0px 0px 2px #ccc;*/
            }
            #message:focus, #name:focus
            {
                border-color:#4baad3;
                box-shadow:#ffffff;    
                box-shadow:0px 0px 2px #ccc;
                transition:1s; 
                outline:0;S
            }
            #button 
            {
                padding:5px;                
                height:28px;
                margin-top:9px;
                padding-top:5px; 
                padding-bottom:7px;
                
                font-size:14px;
                border-radius:2px;
                border-style:solid;
                border-width:1px;
                border-bottom-color:#0059b3;
                border-top-color:#0080ff;
                border-right-color:#0080ff;
                border-left-color:#0080ff;
                /*background-image: linear-gradient(bottom, #0080ff 20%, #66b3ff 80%);
                background-image: -o-linear-gradient(bottom, #0080ff 20%, #66b3ff 80%);
                background-image: -moz-linear-gradient(bottom, #0080ff 20%, #66b3ff 80%);
                background-image: -webkit-linear-gradient(bottom, #0080ff 20%, #66b3ff 80%);
                background-image: -ms-linear-gradient(bottom, #0080ff 20%, #66b3ff 80%);             */
                background-color:#66b3ff; 
                color:#ffffff;   
                
                
            }
            #button:hover 
            {
               /* border-right-color:#8f8f8f;
                border-left-color:#8f8f8f;      
                border-top-color:#9f9f9f;      
                border-bottom-color:#6f6f6f;*/
                border-bottom-width:1px;                 
                box-shadow:0px 2px 1px #b7bec8;
                transition:0.5s; 

            }
            /*#button:focus
            {
                border-bottom-color:#9f9f9f;
                border-bottom-width:1px; 
                color:#111;
                box-shadow:0px 1px #bbb;

            }*/
            #mpz 
            {
                margin:-2px;
                padding:-1px; 
                cellpadding:0px;
            }
            #alert 
            {
                padding-top:3px;
                padding-bottom:3px; 
                padding-left:8px; 
                color:#ffffff;
                border-radius:2px;
                margin-top:8px; 
                border-style:solid;
                border-color:#ff3939;
                border-width:1px;   
                background-image: linear-gradient(top, #ff6a6a 70%, #ff4d4d 100%);
                background-image: -o-linear-gradient(top, #ff6a6a 70%, #ff4d4d 100%);
                background-image: -moz-linear-gradient(top, #ff6a6a 70%, #ff4d4d 100%);
                background-image: -webkit-linear-gradient(top, #ff6a6a 70%, #ff4d4d 100%);
                background-image: -ms-linear-gradient(top, #ff6a6a 70%, #ff4d4d 100%);  
            }
            #iframe 
            {
                border-style:none;
                width:100%;
                padding:0px; 

            }
            #press_enter 
            {
                font-size:11px;
                margin-top:-20px;
                margin-left:70px;
                margin-bottom:8px;   
            }
            #top_div_at_center 
            {
                background-color:#66b3ff;
                padding-left:10px;                
                padding-top:7px; 
                padding-bottom:7px;
                border-style:solid;
                border-color:#0080ff;
                border-width:1px;                
                color:#ffffff;                  
                /*border-radius:3px;*/
                border-top-left-radius:4px;
                border-top-right-radius:4px; 
                

            }            
        </style>
    </head>
    <body>
        <div id="headderDiv">
            NiksChat
        </div>
        <div id="centerDiv">        
            <div id="top_div_at_center">
            Messages   
            </div>
            <div id="div_of_chat">               
                <?php include_once 'load_result.php';?>
            </div>              
            <!--<input type="text" name="name" id="name" onkeypress="processname(this.value);" placeholder="Enter your name..">                        -->
                <div style="padding: 10px;padding-top:0px;background-color:#e9ebee;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;border:1px;border-style:solid;border-color:#66b3ff;border-top-style:solid;border-top-width:1px;border-top-color:#c9cbce;">
                        <div id="textDiv">
                            <input type="text" name="message" onkeypress="remove_sent(this.value);" id="message" placeholder="Enter message here..." required autofocus>
                        </div>    
            
                        <div id="buttonDiv">                            
                            <button type="submit" name="submit" id="button" onclick='processmessage(document.getElementById("message").value);'>
                                Send &raquo;
                            </button>
                            <div id="press_enter">Press enter to send</div>
                        </div>         
                </div>
            <div id="div_of_new_chat">
                
            </div>            
        </div>
        <span id="cut"></   span>
    </body>        