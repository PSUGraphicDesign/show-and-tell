<?php class YearPage extends Page {
  public function terms () {
    return $this->children()->sortBy('classes_begin', 'asc');
  }

  public function current_term () {
    return $this->terms()->filter(function ($term) {
      return ($term->date(false, 'classes_begin') < time()) && (time() < $term->date(false, 'classes_end'));
    })->first();
  }
}
