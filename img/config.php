<?
$contact = [
  'phone' => '+375 29 574 67 46',
  'phone_link' => 'tel:+375295746746',
  'phone2' => '+375 29 995 43 00',
  'phone2_link' => 'tel:+375299954300',
  'mail' => 'komm@agara.by',
  'mail_link' => 'mailto:komm@agara.by',
  'mail2' => 'sales@agara.by',
  'mail2_link' => 'mailto:sales@agara.by',
  'viber_link' => '',
  'insta_link' => '',
  'address' => '',
];

$assets = [
  'version' => '1.1',
  'js' => [
    '/assets/js/jquery.min.js',
    '/assets/js/jquery.maskedinput.min.js',
    '/assets/js/scripts.js'
  ],
  'css' => [
    '/assets/css/styles.css',
    '/assets/css/modal.css'
  ]
];

function getAssetsStyles() {
  global $assets;
  foreach ($assets['css'] as $item) {
    echo '<link rel="stylesheet" href="'.$item.'?v='.$assets['version'].'">'."\n";
  }
}

function getAssetsScripts() {
  global $assets;
  foreach ($assets['js'] as $item) {
    echo '<script src="'.$item.'?v='.$assets['version'].'"></script>'."\n";
  }
}