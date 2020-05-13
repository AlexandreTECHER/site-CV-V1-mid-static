<div class="nav-mobile navbar-dark nav-mobile">
    <nav class="navbar-nav navbar-expand-lg navbar-light bg-light">
        <div class="nav-burger">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#competences">Competences <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#portfolio">Portfolio</a>
                <a class="nav-item nav-link" href="#diplomes">Diplômes</a>
                <a class="nav-item nav-link" href="#experiences">Expériences</a>
                <a class="nav-item nav-link" href="#contact">Contact</a>
            </div>
        </div>
    </nav>
</div>

<div class="col-sm-12 nav-md">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <a href="<?= $router->generate('homepage-accueil') ?>" class="col-md-6 nav-md__links">
                    
                        <h3>COMPETENCES</h3>
                    
                </a>
                <a href="<?= $router->generate('experience-page') ?>" class="col-md-6 nav-md__links">
                    
                        <h3>EXPERIENCES</h3>
                    
                </a>
                <a href="<?= $router->generate('portfolio-page') ?>" class="col-md-6 nav-md__links">
                    
                        <h3>PORTFOLIO</h3>
                    
                </a>
                <a href="<?= $router->generate('diplome-page') ?>" class="col-md-6 nav-md__links">
                    
                        <h3>DIPLÔMES</h3>
                
                </a>
            </div>
        </div>
    </div>
</div>