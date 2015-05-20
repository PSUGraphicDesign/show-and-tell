<? class EventPage extends Page {
  public function poster () {
    if ( $this->hasImages() ) {
      return $this->images()->first();
    } else {
      return false;
    }
  }

  public function status () {
    return $this->date() > time() ? 'upcoming' : 'past';
  }

  public function speaker () {
    return page('artists')->find($this->artist());
  }

  public function time_sensitive_link () {
    return html::a($this->url(), $this->title(), ['class' => $this->status()]);
  }

  public function rgb_color () {
    $color = str_replace('#', '', $this->color()->toString());

    return [
      'red' => hexdec(substr($color, 0, 2)),
      'green' => hexdec(substr($color, 2, 2)),
      'blue' => hexdec(substr($color, 4, 2))
    ];
  }

  public function is_dark () {
    # sqrt(0.299 * R^2 + 0.587 * G^2 + 0.114 * B^2)
    $rgb = static::rgb_color();
    $lightness = sqrt(0.299 * pow($rgb['red'], 2) + 0.587 * pow($rgb['green'], 2) + 0.114 * pow($rgb['blue'], 2));
    return 200 > $lightness;
  }

  public function lightness () {
    return ( $this->is_dark() ? 'dark' : 'light');
  }
}
