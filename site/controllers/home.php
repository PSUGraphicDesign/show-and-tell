<? return function ($site, $pages, $page) {
  return [
    'current_term' => ST::current_year()->current_term(),
    'next' => ST::next_event(),
    'about' => page('about'),
    'departments' => page('about')->department_logos()->yaml()
  ];
};
