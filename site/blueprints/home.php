<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: event
files: true
fields:
  title:
    label: Upcoming Artist
    type:  select
    options: query
    query:
      page: artists
      fetch: children
  date:
    label: Date of Show
    type: date
  header_color:
    label: Header Color
    type: color
