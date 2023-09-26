<section class="bk_cita" id="cita">
    <div class="container cita_container text-center">
        <p>Reserva tu cita con nosotros y permitenos ayudarte.</p>
        <div class="marg_cita">
            <button id="btn-form-open" class="btn">Reservar</button>
        </div>
    </div>
    <dialog id="modalform">
            <button id="btn-form-close">X</button>
            <div class="contact-form">
                <form id="contact" action="/" method="post">    
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 style="color: rgb(122,168,17)">Reserva tu cita ahora</h4>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>Nombre:
                                <input name="cita[name]" type="text" id="name" placeholder="Nombres" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-sm-12">
                            <fieldset>Apellidos:
                                <input name="cita[lastname]" type="text" id="lastname" placeholder="Apellidos"
                                    required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <fieldset>Movil:
                                <input name="cita[phone]" type="text" id="phone" placeholder="Teléfono" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>Correo:
                                <input name="cita[email]" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Email" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>Fecha:
                                <input name="cita[fecha]" type="date" id="fecha" 
                                    placeholder="00/00/0000" required="">
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <fieldset>Hora:
                                <input name="cita[hora]" type="time" id="hora"
                                    placeholder="00:00 am/pm" required="">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="d-flex form-control"
                                    style="font-size: 21px;">Reservar cita</button>
                            </fieldset>
                        </div>
                        <div id="contact-form-text">"Tu gesto solidario transforma vidas. Comparte tu generosidad y juntos construyamos un futuro mejor"</div>
                        </div>
                    </form>
                </div>
        </dialog>
</section>