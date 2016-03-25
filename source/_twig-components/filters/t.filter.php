<?php
// Thanks: https://github.com/aleksip/starterkit-shila-drupal-theme/tree/master/dist/_twig-components/filters
$filter = new Twig_SimpleFilter('t', function ($string) {
  return $string;
});
