<?php
include("./dlms.php");
?>
<html>
<head>
    <meta http-equiv="refresh" content="5" />
</head>
<body>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
    }
    #main{
        text-align: center;
        background-color: lightgrey;
        width: 500px;
        height: 700px;
        border-radius: 20px;
        border: 1px solid #666;
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: minmax(50px, 100px) minmax(50px, 100px) minmax(50px, 100px);
        grid-template-areas: ". name buttons"
        ". display buttons"
        ". leds buttons";
    }
    #main h2{
        color: #555;
        display: block;
    }
    #display{
        grid-area: display;
        font-family: 'Courier New', Courier, monospace;
        text-align: left;
        color: #193b2e;
        font-size: 25px;
        padding: 15px;
        background-color: #87ad34;
        width: 270px;
        height: 70px;
        border: 3px solid #313130;
        display: flex;
        /*justify-content: center;
        align-items: center;*/
        align-self: center;
        justify-self: center;
        line-height: 35px;
    }
    .led{
        width: 20px;
        height: 20px;
        background-color: black;
        border-radius:10px;
    }
    .led-wrapper{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .led-text{
        padding-top: 10px;
    }
    .button {
        cursor: pointer;
        float: right;
        right: 50px;
        background-color: #888;
        border-radius: 10px;
        border: 1px solid black;
        width: 50px;
        height: 50px;
    }
    #top-cover{
        padding-top: 10px;
        display: inline-block;
        grid-area: name;
    }
    .buttons {
        padding-top: 50px;
        grid-area: buttons;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        gap: 1rem;
    }
    .inside-button{
        margin-top: 9px;
        margin-left: 9px;
        width: 30px;
        height: 30px;
        border-radius: 10px;
        background-color: darkgrey;
        border: 1px solid #666;
    }
    .leds {
        grid-area: leds;
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        justify-content: center;
        align-items: center;
    }
    .blink_me {
        animation: blinker 1s infinite;
    }
    #bottom-cover{
        font-size: 20px;
        color: red;
        position: absolute;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    @keyframes blinker {
        0% {
            background-color: black;
        }
        50% {
            background-color: black;
        }
        51% {
            background-color: red;
        }
        100% {
            background-color: red;
        }
    }
</style>
<div id="main">
    <div id="top-cover">
        <h2>VUT Meter ID VUTWRAP00030</h2>
    </div>
    <div id="display">
        000040.3 kWh<br>
        0.0.24.4.0.255
    </div>
    <div class="leds">
        <div class="led-wrapper">
            <div class="led" style="background-color: #0C0;">
            </div>
            <div class="led-text">Online</div>
        </div>
        <div class="led-wrapper">
            <div class="led">
            </div>
            <div class="led-text">Error</div>
        </div>
        <div class="led-wrapper">
            <div class="led" style="background-color: red;">
            </div>
            <div class="led-text">Relay1</div>
        </div>
        <div class="led-wrapper">
            <div class="led" style="background-color: red;">
            </div>
            <div class="led-text">Relay2</div>
        </div>
        <div class="led-wrapper">
            <div class="led<?php echo breaker_status()? "" : " blink_me" ?>" style="background-color: <?php echo breaker_status() ? "#0C0" : "red"; ?>;">
            </div>
            <div class="led-text">Breaker</div>
        </div>
    </div>
    <div class="buttons">
        <div class="button">
            <div class="inside-button"></div>
        </div>
        <div class="button">
            <div class="inside-button"></div>
        </div>
        <div class="button">
            <div class="inside-button"></div>
        </div>
    </div>
    <div id="bottom-cover"><?php echo breaker_status()? "" : "flag{Amper2024}" ?></div>
</div>
</body>