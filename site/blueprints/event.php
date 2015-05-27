<?php if(!defined('KIRBY')) exit ?>

title: Event
pages: 
  hide: true
files: true
fields:
  title: 
    label: Artist Name
    type: text
  artist:
    label: Associated Arist Profile
    type:  select
    options: query
    query:
      page: artists
      fetch: children
  date:
    label: Date
    type: date
  color:
    label: Highlight Color
    type: color
  info:
    label: Event Information
    type: textarea
    buttons: false
