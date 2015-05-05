<? class ArtistPage extends Page {
  public function events ( ) {
    return site()->index()->filterBy('artist', $this->uid());
  }
}
