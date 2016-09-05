<?php
$competences = [
    "Langages de programmation" => [
        'icon' => 'code',
        'data' => [
            "PHP" => [
                'stars' => 4,
                'projects' => ['CowSay', 'simpleImage', 'AM72', 'TancEben', 'Autres']
            ],
            "Python" => [
                'stars' => 2,
                'projects' => ['Zenias', 'SteamSales']
            ],
            "Java" => ['stars' => 1,],
            "Javascript" => [
                'stars' => 3,
                'projects' => ['MapGen', 'TicTacToe', 'Simon', 'JSCalc', 'Autres'],
            ],
            "Bash" => ['stars' => 3,]
        ]
    ],
    'Frameworks' => [
        'icon' => 'cogs',
        'data' => [
            "CakePHP" => [
                'stars' => 3,
                'projects' => ['Elabs', 'Croogo', 'SuperBake', 'Karl', 'CakePart']
            ],
            "Twitter Bootstrap" => [
                'stars' => 4,
                'projects' => ['Elabs', 'Karl', 'TBS']
            ],
            "Materialize" => [
                'stars' => 3,
                'projects' => ['DiversMaterialize']
            ]
        ],
        "React.js" => [
            'stars' => 2,
            'projects' => ['BigCrawl', 'GameOfLife', 'RecipeBox']
        ],
    ],
    'Web' => [
        'icon' => 'globe',
        'data' => [
            "HTML5" => ['stars' => 5,],
            "CSS3" => ['stars' => 4,],
            "jQuery" => ['stars' => 4,],
        ],
    ],
    'Bases de données' => [
        'icon' => 'database',
        'data' => [
            "MySQL" => ['stars' => 4,],
            "PostgreSQL" => ['stars' => 1,],
        ],
    ],
    'Outils' => [
        'icon' => 'wrench',
        'data' => [
            "LessCSS/SASS" => ['stars' => 4,],
            "Git" => ['stars' => 3,],
            "Vagrant" => ['stars' => 2,
                'projects' => ['Zenias']
            ]
        ]
    ],
    'Design' => [
        'icon' => 'paint-brush',
        'data' => [
            "Inkscape" => ['stars' => 3,],
            "Gimp" => ['stars' => 3,],
            "Aseprite" => ['stars' => 3, 'projects' => ['CV', 'BigCrawl']
            ],
            "Blender" => ['stars' => 2,],
        ],
    ],
    'OS' => [
        'icon' => 'desktop',
        'data' => [
            "Linux" => ['stars' => 4,],
            "Android" => ['stars' => 3,],
            "Windows" => ['stars' => 3,],
        ],
    ],
    'Autres' => [
        'icon' => 'puzzle-piece',
        'data' => [
            'Solidworks, Draftsight, Sketchup...'
        ]
    ]
];

$projs = [
    // Autres...
    'Autres' => ['description' => 'et autres scripts...'],
    // Projets
    'CV' => ['title' => 'Cette page', 'description' => 'Toutes les sprites de cette page', 'tech' => ''],
    'BigCrawl' => ['title' => 'The Big Crawl', 'description' => 'Un roguelike procédural pour un challenge pour FCC', 'link' => 'http://codepen.io/mtancoigne/full/KMdYxE', 'tech' => 'React.js, SASS'],
    'Zenias' => ['title' => 'Zenias', 'description' => 'Scripts pour la création d\'environnement de développement avec Vagrant', 'link' => 'https://github.com/mtancoigne/zenias', 'tech' => 'Python, Vagrant'],
    'GameOfLife' => ['title' => 'Game of life', 'description' => 'Le jeu de la vie, pour un challenge pour FCC', 'link' => 'http://codepen.io/mtancoigne/full/wGbNER', 'tech' => 'React.js, SASS'],
    'RecipeBox' => ['title' => 'My recipe box', 'description' => 'Recettes de cuisine, pour un challenge pour FCC', 'link' => 'http://codepen.io/mtancoigne/full/KzEoaq', 'tech' => 'React.js, SASS'],
    'DiversMaterialize' => ['title' => 'Divers essais', 'description' => 'La plupart de mes créations sur Codepen.io', 'link' => 'http://codepen.io/mtancoigne/'],
    'Elabs' => ['title' => 'ExperimentsLabs', 'description' => 'Ce site', 'link' => 'http://experimentslabs.com', 'tech' => 'CakePHP 3, Mysql, Bootstrap/SASS'],
    'Karl' => ['title' => 'Karl Girard', 'description' => 'Site d\'un ami sculpteur sur métal. CakePHP 2.2', 'link' => 'http://karlgirard.com', 'tech' => 'CakePHP 2, Bootstrap'],
    'Tbs' => ['title' => 'Tbs', 'description' => 'Une classe PHP générique pour les composants TBS', 'link' => 'https://github.com/el-cms/Tbs', 'tech' => 'PHP, Bootstrap'],
    'Croogo' => ['title' => 'Croogo CMS', 'description' => 'Participation.', 'link' => 'http://croogo.org', 'tech' => ''],
    'SuperBake' => ['title' => 'SuperBake', 'description' => 'Génération de site web avec CakePHP 2.x', 'link' => 'https://github.com/el-cms/superBake', 'tech' => 'CakePHP 2'],
    'CakePart' => ['title' => 'Participations :', 'description' => 'TinyAuth plugin, Acl plugin,...'],
    'MapGen' => ['title' => 'js-map-generation', 'description' => 'Générateur de cartes de dongeons', 'link' => 'https://github.com/mtancoigne/js-map-generation', 'tech' => 'JS'],
    'TicTacToe' => ['title' => 'Tic Tac Toe', 'description' => 'Jeu de Tic Tac Toe pour un challenge FCC', 'link' => 'http://codepen.io/mtancoigne/full/qZJxqG', 'tech' => 'JS, Materialize'],
    'Simon' => ['title' => 'Simon\'s game', 'description' => 'Jeu de Simon pour un challenge FCC', 'link' => 'http://codepen.io/mtancoigne/full/eZPXEO', 'tech' => 'JS'],
    'JSCalc' => ['title' => 'JS calculator', 'description' => 'Calculatrice Javascript pour un challenge FCC', 'link' => 'http://codepen.io/mtancoigne/full/ZWqBKM', 'tech' => 'JS, Math.js'],
    'SteamSales' => ['title' => 'Steamsales', 'description' => 'Analyse des liste de souhaits d\'amis sur Steam', 'link' => 'https://github.com/mtancoigne/steamsale', 'tech' => 'Python'],
    'CowSay' => ['title' => 'CowSayPHP', 'description' => 'Port de Cowsay en PHP', 'link' => 'https://github.com/mtancoigne/cowsays-php', 'tech' => 'PHP'],
    'simpleImage' => ['title' => 'PHP-SimpleImage', 'description' => 'Librairie de manipulation simples d\'images', 'link' => 'https://github.com/mtancoigne/PHP-SimpleImage', 'tech' => 'PHP'],
    'AM72' => ['title' => 'Art Métal 72', 'description' => 'Site de l\'entreprise qui m\'a formé en métallerie', 'link' => 'http://artmetal72.com', 'tech' => 'PHP, Mysql'],
    'TancEben' => ['title' => 'Tancoigne Ebeniste', 'description' => 'Site de l\'entreprise de mon père', 'link' => 'http://tancoigne-ebeniste.com', 'tech' => 'PHP, Mysql'],
];
$this->start('divers');
?>
<h2>Centres d'intérêt</h2>
<h3><?php echo $this->Html->iconT('music', 'Musiques électroniques') ?></h3>
<ul class="card-content-list">
    <li>Trésorier de l'association "Les Bruits Sont Ardents", pour la promotion de la musique électronique (machines) pour des personnes en situation de handicap.</li>
</ul>
<h3><?php echo $this->Html->iconT('flask', 'Expérimentations') ?></h3>
<ul class="card-content-list">
    <li>Fabrication de masques</li>
    <li>Impression 3d (Reprap mendel)</li>
    <li>Test et essais sur Raspberry Pi</li>
</ul>
<h3><?php echo $this->Html->iconT('key', 'Sécurité informatique') ?></h3>
<ul class="card-content-list">
    <li>Veille</li>
    <li>Spectateur à la Nuit Du Hack</li>
</ul>
<?php
$this->end();
?>

<div id="main">
    <!--head -->
    <div class="container">
        <div id="personnal-card" class="col two two-print">
            <div id="personnal-data">
              <?php echo $this->Html->image('Cv.photo.png', ['class' => 'avatar', 'alt' => 'photo']) ?>
                <div class="info-wrapper">
                    <div class="name-wrapper">
                        <div class="name-lines"></div>
                        <h1>Manuel Tancoigne</h1>
                        <div class="subtitle">Développeur logiciel</div>
                    </div>
                </div>
            </div>
            <ul class="info-list">
                <li><i class="fa fa-birthday-cake fa-fw"></i> 29 ans</li>
                <li><i class="fa fa-at fa-fw"></i> <span id="email-container"></span></li>
                <li><i class="fa fa-phone fa-fw"></i> <span id="tel-container"></span></li>
            </ul>
        </div>
        <div class="line" id="header">
            <div class="col two two two-print">
            </div>
            <div class="col two two two-print">
                <!-- <div class="container-fluid"> -->
                <div class="line">
                    <div class="col two">
                        <!-- <div class="list-wrapper">
                            <span class="list-title">Réseau</span>
                        </div> -->
                        <ul class="list-content">
                            <li><i class="fa fa-home fa-fw"></i> <a href="http://experimentslabs.com/" target="_blank">Site web</a></li>
                            <li class="print-only"><i class="fa fa-file-text fa-fw"></i> <a href="http://experimentslabs.com/cv" target="_blank">CV en ligne</a></li>
                            <li class="no-print"><i class="fa fa-google-plus-square fa-fw"></i> <a href="https://plus.google.com/u/0/101654640868038848926/" target="_blank">Google+</a></li>
                            <li><i class="fa fa-linkedin fa-fw"></i> <a href="https://www.linkedin.com/in/mtancoigne" target="_blank">LinkedIn</a></li>
                        </ul>
                    </div>
                    <div class="col two">
                        <!-- <div class="list-wrapper">
                            <span class="list-title">Achèvements</span>
                        </div> -->
                        <ul class="list-content">
                            <li><i class="fa fa-github fa-fw"></i> <a href="https//github.com/mtancoigne" target="_blank">Github</a></li>
                            <li><i class="fa fa-codepen fa-fw"></i> <a href="https://codepen.io/mtancoigne" target="_blank">Codepen.io</a></li>
                            <li><i class="fa fa-globe fa-fw"></i> <a href="https://freecodecamp.com/mtancoigne" target="_blank">Free Code Camp</a></li>
                            <li><i class="fa fa-globe fa-fw"></i> <a href="http://codecademy.com/mtancoigne" target="_blank">CodeCademy</a></li>
                        </ul>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- /head -->

    <!-- Content -->
    <div class="container-fluid main-content">
        <div class="line">
            <div class="col two four-md four-sm col-competences">
                <div class="line col-info no-margin">
                    <h2>Compétences</h2>
                    <?php
                    $nbPerCol = (int) (count($competences) / 2);
                    $nbInCol = 0;
                    $nbTotal = 0;
                    $closeCol = false;
                    foreach ($competences as $competence => $data):
                        if ($nbInCol === $nbPerCol - 1):
                            $closeCol = true;
                        elseif ($nbInCol === 0):
                            ?><div class="col two two-md four-sm"><?php
                        endif;
                        ?>
                            <!-- Compétence -->
                            <h3><?php echo $this->Html->iconT($data['icon'], $competence) ?></h3>
                            <ul class="card-content-list starlist">
                              <?php foreach ($data['data'] as $comName => $comData): ?>
                                  <?php if (!is_array($comData)): ?>
                                        <li><?php echo $comData ?></li>
                                    <?php else: ?>
                                        <li>
                                            <span class="content">
                                              <?php echo $comName ?>
                                                <span class="stars">
                                                  <?php
                                                  for ($i = 0; $i < 5; $i++):
                                                      ?>
                                                        <i class="fa fa-fw fa-star<?php echo ($i < $comData['stars']) ? '' : '-o' ?>"></i>
                                                    <?php endfor; ?>
                                                    <span class="btn-samples<?php echo (isset($comData['projects'])) ? ' enabled' : '' ?>">Projets...</span>
                                                </span>
                                            </span>
                                            <!-- Projets -->
                                            <?php if (isset($comData['projects'])) : ?>
                                                <div class="list-project">
                                                    <ul>
                                                      <?php
                                                      foreach ($comData['projects'] as $proj):
                                                          $project = $projs[$proj];
                                                          ?>
                                                            <li>
                                                              <?php if (isset($project['title'])): ?>
                                                                    - <strong>
                                                                      <?php if (isset($project['link'])): ?>
                                                                            <a href="<?php echo $project['link'] ?>" target="_blank"><i class="fa fa-external-link fa-fw"></i> <?php echo $project['title'] ?></a>
                                                                        <?php else: ?>
                                                                            <?php echo $project['title']; ?>
                                                                        <?php endif; ?> :
                                                                    </strong>
                                                                <?php endif; ?>
                                                                <?php echo $project['description'] ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                        </li>
                                    <?php
                                    endif;
                                endforeach;
                                ?>
                            </ul>
                            <?php
                            $nbInCol ++;
                            $nbTotal ++;
                            if ($closeCol || $nbTotal == count($competences)):
                                $nbInCol = 0;
                                $closeCol = false;
                                ?>
                            </div>
                            <?php
                        endif;
                    endforeach;
                    ?>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col one two-md four-sm col-experiences">
                <div class="col-info">
                    <h2>Experience professionnelle</h2>
                    <h3>2014-2016 : <a href="http://metallerie.fr" target="_blank"><?php echo $this->Html->iconT('external-link', 'Métallerie Sarthoise') ?></a></h3>
                    <ul class="card-content-list">
                        <li>Ouvrier en métallerie/serrurerie</li>
                        <li>Dessinateur 3d en bureau d'études</li>
                    </ul>

                    <h3>2011-2014 : Hecho Mano</h3>
                    <ul class="card-content-list">
                        <li>Ouvrier en métallerie/serrurerie, dessin industriel 2D et prototypes Sketchup</li>
                    </ul>

                    <h3>2007-2011 : <a href="http://artmetal72.com" target="_blank"><?php echo $this->Html->iconT('external-link', 'Art Métal 72') ?></a></h3>
                    <ul class="card-content-list">
                        <li>Apprentissage en métallerie/serrurerie</li>
                    </ul>

                    <h3>2006-2007 :</h3>
                    <ul class="card-content-list">
                        <li>Intérim en BTP pour découvrir des métiers manuels et garder l'informatique en passion</li>
                    </ul>
                </div>
                <div class="col-info">
                    <h2>Formation</h2>
                    <h3>2016</h3>
                    <ul class="card-content-list">
                        <li>Certification "Front End Developper" (FreeCodeCamp.com)</li>
                    </ul>
                    <h3>2011</h3>
                    <ul class="card-content-list">
                        <li>Brevet professionnel Métallier-serrurier (Compagnons du Devoir, Angers)</li>
                    </ul>
                    <h3>2009</h3>
                    <ul class="card-content-list">
                        <li>CAP Métallier-serrurier (Compagnons du Devoir, Angers)</li>
                    </ul>
                    <h3>2006</h3>
                    <ul class="card-content-list">
                        <li>BAC informatique et gestion, lycée André Malraux (Allonnes, 72)</li>
                    </ul>
                </div>
                <div class="col-info print-only">
                  <?php echo $this->fetch('divers') ?>
                </div>
            </div>

            <div class="col one two-md four-sm col-experiences-perso">
                <div class="col-info print-only col-perso">
                    <h2>Experience personnelle</h2>
                    <ul class="card-content-list">
                      <?php
                      foreach ($projs as $p => $d):
                          if (isset($d['tech']) && !empty($d['tech'])):
                              ?>
                                <li>
                                    - <strong><?php echo $this->Html->link($d['title'], $d['link'], ['target' => '_blank']) ?></strong><br>
                                    <?php echo $d['description'] ?> (<em><?php echo $d['tech'] ?></em>)
                                </li>
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                </div>
                <div class="col-info no-print">
                  <?php echo $this->fetch('divers') ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->
</div>
<div class="clearfix"></div>
<!-- Additionnal scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" ></script>
<script language="javascript">
        var ml = 'bS50YW5jb2lnbmVAZ21haWwuY29t'; //mail
        var tlc = 'KzMzNjExMDExMTY4'; //tel. complete
        var tls = 'MDYgMTEwIDExMSA2OA=='; // tel. short
        $('#email-container').html('<a href="mailto:' + atob(ml) + '" class="no-print">' + atob(ml) + '</a><span class="print-only">' + atob(ml) + '</span>');
        $('#tel-container').html('<a href="tel:' + atob(tlc) + '" class="no-print">' + atob(tls) + '</a><span class="print-only">' + atob(tls) + '</span>');
        //Projects display:
        $('.btn-samples').click(function () {
            var parents = $(this).parents();
            var list = $(parents[2]).children();
            $(list[1]).toggle('fast');
        });
</script>

<?php
$this->assign('title', 'CV de Manuel Tancoigne');
$this->layout = 'Cv.simple';
