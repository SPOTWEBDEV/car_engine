<style>
         section.translate {
                  height: 100vh;
                  width: 100%;
                  background-color: pink;
                  position: fixed;
                  z-index: 9999;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  flex-direction: column;
                  gap: 30px;
         }

         section.translate.active {
                  display: none;
         }

         section.translate .list_lang {
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  flex-direction: column;
                  gap: 15px;
         }

         section.translate .list_lang p {
                  margin: 0px;
         }

         /* Cancel icon */
         section.translate .close-btn {
                  position: absolute;
                  top: 50px;
                  right: 30px;
                  font-size: 34px;
                  cursor: pointer;
                  color: #000;
         }

         #google_translate_element {
                  margin-top: 10px;
                  text-align: center;
                  font-family: Arial, sans-serif;
                  font-size: 16px;
                  color: #333;
         }

         /* Hide the original Google Translate toolbar */
         .goog-te-banner-frame.skiptranslate {
                  display: none !important;
         }

         body {
                  top: 0px !important;
         }

         .goog-te-gadget-simple {
                  background-color: #f8f9fa;
                  border: 1px solid #ddd;
                  border-radius: 5px;
                  padding: 5px 10px;
                  display: inline-block;
                  cursor: pointer;
         }

         .goog-te-gadget-simple .goog-te-menu-value {
                  color: #007bff;
                  font-weight: bold;
         }

         .goog-te-gadget-simple .goog-te-menu-value span {
                  display: none;
         }

         .goog-te-gadget-simple .goog-te-menu-value:after {
                  content: '▼';
                  margin-left: 5px;
                  color: #007bff;
                  font-size: 12px;
         }

         .goog-te-menu-frame {
                  border: none !important;
                  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                  border-radius: 5px;
         }

         .goog-te-menu2 {
                  background-color: #f8f9fa !important;
                  border-radius: 5px !important;
         }

         .goog-te-menu2 a {
                  color: #007bff !important;
                  text-decoration: none !important;
                  padding: 5px 10px !important;
                  display: block;
                  font-weight: normal !important;
         }

         .goog-te-menu2 a:hover {
                  background-color: #007bff !important;
                  color: #fff !important;
                  border-radius: 5px !important;
         }

         
</style>

<section class="translate" id="translateModal">
         <div class="close-btn" id="closeTranslate">&times;</div>
         <div class="list_lang">
                  <p>Please select your preferred language.</p> <!-- English -->
                  <p>Por favor, selecione o idioma de sua preferência.</p> <!-- Portuguese -->
                  <p>Por favor, seleccione su idioma preferido.</p> <!-- Spanish -->
                  <p>Veuillez sélectionner votre langue préférée.</p> <!-- French -->
                  <p>Bitte wählen Sie Ihre bevorzugte Sprache.</p> <!-- German -->
         </div>
         <div id="google_translate_element"></div>
</section>

<meta name="google" content="notranslate">

<script>
         function googleTranslateElementInit() {
                  new google.translate.TranslateElement({
                           pageLanguage: 'es',
                           includedLanguages: 'en,es,fr,de,it',
                           layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                  }, 'google_translate_element');
         }

         // handle close
         document.addEventListener('DOMContentLoaded', () => {
                  document.getElementById('closeTranslate').addEventListener('click', () => {
                           document.getElementById('translateModal').classList.add('active');
                  });
         });
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>