<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
			<a href="home.php" class="active">Home</a>
			<a href="land.php" >Land</a>
			<a href="us.php">About Us</a>
			<a href="contact.php">Contact</a>
            <?php
            if( isset ($_SESSION["userid"] ))
                {
                  echo ' <a href="landTable.php">Edit Ad</a>';
                }
                else{
                    echo ' <a href="#">News</a>';
                    
                }
                ?>
            
            <?php
                if( isset ($_SESSION["userid"] ))
                {
                    echo ' <a href="addLand.php">Sell Your Land</a>';
                }
                else{
                    echo ' <a href="login.php">Sell Your Land</a>';
                    
                }
                ?>
            
        </nav> 
            
            <?php
                if( isset ($_SESSION["userid"] ))
                {
                    if(  ($_SESSION["userType"] ) === 'user'  )
                    {
                    echo '<span class="pro"><a href="userProfile.php">Hello '.$_SESSION["usersname"].'</a></span>';
                }
                else if  (  ($_SESSION["userType"] ) === 'admin'  )
                {
                    echo '<span class="pro"><a href="superadmin.html">Hello '.$_SESSION["userType"].'</a></span>'; 
                }
            }
                else{
                    echo '<button class="circle-button"><a href="login.php"><center><i class="far fa-user-circle" style="z-index: 9990; font-size:36px;color:white;"viewport></i></center></a></button>';
                    
                }
                
            ?>
            
    
</header>

<link rel="stylesheet" href="style\privacypolicy.css">
<script src="script\home.js"></script>  
<title>Privacy And Policy</title>

</head>
<body>




    <div class="privacyPolicyContainer">
        <div class="privacypolicybox">

            <h2 class="privacypolicymainheading">Privacy And Policy</h2> <!--Main heading-->

            <p class="update_date">Last Updated: May 14,2023</p>
            
            <div class="privacyPolicyContent">

            <h2 class="privacyPolicyHeading">What information do we collect?</h2>
            <p class="privacyPolicyDescription">We collect information from you when you register on our site or fill cut c form,
                When ordering or registering on our site, CIS appropriate, gou mag be asked to enter your: name, e-mail address, mailing address, 
                phone number, or national identity card number Yau may, however, visit our site anonymously but you are not allowed to access services 
                provided by our website.</p>

            <h2 class="privacyPolicyHeading">What do we use your information for?</h2>
            <p class="privacyPolicyDescription">All of the information we collect from you be used in one of the following ways:</p>
            
            <div class="subcontent">

            <h3 class="sub_topics">To personalize your experience</h3>
            <p class="privacyPolicyDescription">(Your information helps us to better respond ta your individual needs)</p>

            <h3 class="sub_topics">To improve our website</h3>
            <p class="privacyPolicyDescription">(We continuallu strive to improve our website offerings based on the information and feedback we receive from voc)</p>

            <h3 class="sub_topics">To process transactions</h3>
            <p class="privacyPolicyDescription">(Your inforrnation helps us to more effectively respond to gour customer service requests and support needs)</p>

            <h3 class="sub_topics">To improve customer service</h3>
            <p class="privacyPolicyDescription">Your information. whether public or private, will not be sold, exchanged, transferred, or given to anu other componu for anu reason whatsoever. 
                Without gour consent, other thon for the express purpose of delivering the purchased product or service requested </p>

            <h3 class="sub_topics">To administer a contest</h3>
            <p class="privacyPolicyDescription">Promotion, survey, or other site feature</p>

            <h3 class="sub_topics">To send periodic emails</h3>
            <p class="privacyPolicyDescription">The email address gou provide for order processing mau be used to send gou information and updates pertaining to uour order. 
                In addition to receiving occasional campanu news. updates, related product or service information, etc.<br><br>
                Note: If at cru time gou would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email.
            </p>
            </div>

            <h2 class="privacyPolicyHeading">How do we protect your information?</h2>
            <p class="privacyPolicyDescription">We implement a variety of security measures to maintain the safety of gaur personal information when you enter, 
                submit, or access your personal inforrnation.<br>We offer the use of a secure server All supplied sensitive/credit information is transmitted via 
                Secure Socket Lauer (SSI_) technologq and then encrupted into our Paurnent gatewau providers database onu to be accessible bu those authorized with 
                special access rights to such sustems, and ore required to?keep the informatior confidential.<br>After a transaction, your private information 
                (credit cords, social security numbers, financials; etc.) will not be kept on file for more than 60 days.</p>

            <h2 class="privacyPolicyHeading">DO we use cookies?</h2>
            <p class="privacyPolicyDescription">Yes [Cookies ore small files that c] site or its service provider transfers to your computer hord drive through Jour Web browser 
                (if yot_J ollow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information.<br>We use cookies to 
                understand and save gour preferences for future visits and compile aggregate data about site traffic and site interaction so that we can offer better site experiences 
                and tools in the future.</p>

            <h2 class="privacyPolicyHeading">How We use Cookies?</h2>
            <p class="privacyPolicyDescription">completely disabling the functionalitu cnd features theu odd to this site. It Is recommended that gou leave on all cookies If 	
                are not sure wheher ucu need them or not in case theu are used to provide a service that you use.</p>

            <h2 class="privacyPolicyHeading">DO we use cookies?</h2>
            <p class="privacyPolicyDescription">Yes [Cookies ore small files that c] site or its service provider transfers to your computer hord drive through Jour Web browser 
                (if yot_J ollow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information.<br>We use cookies to 
                understand and save gour preferences for future visits and compile aggregate data about site traffic and site interaction so that we can offer better site experiences 
                and tools in the future.</p>
            
            <div class="subcontent">

            <h3 class="sub_topics">Disabling Cookies</h3>
            <p class="privacyPolicyDescription">Be aware that disabling cookies will affect the functionality of this and many other websites that yaw visit.</p>
            
            </div>

            <h2 class="privacyPolicyHeading">Do we disclose any information to outside parties?</h2>
            <p class="privacyPolicyDescription">We do not sell, trade: or otherwise transfer to outside parties your personally identifiable information, This does not include trusted 
                third parties who assist us in operating our website, conducting cur business, or servicing gou, so long as those parties agree to keep •uhis information confidential. 
                We mcg also release gour information when we believe release is appropriate to camplu with the law. enforce our site policies. or protect our or others' rights, propertu. 
                or safetu. However, nonpersonally identifiable visitor information mag be provided to other parties for marketing, advertising, or other uses.</p>
            
            <div class="subcontent">

            <h3 class="sub_topics">Third-party links</h3>
            <p class="privacyPolicyDescription">Occasionally, at cur discretion, we mag include or offer third-portg products or services on our website. These third-party sites have separate and 
                independent privacu policies. We. therefore. have no responsibilitu or liability for the content and activities ot these linked sites. Nonetheless, we seek to protect the integritu 
                of our  site and welcome any feedback about these sites.</p>

            <h3 class="sub_topics">Children's Online Privacy Protection Act Compliance</h3>
            <p class="privacyPolicyDescription">We are in compliance with the requirements of COPRA (Children's Online Privacy Protection Acl), we do not collect ong information from anyone 
                under 13 years of age. Our website. products. and services are all directed to peocle who ore at least IS gears old or Oder.</p>

            <h3 class="sub_topics">Your Consent</h3>
            <p class="privacyPolicyDescription">BIJ using our site, you consent to our website privacy policy.</p>
            
            </div>

            <h2 class="privacyPolicyHeading">Changes to our Privacy Policy</h2>
            <p class="privacyPolicyDescription">If we decide to change our privacy policy, we will post those changes on this page.</p>

            <h2 class="privacyPolicyHeading">Contacting Us</h2>
            <p class="privacyPolicyDescription">If there are anu questions regarding this privacy policy gou mau contact us using the information on our contact page or our feedback form.</p>
            
            </div>

        </div>
    </div>


<?php 

include_once "footer.php";

?> 
