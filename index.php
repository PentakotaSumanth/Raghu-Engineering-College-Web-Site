<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="resp.js"></script>
    <title>RaghuEngineering College</title>
</head>

<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-nav-resp">
            <div class="logo"><img src="logo.jpg" alt=""></div>
            <li><a href="#home">Home</a> </li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <div class="rightnav v-nav-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm" id="search">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <section class="background firstsection">
        <div class="box-main">
            <div class="fhalf">
                <p class="text-big">Join Now</p>
                <p class="text-small">Join us to tap the most lucrative job opportunities right at the launch because of
                    the focussed training education underpinning the academic foundation. We lead in mining for
                    opportunities with the highest</p>
                <div class="buttons">
                    <button class="btn">Subscribe</button>
                    <button class="btn">Watch Video</button>
                </div>
            </div>

            <div class="shalf">
                <img src="college.jpg" alt="laptop image">
            </div>
        </div>
    </section>
    <div class="middle">
        <section class="section" id="about">
            <div class="paras">
                <p class="sectionsubtag text-big" id="tb">About Raghu Engineering College</p>
                <p class="sectiontag text-small">Raghu Engineering College (Autonomous) is an engineering college
                    located in
                    the
                    outskirts of the city of Visakhapatnam, Andhra Pradesh, India. Established in 2001, it is situated
                    on
                    NH-43, 37 km away from Visakhapatnam and 15 km away from Vizianagaram. It is an AICTE, New Delhi
                    approved engineering institution and is affiliated to Jawaharlal Nehru Technological University -
                    Gurajada, Vizianagaram. The chairman is Kalidindi Raghu an academician<br>REC is approved by AICTE
                    and
                    accredited by NAAC by ‘A’ grade and NBA. The college is known for its UG and PG courses in
                    engineering
                    stream<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The
                    college is located in the
                    suburbs of Dakamarri Village of Bheemunipatnam mandal in Visakhapatnam District. The 40-acre
                    (160,000
                    m2) campus of Raghu Engineering College is home to the infrastructure, faculty and support
                    facilities.
                    While providing an on-campus residence for students, the college has its own transport facility from
                    Visakhapatnam, Vizianagaram and Bheemunipatnam for the day scholars.</p>
            </div>
            <div class="thumbnail">
                <img src="college.jpg" alt="" class="imgfluid">
            </div>
        </section>

        <section class="section section-left" id="services">
            <div class="paras">
                <p class="sectionsubtag text-big" id="tb">Impeccable Placements Record</p>
                <p class="sectiontag text-small">The Training and Placement cell of Raghu Engineering College placements
                    gives personal and career-oriented support to the students. The Placement cell was established in
                    the
                    year 2005 that helped a large number of deserving students to get the opportunity to be placed. The
                    companies that visit here include Infosys, Virtusa, Tech Mahindra, Mindtree, IBM, Polaris, Wipro,
                    Accenture, Capgemini, Juspay, and many more. This year Amazon had 05 selections, TCS with 66
                    selections,
                    Infosys with 103 selections, HCL 45 selections, Cognizant 87 selections with various others. The
                    college
                    makes all the efforts for meritorious students employable and welcomes industry-institute
                    interaction.
                </p>
            </div>
            <div class="thumbnail">
                <img src="placements.jpg" alt="" class="imgfluid">
            </div>
        </section>

        <section class="section">
            <div class="paras">
                <p class="sectionsubtag text-big" id="tb">Raghu Engineering College Visakhapatnam Ranking/Achievements</p>
                <p class="sectiontag text-small">
                <ul>
                    <li>REC was ranked as 63rd among top 100 private engineering colleges in India by Higher Education
                        Review Magazine. It was recognised as 14th among top 32 encouraging engineering colleges in
                        India by
                        GHRD.</li>
                    <li>REC also achieved 92nd among top 100 private engineering colleges in India by THE WEEK Magazine.
                    </li>
                    <li>REC gained the highest grade "A" among engineering colleges by the Government of Andhra Pradesh.
                    </li>
                    <li>Ranked 14th among 330+ private engineering colleges in the state.</li>
                </ul>
                </p>
            </div>
            <div class="thumbnail">
                <img src="college.jpg" alt="" class="imgfluid">
            </div>
        </section>
    </div>
    <section class="contact" id="contact">
        <h2 class="text-center">Contact Us</h2>
        <form method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="phone" id="phone" placeholder="Enter Your Phone Number">
            <input type="emain" name="email" id="email" placeholder="Enter Your Email">
            <textarea name="text" id="text" cols="50" rows="15" placeholder="Ellaborate Yours Concern"></textarea>
            <div>
                <button type="submit" name="submit" class="btn"  class="btn btn-dark" id="darkbtn">Submit</button>
            </div>
        </form>
    </section>

    <footer>
        <p class="text-footer">
            Copyright &copy; 2027 - All rights reserved
        </p>
    </footer>
    <script src="resp.js"></script>
</body>

</html>




<?php

include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $text=$_POST['text'];

    $insertquery="insert into contact(Name,Contact,Email,Elaborate) values('$name','$phone','$email','$text')";
    $res=mysqli_query($con,$insertquery);

    if($res)
    {
        ?>

        <script>
            alert('Date Inserted Properly');
        </script>

        <?php
    }
    else
    {
        ?>
        
        <script>
            alert('Date not Inserted ');
        </script>

        <?php
    }
}

?>