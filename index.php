<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <main>
            <section class="section__home">
                <div class="section__home__inner">

                    <div class="section__home__phone"></div>

                    <div class="container">

                            <div class="section__home__header">

                                <div class="section__home__col section__home__header--left">
                                    <div class="section__home__title">
                                        <h1>
                                            SemTech IT Solutions is all about <span>Customer Experience.</span>
                                        </h1>
                                    </div>
                                </div>

                                <div class="section__home__col  section__home__header--right">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="images/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="section__home__content">

                                <div class="section__home__title">
                                    <h2>
                                        This is something we hold near and dear to us.<br>Please share your experience with SemTech IT Solutions.
                                    </h2>
                                </div>

                                <div class="section__home__buttons">
                                    <a class="button active" href="/">
                                        <i class="icon-ok"></i>
                                        <span>I Had A Great Experience</span>
                                    </a>
                                    <a class="button" href="/">
                                        <i class="icon-bad"></i>
                                        <span>I Had A Bad Experience</span>
                                    </a>
                                </div>

                            </div>

                    </div>
                </div>
            </section>
        </main>
        <script>
            const bg = document.querySelector('body');
            const phone = document.querySelector('.section__home__phone');
            const windowWidth = window.innerWidth / 3;
            bg.addEventListener('mousemove', (e) => {
                const mouseX = e.clientX / windowWidth;
                phone.style.transform = `translate3d(-${mouseX}%, 0, 0)`;
            });
        </script>
    </body>
</html>