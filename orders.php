<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="feedback.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <title>Document</title>

</head>

<body>

    <h1 id="top-h1">Order Now</h1>
    <div class="row" id="feed-row">
	
        <!-- <div class="col-12"> -->
        <h5 id="top-h5">
            Order your fav dish<BR>
			<img src="burger/order.jpg" height="300" id="orderform">
        </h5>
        <div class="col-md-12">
         <form action="orderback.php"; method="Post">
            <label class="lbl">Name</label><br>
            <input class="in" name="txtname" type="text" placeholder="Enter your name"><br>

            <label class="lbl">Email</label><br>
            <input class="in" name="txtemail" type="text" placeholder="Enter your email"><br>

            <label class="lbl">Phone No.</label><br>
            <input class="in" type="text" name="txtphone" placeholder="Enter your Phone Number"><br>


            <label class="lbl">Dish Name</label><br>
            <input class="in" type="text" name="txtdish" placeholder="Enter Your Dish Name "><br>


         

            <label class="lbl">Anything Else</label><br>
            <textarea placeholder="Type Your Message Here" style="width: 38rem; border-radius: 10px;margin-left: 5px; " name="txtmsg"></textarea><br>

            <button type="submit" class="btn btn-dark">Submit</button> -->
			</form>
        </div>

    </div><br>

   
    <!-- Footer -->

    <div class="row" id="footer">
        <div class="col-md-3" id="firstcol">
            <ul>
                <li id="jp-image"><br><br><img src="logo/burlogo.png" height="160" width="180"></li>
                <li id="jpname" style="text-align: center;"><b>the burger company</b></li>
                <li class="jpline">

                    <center>__________________</center>
                </li>
                <li id="jp-pin" style="text-align: center;"> Malout,Punjab-152107</li>
                <li id="social">
                    <a href="https://www.facebook.com/theburgercompanyindia/" target="blank">
                        <center><i class="fa fa-facebook fa-3x" aria-hidden="true" style="color: red; padding:7px; border-radius:30%; cursor: pointer;"></i></a>
                    <a href="mailto:support@theburgercompany.com" target="blank" id="emailid"><i class="fa fa-envelope-o fa-3x" aria-hidden="true" style="color: red; padding:7px; border-radius:30%; cursor: pointer;" ></i></a>
                    <a href="https://wa.me/8198002263" target="_blank"> <i class="fa fa-whatsapp fa-3x" aria-hidden="true" style="color: red; padding:7px; border-radius:30%; cursor: pointer;" onMouseOver="this.style.color='white'"></i></a>
                    </center>
                </li>
                <li></li>
            </ul>
        </div>

        <div class="col-md-2 " id="secondcol ">
            <ul>
                <li>
                    <br><br>
                    <h5 class="foot-top">Quick Links</h5>
                    <li class="jpline">
                        <center>____________</center>
                    </li>
                    <br>
                </li>
                <li>
                    <a href="# ">
                        <center class="quick"> HOME</center>
                    </a>
                </li>
               <li>
                    <a href="index.html#menucontact">
                        <center class="quick"> CONTACT</center>
                    </a>
                </li>
                <li>
                    <a href="index.html#aboutbur">
                        <center class="quick">ABOUT US</center>
                    </a>
                </li>
                <li>
                    <a href="orders.php">
                        <center class="quick">ORDERS</center>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul>
                <li>
                    <br><br>
                    <h5 class="foot-top">Contact Us</h5>
                    <li class="jpline">
                        <center>____________</center>
                    </li>
                    <br>
                </li>
                <li class="about ">
                    <i class="fa fa-map-marker" aria-hidden="true" style="color: white;"></i> <span class="foot-about"> Teshil Road,Malout(Punjab)</span>
                </li>
                <li class="about ">
                    <i class="fa fa-mobile " aria-hidden="true" style="color: white;"></i> <span class="foot-about"> 085589-32400</span>
                </li>
                <li class="about ">
                    <i class="fa fa-envelope-o" aria-hidden="true" style="color: white;"></i> <span class="foot-about" style="font-size:15px;">support@theburgercompany.com</span>
                </li>
                <li class="about ">
                    <i class="fa fa-clock-o" aria-hidden="true" style="color: white;"></i> <span class="foot-about">Mon-Sun 10am-10pm</span>
                </li>
            </ul>
        </div>
        <div class="col-md-2 ">
            <ul>
                <li>
                    <br><br>
                    <h5 class="foot-top">Location</h5>
                    <li class="jpline">
                        <center>____________</center>
                    </li>
                    <br>
                </li>
                <li>
                    <center><iframe id="mm-loc" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13794.525002190137!2d74.49192876977538!3d30.190525900000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39171725b3c71571%3A0x78cbef406d3430a!2sThe%20Burger%20Company!5e0!3m2!1sen!2sin!4v1681304696504!5m2!1sen!2sin"
                            width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                </center>
            </ul>
        </div>
    </div>

</body>

</html>