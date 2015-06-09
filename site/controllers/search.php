<?php return function ($site, $pages, $page) {
  return [
    'results' => ST::search(get('term'))
  ];
};
