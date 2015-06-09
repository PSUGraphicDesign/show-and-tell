<?php return function ($site, $pages, $page) {
  return array(
    'artists' => $page->children()
  );
};
