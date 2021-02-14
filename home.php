<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- IMPORTS -->
    <link href="bootstrap-4.5.3-dist/css/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="fullpage.js/dist/fullPage.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="fullpage.js/dist/fullPage.js"></script>
    <!-- IMPORTS END -->

    <!-- SCRIPTS START -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                css3: true
            });
        });
    </script>
    <link rel="stylesheet" href="style.css">
    <!-- SCRIPTS END -->
    <title>A Test of Fullpage.js</title>

</head>
<body>
<div id="fullpage">
    <div class="section" id="page0">
        <div class="row">
            <h1>Trinity's Portfolio Site</h1>
        </div>
        <div class="row">
            <p>Hi! Thanks for visiting my portfolio website!<br>
                Here, I just add some key parts of my resume and go over a couple of my coding projects.
                Scroll down to see!
            </p>
        </div>
    </div>
    <!-- RESUME -->
    <div class="section" id="page1">
        <!-- EDUCATION -->
        <div class="slide">
            <div class="row">
                <h1>Education</h1>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <H3>Richmond Green Secondary</H3>
                    <p>Expected graduation: June 2022</p>
                    <p>Awards:</p>
                    <ul>
                        <li>Highest Academic Standing, Chamber Orchestra, 2019-2020</li>
                        <li>Most Improved, Chamber Orchestra, 2019-2020</li>
                        <li>Lighting Award, National Theatre Festival, York, 2020</li>
                        <li>Innovative Photographer 2019-2020</li>
                        <li>Lighting Award, National Theatre Festival, Central York, 2019</li>
                        <li>Highest Academic Standing, Computer Studies 2018-2019</li>
                        <li>Good Character, Chamber Orchestra Class 2018-2019</li>
                    </ul>
                    <p>Grades:</p>
                    <ul>
                        <li>Grade 9: 93% average</li>
                        <li>Grade 10: 94% average</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <H3>Richmond Rose Public School</H3>
                    <p>Graduation: June 2018</p>
                    <p>Awards:</p>
                    <ul>
                        <li>Principal's Award for Student Leadership</li>
                        <li>Respect, responsibility, honesty character awards</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SKILLS -->
        <div class="slide">
            <div class="row" id="title" style="padding-top:1em;">
                <H2>SKILLS</H2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <H3>Programming Knowledge</H3>
                    <ul>
                        <li>a collection of my projects can be found at <a href="https://github.com/trinity-y">my github</a></li>
                        <li>comfortable with Python 3, C#</li>
                        <li>familiar with C++, PHP, HTML5, CSS, SQL</li>
                        <li>have used VIM, Github, pip, command line compilers, XAMPP, JiraSoftware</li>
                        <li>ranked 68 out of 3717 in the Canadian Computing Competition</li>
                        <li>participated in the York Region Computing Competition/ECOO</li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <H3>Leadership</H3>
                    <H5>Present</H5>
                    <ul>
                        <li>co-founder, co-president of Game Development Club</li>
                        <li>co-president of Tech Crew</li>
                        <li>Canada Learning Code teen ambassador</li>
                        <li>YRHacks committee member <a href="https://yrhacks.ca">(yrhacks.ca)</a></li>
                        <li>treasurer and vice president of Astrid Non-profit <a href="https://astrid-nonprofit.weebly.com">(our site)</a> </li>
                        <li>member of algorithm club</li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <H3>Ability To Teach</H3>
                    <ul>
                        <li>helped many peers in my computer studies class understand content and develop their skills in Python and Pygame</li>
                        <li>volunteered at a Richmond Hill summer camp</li>
                        <li>knowledge of scratch, makey-makey, breadboard, arduino</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- SKILLS END -->
    </div>

    <div class="section" id="page2">
        <div class="slide">
            <div class="row" id="title">
                <h1>Projects</h1>
            </div>
            <div class="row">
                <p>See some of the things I've made...
                <br>Or visit my <a href="https://github.com/trinity-y">github!</a></>
            </div>
        </div>
        <div class="slide">
            <div class="row" id="title">
                <h1>SQL Mail</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/sqlMail1.png" style="width:85%; display:inline; margin:2%;" alt="A view of the homepage."/>
                </div>
                <div class="col-sm-4">
                    <br/>
                    <H3>Overview</H3>
                    <ul>
                        <li>this website allows users to send messages to each other!</li>
                        <li>anyone can create an account with a username and password.</li>
                        <li>password hashing is used to make it more secure.</li>
                        <li>once the user is logged in, they can send messages to other users.</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <br/>
                    <H3>Technical Aspects</H3>
                    <ul>
                        <li>HTML, CSS and Bootstrap were used to create the user interface.</li>
                        <li>I used PHP to process form input and to send SQL queries.</li>
                        <li>while making this project, I learned how to use XAMPP and PHPStorm.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="row" id="title">
                <h1>Rest Counter App</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                        <img src="assets/restCounter1.jpg" style="width:45%; display:inline; margin:2%;" alt="Using the Sheet Music recorder."/>
                        <img src="assets/restCounter2.png" style="width:45%; display:inline; margin:2%;" alt="Browsing saved Sheet Music."/>
                </div>
                <div class="col-sm-4">
                    <br/>
                    <H3>Overview</H3>
                    <ul>
                        <li>this application counts long rests for instrument players!</li>
                        <li>calculations are based on the tempo, time signature, and the number of bars of rest/music.</li>
                        <li>the user can 'play' the music by entering the player or save it on to the computer for later!</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <br/>
                    <H3>Technical Aspects</H3>
                    <ul>
                        <li>I used loops to save three arrays onto an xml file that is saved onto the user's computer</li>
                        <li>xml files are also loaded via loops!</li>
                        <li>I used C#, and Windows forms, and LINQ to XML to build this application</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="row" id="title">
                <h1>Typing Game</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/typingGame1.png" style="width:85%; display:inline; margin:2%;" alt="A screenshot of the game."/>
                </div>
                <div class="col-sm-4">
                    <br/>
                    <H3>Overview</H3>
                    <ul>
                        <li>my first game with Unity!</li>
                        <li>type the words on the screen to go faster.</li>
                        <li>you can try this game yourself at <a href="https://rgssgamedev.github.io">rgssgamedev.github.io</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <br/>
                    <H3>Technical Aspects</H3>
                    <ul>
                        <li>I used the game engine Unity</li>
                        <li>C# was used for scripting</li>
                        <li>the text entry system and words per minute counter are some of the things I scripted</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="slide">
            <div class="row" id="title">
                <h1>Arcade Game</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/arcadeGame2.png" style="width:85%; display:inline; margin:2%;" alt="A screenshot of the game."/>
                </div>
                <div class="col-sm-4">
                    <br/>
                    <H3>Overview</H3>
                    <ul>
                        <li>a small, arcade-like game</li>
                        <li>fight small enemies and earn coins and health</li>
                        <li>kill the boss to win the game!</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <br/>
                    <H3>Technical Aspects</H3>
                    <ul>
                        <li>this was created using pygame</li>
                        <li>I used classes to spawn many mini enemies and fireballs</li>
                        <li>used looping and planned naming scheme to cleanly load over a hundred images</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section" id="page3">
        <div class="row">
            <h1>About this Website</h1>
        </div>
        <div class="row">
            <p>
                Thank you for checking out my portfolio website! <br>
                I made this with HTML/CSS as well as Bootstrap and fullpage.js.
                The code is on my Github!
            </p>
        </div>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>