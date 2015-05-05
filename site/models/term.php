<? class TermPage extends Page {
  public function events () {
    return $this->children()->sortBy('date', 'asc');
  }
}
