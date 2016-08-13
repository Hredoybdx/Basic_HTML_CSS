<html>
    <head>
        <title>CSS</title>
        <style>
            * {
                margin: 0;
                padding: 0
            }
            .box1 {
                width: 200px;
                height: 200px;
                background-color: #ccc;


            }
            .box2 {
                width: 200px;
                height: 200px;
                background-color: #FF603A;

                position: fixed;
                top: 30px;
                left: 0;
                z-index: -2;
            }
            .box3 {
                width: 200px;
                height: 200px;
                background-color: aqua;
            }
            .big_box {
                width: 600px;
                height: 600px;
                background-color: background;
                position: relative;
                left: 300px;
            }
        </style>
    </head>
    <body>

        <div class="box1"></div>
        <div class="box3"></div>
        <div class="big_box">

            <div class="box2"></div>

        </div>





    </body>
</html>
