<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: 
  hide: true
files: true
fields:
  title: 
    label: Artist Name
    type:  select
    options: query
    query:
      page: artists
      fetch: children
  date:
    label: Date
    type: date
  video:
    label: Video
    type: url
