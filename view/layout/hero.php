
 <section class="img-hero-2 bg-body-tertiary" data-aos="fade-up">
        <div class="hero-2">
            <div class="container-fluid hero-2-fl">
                <div class="container d-flex align-items-center justify-content-center h-100 flex-column">
                    <h1 class="display-4 fw-bold hero-title" data-aos="fade-up" data-aos-delay="100"><?= $judul_hero1 ?>  <span class="teg"><?= $judul_hero2 ?></span></h1>
                    <p class="lead text-center" data-aos="fade-up" data-aos-delay="200"> <?= $subjudul_hero?></p>
                </div>
            </div>
        </div>
    </section>
    
    <div class="container py-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="300">
                <li class="breadcrumb-item"><a href="beranda" class="text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><?= ucwords(str_replace("_", " ", $page)) ?></li>
                <?php if (isset($file)): ?>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php if (isset($upper)): ?>
                            <?= strtoupper(str_replace("_", " ", $file)) ?>
                        <?php else: ?>
                            <?= ucwords(str_replace("_", " ", $file)) ?>
                        <?php endif ?>

                    </li>
                <?php endif ?>                
            </ol>
        </nav>
    </div>