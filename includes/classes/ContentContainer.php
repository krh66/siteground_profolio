<?php
class ContentContainer{
    private $con;

    public function __construct($con){
        $this->con = $con;
    }

    public function showAllContent(){

        $url = "/includes/index.php";
        $html = "
        <div class='content'>
            <div class='content-block'>
                <div class='image-card'>
                    <img src='assets/images/preweddingPhoto.jpg' alt='preweddingPhoto'>    
                </div>
            </div>
            <div class='content-block2'>
                <div class ='image-card-content'> 
                    <div class='content-title'>
                        <p >Ten facts about me </p> 
                    </div>
                    <div class='content-subtitle'>
                        <li> I have an awesome and supportive fiancee</a>. </br> </li>
                        <li> I am Taiwanese but I live in Tempe, AZ for now. </br> </li>
                        <li> I am currently a software engineering master's student at Arizona State University. </br> </li>
                        <li> I have 5 years of working experience as a back-end software engineer. </br> </li>
                        <li> I am a Gemini and love trying new things. </br> </li>
                        <li> I love traveling and experience different cultures. </br> </li>
                        <li> I love eating but I do workout to keep my shape. </br> </li>
                        <li> I love paddling and I am also a member of AZ Dragon Riders. </br> </li>
                        <li> I do <a href='#anchor2'>side projects</a> even though I am busy. </br> </li>
                        <li> I am full of passion and a dream chaser. </br> </li>
                    </div>
                </div>
            </div>
        </div>
        <div class='content1'>
            <div class='content1-title'>
                <h1> What I have done so far. </h1>
            </div>
            <div class='content1-block'>
                <div class='content1-block1'>
                    <div class='content1-block-border'>
                        <div class='content1-block1-title'> 
                            <h2> Arizona State University </h2> 
                        </div>
                        <div class='content1-block1-text'>
                            <h4> ASU presented tremendous scale and diversity of opportunity. 
                            For now, I spent only one year and already experienced huge differences no matter in weather, culture, lifestyle, and working philosophy.
                            The most enjoyable part is meeting new people from various countries and backgrounds.
                            Those extraordinary professors across the disciplines propelled me to grow, challenge, and adjust my worldview.
                            I am ready to keep open-minded and embrace new challenges in the foreseeable future.</h4>
                        </div>
                    </div>
                </div>
                <div class='content1-block2'>
                    <div class='content1-block-border'>
                        <div class='content1-block2-title'> 
                            <h2> The First Commercial Bank </h2> 
                        </div>
                        <div class='content1-block2-text'>
                            <h4> It's my honor to cooperate with two teams at the same time.
                            The first team I work with dedicates building a trustworthy credit card system in the back-end.
                            The other team I participate in called the BIG-DATA team also plays a significant role by analyzing millions of transactions,
                            proposing creative and viable strategies for the company.
                            During one and a half years, some folks astonished me by their hard-working and committed to their job.
                              </h4>
                        </div>
                    </div>
                </div>
                <div class='content1-block3'>
                    <div class='content1-block-border'>
                        <div class='content1-block3-title'> 
                            <h2> Esun Commercial Bank </h2>
                        </div>
                        <div class='content1-block3-text'>
                            <h4> Esun commercial bank is one of the most creative and innovative banks in Taiwan.
                                I spent about 3.5 years and worked as a back-end software engineer here.
                                During these couple of years, I developed a risk management system for tracking customer’s credit card transactions,
                                managed a team of Apple Pay project for integrating banking system with MDES and VTS and increased 300,000
                            applications of the credit card after launching the Apple Pay project. 
                            I'm appreciative of the time I spent with these folks, who work so hard with their passion.
                            I continue to be inspired by this company today.  </h4>
                        </div>
                    </div>
                </div>
                <div class='content1-block4'>
                    <div class='content1-block-border'>
                        <div class='content1-block4-title'> 
                            <h2> National Cheng Kung University </h2> 
                        </div>
                        <div class='content1-block3-text'>
                            <h4> NCKU provides excellent interdisciplinary courses and eminent professional personnel. 
                            Prominent classmates impact me in immeasurable ways. 
                            Negatively, they made me believe I was always not good enough. 
                            Positively, they forced me to work harder because I know those who are smarter also work harder than me. 
                            My academic advisor motivated and encouraged me to step out of my comfort zone. 
                            The dream of study abroad was cultivated inside my deep heart.
                                 </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id = 'anchor2' class = 'content2' >
            <div class='content2-title'>
                <h1> Here's my side projects. </h1>
            </div>
            <div class='content2-body-block'>
                <div class='content2-body-block-narrow'>
                    <div class='content2-block'>
                        <div class='content2-block-border row1'>
                            <a href= 'http://macflix.slasherfactory.com'> Netflix clone with JS,PHP,MYSQL </a> 
                        </div>
                    </div>
                    <div class='content2-block'>
                        <div class='content2-block-border row2'>
                            <a href='#'>
                            Sign Langauage (to be continue) </a>
                        </div>
                    </div>
                    <div class='content2-block'>
                        <div class='content2-block-border row3'>
                            <a href='#'> Java 2D graphics (to be continue)</a>
                        </div>
                    </div>
                </div>
                <div class='content2-body-block-narrow1'>
                    <div class='content2-block row1'>
                        <div class='content2-block-border'>
                            <a href='#'> Stock Analysis (to be continue)</a>
                        </div>
                    </div>
                    <div class='content2-block'>
                        <div class='content2-block-border row2'>
                            <a href='#'> IOS game (to be continue)</a>
                        </div>
                    </div>
                    <div class='content2-block'>
                        <div class='content2-block-border row3'>
                            <a href='#'> (to be continue) </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = 'content3'>
                <div class='social-text'>
                    <h4> © 2020 Kairui Hsu. All rights reserved. </h4>
                </div>
                <div class='social-links'>
                    <a class='social-item' href='https://www.linkedin.com/in/kai-rui-hsu/' target='blank'>
                        <i class='fa fa-linkedin'></i>
                    </a>
                    <a class='social-item' href='https://twitter.com/marcushsu123' target='blank'>
                        <i class='fa fa-twitter'></i>
                    </a>
                    <a class='social-item' href='https://github.com/krh66' target='blank'>
                        <i class='fa fa-github'></i>
                    </a>
                </div>
        </div>
                    ";

        return $html . "</div>";
    }
}
?>


