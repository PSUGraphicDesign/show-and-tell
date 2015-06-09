<?php return function ($site, $pages, $page) {
  return array(
    'archive' => $pages->filterBy('intendedTemplate', 'year')->flip()
  );
};
