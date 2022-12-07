<!DOCTYPE html>
<head>
    <title>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: 0;
}

h1 {
    text-align: center;
    line-height: 20vh;
    color: blueviolet;
}

.main {
    width: 800px;
    height: 600px;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.left img {
    max-width: 400px;
    height: auto;
}
.right{
   background-image: url(bg.jpg);
   width: 400px;
   height: 300px;
   
}
</style>
    </title>
</head>
    <body>
         <h1 style="color:blue; text-align:center; color:orangered">Temperature Conversation</h1>
            <div class="main" style=" width: 800px;
    height: 400px;
    display: flex;
    justify-content: space-between;
    grid-gap:100px;
    align-items: center;">
                <div class="left">
                <img style=" max-width: 600px;
    height: auto;" src="wheater.webp" alt="">
                </div>
                <div style=" padding :80px; border-radius: 10px;  background-image: url(weather.png);
    background-position: 50% 50%;
    background-size: 700px 400px;
                ; text-align: center;" class="right">
                <form action="" method="POST">
                    <input style="width: 250px; height:40px; padding: 5px; outline: none; border:1px solid orangered; border-radius:5px; text-align: center;" type="text" name="num" placeholder="Enter Temperature">
                    <div style="width: 100%; margin:20px 0; " class="selection">
                        <label style="color:orangered" for="">Celc</label>
                        <input style="color:orangered;" type="radio" name="unit" value="cel">
                        <label style="color:orangered" for="">Ferhen</label>
                        <input style="color:orangered;" type="radio" name="unit" value="fer">
                    </div>

                    <input style="background-color: orangered; width: 100px; height:30px; border-radius: 5px; border:none; color:white;" type="submit" name="submit" value="Conver Now">
                </form>
                <div>
                    <p style="font-size: larger; color:orangered">
                        <?php
                        if(isset($_POST['submit'] ) && isset($_POST['unit'])){
                            $num = $_POST['num'];
                            $temp = $_POST['unit'];

                            if($temp == 'cel'){
                                $result = $num * 9 / 5 + 32;
                                echo "The conversation value of cel in faren is " . $result;
                            }
                            else{
                                $result = ($num - 32) * 5 / 9;
                                echo "The conversation value of faren in cel is " . $result;
                            }
                        }
                        elseif(isset($_POST['submit'] ) && !isset($_POST['unit'])){
                            echo "Select fahrenheit or celsius";   
                        }
                        ?>
                    </p>
                </div>
                </div>
            </div>
       
    </body>

</html>