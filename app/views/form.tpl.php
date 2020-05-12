<div class="col-12">
            <div class="contact-title">
                <p class="contact-title__icon"><i class="fas fa-envelope"></i></p>
                <h3 id="contact" class="contact-title__sub">CONTACT</h3>
            </div>
            <div class="row form-block">
                <div class="col-12">
                    <div class="form">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="informations">
                                            <i class="fas fa-user-tie"></i>
                                            <p><span class="informations__title">Nom: </span>Alexandre TECHER</p>
                                        </div>
                                        <div class="informations">
                                            <i class="fas fa-calendar-alt"></i>
                                            <p><span class="informations__title">Né le: </span>01 Mai 1989</p>
                                        </div>
                                        <div class="informations">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <p><span class="informations__title">Adresse: </span>59 rue Anatole FRANCE 69800 Saint Priest</p>
                                        </div>
                                        <div class="informations">
                                            <i class="fas fa-mobile-alt"></i>
                                            <p><span class="informations__title">Téléphone: </span>07 86 91 52 90</p>
                                        </div>
                                        <div class="informations">
                                            <i class="far fa-envelope"></i>
                                            <p><span class="informations__title">Email: </span>alexandre.techer@protonmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <form action="contact.php" method="post">
                                    <div class="elem-group">
                                        <input type="text" id="name" name="visitor_name" placeholder="Nom" pattern=[A-Z\sa-z]{3,20} required>
                                    </div>
                                    <div class="elem-group">
                                        <input type="text" id="forename" name="visitor_forename" placeholder="Prénom" pattern=[A-Z\sa-z]{3,20} required>
                                    </div>
                                    <div class="elem-group">
                                        <input type="email" id="email" name="visitor_email" placeholder="nom@email.com" required>
                                    </div>
                                    <div class="elem-group">
                                        <textarea id="message" name="visitor_message" placeholder="Votre message" required></textarea>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit" class="form-button__submit">Envoyer</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>