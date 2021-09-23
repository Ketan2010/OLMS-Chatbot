<html>
<head>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>OLMS-ChatBot</title>
    <!-- dialogflow style bootsrap -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <style>
        .text-center {
            margin: 0;
            padding:0;
            text-align: center;
            position: absolute;
            top: 50%;
            left:50%;
            transform: translateX(-50%) translateY(-50%);
        }           
    </style>

    <style>
            df-messenger {
            --df-messenger-bot-message: #f2f2f2;
            --df-messenger-button-titlebar-color: #009900;
            --df-messenger-chat-background-color: #fafafa;
            --df-messenger-font-color: black;
            --df-messenger-send-icon: #009900;
            --df-messenger-user-message: #bdfcbf;
            }  
    </style>
    <!-- Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        //To minimise the height of chatbox
        $(document).ready(function() {
            window.addEventListener('dfMessengerLoaded', function (event) {
            $r1 = document.querySelector("df-messenger");
            $r2 = $r1.shadowRoot.querySelector("df-messenger-chat");
            $r3 = $r2.shadowRoot.querySelector("df-messenger-user-input"); //for other mods
            var sheet = new CSSStyleSheet;
            // manage box height from here
            sheet.replaceSync( `div.chat-wrapper[opened="true"] { height: 450px }`);
            $r2.shadowRoot.adoptedStyleSheets = [ sheet ];
            });
        });
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- center text in webpage -->
    <div class="text-center">
        <div>
            <img src="img/main.png"/>
        </div>
        <h1 style="font-size: 50px; font-family: 'Roboto Mono', monospace;">OLMS Chatbot</h1>
        <h1 style="font-size: 20px; font-family: 'Roboto Mono', monospace;">Online Learning Management System</h1>
    </div>
    <!-- This is the main code for chatbot  -->
    <!-- we can add more fields, refer: https://cloud.google.com/dialogflow/es/docs/integrations/dialogflow-messenger -->
    <df-messenger
        intent="WELCOME"
        chat-title="OLMS ChatBot"
        agent-id="c52acc62-c15c-4dce-a7ed-3840a9069b9c"
        language-code="en"
        chat-icon="img/bot.png"
    ></df-messenger>

</body>

</html>
