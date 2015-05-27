<? class ArtistPage extends Page {
  public function events ( ) {
    return site()->index()->filterBy('artist', $this->uid());
  }

  public function other_events ($not) {
    return $this->events()->not($not);
  }
}
