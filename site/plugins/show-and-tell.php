<?php class ST {
  public static function body_classes () {
    $classes = array(
      page()->uid(),
      page()->template()
    );

    $classes = array_unique(array_filter($classes, function($class) {
      return !preg_match('/^\d+$/', $class);
    }));

    return join($classes, ' ');
  }

  // Queries

  public static function current_year () {
    return site()->pages()->filterBy('intendedTemplate', 'year')->sortBy('title', 'asc')->last();
  }
  
  public static function next_event () {
    return static::all_events()->filterBy('date', '>=', time())->sortBy('date')->first();
  }

  public static function last_event () {
    return static::all_events()->filterBy('date', '<=', time())->first();
  }

  public static function all_events ($sort = 'desc') {
    return site()->index()->filterBy('intendedTemplate', 'event')->sortBy('date', $sort);
  }

  public static function all_artists ($sort = 'desc') {
    return site()->index()->filterBy('intendedTemplate', 'artist');
  }

  // Search

  public static function search ($term) {
    return static::all_artists()->search($term);
  }

  // Links & URLs

  public static function link_for ($page, $title) {
    return html::a($page->url(), $title, array('class' => ($page->isOpen() ? 'active' : null)));
  }

  public static function asset ($type, $filename) {
    return site()->url() . '/assets/' . $type . '/' . $filename;
  }
}
