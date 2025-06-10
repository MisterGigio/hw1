<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <footer id="main-footer">
        <!-- SEZIONE PRIMO FIGLIO DEL FOOTER: contenitore superiore del footer -->
        <div class="top-footer">
            <!-- PRIMO CONTENITORE (SINISTRA) NIPOTE -->
            <div class="left-footer">
                <h4>Pitchfork</h4>
                <p>The most trusted voice in music</p>

                <!-- SEZIONE ICONE SOCIAL -->
                <div class="social-icons">
                    <a href="#" class="social-icon" id="social-facebook"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABfUlEQVR4nO2Xv4rCQBDG9zk+QdBgYZcqYGNhZZlH0C5PYGlpGbCIVaxSCwp5AEvJC6QQ0qj9phH8Q+Y4iwNNQLhL3Cw3Ax+kWNjvNzO7sxEASGcJ1QbAAFCfRXALQX0mwYcYekqoNgAGgPosglsI1Weq3W5Tr9ej4XBI/X7/8d3pdOpdgUajQY7j0G63o9vtRkUxGo3qCdBsNmmz2dC7GI/H9QTwPO+t+doCmKZJ1+uVtAWYTqeFZtM0pfl8TpPJ5EeWZdUPYL1eFwLYtl36XqIKgCiKcubjOC59H1QF8G32NVarlT4A+/0+B7BcLvUG8H2fAVBFBVzXJSnlk+73e64Cl8slt05KSYPBQG0LLRYL+m1kWUaGYegLcDgc1B/ivwBst1u9AfwSbiZRxo9Kt9t9UpIkObNBEOTWtVot9QBF4jkArgC4hV6D30LgWwh8jaKCmSN4kIEnMdWuhcIwpOPxSOfz+aHT6USz2UyfM4APSqg2AAaA+iziP7fQF0EgIaH7vrTwAAAAAElFTkSuQmCC"
                            alt="Facebook"></a>
                    <a href="#" class="social-icon" id="social-tiktok"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEO0lEQVR4nO2ayS9sURCH/R3H2Nq40m2K6IQ0doQIW2KIYGNhYUkMMeyQIBYiIRHBwsLKQiIh5hgTQ0zRQayENk/18qv0ubmaftrj9b3tvUoqnHPrXvXdqnNOnXP5CCHoJ6iP1g78BxH/WkTy8/NpamqKrq+vSWu5urpiX/Ly8j4H0tbWRnqV1tZW90AQCcj9/T3V1dWRyWTSPG1MJhP7Ap8g70XmDcj09DQb40atAYSTNjQ0sG9Isw9BkI8QPURCvBMZiN1u/xhEitZOCxfqyj+PgExOTr4ZtAsLC+Tn5+ddIDc3N+/OQFar1btAbm9v+ZlGo5Hb7e3t3K6trfXOiBgdIKmpqfTy8kLHx8cUEhLivRERQtDY2Bj3jY6Ofmqs6AIkODhY6YuKiiKbzcb94+PjZDab9Q9yd3fHzzQYDK/6LRYL7e/v8zXUdCMjI1RVVUWxsbHeBQINCwujrq4uZSGGHB4e6hNE1khBQUHKujI7O8sQ0iY8PJzKysrYDpODV4BImZiYoNDQUMXOaDTqG+Th4YGfGRgY+OpvQPb29qikpIQCAgK0B4mLi6PGxkaamZmh09NTdhzT60cgGxsbyu8XFxe0tLSkDQim0+7ubiV1nEXaPT4+chtvXf030K6urqajo6NX99lsNs+BoKReXl5mW6zSyPeKigpKS0tzG0T9PNRdRUVFVFlZSYmJiZ4BQS6vrq6yHd5mdnb2b5/hDoi7+q0gvb29bHNwcKBswOBkeXk5DQ0NvXnG09MTt/39/fUDYrFY+A1DU1JSuA8r8fr6Oqnl7OxM3yBtjhOWgYEBJc22t7eVqRQ5np6e/mqr/Pz8zNdlcagLkA3HlJmbm8vtmpoabgNGXd2qFZMBxNfXVz8gV46aSO4jsHZASktLXd6jOxCDwcDXUATKPlm9utq2Ip0gSC+0MU4gGDeaRuTacYQq02h+fp7bxcXF79pjQoBgN6g+0lFPBpqAbG5u8vWsrCxuNzc3cxvrilwnpOLt4zAN0tfXx304JYTMzc1pC9LR0cHXe3p6lPL75OSE+1ZWVqigoICSk5OpsLBQWfnPz88pJiaG7YeHh7mvqalJWxCr1cr5jXGSkJCgpI+EcRakUEZGhmKHe1GbxcfHawsihKDBwUG2WVtbU2YvRKalpYUWFxd5h4exg7SLjIzk6xEREbS7u8v3odD8Ewjx3SBwemdnR4GRkXGlSUlJij3GkvoQQlMQIQQ7L51DmmHMZGZmKk7iZ05ODvX39ytFI8oYd09LhKdAZGSQZrIEkeL8lQsgKDRdrfyagwiHYhB3dnbS1taWcoaFXR7KGdRmKDS/CiA8AeKsnz0G/Ssgdrtdtx96oqOj2bfLy8uPQeRKXF9fr7nj4iuf3mQJgUULMF+dZb5DzWYzQ3zqYygUn4C9/vO0UEUGIVSfyXrdPwwIL1QfrR34DyJ+aER+AZaselMGgi/VAAAAAElFTkSuQmCC"
                            alt="TikTok"></a>
                    <a href="#" class="social-icon" id="social-instagram"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAACPElEQVR4nO2Wy67xUBTHPcfOoUYYYoJHYEL7Bi4vQZm6PITrC6BPIUEFMXAb03HLiOyT/4pKzjnqVPlyBp+VrKTZXZffXnvti4sxxv9SXW8A9l4Cdr9JJEniiqJwTdP4+Xzmvwls9vs9+Yii6LwJPR4P73Q6/FlBDMR6GKBzSW4YBi+XyzwSifCPj49fZwSbaDTKq9UqPxwOFKPdbj8GIEnSNXk8Hne8xxOJxBUilUrZB1AUhZwqlYqjxI1Gg8uyTN+oBKTX69kH0DSNnFD27/+8Xi8vFotcVVWaHXQ8HlNCQRDIZjAY8Hq9Tt+xWIxi7XY7+wCn04mc3G73l/FwOMwXi4Vlw83ncx4Khb74IAYEMW0DmPJ95mby5XLJ0+k09/l8pJlMhq/Xa/o3m82ulbgX72GAUqlEY6vVivv9/h8+GDMhCoXC6wEmkwmNYeZWzZfNZskGPfFyAMMwaAwltwJAFSC6rr8eQNf1vwVQVZXG0HBWALlcjmxGo9HrAWRZpjE02q0mDAQCfLvdkk0+n389gCAItM8hm82GGg4gUMzcTD6dTn9cPg8DnCwOIhwyJsQtQfJgMPj8QaTdOYpRCexzrDN2BnQ4HFLZb127jo7ifr9PTrhIrBrOrtZqNYrV7XbtA4iiSE64aHClOk0O3+PxSLGSyaR9AMYYPSJMCFQCjww7DxKsOcqOmZvJW62WsydZ+wLxjDSbTWdPMnZRvGTwmEATmbvjnsAGtvCxKvtDAOwfq+sNwP73JfgE0mFawI4HK88AAAAASUVORK5CYII="
                            alt="Instagram"></a>
                    <a href="#" class="social-icon" id="social-youtube"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEsUlEQVR4nO1Z6St8bxT3d1xcoexkydZYIoWZQsk2llCWNyQSCVHIvEC2JFnK8oI3imQvyxulbCG7N7JmZ+zn1zm503cs15gZ36vvb06dmuae5znn85zlOfdcPYZh4F9gPaEN0AFhdB5hBA8fRpcjjPAnzeg8wvzDHmFZFry9vSE+Ph5yc3OhsrISOjs7YWBgAKampmBhYQF2dnbg+PgYzs/PieVyOfxJ19fXimcHBwewvb1N66anp2FoaAg6OjqgoqICcnJySI9YLAZHR0fSrREQV1dXqK6uhtXVVXh8fASh6P7+Hvr7+wnYt4FkZmbCzc2N0oaHh4d0+t3d3VBTUwMFBQWQmpoKkZGRpMTLywscHBzA0tKS2NTUVGlPc3NzxTN7e3vw9PSkdbg+OTkZ8vLyyNNdXV0wOjoKW1tbSgeIv4uKilQHgm59fn6mxej26OhoUi5E3LMsCxKJhEIY6eXlBRISEr4GYmhoCHt7e7SooaEB9PX1BU9i5pUbGxvJrsXFxa+B+Pn5kfDR0ZHKSfa32MzMTFFAnJ2d+YEkJSWR4Pj4uOCGMx8wegNJKpXyAykuLibBtrY2wY1mPuDe3l6yLz8/nx9Ic3MzCfJVBz6enJwEX1/fHwNSVVVF9rW2tvIDGR4eJsHExES1FHFlEg/EyspK60DS0tJIBx4YL5DZ2VkSDAoKUhsIR2dnZxQC2iwaEomE9l5bW+MHsry8TIJYvTQBMjg4qPi9vr4OMTExWgHi7u5Oe56cnPADwX4JSSQSaQQEf4eHh1N7w9HY2Bj1a5oAsbOzo72enp7e3XFKQLANQcJWQ1MgyAYGBpCenk7NJJc/7e3tYGtrq9b+xsbGCh34+1Mgl5eXJIR9kTaAcGxhYQF1dXXUACJhB1xaWgpGRkbf1vHw8PChjUpAuCZN3QT9DAjH2FhiiGmSP6enp7QWw0wwIB4eHjAyMqKQww43Li7uWzqurq6+9sjFxQUJqdvt/nRosSxLHfCXyb6/v0+KnJycfmWy29jYKO6ot8+UgKCrkTCWNQUSFhYGKysriv+00b6IRCLaa3d3lx/I0tISCQYGBv7KC1EsFn/6TqIEZGZmhgTxMtMEyE+1KFKpVPHmygsEX/KRsrKy1AaiaR4wPJydnU06enp6+IHU1taSIA4X1FGkjTaE4WGsfEg4NuIFgp5AQoN+yhhNuP81YrAS8gIJDQ0lQbxPsHQKbTjzhrliFBwczA8E45obBX01EPvbbGJiAre3t2Qf3ie8QJCx3iNNTEz8qklK4+s4CIeEHz1/B8Tf318xdpmfn4fY2Fi1ulRtMMuyFBncvXR3d/dppOh9Vq+5toIrqZubm5Rs9fX1UFhYCCkpKRASEgI+Pj7g4uJC/ZmqeYUGWltb0xtfQEAAREREUAKXlJRAU1MTTRbxIuVadiTsenEK+u0hNuZLWVkZeQVPQlXCGOam7m+Z61xVJblcTvrLy8vfte0qA/mT8aTd3NwgKioKMjIyQCaTQUtLC/T19VFOzc3NwcbGBn0u4IzGzwh8nxVQHtfhetwH95PJZLQ/6kF936mcuu/szC+oZIzOI4zwJ8/oPMIIf9qMziOM8CfM/F898h9IbSjOPAp+ngAAAABJRU5ErkJggg=="
                            alt="YouTube"></a>
                </div>
            </div>
            <!-- SECONDO CONTENITORE (CENTRO) NIPOTE -->
            <div class="center-footer">
                <h4>MORE FROM PITCHFORK</h4>
                <ul>
                    <li><a href="video">VIDEO</a></li>
                    <li><a href="listsGuides">LISTS &amp; GUIDES</a></li>
                    <li><a href="podcast">PODCAST</a></li>
                    <li><a href="masthead">MASTHEAD</a></li>
                    <li><a href="rss">RSS</a></li>
                </ul>
            </div>
            <!-- TERZO CONTENITORE (DESTRA) NIPOTE -->
            <div class="right-footer">
                <h4>EVENTS</h4>
                <ul>
                    <li>PITCHFORK MUSIC FESTIVAL CHICAGO</li>
                    <li>PITCHFORK MUSIC FESTIVAL LONDON</li>
                    <li>PITCHFORK MUSIC FESTIVAL PARIS</li>
                    <li>PITCHFORK MUSIC FESTIVAL CDMX</li>
                    <li>ALL EVENTS</li>
                </ul>
            </div>
        </div>

        <!-- SEZIONE SECONDO FIGLIO DEL FOOTER: contenitore inferiore del footer -->
        <div id="footer-side">
            <!-- Sezione informazioni -->
            <div class="bottom-footer">
                <ul>
                    <li>USER AGREEMENT</li>
                    <li>PRIVACY POLICY</li>
                    <li>YOUR CALIFORNIA PRIVACY RIGHTS</li>
                    <li>NEWSLETTER</li>
                    <li>RSS FEEDS</li>
                    <li>CONTACT</li>
                    <li>ACCESSIBILITY HELP</li>
                    <li>ADVERTISING</li>
                </ul>
            </div>
            <!-- Parte disclaimer -->
            <div class="disclaimer-footer">
                <p>
                    &reg;
                    2025 Condé Nast. All rights reserved. Pitchfork may earn a portion of sales from products that
                    are
                    purchased through our site as part of our Affiliate Partnerships with retailers. The material on
                    this site may not be reproduced, distributed, transmitted, cached or otherwise used, except with
                    the
                    prior written permission of Condé Nast. Ad Choices
                </p>
            </div>
        </div>
    </footer>
</body>

</html>