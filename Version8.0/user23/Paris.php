<html lang="en">
<!--Version 7.0 
	Name: Joey St. George
	Date Completed:
    -->

<head>
    <link rel="icon" type="image/x-icon" href="images/JS6.ico" />

    <title>Paris</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev JavaScript Practice">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Paris.css">
    <link rel="stylesheet" href="CSS/style.css">

    <!-- JavaScript -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="JS/Paris.js"></script>
    <script src="JS/all.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Put your .js files here ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
</head>

<body>
    <!---------------------------------- Begin the nav-bar ------------->
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="index.php" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!--↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ Edit These Items in your Menu ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓-->
                    <a href="index.php" class="nav-item nav-link">Places To Visit</a>
                    <a href="South-Island.php" class="nav-item nav-link" tabindex="-1">South Island</a>
                    <a href="Paris.php" class="nav-item nav-link active" tabindex="-1">Paris</a>
                    <a href="Bora-Bora.php" class="nav-item nav-link" tabindex="-1">Bora Bora</a>
                    <a href="Maui.php" class="nav-item nav-link" tabindex="-1">Maui</a>
                    <!--↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑ Edit These Items in your Menu ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑-->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="login.php" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </nav>
    </div>
    <!---------------------------------- End the nav-bar ------------->

    <!--------------------------------Button--------------------------------->
    <button onclick="topFunction()" id="topBtn" title="Go to top">Top of Page</button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };
    </script>

    <!--------------------------------Content------------------------------------>
    <div class="container">
        <br>
        <center>
            <h2>Paris, France</h2>
        </center>
        <br>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
                <div class="carousel-item active">
                    <img src="images/Paris/Paris1.jpeg" class="d-block w-100" alt="Image of Paris's Skyline">
                </div>
                <div class="carousel-item">
                    <img src="images/Paris/Paris2.jpeg" class="d-block w-100" alt="Image of Paris's Skyline">
                </div>
                <div class="carousel-item">
                    <img src="images/Paris/Paris3.jpeg" class="d-block w-100" alt="Image of Paris's Skyline">
                </div>
                <div class="carousel-item">
                    <img src="images/Paris/Paris4.jpeg" class="d-block w-100" alt="Image of Paris's Skyline">
                </div>
                <div class="carousel-item">
                    <img src="images/Paris/Paris5.jpeg" class="d-block w-100" alt="Image of Paris's Skyline">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="things-to-do">
        <Center>
            <h2>Things to do in Paris</h2>
        </Center>
        <br>

        <p>
            <strong>1. Go museum hopping</strong>
            The Louvre might get most of the attention, but there are plenty of other great museums in the city. Make
            sure you especially check out the Musee D’Orsay for great impressionist work, the amazing Rodin museum,
            Holocaust museum (one of the best in the world), Musee D’Orangerie (more impressionist work), and the
            interesting sewer museum to start. There are so many museums in the city that you won’t run out of something
            to see! A museum pass is the most affordable way to do this. A two-day pass costs €48 ($53 USD), a four-day
            pass costs €62 ($69 USD), and a six-day pass costs €74 ($82 USD).
        </p>
        <br>
        <br>
        <p>
            <strong>2. Walk the Champs Elysees</strong>
            This is a very prestigious avenue in Paris with cinemas, cafes, luxury specialty shops. It’s also one of the
            most famous streets in the world, running down from the Arc de Triomphe to the Louvre. It is always busy and
            always expensive, but it’s a great place to club hop at night or snap photos during the day. Come in the
            very
            early morning to see the place utterly deserted. It makes for great photos.
        </p>
        <br>
        <br>
        <p>
            <strong>3. Visit the Panthéon</strong>
            Located in the Latin Quarter, this neoclassical building was originally built as a church but was turned
            into a
            state burial site for France’s heroes, like Marie Curie, Victor Hugo, Jean-Jacques Rousseau, Louis Braille,
            and
            Voltaire. The scale of the building is impressive — after all, it the peristyle was inspired by the Pantheon
            in
            Rome. Admission is €9 ($10 USD).
        </p>
        <br>
        <br>
        <p>
            <strong>4. Relax in Jardin Du Luxembourg</strong>
            The Jardin du Luxembourg is the largest public park in Paris. The garden contains just over a hundred
            statues,
            monuments, and fountains, all scattered throughout the grounds. In the morning, you’ll see lots of runners.
            At
            lunch on a nice day, a park full of people having a picnic (which is something I highly recommend you do!).
        </p>
        <br>
        <br>
        <p>
            <strong>5. View the city from Montemartre</strong>
            Home to starving artists for decades, Montmartre offers a stunning view of Paris, arty cafés and bars,
            cobblestone streets, and the only winery within the city limits (Vignes du Clos Montmartre). It’s one of the
            hipper parts of Paris, even if it has lost some of its old grandeur. It’s great for those wanting to visit
            the
            hangout spots of folks like Hemingway and Gertrude Stein!
        </p>
        <br>
        <br>
        <p>
            <strong>6. Visit Notre Dame</strong>
            Paris’s Gothic masterpiece was constructed between 1163-1334. Climb from the north tower to the south to
            appreciate the masonry, and get a close-up view of the Gallery of Chimeras, the fantastic birds and beasts
            gazing over the balustrade. The outside facade has been cleaned up in recent years but the inside has a bit
            of
            that old Gothic grimy charm. To climb the tower, it costs €10 ($11 USD). It’s open 10am-5:30pm every day
            with
            the exception of some holidays (and it’s open an hour later during the summer). NOTE: Notre Dame is
            currently
            closed due to the 2019 fire.
        </p>
        <br>
        <br>
        <p>
            <strong>7. Stand under the Arc De Triomphe</strong>
            This monument stands in the center of the Place Charles de Gaulle and is one of the most famous landmarks in
            Paris. For €8 ($9 USD), visitors can climb 284 steps to reach the top of the Arc where they will get
            information
            about the city’s history, as well as some panoramic views. It’s one of my favorite spots to see the city.
        </p>
        <br>
        <br>
        <p>
            <strong>8. Celebrate Bastille Day</strong>
            Every July 14th, a series of spectacular events in Paris celebrates the infamous storming of the Bastille
            during
            the French Revolution. There’s a huge, televised parade and a never-ending fireworks display (head to Champ
            de
            Mars or the Jardins du Trocadéro for the best views of it all). This is French independence day and one of
            the
            liveliest days in the country.
        </p>
        <br>
        <br>
        <p>
            <strong>9. Experience the Cinema en Plein Air</strong>
            Every July and August, Paris rolls out the inflatable screen in the Parc de la Villete for this major
            outdoor
            cinema event in the 9th arrondissement. It’s hugely popular with locals who tend to bring food and wine!
            Better
            yet, it’s free!
        </p>
        <br>
        <br>
        <p>
            <strong>10. Visit Maison du Victor Hugo</strong>
            This beautiful apartment dates to 1605. Its most famous resident was the writer Victor Hugo (author of Les
            Misérables and The Hunchback of Notre Dame), who moved here when he was 30. His old apartment is now a
            museum
            dedicated to his life and writing. The museum is quite small, but Hugo lovers (like me) will find it very
            interesting. Open daily except for Mondays from 10am-6pm and it’s free. NOTE: At the time of writing this,
            the
            building has been closed for renovations.
        </p>
        <br>
        <br>
        <p>
            <strong>11. Climb through the Paris Catacombs</strong>
            Underneath the city of Paris, you’ll find a honeycomb of tunnels. The French resistance used these tunnels
            during World War II, and rave parties flourished there during the 90s. Within this maze of tunnels, lie the
            famous Catacombs of Paris. Here you can visit the tunnels and see the old burial sites of the city. It’s one
            of
            the freakiest and coolest sites in Paris, oftentimes missed by tourists. They’re open daily 10am-8:30pm
            except
            for Mondays. Guided tours start from €72 ($80 USD), but you can do audio guide tours from €40 ($44 USD).
        </p>
        <br>
        <br>
        <p>
            <strong>12. Dance the night away</strong>
            Whether it’s modern clubs you like or classic jazz joints, you shouldn’t leave Paris without tasting the
            music
            that attracted some of the best musicians and artists to the city. There is an especially abundant amount of
            good jazz clubs in the city.
        </p>
        <br>
        <br>
        <p>
            <strong>13. Walk amongst the tombstones</strong>
            The Pere-Lachaise Graveyard is Paris’ most famous cemetery. It’s a peaceful and hauntingly-beautiful area
            worth
            exploring. If you look closely you’ll be able to spot the graves of a handful of famous people (Jim
            Morrison,
            Chopin, and Oscar Wilde are all buried here.)
        </p>
        <br>
        <br>
        <p>
            <strong>14. Visit the Mémorial de la Shoah</strong>
            Despite having an excellent exhibit on France, anti-Semitism, and the Holocaust, the Mémorial de la Shoah
            never
            draws a lot of people. It’s a real shame, as the information and collection here is really great and
            in-depth.
            I’ve been to many Holocaust museums, and this is one of the best and most detailed in the world. I highly
            recommend it.
        </p>
        <br>
        <br>
        <p>
            <strong>15. Take a walking tour</strong>
            There are dozens upon dozens of companies covering all aspects of life in Paris, and it can be hard to make
            a
            sense of all those endless Viator and Tripadvisor listings. Some are free like New Europe’s tour where
            they’ll
            take you around the center of Paris and give you a historical overview of the city. Walks offer amazing
            in-depth
            tours starting from about €55 ($61 USD) where you’ll get specialized guides and skip the line to big
            attractions, like the Louvre. I wrote a whole guide to the best walking tours in Paris!
        </p>
        <br>
        <br>
        <p>
            <strong>16. Take a food tour</strong>
            You’re in France, you’ve got to appreciate the food! Paris by Mouth is a company that offers a handful of
            neighborhood tours highlighting the best food in Paris. The groups are kept small (no more than eight
            people)
            and they are really focused on providing a lot of information on food, history, and culture. It’s like a
            mini-class more than it is a chance to just eat food (though you do that too). They even have a workshop
            just
            for cheese. Tours are from €110 ($122 USD).
        </p>
    </div>


</body>
<div>
    <!---------------------------------Footer------------------------------------>
    <!-- Footer -->
    <footer id="footer" class="page-footer font-small mdb-color lighten-3 pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Content -->
                    <a class="weatherwidget-io" href="https://forecast7.com/en/48d862d35/paris/?unit=us" data-label_1="Paris" data-label_2="Weather" data-days="5" data-theme="gray">Paris Weather</a>
                    <script>
                        ! function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = 'https://weatherwidget.io/js/widget.min.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'weatherwidget-io-js');
                    </script>


                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <a id="links" href="http://shakonet.isd720.com/WebDev/" target="_blank" rel="noopener noreferrer">PROJECTS</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a id="links" href="https://www.shakopee.k12.mn.us/" target="_blank" rel="noopener noreferrer">ABOUT
                                    US</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a id="links" href="https://www.smore.com/z45xm" target="_blank" rel="noopener noreferrer">BLOG</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a id="links" href="https://www.shakopeesabers.com/" target="_blank" rel="noopener noreferrer">AWARDS</a>
                            </p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Contact details -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Contact Us</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fa fa-home mr-3"></i> 100 17th Ave W, Shakopee, MN 55379
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-envelope mr-3"></i> 225838@shakopeeschools.org
                            </p>
                        </li>
                        <li>
                            <p>
                                <i class="fa fa-phone mr-3"></i> (952) 496-5152
                            </p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                    <!-- Social buttons -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                    <!-- Facebook -->
                    <a id="links" type="button" class="btn-floating btn-fb">
                        <i class="fa fa-facebook-f fa-3x"></i>
                    </a>
                    <!-- Twitter -->
                    <a id="links" type="button" class="btn-floating btn-tw">
                        <i class="fa fa-twitter fa-3x"></i>
                    </a>
                    <!-- Google +-->
                    <a id="links" ype="button" class="btn-floating btn-gplus">
                        <i class="fa fa-google-plus fa-3x"></i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <!--link->
        <a id="links" href="https://mdbootstrap.com/"> </a>
    </div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>

</html>