<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>M-dope shop👋</title>
    <link href='' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <script type='text/javascript' src=''></script>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family:sans-serif;
    }

    .wrapper {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0;
    }

    .wrapper .content {
        width: 350px;
        height: 310px;
        background-color: #fff;
        padding: 40px 20px;
        position: relative;
        cursor: pointer;
        border-radius: 10px
    }

    .wrapper .content .price {
        width: 60px;
        height: 60px;
        background-color: #000;
        display: flex;
        border-radius: 50%;
        color: #fff;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: -25px;
        left: -25px;
        opacity: 0;
        transition: all 0.9s
    }

    .wrapper .content:hover .price {
        opacity: 1
    }

    .wrapper .content .p-image {
        text-align: center
    }

    .wrapper .content .p-image img {
        transition: all 0.5s
    }

    .wrapper .content:hover .p-image img {
        transform: rotate(30deg)
    }

    .wrapper .content .line {
        width: 30px;
        height: 5px;
        background-color: #000;
        display: flex;
        margin-top: 5px;
        margin-bottom: 5px
    }

    .wrapper .content h4 {
        margin-top: 10px;
        font-size: 20px
    }

    .wrapper .content button {
        height: 45px;
        width: 100px;
        border: none;
        background-color: #000;
        border-radius: 5px;
        color: #fff;
        position: absolute;
        bottom: -20px;
        right: 20px;
        font-size: 15px
    }

    .wrapper .content p {
        font-size: 15px
    }

    .wrapper .content button {
        opacity: 0;
        transition: all 0.5s
    }

    .wrapper .content:hover button {
        opacity: 1;
        transition: all 0.5s
    }
    </style>
</head>

<body oncontextmenu='return false' class='snippet-body'>
<!--insert php-->


<!--insert php-->
<div class="wrapper">
    
    <div class="content"> 
        <a href="./login.php">
            <span class="price">$120</span>
        </a>
    
        <div class="p-image"> <img src="https://i.imgur.com/VY0R9aV.png" width="200"> </div>
        <h4>Roshi Run Smart Watch</h4> <span class="line"></span>
        <p>
            This is the best watch for the modern and stylish human being buy it now at a 50% off</p> 
            <form action="./index.php" method="POST">
            <button type="submit" name="submit" >Buy Now</button>
            </form>
    </div>
</div>
<script type='text/javascript' src=''></script>
<script type='text/javascript' src=''></script>
<script type='text/javascript' src=''></script>
<script type='text/Javascript'></script>
</body>
</html>