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
    <body style=" background-image: url(weather.png) ;
    repeat:no-repeat;
    background-position: 50% 50%;
    background-size: 100% 100%;">
         <h1 style="color:blue; text-align:center; color:orangered ;font-family: cursive;">Temperature Conversation</h1>
            <div class="main" style=" width: 900px;
    height: 600px;
    display: flex;
    grid-gap:100px;
    justify-content: space-between;
    align-items: center;
    margin-left:200px;
   
   ">
                <div class="left">
                <img style=" max-width: 600px;
    height: auto;" src="wheater.webp" alt="">
                </div>
                <div style=" padding :80px; border-radius: 10px;  
                ; text-align: center;" class="right">
                <form action="" method="POST">
                    <input style="width: 250px; height:40px; padding: 5px; outline: none; border:1px solid orangered; border-radius:5px; text-align: center; font-family: cursive;"" type="text" name="num" placeholder="Enter Temperature">
                    <div style="width: 100%; margin:20px 0; " class="selection">
                        <label style="font-family: cursive;color:orangered" for="">Celc</label>
                        <input style="color:orangered;font-family: cursive;" type="radio" name="unit" value="cel">
                        <label style="color:orangered" for="">Ferhen</label>
                        <input style="color:orangered;font-family: cursive;" type="radio" name="unit" value="fer">
                    </div>

                    <input style="background-color: orangered; width: 100px; height:30px; border-radius: 5px; border:none; color:white;font-family: cursive;" type="submit" name="submit" value="Conver Now">
                </form>
                <div>
                    <p style="font-size: larger; color:orangered;font-family: cursive;">
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