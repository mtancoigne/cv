<?php
$competences = [
    "Langages de programmation" => [
        'icon' => 'code',
        'col' => 1,
        'data' => [
            "PHP" => [
                'stars' => 4,
                'projects' => ['CowSay', 'simpleImage', 'AM72', 'TancEben', 'Autres',]
            ],
            "Python" => [
                'stars' => 2,
                'projects' => ['Zenias', 'SteamSales',]
            ],
            "Java" => ['stars' => 1,],
            "Javascript" => [
                'stars' => 3,
                'projects' => ['MapGen', 'TicTacToe', 'Simon', 'JSCalc', 'Autres',],
            ],
            "Bash" => ['stars' => 3,],
            "C#/.Net" => ['stars' => 1,]
        ]
    ],
    'Frameworks' => [
        'icon' => 'cogs',
        'col' => 1,
        'data' => [
            "CakePHP" => [
                'stars' => 3,
                'projects' => ['Elabs', 'Croogo', 'SuperBake', 'Karl', 'CakePart',]
            ],
            "Symphony3" => ['stars' => 1,],
            "Laravel5" => [
                'stars' => 2,
                'projects' => ['MediaSkates',]
            ],
            //"Zend" => ['stars' => 1,],
            "Bootstrap" => [
                'stars' => 4,
                'projects' => ['Elabs', 'Karl', 'Tbs',]
            ],
            "Materialize" => [
                'stars' => 3,
                'projects' => ['DiversMaterialize',]
            ]
        ],
        "React.js" => [
            'stars' => 2,
            'projects' => ['BigCrawl', 'GameOfLife', 'RecipeBox',]
        ],
    ],
    'Web' => [
        'icon' => 'globe',
        'col' => 1,
        'data' => [
            "HTML5" => ['stars' => 5,],
            "CSS3" => ['stars' => 4,],
            "jQuery" => ['stars' => 4,],
        ],
    ],
    'Bases de données' => [
        'icon' => 'database',
        'col' => 1,
        'data' => [
            "MySQL" => ['stars' => 4,],
            "PostgreSQL" => ['stars' => 1,],
        ],
    ],
    'Outils' => [
        'icon' => 'wrench',
        'col' => 2,
        'data' => [
            "LessCSS/SASS" => ['stars' => 4,],
            "Git" => ['stars' => 3,],
            "Vagrant" => ['stars' => 2,
                'projects' => ['Zenias',]
            ],
            "UML" => ['stars' => 1,],
        ]
    ],
    'Design' => [
        'icon' => 'paint-brush',
        'col' => 2,
        'data' => [
            "Inkscape" => ['stars' => 3,],
            "Gimp" => ['stars' => 3,],
            "Aseprite" => ['stars' => 3, 'projects' => ['CV', 'BigCrawl',]
            ],
            "Blender" => ['stars' => 2,],
        ],
    ],
    'OS' => [
        'icon' => 'desktop',
        'col' => 2,
        'data' => [
            "Linux" => ['stars' => 4,],
            "Android" => ['stars' => 3,],
            "Windows" => ['stars' => 3,],
        ],
    ],
    'Langues' => [
        'icon' => 'language',
        'col' => 2,
        'data' => [
            "Anglais" => ['stars' => 4,],
            "Russe (Babel)" => ['stars' => 1,],
        ],
    ],
    'Autres' => [
        'icon' => 'puzzle-piece',
        'col' => 2,
        'data' => [
            'Solidworks, Draftsight, Sketchup...'
        ]
    ]
];

$projs = [
    // Autres...
    'Autres' => ['description' => 'et autres scripts...',],
    // Projets
    'MediaSkates' => ['title' => 'Mediaskates', 'description' => 'Projet de groupe à l\'IMIE', 'link' => 'https://github.com/tatooine-coders/mediaskates', 'tech' => 'PHP, JS, Mysql', 'year' => 2016, 'type' => 'site',],
    'CV' => ['title' => 'Cette page', 'description' => 'Toutes les sprites de cette page', 'tech' => '', 'year' => 2016, 'type' => 'site',],
    'Zenias' => ['title' => 'Zenias', 'description' => 'Scripts pour la création d\'environnement de développement avec Vagrant', 'link' => 'https://github.com/mtancoigne/zenias', 'tech' => 'Python, Vagrant', 'year' => 2016, 'type' => 'fork',],
    'BigCrawl' => ['title' => 'The Big Crawl', 'description' => 'Un roguelike procédural pour un challenge pour FCC', 'link' => 'http://codepen.io/mtancoigne/full/KMdYxE', 'tech' => 'React.js, SASS', 'year' => 2016, 'type' => 'exercice',],
    'DiversMaterialize' => ['title' => 'Divers essais', 'description' => 'La plupart de mes créations sur Codepen.io', 'link' => 'http://codepen.io/mtancoigne/', 'year' => null,],
    'GameOfLife' => ['title' => 'Game of life', 'description' => 'Le jeu de la vie, pour un challenge pour FCC', 'link' => 'http://codepen.io/mtancoigne/full/wGbNER', 'tech' => 'React.js, SASS', 'year' => 2016, 'type' => 'exercice',],
    'MapGen' => ['title' => 'js-map-generation', 'description' => 'Générateur de cartes de dongeons', 'link' => 'https://github.com/mtancoigne/js-map-generation', 'tech' => 'JS', 'year' => 2016, 'type' => 'script',],
    'RecipeBox' => ['title' => 'My recipe box', 'description' => 'Recettes de cuisine, pour un challenge pour FCC', 'link' => 'http://codepen.io/mtancoigne/full/KzEoaq', 'tech' => 'React.js, SASS', 'year' => 2016, 'type' => 'exercice',],
    'TicTacToe' => ['title' => 'Tic Tac Toe', 'description' => 'Jeu de Tic Tac Toe pour un challenge FCC', 'link' => 'http://codepen.io/mtancoigne/full/qZJxqG', 'tech' => 'JS, Materialize', 'year' => 2016, 'type' => 'exercice',],
    'Simon' => ['title' => 'Simon\'s game', 'description' => 'Jeu de Simon pour un challenge FCC', 'link' => 'http://codepen.io/mtancoigne/full/eZPXEO', 'tech' => 'JS', 'year' => 2016, 'type' => 'exercice',],
    'JSCalc' => ['title' => 'JS calculator', 'description' => 'Calculatrice Javascript pour un challenge FCC', 'link' => 'http://codepen.io/mtancoigne/full/ZWqBKM', 'tech' => 'JS, Math.js', 'year' => 2016, 'type' => 'exercice',],
    'Elabs' => ['title' => 'ExperimentsLabs', 'description' => 'Ce site', 'link' => 'http://experimentslabs.com', 'tech' => 'CakePHP 3, Mysql, Bootstrap/SASS', 'year' => '2015/...', 'type' => 'site',],
    'Tbs' => ['title' => 'Tbs', 'description' => 'Une classe PHP générique pour les composants TBS', 'link' => 'https://github.com/el-cms/Tbs', 'tech' => 'PHP, Bootstrap', 'year' => 2014, 'type' => 'script',],
    'Croogo' => ['title' => 'Croogo CMS', 'description' => 'Participation.', 'link' => 'http://croogo.org', 'tech' => '', 'year' => 2014, 'type' => 'fork',],
    'CakePart' => ['title' => 'Participations :', 'description' => 'TinyAuth plugin, Acl plugin,...', 'year' => null, 'type' => 'plugin',],
    'SuperBake' => ['title' => 'SuperBake', 'description' => 'Génération de site web avec CakePHP 2.x', 'link' => 'https://github.com/el-cms/superBake', 'tech' => 'CakePHP 2', 'year' => '2013-1015', 'type' => 'plugin',],
    'Karl' => ['title' => 'Karl Girard', 'description' => 'Site d\'un ami sculpteur sur métal. CakePHP 2.2', 'link' => 'http://karlgirard.com', 'tech' => 'CakePHP 2, Bootstrap', 'year' => 2013, 'type' => 'site',],
    'SteamSales' => ['title' => 'Steamsales', 'description' => 'Analyse des liste de souhaits d\'amis sur Steam', 'link' => 'https://github.com/mtancoigne/steamsale', 'tech' => 'Python', 'year' => 2013, 'type' => 'fork',],
    'simpleImage' => ['title' => 'PHP-SimpleImage', 'description' => 'Librairie de manipulation simples d\'images', 'link' => 'https://github.com/mtancoigne/PHP-SimpleImage', 'tech' => 'PHP', 'year' => '2015/...', 'type' => 'script',],
    'AM72' => ['title' => 'Art Métal 72', 'description' => 'Site de l\'entreprise qui m\'a formé en métallerie', 'link' => 'http://artmetal72.com', 'tech' => 'PHP, Mysql', 'year' => 2008, 'type' => 'site',],
    'TancEben' => ['title' => 'Tancoigne Ebeniste', 'description' => 'Site de l\'entreprise de mon père', 'link' => 'http://tancoigne-ebeniste.com', 'tech' => 'PHP, Mysql', 'year' => 2006, 'type' => 'site',],
    'CowSay' => ['title' => 'CowSayPHP', 'description' => 'Port de Cowsay en PHP', 'link' => 'https://github.com/mtancoigne/cowsays-php', 'tech' => 'PHP', 'year' => '200x', 'type' => 'script',],
];

// This section is defined here, as used twice on the page...
// not a good practice but that's it.
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
    <!-- Personnal introduction -->
    <div class="container">
        <!-- Card -->
        <div id="personnal-card" class="col two two-print">
            <div id="personnal-data">
                <?php echo $this->Html->image('Cv.photo.png', ['class' => 'avatar', 'alt' => 'photo',]) ?>
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
        <!-- /Card -->

        <!-- Links -->
        <div class="line" id="header">
            <div class="col two two-print">
            </div>
            <div class="col two two-print contact-list">
                <div class="line">
                    <div class="col two">
                        <ul class="list-content">
                            <li><i class="fa fa-home fa-fw"></i> <a href="http://experimentslabs.com/" target="_blank">Site web</a></li>
                            <li class="print-only"><i class="fa fa-file-text fa-fw"></i> <a href="http://experimentslabs.com/cv" target="_blank">CV en ligne</a></li>
                            <li><i class="fa fa-google-plus-square fa-fw"></i> <a href="https://plus.google.com/+ManuelTancoigne" target="_blank">Google+</a></li>
                            <li><i class="fa fa-linkedin fa-fw"></i> <a href="https://www.linkedin.com/in/mtancoigne" target="_blank">LinkedIn</a></li>
                        </ul>
                    </div>
                    <div class="col two">
                        <ul class="list-content">
                            <li><i class="fa fa-github fa-fw"></i> <a href="https//github.com/mtancoigne" target="_blank">Github</a></li>
                            <li><i class="fa fa-codepen fa-fw"></i> <a href="https://codepen.io/mtancoigne" target="_blank">Codepen.io</a></li>
                            <li><i class="fa fa-free-code-camp fa-fw"></i> <a href="https://freecodecamp.com/mtancoigne" target="_blank">Free Code Camp</a></li>
                            <li><i class="fa fa-globe fa-fw"></i> <a href="http://codecademy.com/mtancoigne" target="_blank">CodeCademy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /Links -->
    </div>
    <!-- /Personnal introduction -->

    <!-- Content -->
    <div class="container-fluid main-content">
        <div class="line">
            <div class="col two four-md four-sm col-competences">
                <div class="line col-info no-margin">
                    <h2>Compétences</h2>
                    <?php
                    foreach ($competences as $competence => $data):
                        /* Creating competences in a module, to dispatch them later in the good column */
                        $this->start('aCompetence');
                        ?>
                        <h3><?php echo $this->Html->iconT($data['icon'], $competence) ?></h3>
                        <ul class="card-content-list starlist">
                            <?php foreach ($data['data'] as $comName => $comData): ?>
                                <?php
                                // Case where there is no special data for the competence
                                if (!is_array($comData)) :
                                    ?>
                                    <li class="no-style"><?php echo $comData ?></li>
                                    <?php
                                // Case where there is data
                                else:
                                    ?>
                                    <li class="no-style">
                                        <span class="content">
                                            <?php echo $comName ?>
                                            <span class="stars">
                                                <?php
                                                for ($i = 0; $i < 5; $i++):
                                                    ?>
                                                    <i class="fa fa-fw fa-star<?php echo ($i < $comData['stars']) ? '' : '-o' ?>"></i>
                                                <?php endfor; ?>
                                                <span class="btn btn-samples<?php echo (isset($comData['projects'])) ? ' enabled' : '' ?>">Projets...</span>
                                            </span>
                                        </span>
                                        <!-- Projets -->
                                        <?php if (isset($comData['projects'])) : ?>
                                            <div class="list-project">
                                                <ul>
                                                    <?php
                                                    foreach ($comData['projects'] as $proj):
                                                        $project = $projs[$proj];
                                                        $pIcon = null;
                                                        if (isset($project['type']) && !is_null($project['type'])):
                                                            switch ($project['type']):
                                                                case 'site':
                                                                    $pIcon = 'globe';
                                                                    break;
                                                                case 'exercice':
                                                                    $pIcon = 'child';
                                                                    break;
                                                                case 'script':
                                                                    $pIcon = 'code';
                                                                    break;
                                                                case 'fork':
                                                                    $pIcon = 'code-fork';
                                                                    break;
                                                                case 'plugin':
                                                                    $pIcon = 'puzzle-piece';
                                                                    break;
                                                            endswitch;
                                                        endif;
                                                        ?>
                                                        <li>
                                                            <?php if (!is_null($pIcon)): ?>
                                                                <i class="fa fa-fw fa-<?php echo $pIcon ?>"></i>
                                                            <?php endif; ?>
                                                            <?php echo (isset($project['year']) ? $project['year'] . ' - ' : '') ?>
                                                            <?php if (isset($project['title'])) : ?>
                                                                <strong>
                                                                    <?php if (isset($project['link'])) : ?>
                                                                        <a href="<?php echo $project['link'] ?>" target="_blank"><i class="fa fa-external-link fa-fw"></i> <?php echo $project['title'] ?></a>
                                                                    <?php else: ?>
                                                                        <?php echo $project['title']; ?>
                                                                    <?php endif; ?> :
                                                                </strong>
                                                            <?php endif; ?>
                                                            <p><?php echo $project['description'] ?></p>
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
                        $this->end();
                        $this->append('col' . $data['col'], $this->fetch('aCompetence'));
                    endforeach;
                    ?>
                    <div class="col two two-md four-sm">
                        <?php echo $this->fetch('col1'); ?>
                    </div>
                    <div class="col two two-md four-sm">
                        <?php echo $this->fetch('col2'); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col one two-md four-sm col-experiences">
                <div class="col-info">
                    <h2>Expérience professionnelle</h2>
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
                        <li>Formation Développeur Logiciel à l'<a href="http://imie-ecole-informatique.fr" target="_blank">IMIE</a> : Diplôme BAC+2</li>
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
                    <h2>Expérience personnelle</h2>
                    <ul class="card-content-list">
                        <?php
                        foreach ($projs as $p => $d):
                            if (isset($d['tech']) && !empty($d['tech'])) :
                                $pIcon = null;
                                if (isset($d['type']) && !is_null($d['type'])):
                                    switch ($d['type']):
                                        case 'site':
                                            $pIcon = 'globe';
                                            break;
                                        case 'exercice':
                                            $pIcon = 'child';
                                            break;
                                        case 'script':
                                            $pIcon = 'code';
                                            break;
                                        case 'fork':
                                            $pIcon = 'code-fork';
                                            break;
                                        case 'plugin':
                                            $pIcon = 'puzzle-piece';
                                            break;
                                    endswitch;
                                endif;
                                ?>
                                <li>
                                    <?php if (!is_null($pIcon)): ?>
                                        <i class="fa fa-fw fa-<?php echo $pIcon ?>"></i>
                                    <?php endif; ?>
                                    <?php echo (isset($d['year']) ? $d['year'] . ' - ' : '') ?>
                                    <strong><?php echo $this->Html->link($d['title'], $d['link'], ['target' => '_blank']) ?></strong>
                                    (<em><?php echo $d['tech'] ?></em>)
                                    <p><?php echo $d['description'] ?></p>
                                </li>
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </ul>
                </div>
                <div class="col-info no-print col-interets">
                    <?php echo $this->fetch('divers') ?>
                </div>
                <div class="col-info print-only col-notes">
                    <h2>Notes</h2>
                    <ul>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                    </ul>

                </div>
                <div class="col-info col-do-print no-print">
                    <h2>Imprimer</h2>
                    <p>
                        Cette page a été travaillée afin d'être imprimable.<br/>
                        <em class="small">Testé avec Google Chrome, Opera, Vivaldi et Firefox (imprimer à 90%)</em>
                    </p>
                    <div>
                        <span class="btn enabled" onClick="window.print()"><i class="fa fa-print fa-fw"></i> Imprimer ce CV</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Content -->
</div>
<!-- Cleaning up -->
<div class="clearfix"></div>

<!-- Additionnal scripts -->
<?php echo $this->Html->script('lib/jquery.min.js') ?>
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
