<?php return function ($site, $pages, $page) {
  return array(
    'results' => ST::search(get('term'))
  );
};
