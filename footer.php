<section class="cta">
          <div class="bg-grey section-cta">
            <img src="img/cta.png" alt="call to action" class="cta-image">
            <div class="cta-form-wrapper container">
              <form action="handler.php" method="POST" class="cta-form">
                <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
                <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
                <div class="input-group-wrapper">
                  <div class="input-group">
                    <input id="user-name" name="username" type="text" class="input" placeholder=" " maxlength="100" required>
                    <label class="input-group-label" for="user-name">Имя</label>
                  </div>
                  <div class="input-group">
                    <input id="user-phone" name="userphone" type="tel" class="input phone-mask" placeholder=" " maxlength="30" required>
                    <label class="input-group-label" for="user-phone">Номер телефона</label>
                  </div>
                </div>
                <!-- /.input-group-wrapper -->
                 <div class="cta-form-footer">
                  <button type="submit" class="button cta-form-button">Отправить заявку</button>
                  <div class="notify">
                    <svg class="notify-icon" width="14" height="14">
                      <use href="img/sprite.svg#shield"></use>
                    </svg>
                    <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
                  </div>
                 </div>
                 <!-- /.cta-form-footer -->
              </form>
            </div>
            <!-- /.cta-form-wrapper -->
          </div>
        </section>
        <!-- /.cta -->
         <footer class="footer">
            <?php include_once('./template-parts/footer-top.php');?>
                <!-- /.footer-top -->

            <?php include_once('./template-parts/footer-bottom.php');?>  
         </footer>
         

         <div class="modal" id="feedback-modal">
          <div class="modal-dialog">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
              <svg class="close" width="24" height="24">
                <use href="img/sprite.svg#close"></use>
              </svg>
            </a>
            <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
              <form action="handler.php" method="POST" class="modal-form">
                <div class="input-group-wrapper input-group-vertical">
                  <div class="input-group modal-input-group">
                  <input id="user-name" name="username" type="text" class="input" placeholder=" " maxlength="100" required>
                  <label class="input-group-label modal-input-label" for="user-name">Имя</label>
                  </div>
                  <div class="input-group modal-input-group">
                    <input id="user-phone" name="userphone" type="tel" class="input phone-mask" placeholder=" " maxlength="30" required>
                    <label class="input-group-label modal-input-label" for="user-phone">Номер телефона</label>
                  </div>
                </div>
                <!-- /.input-group-wrapper -->
                 <div class="modal-form-footer">
                  <button type="submit" class="button modal-form-button">Отправить заявку</button>
                  <div class="notify">
                    <svg class="notify-icon" width="14" height="14">
                      <use href="img/sprite.svg#shield"></use>
                    </svg>
                    <p class="notify-text">Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!</p>
                  </div>
                 </div>
              </form>
          </div>
         </div>
         <!-- Временное расположение -->
         <div class="modal modal-thanks" id="alert-modal">
            <div class="modal-dialog modal-dialog-thanks">
              <img class="thanks" src="img/thanks.png" alt="спасибо">
              <h2 class="modal-title">Спасибо за заявку!</h2>
              <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
                <svg class="close" width="24" height="24">
                  <use href="img/sprite.svg#close"></use>
                </svg>
              </a>
              <p class="modal-text modal-text-thanks">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
              <a class="button-return" href="index.php"><button type="submit" class="button modal-form-button button-thanks">Вернуться на главную</button></a>
            </div>
         </div>
        <!-- Временное расположение -->

   <script src="js/swiper-bundle.min.js"></script>
   <script src="js/just-validate.production.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>