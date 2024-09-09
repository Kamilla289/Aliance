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
                    <input id="user-phone" name="userphone" type="tel" class="input" placeholder=" " maxlength="30" required>
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
            <div class="container">
              <div class="footer-top">
                  <svg class="logo-footer">
                    <use href="img/sprite.svg#logo"></use>
                  </svg>
                  <a href="tel:+74996861014" class="footer-phone">+7 (901) 686-10-14</a>
                  <div class="footer-info info-address">
                      <svg class="location" width="16" height="16">
                        <use href="img/sprite.svg#location"></use>
                      </svg>
                      <address class="footer-info-address">г. Москва, Холодильный пер. 4к1с8</address>
                    </div>
                    <div class="footer-info info-email">
                      <svg class="email" width="16" height="12">
                        <use href="img/sprite.svg#email"></use>
                      </svg>
                      <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
                    </div>
                    <div class="footer-social">
                      <a href="#" class="footer-social-link">
                        <svg class="vk" width="20" height="16">
                          <use href="img/sprite.svg#vk"></use>
                        </svg>
                      </a>
                      <a href="#" class="footer-social-link">
                        <svg class="instagram" width="16" height="16">
                          <use href="img/sprite.svg#instagram"></use>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- /.footer-top -->
              <hr class="footer-seporator">
              <div class="container">
                <div class="footer-bottom">
                  <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Контрактное производство</h2>
                    <ul class="footer-menu-list footer-menu-column-2">
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">Автомобильная химия</a>
                      </li>
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">Бытовая химия</a>
                      </li>
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">Дезинфицирующие средства</a>
                      </li>
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
                      </li>
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">Косметическая продукция</a>
                      </li>
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">Краски аэрозольные</a>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Собственные марки</h2>
                    <ul class="footer-menu-list">
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">Автохимия AG-Tech</a>
                      </li>
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">Автохимия AP</a>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list footer-menu-list-bold">
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link footer-menu-link-bold">О компании</a>
                      </li>
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link footer-menu-link-bold">Новости</a>
                      </li>
                      <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link footer-menu-link-bold">Контакты</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- /.footer-bottom -->
              </div>
              <!-- /.container -->
              <hr class="footer-seporator">
              <div class="container">
                <div class="footer-wrapper">
                  <div class="footer-legal">
                    <p class="footer-copyright">© <?php echo date('Y')?> «Aliance Production». Все права защищены.</p>
                    <a href="#" class="footer-policy">Политики конфиденциальности</a>
                  </div>
                  <div class="footer-author">
                    <span class="made-in">Сделано в</span>
                    <span class="developer">Дизайн и разработка</span>
                    <svg class="ruso" width="52" height="11">
                      <use href="img/sprite.svg#ruso"></use>
                    </svg>
                  </div>
                </div>
                <!-- /.footer-wrapper -->
              </div>
         </footer>
         <div class="modal">
          <div class="modal-dialog">
            <h2 class="modal-title">Есть вопросы?</h2>
            <a href="#" class="modal-close" data-toggle="modal">
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
                    <input id="user-phone" name="userphone" type="tel" class="input" placeholder=" " maxlength="30" required>
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
   <script src="js/swiper-bundle.min.js"></script>
   <script src="js/main.js"></script>
</body>
</html>