<?php include_once 'cabecalho.php'; ?>


<!-- Contact Form and Gmap-->
<section class="section section-md section-last bg-default text-md-left">
  <div class="container">
    <div class="row row-50">
      <div class="col-lg-6 section-map-small">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.5536130208193!2d-48.11717622596059!3d-15.880041725067706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935bd285db01e1b3%3A0xbedfcbe55f43ea2e!2sQR%20415%20Conj.%2011%20-%20Samambaia%20Sul%2C%20Bras%C3%ADlia%20-%20DF%2C%2072323-011!5e0!3m2!1spt-BR!2sbr!4v1697576820303!5m2!1spt-BR!2sbr" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-6">
        <h4 class="text-spacing-50">Formulário para Contato:</h4>
        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="enviar.php">
          <div class="row row-14 gutters-14">
            <div class="col-sm-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                <label class="form-label" for="contact-first-name">Nome e sobrenome</label>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-last-name" type="telefone" name="telefone" data-constraints="@Required">
                <label class="form-label" for="contact-last-name">telefone</label>
              </div>
            </div>

            <div class="col-12">
              <div class="form-wrap">
                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                <label class="form-label" for="contact-email">E-mail</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-wrap">
                <label class="form-label" for="contact-message">Mensagem</label>
                <textarea class="form-input" id="contact-message" name="mensagem" data-constraints="@Required"></textarea>
              </div>
            </div>
          </div>
          <button class="button button-primary button-pipaluk" type="submit">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Contact information-->
<section class="section section-md section-first bg-default">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="https://wa.me/5561994065329" target="_blank" title="Ir para o whatsapp">61 99406-5329</a></p>
          </div>
        </article>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-up104"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="https://ul.waze.com/ul?ll=-15.87992010%2C-48.11438450&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location " target="_blank" title="Localização">Qr 415 conjunto 11 casa 24 Samambaia norte-DF</a></p>
          </div>
        </article>
      </div>
      <div class="col-sm-8 col-md-6 col-lg-4">
        <article class="box-contacts">
          <div class="box-contacts-body">
            <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
            <div class="box-contacts-decor"></div>
            <p class="box-contacts-link"><a href="mailto:#" title="Email">tiogogamassas@gmail.com</a></p>

          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<!-- inclusao do rodapé: -->
<?php include_once 'rodape.php'; ?>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script src="js/mascaras.js"></script>

</html>
