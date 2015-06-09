<?php return function ($site, $pages, $page) {
  return array(
    'current_term' => ST::current_year()->current_term(),
    'next' => ST::next_event(),
    'about' => page('about'),
    'departments' => page('about')->department_logos()->yaml(),
    'events' => ST::all_events()
  );
};
