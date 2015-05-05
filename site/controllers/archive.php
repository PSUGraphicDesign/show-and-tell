<? return function ($site, $pages, $page) {
  return [
    'archive' => $pages->filterBy('intendedTemplate', 'year')->flip()
  ];
};
