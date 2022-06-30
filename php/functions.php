<?php
// In this file will come all the functions that will be used in the project.

// ======== Regular HTML functions: ========
function htmlHeader($language, $title, $directory)
{
    // Declaring Variables
    if ($directory == 1) {$directory = "../css/style.css";}
    else if ($directory == 2) {$directory = "../../../css/style.css";}

    echo "
    <!DOCTYPE html>
    <html lang=" . $language . ">
    <head>
        <!-- Importing Stylingsheet -->
        <link rel='stylesheet' href='$directory'>
        <meta charset='UTF-8'>
        <title>" . $title . "</title>
    </head>
    <body>
    ";
}

function htmlNavbar($language)
{
    if ($language == "en") {
        echo("
       <nav>
            <a href='./php/activities/EN/stairs.php'><button>Walking stairs in Landgraaf</button></a>
            <a href='./php/activities/EN/soccer.php'><button>Soccer</button></a>
            <a href='./php/activities/EN/brain.php'><button>Tame your brain</button></a>
            <a href='./php/activities/EN/care-privacy-medication.php'><button>Care, privacy and medication</button></a>
            <a href='./php/activities/EN/anti-conception.php'><button>Workshop Anti-conception</button></a>
            <a href='./php/activities/EN/Don-from-beton.php'><button>Keeper, the Don from beton</button></a>
            <a href='./php/index.php'><img src='./images/NL_Flag.png' alt='NL_Flag' width='75'></a>
        </nav>
    ");
    }
    if ($language == "nl") {
        echo("
        <nav>
            <a href='./activities/NL/stairs.php'><button>Trappen lopen in Landgraaf</button></a>
            <a href='./activities/NL/soccer.php'><button>Voetbal</button></a>
            <a href='./activities/NL/brain.php'><button>Tem je brein</button></a>
            <a href='./activities/NL/care-privacy-medication.php''><button>Verzorging, privacy en medicatie</button></a>
            <a href='./activities/NL/anti-conception.php'><button>Workshop Anticonceptie</button></a>
            <a href='./activities/NL/Don-from-beton.php''><button>Keeper, the Don from beton</button></a>
            <a href='../index.php'><img src='../images/EN_Vlag.png' alt='EN_Flag' width='75'></a>
        </nav>
        ");
    }
}

function htmlNavbarActivities($language, $pagenumber)
{
    if ($language == "nl") {
        if ($pagenumber == 1) {
            echo("
                <a href='../../index.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./soccer.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 2) {
            echo("
                <a href='./stairs.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./brain.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 3) {
            echo("
                <a href='./soccer.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./care-privacy-medication.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 4) {
            echo("
                <a href='./brain.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./anti-conception.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 5) {
            echo("
                <a href='./care-privacy-medication.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./Don-from-beton.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 6) {
            echo("
                <a href='./anti-conception.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='../../index.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
    }
    if ($language == "en") {
        if ($pagenumber == 1) {
            echo("
                <a href='../../../index.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./soccer.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 2) {
            echo("
                <a href='./stairs.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./brain.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 3) {
            echo("
                <a href='./soccer.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./care-privacy-medication.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 4) {
            echo("
                <a href='./brain.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./anti-conception.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 5) {
            echo("
                <a href='./care-privacy-medication.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='./Don-from-beton.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
        if ($pagenumber == 6) {
            echo("
                <a href='./anti-conception.php'><img src='../../../images/Arrow%20left%20(Black).png'></a>
                <div class='navbar-arrow-right'><a href='../../../index.php'><img src='../../../images/Arrow%20right%20(Black).png'></a></div>
            ");
        }
    }
}

function htmlFooter()
{
    echo "
    </body>
    </html>
    ";
}

function MainPage($language)
{
    if ($language == "en") {
        echo("
        <div class='homepage-intro'>
            <p>
                Welcome to project week 5. The vital civic week.<br/>
                <br/>
                In this website I will talk about everything I have done in this week.<br/>
                As said in the title of this website, this is a project week.<br/>
                <br/>
                All of these workshops and activities were needed for me to get my last grade of this semester.<br/>
                <br/>
                I hope you enjoy this website!
            </p>
            <img src='../images/civic.jpg' alt='Error: Look for civic.jpg'>
        </div>
        ");
    }
    if ($language == "nl") {
        echo("
        <div class='homepage-intro'>
            <p>
                Welkom bij project week 5. De vitale burgerschapsweek.<br/>
                <br/>
                In deze website ga ik over alles vertellen wat ik in deze week heb gedaan.<br/>
                Zoals in de titel van deze website, dit is een project week.<br/>
                <br/>
                Alle workshops en activiteiten zijn benodigd voor mij om mijn laatste cijfer van dit semester te behalen.<br/>
                <br/>
                Hopelijk geniet je van de website!
            </p>
            <img src='../images/civic.jpg' alt='Error: Look for civic.jpg'>
        </div>
        ");
    }
}

function ActivityTitle($language, $pagenumber) {
    if ($language == "en") {
        if ($pagenumber == 1) {
            echo("
                <h1>Activity - Walking stairs on the Wilhelminaberg hill (Landgraaf)</h1>
            ");
        }
        if ($pagenumber == 2) {
            echo("
                <h1>Activity - Soccer in De Joffer</h1>
            ");
        }
        if ($pagenumber == 3) {
            echo("
                <h1>Workshop - Tame your brain</h1>
            ");
        }
        if ($pagenumber == 4) {
            echo("
                <h1>Workshop - Care, Privacy and Medication</h1>
            ");
        }
        if ($pagenumber == 5) {
            echo("
                <h1>Workshop - Anti-conception</h1>
            ");
        }
        if ($pagenumber == 6) {
            echo("
                <h1>Activity - Don from Beton</h1>
            ");
        }
    }
    if ($language == "nl") {
        if ($pagenumber == 1) {
            echo("
                <h1>Activiteit - Trappen lopen in op de Wilheminaberg (Landgraaf)</h1>
            ");
        }
        if ($pagenumber == 2) {
            echo("
                <h1>Activiteit - Voetbal in De Joffer</h1>
            ");
        }
        if ($pagenumber == 3) {
            echo("
                <h1>Workshop - Tem je brein</h1>
            ");
        }
        if ($pagenumber == 4) {
            echo("
                <h1>Workshop - Verzorging, Privacy en medicatie</h1>
            ");
        }
        if ($pagenumber == 5) {
            echo("
                <h1>Workshop - Anti conceptie</h1>
            ");
        }
        if ($pagenumber == 6) {
            echo("
                <h1>Activiteit - Don from Beton</h1>
            ");
        }
    }
}

function ActivityContent($language, $pagenumber) {
    switch ($language) {
        case "en":
            switch ($pagenumber) {
                case 1:
                    echo("
                        <div class='activity-content center'>
                            <p>
                                This is the first activity we did this week.<br/>
                                <br/>
                                We went to a big hill with an incredible amount of stairs. After the first round up and down a<br/>
                                contest began to brew up. This meant that there actually were stakes<br/>
                                <br/>
                                The second time we went up the stairs there was a contest. The first one that was at the top could choose<br/>
                                a prize. This was a small prize between €5 and 20 euros.<br/>
                                <br/>
                                I actually won!
                            </p>             
                            <img src='../../../images/stairs-1.jpg' width='350px'>
                            <img src='../../../images/stairs-2.jpg' width='350px'>
                            <p>
                                At the end everybody pretty much was exhausted and feeling dead. After that we still actually needed to go to soccer.<br/>
                                But this was the first activity we did this week.
                            </p>
                            <img src='../../../images/stairs-3.jpg' width='350px'>
                            <img src='../../../images/stairs-4.jpg' width='350px'>
                        </div>
                    ");
                    break;
                case 2:
                    echo("
                        <div class='activity-content center'>
                            <p>
                                The second activity we did this week was a whole soccer event/tournament in De Joffer.<br/>
                                <br/>
                                This event was pretty straight forward. The event hosts made the teams and we just had to play<br/>
                                and we had to beat the other teams. The event was pretty intense and we had to be careful<br/>
                                if we actually wanted to win.<br/>
                                <br/>
                                Our team made it to the semi-finals and then lost.<br/>
                                <br/>
                                It was a very fun experience and at the end of it I couldn't feel my legs anymore :)
                            </p>
                            <img src='../../../images/soccer-1.jpg' width='900px'>
                            <img src='../../../images/soccer-2.jpg' width='350px'>        
                        </div>
                    ");
                    break;
                case 3:
                    echo("
                        <div class='activity-content center'>
                            <p>
                                The the second day of the week and the third activity/workshop of the week was the Tame your brain workshop.<br/>
                                <br/>
                                This workshop was very interesting. We had to learn how to tame your brain and how to use it.<br/>
                                <br/>
                                We did multiple minigames so they can show what kind of things are programmed into your brain and what everybody<br/>
                                standardly already has.<br/>
                                <br/>
                                Things like memory, attention, mulitasking, dopamine, etc.<br/>
                                <br/>
                                Multitasking was a very interesting one because the brain actually can't multitask.<br/>
                                <br/>
                                There are exceptions for this because you can learn some tricks let it seem that you're multitasking<br/>
                                but you're actually not. You're just making 2 tasks 1 task and becoming really good at that. Think about it.<br/>
                                <br/>
                                This was a very fun experience and I learned a lot about my brain.
                            </p>    
                        </div>
                    ");
                    break;
                case 4:
                    echo("
                    
                    ");
                    break;
                case 5:
                    echo("
                    
                    ");
                    break;
                case 6:
                    echo("
                    
                    ");
                    break;
            }
            break;
        case "nl":
            switch ($pagenumber){
                case 1:
                    echo("
                        <div class='activity-content center'>
                            <p>
                                Dit is de eerste activiteit die we deze week hebben gedaan.<br/>
                                <br/>
                                We gingen naar een grote heuvel met ongelooflijk veel trappen. Na de eerste ronde op en neer begon<br/>
                                er oprecht een wedstrijd te op brouwen. Dit betekende dat er daadwerkelijk iets op het spel stond.<br/>
                                <br/>
                                De tweede keer dat we de trap op gingen was er een wedstrijd. De eerste die bovenaan stond mocht kiezen<br/>
                                een prijs. Dit was een kleine prijs tussen de € 5 en 20 euro.<br/>
                                <br/>
                                Ik heb echt gewonnen!
                            </p>             
                            <img src='../../../images/stairs-1.jpg' width='350px'>
                            <img src='../../../images/stairs-2.jpg' width='350px'>
                            <p>
                                Op het einde was iedereen zo goed als uitgeput en voelde zich dood. Daarna moesten we ook nog naar voetbal.<br/>
                                Maar dit was de eerste activiteit die we deze week deden.
                            </p>
                            <img src='../../../images/stairs-3.jpg' width='350px'>
                            <img src='../../../images/stairs-4.jpg' width='350px'>
                        </div>
                    ");
                    break;
                case 2:
                    echo("
                        <div class='activity-content center'>
                            <p>
                                De tweede activiteit die we deze week deden was een heel voetbalevenement/toernooi in De Joffer.<br/>
                                <br/>
                                Dit evenement was vrij simpel. De hosts van het evenement maakten de teams en we moesten gewoon spelen<br/>
                                en we moesten de andere teams verslaan. Het evenement was behoorlijk intens en we moesten voorzichtig zijn<br/>
                                als we echt wilden winnen.<br/>
                                <br/>
                                Ons team bereikte de halve finale en verloor toen.<br/>
                                <br/>
                                Het was een erg leuke ervaring en op het einde voelde ik mijn benen niet meer :)
                            </p>
                            <img src='../../../images/soccer-1.jpg' width='900px'>
                            <img src='../../../images/soccer-2.jpg' width='350px'>        
                        </div>
                    ");
                    break;
                case 3:
                    echo("
                        <div class='activity-content center'>
                            <p>
                                De tweede dag van de week en de derde activiteit/workshop van de week was de Tame your brain workshop.<br/>
                                <br/>
                                Deze workshop was erg interessant. We moesten leren hoe we je hersenen konden temmen en gebruiken.<br/>
                                <br/>
                                We hebben meerdere minigames gedaan zodat ze kunnen laten zien wat voor soort dingen er in je hersenen zijn geprogrammeerd en wat iedereen<br/>
                                heeft standaard al.<br/>
                                <br/>
                                Dingen zoals geheugen, aandacht, multitasking, dopamine, enz.<br/>
                                <br/>
                                Multitasken was erg interessant omdat de hersenen eigenlijk niet kunnen multitasken.<br/>
                                <br/>
                                Hier zijn uitzonderingen op, want je kunt wat trucjes leren, laat het lijken alsof je aan het multitasken bent<br/>
                                maar dat ben je eigenlijk niet. Je maakt gewoon van 2 taken 1 taak en wordt daar heel goed in. Denk er eens over na.<br/>
                                <br/>
                                Dit was een erg leuke ervaring en ik heb veel geleerd over mijn brein.
                            </p>    
                        </div>
                    ");
                    break;
                case 4:
                    echo("
                    
                    ");
                    break;
                case 5:
                    echo("
                    
                    ");
                    break;
                case 6:
                    echo("
                    
                    ");
                    break;
            }
            break;
    }
}