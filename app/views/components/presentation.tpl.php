<div id="top" class="col-12">
    <div class="row">
        <div class="col-12 presentation">
            <div class="row">
                <div class="col-12 presentation__container">
                    <img src="<?= $_SERVER['BASE_URI']; ?>/images/moi.png" alt="" class="myself">
                </div>
                <div class="col-12 presentation__container">
                    <h1 class="presentation__main-title">Alexandre TECHER</h1>
                </div>
                <div class="col-12 presentation__container">
                    <h2 class="presentation__subtitle">DEVELOPPEUR WEB FULLSTACK JUNIOR</h2>
                </div>
                <div class="col-12 presentation__container">
                    <ul class="presentation__list">
                        <li class="presentation__list--link"><a href="https://www.linkedin.com/in/alexandre-techer-946747153/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="presentation__list--link"><a href="https://github.com/AlexandreTECHER?tab=repositories"><i class="fab fa-github"></i></a></li>
                        <li class="presentation__list--link"><a href="Alexandre_TECHER_CV.pdf"><i class="far fa-address-card"></i></a></li>
                        <li id="message" class="presentation__list--link"><a href="<?= $router->generate('contact-page') ?>"><i class="fas fa-paper-plane"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>