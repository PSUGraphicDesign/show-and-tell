<? return function ($site, $pages, $page) {
  return [
    'current_term' => $pages->filterBy('intendedTemplate', 'year')->last()->children(),
    'next' => ST::next_event()
  ];
};
