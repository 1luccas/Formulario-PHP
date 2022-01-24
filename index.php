

<!doctype html>
<html lang="zxx">

<head>
  <!-- ESTO VA EN EL HEAD -->
    <script src='https://www.google.com/recaptcha/api.js?render=ACA VA LA CLAVE PUBLICA'>
    </script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Ldc4KkaAAAAAGvTZL2Dy4bR1ehuFRsEOyqnEz2p', {
                    action: 'formulario'
                })
                .then(function(token) {
                    var recaptchaResponse = document.getElementById('recaptchaResponse');
                    recaptchaResponse.value = token;
                });
        });
    </script>
</head>

<body>
    <!-- FORMULARIO -->

    <div class="container-fluid">
        <div class="row opacity-cont" id="contacto">
            <div class="col bg-cont pt-5">


                <section class="contact py-5 quote">
                    <div class="container py-lg-3">
                        <h3 class="heading mb-5 text-center" data-aos="zoom-in"> <span style="color: #939DE1">◢</span> PIDA UN ASESOR <span style="color: #939DE1">◣</span></h3>


                        <form method="post" action="captcha.php" data-aos="fade-up">
                            <div class="row">
                                <div class="col-md-6 styled-input mt-0">
                                    <input type="text" name="name" placeholder="Nombre" required="">
                                </div>
                                <div class="col-md-6 styled-input mt-md-0">
                                    <input type="text" name="empresa" placeholder="Empresa" required="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 styled-input">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="col-md-6 styled-input">
                                    <input type="text" name="phone" placeholder="Celular" required="">
                                </div>
                            </div>
                            <div class="styled-input">
                                <textarea name="message" placeholder="Comentario" required></textarea>
                            </div>

                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">


                            <div class="click text-center mt-3">
                                <input class="text-uppercase" type="submit" value="Enviar">
                            </div>





                        </form>


                    </div>

                </section>
            </div>
        </div>
    </div>
    
</body>

