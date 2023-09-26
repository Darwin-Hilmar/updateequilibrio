/**
* Template Name: Selecao
* Updated: Mar 10 2023 with Bootstrap v5.2.3
* Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
    "use strict";
  
    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
      el = el.trim()
      if (all) {
        return [...document.querySelectorAll(el)]
      } else {
        return document.querySelector(el)
      }
    }
  
   
    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
      el.addEventListener('scroll', listener)
    }
   
  
    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
      const toggleBacktotop = () => {
        if (window.scrollY > 200 && window.scrollY<4700) {
          backtotop.classList.add('active')
        } else {
          backtotop.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }

    let icnDonar = select('.back-up')
    if (icnDonar) {
      const toggleBacktotop = () => {
        if (window.scrollY > 200 && window.scrollY<4700) {
          icnDonar.classList.add('active')
        } else {
          icnDonar.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }
  
    let icnYoutube = select('.back-youtube')
    if (icnYoutube) {
      const toggleBacktotop = () => {
        if (window.scrollY > 200  && window.scrollY<4700) {
          icnYoutube.classList.add('active')
        } else {
          icnYoutube.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }

    let icnTiktok = select('.back-tiktok')
    if (icnTiktok) {
      const toggleBacktotop = () => {
        if (window.scrollY > 200 && window.scrollY<4700) {
          icnTiktok.classList.add('active')
        } else {
          icnTiktok.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }

    let icnFacebook = select('.back-facebook')
    if (icnFacebook) {
      const toggleBacktotop = () => {
        if (window.scrollY > 200 && window.scrollY<4700) {
          icnFacebook.classList.add('active')
        } else {
          icnFacebook.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }

    let icnInstagram = select('.back-instagram')
    if (icnInstagram) {
      const toggleBacktotop = () => {
        if (window.scrollY > 200  && window.scrollY<4700) {
          icnInstagram.classList.add('active')
        } else {
          icnInstagram.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }

    let icnTwitter = select('.back-twitter')
    if (icnTwitter) {
      const toggleBacktotop = () => {
        if (window.scrollY > 200 && window.scrollY<4700) {
          icnTwitter.classList.add('active')
        } else {
          icnTwitter.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }

    let icnLinkedin = select('.back-linkedin')
    if (icnLinkedin) {
      const toggleBacktotop = () => {
        if (window.scrollY > 200 && window.scrollY<4700) {
          icnLinkedin.classList.add('active')
        } else {
          icnLinkedin.classList.remove('active')
        }
      }
      window.addEventListener('load', toggleBacktotop)
      onscroll(document, toggleBacktotop)
    }
  
    // Formulario checkbox

    document.addEventListener("DOMContentLoaded", function() {
      const contigdiv = document.querySelector('#contig');
      const tipoPersonaInput = document.querySelectorAll('input[name="tipoPersona"]');
    
      function mostrarFormulario(tipo) {
        if (tipo === "natural") {
          contigdiv.innerHTML = `
          <div class="contact-form" id="datosPersonaNatural">
          <h2 class="subtitlest">PERSONA NATURAL</h2>
          <div class="row colft">
            <div class="input-group">
              <label for="nombres">NOMBRES:</label>
              <input type="text" id="nombres" placeholder="Ingresa tus nombres" name="donar[nombre]" required>
            </div>
            <div class="input-group">
              <label for="apellidos">APELLIDOS:</label>
              <input type="text" id="apellidos" placeholder="Ingresa tus apellidos" name="donar[apellido]" required>
            </div>
          </div>
          <div class="row colft">
            <div class="input-group">
              <label for="telefono">TELÉFONO:</label>
              <input type="tel" id="telefono" placeholder="Ingresa tu teléfono" name="donar[telefono]" required
                pattern="[0-9]{9}" title="Ingrese un número de teléfono válido (9 dígitos)">
            </div>
            <div class="input-group">
              <label for="correo">CORREO ELECTRÓNICO:</label>
              <input type="email" id="correo" placeholder="ejemplo@gmail.com" name="donar[correo]" required>
            </div>
          </div>

          <div class="row colft">
            <div class="input-group">
              <label for="tipoDocumento">DOCUMENTO:</label>
              <select id="tipoDocumento" class="wpcf7-form-control wpcf7-select" aria-invalid="false" name="donar[tipoDocumento]">
                <option value="DNI">DNI</option>
              </select>

            </div>
            <div class="input-group">
              <label for="documento">NÚMERO:</label>
              <input type="text" id="documento" placeholder="Ingrese su N° de documento" name="donar[dni]" required
                pattern="[0-9]{8}" title="Debe tener 8 dígitos (DNI)">
            </div>
          </div>
        </div>
          `;
        } else if (tipo === "juridica") {
          contigdiv.innerHTML = `
          <div class="contact-form" id="datosPersonaJuridica">
          <h2 class="subtitlest">PERSONA JURÍDICA</h2>
          <div class="row colft">
            <div class="input-group">
              <label for="razonsocial">RAZÓN SOCIAL:</label>
              <input type="text" id="razonSocial" placeholder="Ingresa tu razón social" name="donar[razonSocial]" required>
            </div>
            <div class="input-group">
              <label for="ruc">RUC:</label>
              <input type="text" id="ruc" placeholder="Ingresa tu RUC" name="donar[rucNumber]" required
                pattern="[0-9]{11}" title="Ingrese un RUC válido (11 dígitos)">
            </div>
          </div>
          <div class="row colft">
            <div class="input-group">
              <label for="telefono">TELÉFONO:</label>
              <input type="tel" id="telefono" placeholder="Ingresa tu teléfono" name="donar[telefono]" required
                pattern="[0-9]{9}" title="Ingrese un número de teléfono válido (9 dígitos)">
            </div>
            <div class="input-group">
              <label for="correo">CORREO ELECTRÓNICO:</label>
              <input type="email" id="correo" placeholder="ejemplo@gmail.com" name="donar[correo]" required>
            </div>
          </div>
        </div>
          `;
        }
      }
    
      // Mostrar el formulario correspondiente a la selección inicial
      tipoPersonaInput.forEach(input => {
        if (input.checked) {
          mostrarFormulario(input.value);
        }
    
        input.addEventListener("change", function() {
          mostrarFormulario(this.value);
        });
      });
    });
    
  })()

  
