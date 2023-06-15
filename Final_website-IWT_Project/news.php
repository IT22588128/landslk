<?php
    include_once 'header.php';
?>

<header>
        
		<nav class="navigation">
			<a href="home.php" >Home</a>
			<a href="land.php" >Land</a>
			<a href="us.php">About Us</a>
			<a href="contact.php">Contact</a>
            <?php
            if( isset ($_SESSION["userid"] ))
                {
                  echo ' <a href="landTable.php">Edit Ad</a>';
                }
                else{
                    echo ' <a href="news.php" class="active">News</a>';
                    
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
<link rel="stylesheet" type="text/css" href="style/news.css">
<title>NEWS</title>

</head>
<body>

        <div class="blog-section">
            <div class="section-content blog">
                <div class="title">
                    <h2>NEWS & LATEST UPDATE</h2>
                   <!-- <p>Latest update of LAKA LANDS</p> -->
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="posted date">
                            <p>Posted on jan 15 2021</p>
                        </div>
                        <div class="image-section">
                            <img src="src/10.jpg" width ='400px' hight = '800px'>
                        </div>
                        <div class="article">
                            <h4>LANKA LANDS CEREMONIOUSLY HANDS OVER LATEST VILLA PROJECTS IN NUGEGODA AND THALAWATHUGODA
                            </h4>
                            <p>Monday, 24th October 2022, COLOMBO; The Leader in real estate industry in Sri Lanka, 
                                Lanka lands, ceremoniously handed over Lanka Villas Nugegoda and Thalawathugoda to 
                                its homeowners, the latest two projects which were completed, offers a premium living 
                                experience which includes a well-curated list of luxury amenities within the compound 
                                wall of a residential community, all at a very competitive price.</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Read More</a>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="posted date">
                            <p>Posted on jan 15 2021</p>
                        </div>
                        <div class="image-section">
                            <img src="src/5.jfif">
                        </div>
                        <div class="article">
                            <h4>LANKA LANDS ENDED 2022 WITH LANDMARK PROJECT HANDOVER – ‘EVOKE’ KADAWATHA</h4>
                            <p>Keeping to its promises, Lanka lands recently completed the handover of 63 housing 
                                units at Lanka Evoke in Kadawatha. This was Lanka’s 6th handover for 2022. Peace, 
                                quiet and connectivity have made Lanka Evoke in Kadawatha a popular choice for homemakers</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Read More</a>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="posted date">
                            <p>Posted on jan 15 2021</p>
                        </div>
                        <div class="image-section">
                            <img src="src/8.jfif">
                        </div>
                        <div class="article">
                            <h4>LANKA SIGNATURE VILLAS LAUNCHES ITS LATEST PROJECT - CLOVER IN THALAWATHUGODA</h4>
                            <p>Lanka Group, Sri Lanka's pioneering real estate company, has launched the latest addition 
                                to its chain of signature villas - Clover in Thalawathugoda. The deluxe property was 
                                inaugurated at Corea Gardens on 19th March, opening reservations to all, and has instantaneously 
                                witnessed tremendous success with 60 percent of the property already being sold out.</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Read More</a>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="posted date">
                            <p>Posted on jan 15 2021</p>
                        </div>
                        <div class="image-section">
                            <img src="src/1.jpg">
                        </div>
                        <div class="article">
                            <h4>LANKA WINS GOLD IN LAND AND PROPERTY SECTOR AT TAGS AWARDS 2022</h4>
                            <p>Lanka Lands Residencies PLC was placed 1st in the Land and Property 
                                Companies Sector and received the Gold Award at the TAGS Awards 2022 
                                held recently at the Shangri-La Hotel in Colombo. Lanka was also won 
                                Bronze Award in the Emerging Listed Companies Sector and received the 
                                Bronze Award for its 2021/2022 Annual Report.</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Read More</a>
                        </div>
                       
                    </div>
                    <div class="card">
                        <div class="posted date">
                            <p>Posted on jan 15 2021</p>
                        </div>
                        <div class="image-section">
                            <img src="src/12.jpg">
                        </div>
                        <div class="article">
                            <h4>RALITHA MADUSHAN APPOINTED CEO OF LANKA LANDS</h4>                           
                            <p>Accomplished Strategic Management Professional 
                                Ralitha Madushan has been appointed Chief Executive 
                                Officer of the parent company of Lanka Group, Lanka Lands (Pvt) Ltd., 
                                with effect from January 1st 2023. He counts more than 23 years’ 
                                experience in the real-estate sector.</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Read More</a>
                        </div>
                        
                    </div>
                    <div class="card">
                        <div class="posted date">
                            <p>Posted on jan 15 2021</p>
                        </div>
                        <div class="image-section">
                            <img src="src/14.jpg">
                        </div>
                        <div class="article">
                            <h4>LANKA GROUP INVITES SRI LANKA TO SPEND A CHARITABLE, GENEROUS VESAK SEASON THIS YEAR</h4>
                            <p>In a concerted attempt to reinforce the national COVID-19 response this Vesak Season, 
                                Sri Lanka?s leading real estate group, Lanka Group recently made a timely donation of 
                                two Non-invasive Ventilators worth Rs. 2.6 Million to the newly established COVID-19 treatment 
                                ward at the District General Hospital, Gampaha.</p>
                        </div>
                        <div class="blog-view">
                            <a href="" class="button">Read More</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        
        <?php
    include_once 'footer.php';
?>
