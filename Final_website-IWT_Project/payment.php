

<link rel="stylesheet" href="style\payment.css">
<title>Payment</title>

</head>
<body>

<form action="includes/payment.inc.php" method="POST" class="form2">
<div class="paymentbody">


<div class="paymentbox">
    <div class="paymentleftside">
        <h2 class="paymenth1">BILLING ADDRESS</h2>
        Full name <br>
        <input type="text" name="fullname" placeholder="Full Name" > <br>
        Email <br>
        <input type="text" name="email" placeholder="E-mail"> <br>
        Address <br>
        <input type="text" name="address" placeholder="Address Ex:- NO,Street,Location"> <br>
        City <br>
        <input type="text" name="city" placeholder="City"> <br>
        <div class="haedingbox">
        <p class ="leftheding">State</p><p class ="rightheading">Zip code</p>
        </div>
        
        <div class="sortbox">
        
        <input class="textboxshort" name="state" type="text" placeholder="State">
       
        <input class="textboxshort" name="zipcode" type="text" placeholder="Zip-Code">
        </div>
    </div>
    <div class="paymentrigntside">
    <h2 class="paymenth2">PAYMENT</h2>
    Accepted Card <br>  
    <img src="src/card1.png" width="100">
	<img src="src/card2.png" width="50"><br> <br>
    Credit card number <br>
        <input type="text" name="cardnumber" placeholder="Credit Card Number"><br>
        Exp month <br>
        <input type="text" name="expmonth" placeholder="Exp Month"><br>
        <div class="haedingbox">
        <p class ="leftheding">Exp year</p><p class ="rightheading">CVV</p>
        </div>
        <div class="sortbox">
        <input  type="text" name="expyear" placeholder="Exp year">
        <input  type="text" name="cvv" placeholder="CVV"> <br>

        <a href="landTable"><button onclick="alert('Successfully Pay !')" class="payment_button">submit</button></a>
        </div>
    </div>
    
    
</div>



</div>


</form>
